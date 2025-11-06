@if ($clientReviews->count())
    <div class="mt-20">
        <h2 class="text-3xl font-bold mb-6">Client Reviews</h2>
        <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 gap-6">

            @foreach ($clientReviews as $review)
                <div class="bg-white p-4 rounded shadow">
                    <p class="mb-2">{{ $review->review }}</p> <!-- gunakan 'review' -->
                    <p class="text-gray-500 text-sm">{{ $review->reviewer_name }}</p> <!-- gunakan 'reviewer_name' -->
                    <p class="text-gray-400 text-xs">{{ $review->position }}</p> <!-- optional: posisi reviewer -->
                    <p class="text-gray-400 text-xs">Rating: {{ $review->rating }}/5</p> <!-- optional: rating -->
                </div>
            @endforeach

        </div>
    </div>
@else
    <p class="mt-20 text-gray-500">No client reviews available.</p>
@endif
