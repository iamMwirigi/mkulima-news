@extends('layouts.app')

@section('content')
<div class="container mx-auto px-4 py-8">
    <h1 class="text-3xl font-bold text-green-800 mb-6">Crop News</h1>
    @if ($blogs->isEmpty())
        <p class="text-gray-600">No crop news available at the moment.</p>
    @else
        <div class="grid md:grid-cols-3 gap-8">
            @foreach ($blogs as $blog)
            <div class="bg-green-50 rounded-lg overflow-hidden shadow-md hover:shadow-lg transition">
                <a href="{{ route('blogs.show', $blog) }}">
                    <img src="{{ asset($blog->image) }}" alt="{{ $blog->title }}" class="w-full h-40 object-cover">
                </a>
                <div class="p-6">
                    <h2 class="text-xl font-bold text-green-800 my-2">{{ $blog->title }}</h2>
                    <p class="text-green-700 mb-4">{{ Str::limit($blog->content, 150) }}</p>
                    <a href="{{ route('blogs.show', $blog) }}" class="text-green-600 font-semibold hover:text-green-800">
                        Read More →
                    </a>
                </div>
            </div>
            @endforeach
        </div>
    @endif
</div>
@endsection
