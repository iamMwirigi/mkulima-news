<div x-data="{ currentSlide: 0, slides: [
    { 
        title: 'Market Trends This Week', 
        content: 'Discover the latest prices for maize, wheat, and soybeans across regional markets',
        bg: 'bg-green-600'
    },
    { 
        title: 'New Farming Techniques', 
        content: 'Learn about vertical farming methods that increase yield by 300%',
        bg: 'bg-green-700'
    },
    { 
        title: 'Weather Advisory', 
        content: 'Important rainfall predictions for the next 15 days',
        bg: 'bg-green-800'
    }
]}" class="relative rounded-lg shadow-xl my-8 h-96 z-0">
    
    <!-- Slides -->
    <template x-for="(slide, index) in slides" :key="index">
        <div 
            x-show="currentSlide === index"
            x-transition:enter="transition ease-out duration-500"
            x-transition:enter-start="opacity-0"
            x-transition:enter-end="opacity-100"
            x-transition:leave="transition ease-in duration-500"
            x-transition:leave-start="opacity-100"
            x-transition:leave-end="opacity-0"
            :class="slide.bg"
            class="absolute inset-0 flex items-center justify-center text-white p-8"
        >
            <div class="text-center max-w-3xl">
                <h2 x-text="slide.title" class="text-3xl md:text-4xl font-bold mb-4"></h2>
                <p x-text="slide.content" class="text-xl mb-6"></p>
                <a href="#blog" class="inline-block bg-white text-green-800 px-6 py-3 rounded-lg font-semibold hover:bg-green-50 transition">
                    Read More
                </a>
            </div>
        </div>
    </template>

    <!-- Controls -->
    <div class="absolute bottom-4 left-0 right-0 flex justify-center space-x-2">
        <template x-for="(slide, index) in slides" :key="index">
            <button 
                @click="currentSlide = index"
                :class="{ 'bg-white': currentSlide === index, 'bg-white/50': currentSlide !== index }"
                class="w-3 h-3 rounded-full focus:outline-none"
            ></button>
        </template>
    </div>
</div>

<style>
.dropdown {

    position: absolute; /* Ensure it can break out of its parent */
    z-index: 9999; /* Higher than the slider */
}

.dropdown-container {
    position: relative; /* Ensure dropdown is positioned relative to this container */
    z-index: 9999;
}
</style>