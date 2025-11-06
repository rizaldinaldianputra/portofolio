<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'Portfolio')</title>

    <script src="https://cdn.tailwindcss.com"></script>
    <!-- Font Awesome CDN -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css"
        integrity="sha512-..." crossorigin="anonymous" referrerpolicy="no-referrer" />

</head>

<body>



    <!-- Content -->
    <main class="container mx-auto py-12 px-6">
        @yield('content')

    </main>

    <!-- Footer -->
    <footer class="bg-white shadow mt-12">
        <div class="container mx-auto text-center py-6 px-6">
            <p>&copy; {{ date('Y') }} Rizaldi Naldian Putra. All rights reserved.</p>
            <div class="flex justify-center space-x-4 mt-3">
                <a href="https://facebook.com" class="hover:text-blue-600">Facebook</a>
                <a href="https://twitter.com" class="hover:text-blue-400">Twitter</a>
                <a href="https://linkedin.com" class="hover:text-blue-700">LinkedIn</a>
                <a href="https://instagram.com" class="hover:text-pink-500">Instagram</a>
            </div>
        </div>
    </footer>
</body>

<script>
    document.getElementById('mobile-menu-btn').addEventListener('click', () => {
        const menu = document.getElementById('mobile-menu');
        menu.classList.toggle('hidden');
    });
</script>


</html>
