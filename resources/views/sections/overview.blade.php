<div class="my-20 relatif grid grid-cols-1 sm:grid-cols-3 gap-6">

    {{-- Clients --}}
    <div
        class="p-6 rounded-xl shadow-lg text-center bg-gradient-to-r from-indigo-400 via-indigo-500 to-indigo-600 text-white">
        <h2 class="text-xl font-semibold">Clients</h2>
        <p class="mt-2 text-3xl font-bold">{{ $clientsCount }}</p>
        <p class="mt-1 text-indigo-200">Total Clients</p>
    </div>

    {{-- Projects --}}
    <div
        class="p-6 rounded-xl shadow-lg text-center bg-gradient-to-r from-purple-400 via-purple-500 to-purple-600 text-white">
        <h2 class="text-xl font-semibold">Projects</h2>
        <p class="mt-2 text-3xl font-bold">{{ $projectsCount }}</p>
        <p class="mt-1 text-purple-200">Total Projects</p>
    </div>

    {{-- Reviews --}}
    <div class="p-6 rounded-xl shadow-lg text-center bg-gradient-to-r from-pink-400 via-pink-500 to-pink-600 text-white">
        <h2 class="text-xl font-semibold">Reviews</h2>
        <p class="mt-2 text-3xl font-bold">{{ $reviewsCount }}</p>
        <p class="mt-1 text-pink-200">Total Reviews</p>
    </div>

</div>
