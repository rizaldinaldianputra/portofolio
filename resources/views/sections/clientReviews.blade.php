@if ($clientReviews->count())
    <section class="mt-20">
        <h2 class="text-3xl font-bold mb-12 text-center">Client Reviews</h2>

        <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-8">
            @foreach ($clientReviews as $review)
                <div
                    class="flex items-start gap-4 bg-white p-6 rounded-2xl shadow-md hover:shadow-xl transition-transform duration-300 hover:-translate-y-2">

                    {{-- Reviewer Image --}}
                    @if ($review->avatar)
                        <img src="{{ asset('storage/' . $review->avatar) }}" alt="{{ $review->reviewer_name }}"
                            class="w-20 h-20 rounded-full object-cover border-2 border-indigo-500 shadow-md flex-shrink-0">
                    @else
                        <div
                            class="w-20 h-20 rounded-full bg-indigo-100 text-indigo-600 flex items-center justify-center text-2xl font-bold">
                            {{ substr($review->reviewer_name, 0, 1) }}
                        </div>
                    @endif

                    {{-- Review Content --}}
                    <div class="flex-1">
                        <p class="italic text-gray-700 mb-3 leading-snug">
                            “{{ $review->review }}”
                        </p>

                        <h3 class="text-lg font-semibold text-gray-900">
                            {{ $review->reviewer_name }}
                        </h3>

                        @if ($review->position)
                            <p class="text-sm text-gray-500 mb-2">{{ $review->position }}</p>
                        @endif

                        {{-- Rating as Stars --}}
                        <div class="flex items-center space-x-1">
                            @for ($i = 1; $i <= 5; $i++)
                                @if ($i <= $review->rating)
                                    <span class="text-yellow-400 text-lg">★</span>
                                @else
                                    <span class="text-gray-300 text-lg">☆</span>
                                @endif
                            @endfor
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </section>
@else
    <p class="mt-20 text-gray-500 text-center">No client reviews available.</p>
@endif
