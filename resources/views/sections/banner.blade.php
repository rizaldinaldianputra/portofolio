<section class="bg-white">
    <div
        class="mx-auto w-full max-w-7xl px-4 py-16 sm:px-6 sm:py-24 md:grid md:grid-cols-2 md:items-center md:gap-4 lg:px-8 lg:py-32">

        {{-- Text Content --}}
        <div class="max-w-prose text-left z-10 relative">
            <h1 class="text-4xl font-bold text-gray-900 sm:text-5xl">
                Welcome, <strong class="text-indigo-600">Rizaldi Naldian Putra</strong>
            </h1>
            <p class="mt-4 text-base text-gray-700 sm:text-lg/relaxed">
                Explore my portfolio showcasing clients, projects, and reviews.
            </p>

            <div class="mt-4 flex gap-4 sm:mt-6">
                <a class="inline-block rounded border border-indigo-600 bg-indigo-600 px-5 py-3 font-medium text-white shadow-sm transition-colors hover:bg-indigo-700"
                    href="#">
                    Download CV
                </a>
                <a class="inline-block rounded border border-gray-200 px-5 py-3 font-medium text-gray-700 shadow-sm transition-colors hover:bg-gray-50 hover:text-gray-900"
                    href="#">
                    Contact Me
                </a>
            </div>
        </div>

        {{-- Single Banner --}}
        @if ($banner = $banners->first())
            <div
                class="mt-8 md:mt-0 relative w-full h-[350px] sm:h-[450px] md:h-[550px] lg:h-[600px] rounded-2xl shadow-2xl overflow-hidden">
                <img src="{{ asset('storage/' . $banner->url_image) }}" alt="{{ $banner->title }}"
                    class="w-full h-full object-cover transition-transform duration-700 hover:scale-105">

                {{-- Optional Overlay for better contrast --}}
                <div class="absolute inset-0 bg-gradient-to-t from-black/30 via-black/10 to-transparent"></div>


            </div>
        @endif


    </div>
</section>
