<section id="portfolio" class="py-12 bg-gray-50">
    <h2 class="text-3xl font-bold mb-12 text-center">Recent Projects</h2>

    <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 gap-8">
        @foreach ($projects as $project)
            <div
                class="bg-white rounded-xl overflow-hidden shadow transition-shadow duration-300 hover:shadow-2xl max-h-[450px] flex flex-col">

                <div class="overflow-hidden h-64">
                    <img src="{{ asset('storage/' . $project->image) }}" alt="{{ $project->title }}"
                        class="w-full h-full object-cover transition-transform duration-300 hover:scale-105">
                </div>

                <div class="p-4 flex-1 flex flex-col justify-between">
                    <div>
                        <h3 class="text-xl font-semibold text-gray-800">{{ $project->title }}</h3>
                        <p class="text-gray-500 mt-1">{{ $project->client->name ?? '-' }}</p>
                    </div>
                </div>
            </div>
        @endforeach
    </div>
</section>
