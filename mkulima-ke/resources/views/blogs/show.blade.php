<!-- filepath: resources/views/blogs/show.blade.php -->
@extends('layouts.app')

@section('content')
<div class="container mx-auto px-4 py-8">
    <a href="{{ route('blogs.index') }}" class="text-green-600 font-semibold hover:text-green-800">
        ← Back to Blogs
    </a>
    <h1 class="text-4xl font-bold mb-6 text-green-700 text-center">{{ $blog->title }}</h1>
    <div class="flex justify-center mb-6">
        <img src="{{ asset($blog->image) }}" alt="{{ $blog->title }}" class="w-1/2 h-auto rounded-lg shadow-md">
    </div>
    <article class="prose lg:prose-xl max-w-none">
        {!! nl2br(e($blog->content)) !!}
    </article>
    <p class="text-sm text-gray-500 mt-6">Published on {{ \Carbon\Carbon::parse($blog->published_at)->format('M d, Y') }}</p>
    <p class="text-sm text-gray-500 mt-2">Category: {{ $blog->category }}</p>
</div>
@endsection