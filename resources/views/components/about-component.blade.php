<div class="max-w-7xl mx-auto px-4 py-16">
    <div class="grid grid-cols-1 md:grid-cols-2 gap-8 items-center">
        <!-- Left Content -->
        <div class="space-y-8">
            <h1 class="text-4xl md:text-5xl font-bold">Hello! I'm Oliver Bennett</h1>

            <div class="space-y-6 text-gray-600">
                <p class="text-lg">
                    A connoisseur of cityscapes and a storyteller through the lens, based in the vibrant heart of
                    London.
                </p>

                <p class="text-lg">
                    With over a decade of experience, I have been capturing the essence of urban life, one frame at a
                    time.
                </p>
            </div>

            <!-- Accordion -->
            <div x-data="{ selected: 'journey' }" class="space-y-4">
                <!-- My Journey -->
                <div class="border-t border-gray-200">
                    <button @click="selected = selected === 'journey' ? null : 'journey'"
                        class="w-full py-4 flex justify-between items-center text-left">
                        <span class="font-medium">My Journey</span>
                        <svg class="w-5 h-5 transform transition-transform"
                            :class="{ '-rotate-180': selected === 'journey' }" fill="none" stroke="currentColor"
                            viewBox="0 0 24 24">
                            <path x-show="selected !== 'journey'" stroke-linecap="round" stroke-linejoin="round"
                                stroke-width="2" d="M19 9l-7 7-7-7"></path>
                            <path x-show="selected === 'journey'" stroke-linecap="round" stroke-linejoin="round"
                                stroke-width="2" d="M5 15l7-7 7 7"></path>
                        </svg>
                    </button>
                    <div x-show="selected === 'journey'" x-transition:enter="transition ease-out duration-200"
                        x-transition:enter-start="opacity-0 transform -translate-y-2"
                        x-transition:enter-end="opacity-100 transform translate-y-0" class="pb-4 text-gray-600">
                        My photography journey began on the bustling streets of London, starting as a hobby and quickly
                        blossoming into a fervent passion.
                    </div>
                </div>

                <!-- My Philosophy -->
                <div class="border-t border-gray-200">
                    <button @click="selected = selected === 'philosophy' ? null : 'philosophy'"
                        class="w-full py-4 flex justify-between items-center text-left">
                        <span class="font-medium">My Philosophy</span>
                        <svg class="w-5 h-5 transform transition-transform"
                            :class="{ '-rotate-180': selected === 'philosophy' }" fill="none" stroke="currentColor"
                            viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7">
                            </path>
                        </svg>
                    </button>
                    <div x-show="selected === 'philosophy'" x-transition class="pb-4 text-gray-600">
                        Every photograph tells a story of urban life and human connection.
                    </div>
                </div>

                <!-- Accolades -->
                <div class="border-t border-gray-200">
                    <button @click="selected = selected === 'accolades' ? null : 'accolades'"
                        class="w-full py-4 flex justify-between items-center text-left">
                        <span class="font-medium">Accolades and Experiences</span>
                        <svg class="w-5 h-5 transform transition-transform"
                            :class="{ '-rotate-180': selected === 'accolades' }" fill="none" stroke="currentColor"
                            viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7">
                            </path>
                        </svg>
                    </button>
                    <div x-show="selected === 'accolades'" x-transition class="pb-4 text-gray-600">
                        Recognition and exhibitions across London's premier galleries.
                    </div>
                </div>

                <!-- Beyond the Lens -->
                <div class="border-t border-gray-200 border-b">
                    <button @click="selected = selected === 'beyond' ? null : 'beyond'"
                        class="w-full py-4 flex justify-between items-center text-left">
                        <span class="font-medium">Beyond the Lens</span>
                        <svg class="w-5 h-5 transform transition-transform"
                            :class="{ '-rotate-180': selected === 'beyond' }" fill="none" stroke="currentColor"
                            viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7">
                            </path>
                        </svg>
                    </button>
                    <div x-show="selected === 'beyond'" x-transition class="pb-4 text-gray-600">
                        Workshops, mentoring, and community engagement initiatives.
                    </div>
                </div>
            </div>
        </div>

        <!-- Right Image -->
        <div class="relative">
            <div class="absolute top-0 right-0 w-full h-full bg-yellow-400 -translate-y-4 translate-x-4"></div>
            <div class="relative">
                <img src="{{asset('images/iris-hero-four.webp')}}" alt="Photographer with cameras" class="w-full object-cover" />
            </div>
        </div>
    </div>
</div>
