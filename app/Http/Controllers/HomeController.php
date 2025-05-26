<?php

namespace App\Http\Controllers;

use App\Models\Blog;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        // Fetch the latest 3 blogs for the slider
        $sliderBlogs = Blog::latest()->take(3)->get();

        // Fetch all blogs for the rest of the page
        $blogs = Blog::all();

        return view('home', [
            'sliderBlogs' => $sliderBlogs,
            'blogs' => $blogs,
        ]);
    }
}