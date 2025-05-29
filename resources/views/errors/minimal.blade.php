<!DOCTYPE html>
<html lang="en" class="h-full">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>@yield('title')</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body class="h-full bg-black flex items-center justify-center p-4">
<div class="max-w-md w-full bg-black/80 border border-white/10 rounded-2xl shadow-xl overflow-hidden">
    <div class="p-8 md:p-12">
        <div class="flex justify-center mb-6">
            <svg class="h-16 w-16 text-main" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                 stroke-width="1.5" stroke="currentColor">
                <path stroke-linecap="round" stroke-linejoin="round"
                      d="M12 9v3.75m9-.75a9 9 0 11-18 0 9 9 0 0118 0zm-9 3.75h.008v.008H12v-.008z"/>
            </svg>
        </div>
        <div class="text-center">
            <h1 class="text-7xl font-extrabold tracking-tight text-white mb-2">
                @yield('code')
            </h1>
            <p class="text-xl font-semibold uppercase tracking-wide text-gray-400">
                @yield('message')
            </p>
            <div class="mt-8">
                <a href="/" class="text-white hover:text-main transition-colors duration-300">Return to Home</a>
            </div>
        </div>
    </div>
</div>
</body>
</html>
