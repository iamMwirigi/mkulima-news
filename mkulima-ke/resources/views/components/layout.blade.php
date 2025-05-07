<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mkulima Hub | {{ $title ?? 'Home' }}</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body class="bg-white min-h-screen">
    <x-nav />
    
    <main class="container mx-auto px-4 py-8">
        {{ $slot }}
    </main>

    <footer class="bg-green-800 text-white py-6 mt-12">
        <div class="container mx-auto px-4 text-center">
            <p class="text-green-100">&copy; {{ date('Y') }} Mkulima Hub Insights. All rights reserved.</p>
        </div>
    </footer>
    
    <script src="//unpkg.com/alpinejs" defer></script>
</body>
</html>