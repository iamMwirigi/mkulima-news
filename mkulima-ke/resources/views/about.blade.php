<!-- filepath: resources/views/about.blade.php -->
@extends('layouts.app') <!-- Assuming you have a layout file -->

@section('content')
<div class="container mx-auto px-4 py-8">
    <h1 class="text-4xl font-bold mb-6 text-green-700">About Us</h1>
    <p class="text-lg text-gray-700 leading-relaxed">
        Welcome to <strong>Farmers Hub</strong>, your trusted source for the latest news, insights, and resources in the world of farming. 
        Our mission is to empower farmers with the knowledge they need to thrive in an ever-changing agricultural landscape.
    </p>

    <h2 class="text-2xl font-semibold mt-6 mb-4 text-green-600">What We Do</h2>
    <ul class="list-disc pl-6 text-gray-700">
        <li>Provide up-to-date market trends and crop prices.</li>
        <li>Share innovative farming techniques and practices.</li>
        <li>Deliver weather forecasts and advisory updates.</li>
        <li>Highlight government schemes and support programs for farmers.</li>
    </ul>

    <h2 class="text-2xl font-semibold mt-6 mb-4 text-green-600">Our Vision</h2>
    <p class="text-lg text-gray-700 leading-relaxed">
        At Farmers Hub, we envision a world where every farmer has access to the tools and information they need to succeed. 
        We are committed to building a community that fosters growth, sustainability, and innovation in agriculture.
    </p>

    <h2 class="text-2xl font-semibold mt-6 mb-4 text-green-600">Contact Us</h2>
    <p class="text-lg text-gray-700 leading-relaxed">
        Have questions or suggestions? Feel free to reach out to us at <a href="mailto:info@farmershub.com" class="text-green-600 underline">info@farmershub.com</a>.
    </p>
</div>
@endsection