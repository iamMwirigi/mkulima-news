<?php

namespace App\Http\Controllers;

use App\Models\Blog;
use Illuminate\Http\Request;

class BlogController extends Controller
{
    public function index()
    {
        $blogs = Blog::latest()->paginate(6);
        
        return view('blogs.index', [
            'blogs' => $blogs
        ]);
    }

    public function show(Blog $blog)
    {
        $relatedBlogs = Blog::where('id', '!=', $blog->id)
            ->latest()
            ->take(3)
            ->get();

        return view('blogs.show', [
            'blog' => $blog,
            'relatedBlogs' => $relatedBlogs
        ]);
    }
}