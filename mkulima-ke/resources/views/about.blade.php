<!-- filepath: resources/views/about.blade.php -->
@extends('layouts.app')

@section('content')
<div class="bg-green-100">
    <!-- Hero Section -->
    <div class="container mx-auto px-4 py-16 text-center">
        <h1 class="text-5xl font-extrabold text-green-800 mb-6">About Farmers Hub</h1>
        <p class="text-lg text-gray-700 leading-relaxed max-w-3xl mx-auto">
            Empowering farmers with the knowledge, tools, and resources they need to thrive in an ever-changing agricultural landscape.
        </p>
    </div>
</div>

<!-- What We Do Section -->
<div class="container mx-auto px-4 py-16">
    <h2 class="text-4xl font-bold text-green-800 text-center mb-12">What We Do</h2>
    <div class="grid md:grid-cols-2 lg:grid-cols-4 gap-8">
        <div class="bg-white rounded-lg shadow-lg p-6 text-center">
            <div class="text-green-600 text-4xl mb-4">
                <i class="fas fa-chart-line"></i>
            </div>
            <h3 class="text-xl font-semibold text-green-800 mb-2">Market Trends</h3>
            <p class="text-gray-600">Stay updated with the latest crop prices and market trends.</p>
        </div>
        <div class="bg-white rounded-lg shadow-lg p-6 text-center">
            <div class="text-green-600 text-4xl mb-4">
                <i class="fas fa-seedling"></i>
            </div>
            <h3 class="text-xl font-semibold text-green-800 mb-2">Farming Techniques</h3>
            <p class="text-gray-600">Learn innovative methods to boost your yield and efficiency.</p>
        </div>
        <div class="bg-white rounded-lg shadow-lg p-6 text-center">
            <div class="text-green-600 text-4xl mb-4">
                <i class="fas fa-cloud-sun"></i>
            </div>
            <h3 class="text-xl font-semibold text-green-800 mb-2">Weather Updates</h3>
            <p class="text-gray-600">Get accurate weather forecasts and advisory updates.</p>
        </div>
        <div class="bg-white rounded-lg shadow-lg p-6 text-center">
            <div class="text-green-600 text-4xl mb-4">
                <i class="fas fa-hand-holding-usd"></i>
            </div>
            <h3 class="text-xl font-semibold text-green-800 mb-2">Government Schemes</h3>
            <p class="text-gray-600">Discover support programs and schemes tailored for farmers.</p>
        </div>
    </div>
</div>

<!-- Vision Section -->
<div class="bg-green-50 py-16">
    <div class="container mx-auto px-4 text-center">
        <h2 class="text-4xl font-bold text-green-800 mb-6">Our Vision</h2>
        <p class="text-lg text-gray-700 leading-relaxed max-w-3xl mx-auto">
            At Farmers Hub, we envision a world where every farmer has access to the tools and information they need to succeed. 
            We are committed to building a community that fosters growth, sustainability, and innovation in agriculture.
        </p>
    </div>
</div>

<!-- Contact Section -->
<div class="container mx-auto px-4 py-16">
    <h2 class="text-4xl font-bold text-green-800 text-center mb-6">Contact Us</h2>
    <p class="text-lg text-gray-700 leading-relaxed text-center max-w-2xl mx-auto">
        Have questions or suggestions? Feel free to reach out to us at 
        <a href="mailto:info@farmershub.com" class="text-green-600 underline">info@farmershub.com</a>.
    </p>
</div>
@endsection