<?php

namespace App\Http\Controllers;

use App\Models\Blog;
use App\Models\BlogCategory;
use Illuminate\Http\Request;

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

        // Ambil data blogs
        $blogs = Blog::with('blogCategory')->orderBy('created_at', 'desc')->get();


        // Ambil nama kategori dan hitung jumlah blog pada setiap kategori
        $categories = BlogCategory::withCount('blogs')->get();

        $data = [

            // Ganti nama dengan nama singkat jika ada di $labelMap
            'labels' => $categories->pluck('name')->map(function ($name) use ($labelMap) { return $labelMap[$name] ?? $name; }),

            // Jumlah blog per kategori
            'data' => $categories->pluck('blogs_count'),
        ];

        return view('home', [
            'title' => 'Beranda BLOGID',
            'chartData' => $data,
            'blogs' => $blogs,
        ]);
    }
}
