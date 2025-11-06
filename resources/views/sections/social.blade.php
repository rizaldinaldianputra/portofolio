<section id="social" class="py-12">
    <h2 class="text-3xl font-bold mb-8 text-center">Social Media</h2>

    <div class="flex justify-center space-x-6">
        @foreach($socialMedias as $social)
            <a href="{{ $social->url }}" target="_blank" class="text-gray-600 hover:text-blue-600 flex items-center space-x-2">
                <i class="{{ $social->icon_class }}"></i>
                <span>{{ $social->platform }}</span>
            </a>
        @endforeach
    </div>
</section>
