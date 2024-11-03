<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ChartController extends Controller
{
    public function blogsBasedOnCategories()
    {
        // $categories = \App\Models\BlogCategory::all();
        // $data = [];
        // foreach ($categories as $category) {
        //     $data[$category->name] = \App\Models\Blog::where('blog_category_id', $category->id)->count();
        // }
        // return $data;

        // Replace this with your actual data retrieval logic
        $data = [
            'labels' => ['January', 'February', 'March', 'April', 'May'],
            'data' => [65, 59, 80, 81, 56],
        ];
        return view('home', ['title' => 'Beranda BLOGID', 'data' => $data]);
    }
}
