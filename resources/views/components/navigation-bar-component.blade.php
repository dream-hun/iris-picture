<nav x-data="{ isOpen: false }" class="border-b border-gray-200 bg-white py-1 top-0 sticky z-10">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="flex justify-between items-center h-16">
            <!-- Left Navigation -->
            <div class="hidden md:flex space-x-8">
                <a href="#about" class="text-gray-600 hover:text-gray-900 transition-colors duration-200">
                    About
                </a>
                <a href="#portfolio" class="text-gray-600 hover:text-gray-900 transition-colors duration-200">
                    Portfolio
                </a>
                <a href="#testimonials" class="text-gray-600 hover:text-gray-900 transition-colors duration-200">
                    Testimonials
                </a>
            </div>

            <!-- Center Logo -->
            <div class="flex flex-col items-center">
                <h1 class="text-xl font-extrabold text-gray-900">Iris Pictures</h1>
                <p class="text-md font-semibold text-gray-500 uppercase tracking-wider">Your Go to Photography</p>
            </div>

            <!-- Right Social Icons & CTA -->
            <div class="hidden md:flex items-center space-x-6">
                <a href="#instagram" class="text-gray-600 hover:text-gray-900 transition-colors duration-200">
                    <x-feathericon-instagram />
                </a>
                <a href="#tiktok" class="text-gray-600 hover:text-gray-900 transition-colors duration-200">
                    <x-ri-tiktok-line />
                </a>
                <button
                    class="bg-black text-white px-4 py-2 rounded-full hover:bg-yellow-400 hover:text-black transition-colors duration-200">
                    Book session
                </button>
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
            <a href="#about" class="block px-3 py-2 text-gray-600 hover:text-gray-900">About</a>
            <a href="#portfolio" class="block px-3 py-2 text-gray-600 hover:text-gray-900">Portfolio</a>
            <a href="#testimonials" class="block px-3 py-2 text-gray-600 hover:text-gray-900">Testimonials</a>
            <div class="flex space-x-4 px-3 py-2">
                <a href="#facebook" class="text-gray-600 hover:text-gray-900">
                    <i class="fab fa-facebook text-lg"></i>
                </a>
                <a href="#instagram" class="text-gray-600 hover:text-gray-900">
                    <i class="fab fa-instagram text-lg"></i>
                </a>
                <a href="#twitter" class="text-gray-600 hover:text-gray-900">
                    <i class="fab fa-twitter text-lg"></i>
                </a>
            </div>
            <button
                class="w-full bg-black text-white px-4 py-2 rounded-full hover:bg-gray-800 transition-colors duration-200 hove:bg-yellow-700">
                Let's Talk
            </button>
        </div>
    </div>
</nav>
