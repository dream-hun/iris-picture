<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Services - {{ config('app.name') }}</title>
    <meta name="description"
        content="Professional photography services and portfolio showcase. Capturing life's beautiful moments with artistic vision in canada.">
    <meta name="keywords"
        content="photography, professional photographer, photo portfolio, portraits, events, wedding photography,canada">
    <meta name="author" content="Irispictures">
    <meta name="robots" content="index, follow">
    <meta property="og:title" content="Irispictures - Professional Photography">
    <meta property="og:description" content="Professional photography services and portfolio showcase.">
    <meta property="og:type" content="website">
    <meta property="og:url" content="{{ url()->current() }}">
    <link rel="canonical" href="{{ url()->current() }}">
    <link rel="icon" href="{{ asset('favicon.ico') }}" type="image/x-icon">

    <!-- Scripts -->
    <link rel="stylesheet" href="https://rsms.me/inter/inter.css">
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>

<body class="font-sans antialiased dark:bg-gray-900 dark:text-white">
    <x-navigation-bar-component />
    <div class="relative backdrop-blur-md text-black min-[520px]">
        <!-- Background Image -->
        <div class="absolute inset-0 z-0">
            <img src="{{ asset('images/stripes.svg') }}" alt="Background" class="w-full h-full object-cover opacity-50">
        </div>

        <!-- Content -->
        <div class="relative z-10 max-w-6xl mx-auto px-4 py-20 text-center">
            <h1 class="text-5xl md:text-6xl font-bold mb-4">
                Services We offer 
            </h1>
            <div class="relative mb-8">
                <p class="text-gray-600 text-lg mb-8">
                    Where Every Moment Becomes a Masterpiece!
                </p>
            </div>
            <button
                class="bg-yellow-400 text-black px-8 py-3 rounded-full hover:bg-yellow-300 transition-colors duration-200">
                Book Your Photoshoot Today!
            </button>
        </div>
    </div>

    <div class="max-w-7xl mx-auto px-4 py-16">
        <div class="grid gap-8 lg:grid-cols-3 sm:grid-cols-2">
            <!-- Service Card 1 -->
            @foreach ($services as $service)
                <div
                    class="bg-white dark:bg-gray-800 rounded-2xl shadow-lg overflow-hidden transition-transform hover:scale-105">
                    <img class="object-cover w-full h-56" src="{{ asset('images/iris-hero.webp') }}"
                        alt="Wedding Photography">
                    <div class="p-6">
                        <h2 class="text-2xl font-bold text-gray-900 dark:text-white mb-3">
                            {{ $service->name }}
                        </h2>
                        <p class="text-gray-600 dark:text-gray-300 mb-6">
                            Service Description
                        </p>
                        <div class="flex justify-between items-center">
                            <span class="text-yellow-500 font-semibold">Starting at {{ $service->formattedPrice() }}</span>
                            <a href="{{ route('booking.index') }}"
                                class="bg-yellow-400 text-black px-6 py-2 rounded-full hover:bg-yellow-300 transition-colors duration-200">
                                Book Now
                            </a>
                        </div>
                    </div>
                </div>
            @endforeach



        </div>
    </div>
<x-footer-component />
</body>

</html>
