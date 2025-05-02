<x-layout title="Home">
    <x-slider />

    <section class="my-12">
        <h2 class="text-3xl font-bold text-green-800 mb-8 text-center">Latest Updates</h2>
        
        <div class="grid md:grid-cols-3 gap-8">
            @foreach($blogs as $blog)
            <div class="bg-green-50 rounded-lg overflow-hidden shadow-md hover:shadow-lg transition">
                <div class="p-6">
                    <span class="text-green-600 text-sm">{{ $blog->category }}</span>
                    <h3 class="text-xl font-bold text-green-800 my-2">{{ $blog->title }}</h3>
                    <p class="text-green-700 mb-4">{{ Str::limit($blog->excerpt, 100) }}</p>
                    <a href="{{ route('blogs.show', $blog) }}" class="text-green-600 font-semibold hover:text-green-800">
                        Read More →
                    </a>
                </div>
            </div>
            @endforeach
        </div>
    </section>
</x-layout>