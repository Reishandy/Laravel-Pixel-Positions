<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Pixel Positions</title>

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=JetBrains+Mono:ital,wght@0,100..800;1,100..800&display=swap"
          rel="stylesheet">

    @vite(['resources/css/app.css', 'resources/js/app.js'])
    <style>
        .mobile-menu {
            max-height: 0;
            overflow: hidden;
            opacity: 0;
            transform: translateY(-10px);
            transition: max-height 0.3s ease-in-out, opacity 0.3s ease, transform 0.3s ease;
        }

        .mobile-menu.open {
            max-height: 300px;
            opacity: 1;
            transform: translateY(0);
        }
    </style>
</head>
<body class="bg-black text-white">

<div class="px-4 sm:px-10">
    <nav class="flex items-center justify-between py-4 border-b border-white/10">
        <div>
            <a href="/">
                <img src="{{ \Illuminate\Support\Facades\Vite::asset('resources/images/logo.svg') }}"
                     alt="Pixel Positions Logo">
            </a>
        </div>

        <!-- Desktop Navigation -->
        <div class="hidden md:flex space-x-6 font-bold">
            <a href="#" class="hover:text-main transition-colors duration-300">Jobs</a>
            <a href="#" class="hover:text-main transition-colors duration-300">Careers</a>
            <a href="#" class="hover:text-main transition-colors duration-300">Salaries</a>
            <a href="#" class="hover:text-main transition-colors duration-300">Companies</a>
        </div>

        <div class="hidden md:block">
            <a href="#" class="hover:text-main transition-colors duration-300">Post a Job</a>
        </div>

        <!-- Mobile Menu Button -->
        <button id="mobile-menu-button" class="md:hidden flex items-center">
            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                 stroke="currentColor" class="w-6 h-6 text-white hover:text-main transition-colors duration-300">
                <path stroke-linecap="round" stroke-linejoin="round" d="M3.75 6.75h16.5M3.75 12h16.5m-16.5 5.25h16.5"/>
            </svg>
        </button>
    </nav>

    <!-- Mobile Navigation -->
    <div id="mobile-menu" class="mobile-menu md:hidden border-b border-white/10">
        <div class="py-4">
            <div class="flex flex-col space-y-4">
                <a href="#" class="hover:text-main transition-colors duration-300 font-bold">Jobs</a>
                <a href="#" class="hover:text-main transition-colors duration-300 font-bold">Careers</a>
                <a href="#" class="hover:text-main transition-colors duration-300 font-bold">Salaries</a>
                <a href="#" class="hover:text-main transition-colors duration-300 font-bold">Companies</a>
                <a href="#" class="hover:text-main transition-colors duration-300 mt-4 pt-4 border-t border-white/10">Post
                    a Job</a>
            </div>
        </div>
    </div>

    <main class="mt-10 max-w-7xl mx-auto">
        {{ $slot }}
    </main>
</div>

<script>
    document.getElementById('mobile-menu-button').addEventListener('click', function () {
        const mobileMenu = document.getElementById('mobile-menu');
        mobileMenu.classList.toggle('open');
    });
</script>

</body>
</html>
