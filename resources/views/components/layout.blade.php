<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Pixel Positions</title>

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=JetBrains+Mono:ital,wght@0,100..800;1,100..800&display=swap" rel="stylesheet">

    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body class="bg-black text-white">

<div class="px-10">
    <nav class="flex items-center justify-between py-4 border-b border-white/10">
        <div>
            <a href="/">
                <img src="{{ \Illuminate\Support\Facades\Vite::asset('resources/images/logo.svg') }}"
                     alt="Pixel Positions Logo">
            </a>
        </div>

        <div class="space-x-6 font-bold">
            <a href="#" class="hover:text-main transition-colors duration-300">Jobs</a>
            <a href="#" class="hover:text-main transition-colors duration-300">Careers</a>
            <a href="#" class="hover:text-main transition-colors duration-300">Salaries</a>
            <a href="#" class="hover:text-main transition-colors duration-300">Companies</a>
        </div>

        <div>
            <a href="#" class="hover:text-main transition-colors duration-300">Post a Job</a>
        </div>
    </nav>

    <main class="mt-10 max-w-[986px] mx-auto">
        {{ $slot }}
    </main>
</div>

</body>
</html>
