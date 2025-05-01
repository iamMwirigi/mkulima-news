@extends('layouts.app')

@section('title', 'Home')

@section('content')
<div class="bg-white p-6 rounded-lg shadow-md">
    <h1 class="text-3xl font-bold text-green-700 mb-4">Welcome to Mkulima News</h1>
    <p class="text-gray-600">Your trusted source for agricultural updates</p>
    <div class="mt-4">
        <a href="{{ route('news') }}" 
           class="bg-green-500 text-white px-4 py-2 rounded hover:bg-green-600 transition duration-300">
            Browse News
        </a>
    </div>
</div>
@endsection