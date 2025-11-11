@if ($clients->count())
    <div class="mt-20">
        <h2 class="text-3xl font-bold mb-6 text-center">Clients</h2>
        <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 gap-6">

            @foreach ($clients as $client)
                <div class="bg-white p-4 rounded shadow text-center">
                    @if ($client->logo)
                        <img src="{{ asset('storage/' . $client->logo) }}" alt="{{ $client->name }}"
                            class="w-24 h-24 mx-auto rounded-full object-fill mb-4">
                    @endif
                    <p class="font-semibold text-lg">{{ $client->name }}</p>
                    @if ($client->website)
                        <a href="{{ $client->website }}" target="_blank"
                            class="text-blue-500 text-sm block mt-1">{{ $client->website }}</a>
                    @endif
                </div>
            @endforeach

        </div>
    </div>
@else
    <p class="mt-20 text-gray-500 text-center">No clients available.</p>
@endif
