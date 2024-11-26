<?php

namespace App\Http\Controllers;

use App\Models\Blog;
use App\Models\User;
use App\Models\BlogCategory;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ChartController extends Controller
{
    public function blogsBasedOnCategories()
    {
        // Pemetaan nama kategori ke label chart
        $labelMap = [
            'Pemrograman Web' => 'web',
            'Pemrograman Mobile' => 'mobile',
            'Internet of Things' => 'IoT',
            'Desain Grafis' => 'design',
            'Machine Learning' => 'ML',
            'Data Science' => 'data',
            'Game Development' => 'game'
        ];

        // dd(Auth::user()->blogs());
        // Ambil data blogs
        $blogs = Auth::user()->blogs()->with('blogCategory')->orderBy('created_at','desc')->get();


        // Ambil nama kategori dan hitung jumlah blog pada setiap kategori
        $categories = BlogCategory::withCount('blogs')->get();

        // dd($categories);

        $labels = collect(range(0, 5))
            ->map(function ($daysAgo) {
                return now()->subDays($daysAgo)->format('m/d');
            })
            ->reverse()
            ->values()
            ->toArray();

        $readDuration = Blog::selectRaw('DATE(created_at) as date, SUM(read_in_minutes) as total_read_duration')
            ->where('created_at', '>=', now()->subDays(5))
            ->groupBy('date')
            ->orderBy('date')
            ->pluck('total_read_duration')
            ->toArray();

        $blogCount = Blog::selectRaw('DATE(created_at) as date, COUNT(*) as total_blogs')
            ->where('created_at', '>=', now()->subDays(5))
            ->groupBy('date')
            ->orderBy('date')
            ->pluck('total_blogs')
            ->toArray();

        // Pastikan jumlah elemen sama:
        $readDuration = array_pad($readDuration, count($labels), 0);
        $blogCount = array_pad($blogCount, count($labels), 0);

        $chart3 = [
            'labels' => $labels,
            'read_duration' => $readDuration,
            'blog_count' => $blogCount,
        ];

        $data = [
            'chart1' => [
                'labels' => $categories->pluck('name')->map(function ($name) use ($labelMap) {
                    return $labelMap[$name] ?? $name;
                })->toArray() ?? [],
                'data' => $categories->pluck('blogs_count')->toArray() ?? [],
            ],
            'chart3' => [
                'labels' => $chart3['labels'],
                'read_duration' => $chart3['read_duration'],
                'blog_count' => $chart3['blog_count'],
            ],
        ];

        // dd($data['chart1']);

        return view('home', [
            'title' => 'Beranda BLOGID',
            'data' => $data,
            'blogs' => $blogs,
        ]);
    }
}
