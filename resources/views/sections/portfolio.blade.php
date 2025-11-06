<section id="portfolio" class="py-12 bg-gray-50">
    <h2 class="text-3xl font-bold mb-8 text-center">Recent Projects</h2>


    <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 gap-8">
        @foreach($projects as $project)
            <div class="bg-white rounded shadow hover:shadow-lg overflow-hidden">
<img src="{{ asset('storage/' . $project->image) }}" alt="{{ $project->title }}">
                <div class="p-4">
                    <h3 class="text-xl font-bold">{{ $project->title }}</h3>
                    <p class="text-gray-600">{{ $project->client->name ?? '-' }}</p>
                </div>
            </div>
        @endforeach
    </div>
</section>
