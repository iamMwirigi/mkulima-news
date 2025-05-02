<nav class="bg-green-700 shadow-lg" x-data="{ isOpen: false }">
    <div class="container mx-auto px-4">
        <div class="flex justify-between items-center h-16">
            <!-- Logo -->
            <a href="/" class="flex items-center">
                <span class="text-white text-2xl font-bold">Farmers</span>
                <span class="text-green-200 text-2xl ml-1">Hub</span>
            </a>

            <!-- Desktop Menu -->
            <div class="hidden md:flex items-center space-x-8">
                <a href="/" class="text-green-100 hover:text-white px-3 py-2">Home</a>
                <a href="/about" class="text-green-100 hover:text-white px-3 py-2">About</a>
                
                <!-- Dropdown -->
                <div class="relative" x-data="{ open: false }">
                    <button @click="open = !open" class="text-green-100 hover:text-white px-3 py-2 flex items-center">
                        Resources
                        <svg class="w-4 h-4 ml-1" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"/>
                        </svg>
                    </button>
                    
                    <div x-show="open" @click.away="open = false" 
                         class="absolute right-0 mt-2 w-48 bg-white rounded-md shadow-lg py-1">
                        <a href="#" class="block px-4 py-2 text-green-800 hover:bg-green-50">Market Prices</a>
                        <a href="#" class="block px-4 py-2 text-green-800 hover:bg-green-50">Crop Calendar</a>
                        <a href="#" class="block px-4 py-2 text-green-800 hover:bg-green-50">Govt Schemes</a>
                    </div>
                </div>
            </div>

            <!-- Mobile Button -->
            <button @click="isOpen = !isOpen" class="md:hidden text-green-100 hover:text-white">
                <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16"/>
                </svg>
            </button>
        </div>

        <!-- Mobile Menu -->
        <div class="md:hidden" x-show="isOpen" x-transition>
            <div class="px-2 pt-2 pb-3 space-y-1">
                <a href="/" class="block text-green-100 hover:text-white px-3 py-2">Home</a>
                <a href="/about" class="block text-green-100 hover:text-white px-3 py-2">About</a>
                <div class="px-3 py-2">
                    <p class="text-green-200 font-medium">Resources</p>
                    <div class="mt-2 space-y-2">
                        <a href="#" class="block text-green-100 hover:text-white pl-4 py-1">Market Prices</a>
                        <a href="#" class="block text-green-100 hover:text-white pl-4 py-1">Crop Calendar</a>
                        <a href="#" class="block text-green-100 hover:text-white pl-4 py-1">Govt Schemes</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</nav>