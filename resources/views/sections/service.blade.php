<section class="py-16 bg-gradient-to-r from-blue-500 to-purple-600">
    <div class="container mx-auto px-4">
        <h2 class="text-3xl font-bold text-center text-white mb-12">Our Services</h2>
        <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
            @foreach ($services as $service)
                <div class="bg-white rounded-lg shadow-lg p-6 text-center">
                    @if ($service->image)
                        <img src="{{ asset('storage/' . $service->image) }}" alt="{{ $service->title }}"
                            class="mx-auto mb-4 w-24 h-24 object-cover rounded-full">
                    @endif
                    <h3 class="text-xl font-semibold mb-2">{{ $service->title }}</h3>
                    <p class="text-gray-600">{{ $service->description }}</p>
                </div>
            @endforeach
        </div>
    </div>
</section>
