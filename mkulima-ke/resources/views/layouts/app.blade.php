<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ $title ?? 'Farmers Hub' }}</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body class="bg-gray-100 text-gray-800">
    <header class="bg-green-700 text-white py-4">
        <div class="container mx-auto px-4">
            <h1 class="text-2xl font-bold">Farmers Hub</h1>
        </div>
    </header>

    <main class="container mx-auto px-4 py-8">
        @yield('content')
    </main>

    <footer class="bg-green-800 text-white py-6 mt-12">
        <div class="container mx-auto px-4 text-center">
            <p class="text-green-100">&copy; {{ date('Y') }} Farmers Hub. All rights reserved.</p>
        </div>
    </footer>
</body>
</html>