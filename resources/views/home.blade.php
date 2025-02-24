<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home - Irispictures</title>
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
                Welcome to Irispicture
            </h1>
            <div class="relative mb-8">
                <p class="text-gray-600 text-lg mb-8">
                    Where Every Moment Becomes a Masterpiece!
                </p>
            </div>
            <a
                class="bg-yellow-400 text-black px-8 py-3 rounded-full hover:bg-yellow-300 transition-colors duration-200"
                href="{{ route('booking.index') }}">
                Book Your Photoshoot Today!
            </a>
        </div>
    </div>

    <!-- Image Grid -->
    <div class="max-w-7xl mx-auto px-4 grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-4 mb-20">
        <!-- Large Image 1 -->
        <div class="aspect-w-4 aspect-h-5">
            <img src="{{ asset('images/iris-hero.webp') }}" alt="Urban overpass" class="w-full h-auto object-cover" />
        </div>

        <!-- Large Image 2 -->
        <div class="aspect-w-4 aspect-h-5">
            <img src="{{ asset('images/iris-hero-two.webp') }}" alt="Skyscraper" class="w-full h-auto object-cover" />
        </div>

        <!-- Right Column with 2 Images -->
        <div class="space-y-4">
            <div class="aspect-w-4 aspect-h-3">
                <img src="{{ asset('images/iris-hero-three.webp') }}" alt="Motion blur city"
                    class="w-full h-200 object-cover" />
            </div>
            <div class="aspect-w-4 aspect-h-3">
                <img src="{{ asset('images/iris-hero-four.webp') }}" alt="Silhouette"
                    class="w-full h-200 object-cover" />
            </div>
        </div>
    </div>
    <x-about-component />
    <x-gallery-component />
    <x-footer-component />

</body>

</html>
