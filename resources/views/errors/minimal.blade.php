<!DOCTYPE html>
    <html lang="en" class="h-full">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>@yield('title')</title>
        @vite(['resources/css/app.css', 'resources/js/app.js'])
    </head>
    <body class="h-full bg-gray-50 dark:bg-gray-900 flex items-center justify-center p-4">
        <div class="max-w-md w-full bg-white dark:bg-gray-800 rounded-2xl shadow-xl overflow-hidden">
            <div class="p-8 md:p-12">
                <div class="flex justify-center mb-6">
                    <svg class="h-16 w-16 text-red-500 dark:text-red-400" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M12 9v3.75m9-.75a9 9 0 11-18 0 9 9 0 0118 0zm-9 3.75h.008v.008H12v-.008z" />
                    </svg>
                </div>
                <div class="text-center">
                    <h1 class="text-7xl font-extrabold tracking-tight text-gray-900 dark:text-white mb-2">
                        @yield('code')
                    </h1>
                    <p class="text-xl font-semibold uppercase tracking-wide text-gray-600 dark:text-gray-300">
                        @yield('message')
                    </p>
                    <div class="mt-8">
{{--                        TODO: Chane colors or use a component to match--}}
                        <a href="/" class="inline-flex items-center justify-center px-5 py-3 border border-transparent text-base font-medium rounded-md text-white bg-indigo-600 hover:bg-indigo-700 dark:bg-indigo-500 dark:hover:bg-indigo-600 transition-colors duration-150">
                            Return Home
                        </a>
                    </div>
                </div>
            </div>
            <div class="h-2 bg-gradient-to-r from-indigo-500 via-purple-500 to-pink-500"></div>
        </div>
    </body>
    </html>
