<!-- Navigation Component -->
<nav x-data="{
    isOpen: false,
    isActive: function(path, fragment = '') {
        if (fragment) {
            return window.location.pathname === path && window.location.hash === '#' + fragment;
        }
        return window.location.pathname === path;
    }
}" class="border-b border-gray-200 bg-white py-1 top-0 sticky z-10">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="flex justify-between items-center h-16">
            <!-- Left Navigation -->
            <div class="hidden md:flex space-x-8">
                <a href="{{route('home')}}"
                    :class="{ 'text-yellow-400': isActive('/', 'home'), 'text-gray-600': !isActive('/', 'home') }"
                    class="hover:text-gray-900 transition-colors duration-200">
                    Home
                </a>
                <a href="{{route('our-services')}}"
                    :class="{
                        'text-yellow-400': isActive('/our-services'),
                        'text-gray-600': !isActive('/our-services')
                    }"
                    class="hover:text-gray-900 transition-colors duration-200">
                    Services
                </a>
                <a href="#portfolio"
                    :class="{ 'text-yellow-400': isActive('/', 'portfolio'), 'text-gray-600': !isActive('/', 'portfolio') }"
                    class="hover:text-gray-900 transition-colors duration-200">
                    Portfolio
                </a>
                <a href="#testimonials"
                    :class="{
                        'text-yellow-400': isActive('/', 'testimonials'),
                        'text-gray-600': !isActive('/',
                            'testimonials')
                    }"
                    class="hover:text-gray-900 transition-colors duration-200">
                    Testimonials
                </a>
            </div>

            <!-- Rest of the navigation code remains the same -->
            <!-- Center Logo -->
            <div class="flex flex-col items-center">
                <h1 class="text-xl font-extrabold text-gray-900">Iris Pictures</h1>
                <p class="text-md font-semibold text-gray-500 uppercase tracking-wider">Your Go to Photography</p>
            </div>

            <!-- Right Social Icons & CTA -->
            <div class="hidden md:flex items-center space-x-6">
                <a href="{{ $setting->instagram }}" target="_blank"
                    class="text-gray-600 hover:text-gray-900 transition-colors duration-200">
                    <x-feathericon-instagram />
                </a>
                <a href="{{ $setting->tiktok }}" target="_blank"
                    class="text-gray-600 hover:text-gray-900 transition-colors duration-200">
                    <x-iconoir-tiktok />
                </a>
                <a
                    class="bg-black text-white px-4 py-2 rounded-full hover:bg-yellow-400 hover:text-black transition-colors duration-200"
                    href="{{ route('booking.index') }}">
                    Book a session
                </a>
            </div>

            <!-- Mobile menu button -->
            <div class="md:hidden flex items-center">
                <button @click="isOpen = !isOpen" class="text-gray-600 hover:text-gray-900 focus:outline-none">
                    <svg class="h-6 w-6" :class="{ 'hidden': isOpen, 'block': !isOpen }" stroke="currentColor"
                        fill="none" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M4 6h16M4 12h16M4 18h16" />
                    </svg>
                    <svg class="h-6 w-6" :class="{ 'block': isOpen, 'hidden': !isOpen }" stroke="currentColor"
                        fill="none" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M6 18L18 6M6 6l12 12" />
                    </svg>
                </button>
            </div>
        </div>
    </div>

    <!-- Mobile menu -->
    <div class="md:hidden" x-show="isOpen" x-transition:enter="transition ease-out duration-200"
        x-transition:enter-start="opacity-0 transform scale-95" x-transition:enter-end="opacity-100 transform scale-100"
        x-transition:leave="transition ease-in duration-150" x-transition:leave-start="opacity-100 transform scale-100"
        x-transition:leave-end="opacity-0 transform scale-95">
        <div class="px-2 pt-2 pb-3 space-y-1 sm:px-3">
            <a href="#about"
                :class="{ 'text-yellow-400': isActive('/', 'about'), 'text-gray-600': !isActive('/', 'about') }"
                class="block px-3 py-2 hover:text-gray-900">About</a>
            <a href="#portfolio"
                :class="{ 'text-yellow-400': isActive('/', 'portfolio'), 'text-gray-600': !isActive('/', 'portfolio') }"
                class="block px-3 py-2 hover:text-gray-900">Portfolio</a>
            <a href="#testimonials"
                :class="{ 'text-yellow-400': isActive('/', 'testimonials'), 'text-gray-600': !isActive('/', 'testimonials') }"
                class="block px-3 py-2 hover:text-gray-900">Testimonials</a>
            <div class="flex space-x-4 px-3 py-2">
                <a href="{{ $setting->instagram }}" class="text-gray-600 hover:text-gray-900">
                    <x-feathericon-instagram class="text-lg" />
                </a>
                <a href="{{ $setting->tiktok }}" class="text-gray-600 hover:text-gray-900">
                    <x-iconoir-tiktok class="text-lg" />
                </a>
            </div>
            <button
                class="w-full bg-black text-white px-4 py-2 rounded-full hover:bg-yellow-400 hover:text-black transition-colors duration-200">
                Let's Talk
            </button>
        </div>
    </div>
</nav>
