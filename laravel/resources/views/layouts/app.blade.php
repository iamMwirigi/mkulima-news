<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mkulima News - @yield('title')</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body class="bg-gray-50">
    <!-- Navigation -->
    <nav class="bg-green-600 text-white shadow-lg">
        <div class="max-w-7xl mx-auto px-4">
            <div class="flex justify-between h-16">
                <div class="flex items-center">
                    <a href="/" class="text-xl font-bold">Mkulima News</a>
                </div>
                <div class="flex space-x-8 items-center">
                    <a href="{{ route('home') }}" class="hover:text-green-200">Home</a>
                    <a href="{{ route('news') }}" class="hover:text-green-200">News</a>
                    <a href="{{ route('about') }}" class="hover:text-green-200">About</a>
                </div>
            </div>
        </div>
    </nav>

    <!-- Content -->
    <main class="container mx-auto px-4 py-8">
        @yield('content')
    </main>
</body>
</html>