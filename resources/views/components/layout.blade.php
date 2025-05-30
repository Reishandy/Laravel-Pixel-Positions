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

    <link rel="icon" href="{{ \Illuminate\Support\Facades\Vite::asset('resources/images/favicon.svg') }}"
          type=image/svg">

    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body class="bg-black text-white pb-20">

<div class="sticky top-0 z-50 bg-black/80 backdrop-blur-sm">
    <div class="px-4 sm:px-10">
        <nav class="flex items-center justify-between py-4 border-b border-white/10">
            <div class="flex items-center space-x-10">
                <div>
                    <a href="/">
                        <img src="{{ \Illuminate\Support\Facades\Vite::asset('resources/images/logo.svg') }}"
                             alt="Pixel Positions Logo">
                    </a>
                </div>

                <!-- Desktop Navigation -->
                <div class="hidden lg:flex space-x-6 font-bold">
                    <a href="/" class="hover:text-main transition-colors duration-300">Jobs</a>
                    <a href="#" class="hover:text-main transition-colors duration-300">Careers</a>
                    <a href="#" class="hover:text-main transition-colors duration-300">Salaries</a>
                    <a href="#"
                       class="hover:text-main transition-colors duration-300">Companies</a> {{-- // TODO: index --}}
                </div>
            </div>

            <div class="hidden lg:block">
                @guest
                    <div class="space-x-6">
                        <a href="{{ route('login') }}" class="hover:text-main transition-colors duration-300">Log In</a>
                        <a href="{{ route('register') }}" class="hover:text-main transition-colors duration-300">Register</a>
                    </div>
                @endguest

                @auth
                    <div class="flex items-center gap-x-4">
                        <div class="flex items-center gap-x-2">
                            <x-dot/>
                            <a href="#" class="hover:text-main transition-colors duration-300">Post a Job</a>
                        </div>

                        <x-forms.form method="POST" action="{{ route('logout') }}">
                            @method('DELETE')
                            <button class="hover:text-red-500 transition-colors duration-300">Log Out</button>
                        </x-forms.form>

                        <div class="flex flex-col ml-4">
                            <h3 class="font-bold text-lg">{{ auth()->user()->name }}</h3>
                            <h3 class="text-gray">{{ auth()->user()->employer->name }}</h3>
                        </div>
                    </div>
                @endauth
            </div>

            <!-- Mobile Menu Button -->
            <button id="mobile-menu-button" class="lg:hidden flex items-center">
                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                     stroke="currentColor" class="w-6 h-6 text-white hover:text-main transition-colors duration-300">
                    <path stroke-linecap="round" stroke-linejoin="round"
                          d="M3.75 6.75h16.5M3.75 12h16.5m-16.5 5.25h16.5"/>
                </svg>
            </button>
        </nav>

        <!-- Mobile Navigation -->
        <div id="mobile-menu"
             class="max-h-0 overflow-hidden opacity-0 -translate-y-2 transition-all duration-300 ease-in-out lg:hidden mobile-menu">
            <div class="py-4">
                <div class="flex flex-col space-y-4">
                    <a href="/" class="hover:text-main transition-colors duration-300 font-bold">Jobs</a>
                    <a href="#" class="hover:text-main transition-colors duration-300 font-bold">Careers</a>
                    <a href="#" class="hover:text-main transition-colors duration-300 font-bold">Salaries</a>
                    <a href="#" class="hover:text-main transition-colors duration-300 font-bold">Companies</a>

                    <div class="bg-white/10 mb-4 h-px w-full"></div>

                    @guest
                        <a href="{{ route('login') }}" class="hover:text-main transition-colors duration-300">Log In</a>
                        <a href="{{ route('register') }}" class="hover:text-main transition-colors duration-300">Register</a>
                    @endguest

                    @auth
                        <div class="flex items-center justify-between">
                            <div class="flex flex-col items-start space-y-3">
                                <div class="flex items-center gap-x-2">
                                    <x-dot/>
                                    <a href="#" class="hover:text-main transition-colors duration-300">Post a Job</a>
                                </div>

                                <x-forms.form method="POST" action="{{ route('logout') }}" class="w-full ms-0">
                                    @method('DELETE')
                                    <button class="hover:text-red-500 transition-colors duration-300">Log Out</button>
                                </x-forms.form>
                            </div>

                            <div class="flex flex-col items-end">
                                <h3 class="font-bold text-lg">{{ auth()->user()->name }}</h3>
                                <h3 class="text-gray">{{ auth()->user()->employer->name }}</h3>
                            </div>
                        </div>
                    @endauth

                    <div class="bg-white/10 mb-4 h-px w-full"></div>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="px-4 sm:px-10">
    <main class="mt-10 max-w-7xl mx-auto">
        {{ $slot }}
    </main>
</div>

<script>
    document.getElementById('mobile-menu-button').addEventListener('click', function () {
        const mobileMenu = document.getElementById('mobile-menu');
        mobileMenu.classList.toggle('max-h-0');
        mobileMenu.classList.toggle('max-h-80');
        mobileMenu.classList.toggle('opacity-0');
        mobileMenu.classList.toggle('opacity-100');
        mobileMenu.classList.toggle('-translate-y-2');
        mobileMenu.classList.toggle('translate-y-0');
    });
</script>

</body>
</html>
