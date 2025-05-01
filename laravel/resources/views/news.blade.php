@extends('layouts.app')

@section('title', 'News')

@section('content')
<div class="grid gap-6 md:grid-cols-2 lg:grid-cols-3">
    @for ($i = 1; $i <= 6; $i++)
    <div class="bg-white p-6 rounded-lg shadow-md hover:shadow-lg transition-shadow">
        <h3 class="text-xl font-semibold text-green-700 mb-2">News Item {{ $i }}</h3>
        <p class="text-gray-600">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed do eiusmod tempor incididunt ut labore.</p>
        <button class="mt-4 text-green-600 hover:text-green-700 font-medium">
            Read More →
        </button>
    </div>
    @endfor
</div>
@endsection