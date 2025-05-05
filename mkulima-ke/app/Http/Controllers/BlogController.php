<?php

namespace App\Http\Controllers;

use App\Models\Blog;

class BlogController extends Controller
{
    public function index()
    {
        $blogs = Blog::all(); // Fetch all blogs
        return view('blogs.index', compact('blogs'));
    }

    public function cropNews()
    {
        $blogs = Blog::where('category', 'Crop News')->get(); // Filter by category
        return view('blogs.crop', compact('blogs'));
    }

    public function livestockNews()
    {
        $blogs = Blog::where('category', 'Livestock News')->get(); // Filter by category
        return view('blogs.livestock', compact('blogs'));
    }

    public function machineryNews()
    {
        $blogs = Blog::where('category', 'Machinery News')->get(); // Filter by category
        return view('blogs.machinery', compact('blogs'));
    }

    public function marketPrices()
    {
        return view('blogs.market-prices'); // Static page
    }

    public function cropCalendar()
    {
        return view('blogs.crop-calendar'); // Static page
    }

    public function govtSchemes()
    {
        return view('blogs.govt-schemes'); // Static page
    }

    public function show(Blog $blog)
    {
        return view('blogs.show', compact('blog')); // Single blog
    }
}