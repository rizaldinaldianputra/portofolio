<section id="social"
    class="mt-10 py-16 bg-gradient-to-r from-indigo-500 via-purple-500 to-blue-500 dark:from-indigo-700 dark:via-purple-700 dark:to-blue-700 relative">
    <h2 class="text-3xl font-bold mb-10 text-center text-white drop-shadow-md">Follow Me</h2>

    <div class="flex flex-wrap justify-center gap-8">
        @foreach ($socialMedias as $social)
            <a href="{{ $social->url }}" target="_blank"
                class="group flex flex-col items-center space-y-2 transition-transform duration-300 hover:-translate-y-1">
                {{-- Icon Circle --}}
                <div
                    class="w-16 h-16 flex items-center justify-center rounded-full shadow-lg bg-white/90 backdrop-blur-sm text-gray-700 group-hover:text-white
                    @if (Str::contains(strtolower($social->platform), 'facebook')) group-hover:bg-blue-600
                    @elseif (Str::contains(strtolower($social->platform), 'instagram')) group-hover:bg-pink-500
                    @elseif (Str::contains(strtolower($social->platform), 'linkedin')) group-hover:bg-sky-700
                    @elseif (Str::contains(strtolower($social->platform), 'twitter')) group-hover:bg-blue-400
                    @elseif (Str::contains(strtolower($social->platform), 'github')) group-hover:bg-gray-800
                    @else group-hover:bg-indigo-600 @endif
                    transition-all duration-300">
                    <i class="{{ $social->icon_class }} text-2xl"></i>
                </div>

                {{-- Platform Name --}}
                <span class="text-white font-medium tracking-wide">{{ $social->platform }}</span>
            </a>
        @endforeach
    </div>
</section>
