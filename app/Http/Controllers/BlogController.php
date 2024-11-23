<?php

namespace App\Http\Controllers;

use App\Models\Blog;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Auth;
use App\Http\Requests\StoreBlogRequest;
use App\Http\Requests\UpdateBlogRequest;
use App\Models\BlogCategory;

class BlogController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $blogs = Blog::filterBlog(request(['search', 'blogCategory', 'author']))->latest()->paginate(9)->withQueryString();
        return view('blogs', ['title' => 'Semua Blog', 'blogs' => $blogs]);

    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $categories = BlogCategory::all();
        return view('post_blog', compact('categories'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreBlogRequest $request)
    {
        // Generate slug
        $slug = Str::slug($request->title);

        echo 'Slug: ' . $slug;
        // Pastikan slug unik
        if (Blog::where('slug', $slug)->exists()) {
            $slug .= '-' . time();
        }

        // Membuat blog baru
        Blog::create([
            'title' => $request->title,
            'slug' => $slug,
            'read_in_minutes' => $request->read_in_minutes,
            'description' => $request->description,
            'author_id' => Auth::id(), // Mendapatkan ID user yang login
            'blog_category_id' => $request->category,
            'body' => $request->body
        ]);

        return redirect()->route('home')->with('success', 'Blog created successfully!');
    }

    /**
     * Display the specified resource.
     */
    public function show(Blog $blog)
    {
        return view('blog', ['title' => 'Baca Blog', 'blog' => $blog]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Blog $blog)
    {
        $categories = BlogCategory::all();
        return view('edit_blog', [
            'title' => 'Edit Blog',
            'blog' => $blog,
            'categories' => $categories,
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateBlogRequest $request, Blog $blog)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Blog $blog)
    {
        //
    }
}
