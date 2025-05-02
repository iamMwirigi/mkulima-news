<?php

namespace App\Http\Controllers;

use App\Models\Blog;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        // Get featured blogs (adjust as needed)
        $featuredBlogs = Blog::latest()->take(3)->get();
        
        return view('home', [
            'blogs' => $featuredBlogs
        ]);
    }
}