<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Edit Service') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">
                    <form action="{{ route('services.update', $service) }}" method="POST" enctype="multipart/form-data" class="space-y-6">
                        @csrf
                        @method('PUT')

                        <div>
                            <x-input-label for="name" :value="__('Name')" />
                            <x-text-input id="name" name="name" type="text" class="mt-1 block w-full" :value="old('name', $service->name)" required autofocus />
                            <x-input-error class="mt-2" :messages="$errors->get('name')" />
                        </div>

                        <div>
                            <x-input-label for="description" :value="__('Description')" />
                            <textarea id="description" name="description" class="mt-1 block w-full border-gray-300 focus:border-yellow-500 focus:ring-yellow-500 rounded-md shadow-sm" required>{{ old('description', $service->description) }}</textarea>
                            <x-input-error class="mt-2" :messages="$errors->get('description')" />
                        </div>

                        <div>
                            <x-input-label for="price" :value="__('Price (in cents)')" />
                            <x-text-input id="price" name="price" type="number" class="mt-1 block w-full" :value="old('price', $service->price)" required />
                            <x-input-error class="mt-2" :messages="$errors->get('price')" />
                        </div>

                        <div>
                            <x-input-label for="time" :value="__('Time')" />
                            <x-text-input id="time" name="time" type="text" class="mt-1 block w-full" :value="old('time', $service->time)" required />
                            <x-input-error class="mt-2" :messages="$errors->get('time')" />
                        </div>

                        <div>
                            <x-input-label for="featured_image" :value="__('Featured Image')" />
                            @if($service->featured_image)
                                <div class="mt-2">
                                    <img src="{{ Storage::url($service->featured_image) }}" alt="{{ $service->name }}" class="h-32 w-32 object-cover rounded">
                                </div>
                            @endif
                            <input id="featured_image" name="featured_image" type="file" class="mt-1 block w-full" accept="image/*" />
                            <x-input-error class="mt-2" :messages="$errors->get('featured_image')" />
                        </div>

                        <div class="flex items-center gap-4">
                            <x-primary-button>{{ __('Update Service') }}</x-primary-button>
                            <a href="{{ route('services.index') }}" class="text-gray-600 hover:text-gray-900">{{ __('Cancel') }}</a>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>