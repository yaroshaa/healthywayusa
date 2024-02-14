<x-app-layout>
    <div class="w-full">
        <div class="w-full">
            <div class="max-w-7xl mx-auto">
                <div
                    class="py-12 font-bold w-full  text-white xl:text-3xl lg:text-3xl md:text-2l sm:text-xs lt:text-xs lg:my-16 sm:my-6">
                    {{ __('Send us a message') }}
                </div>
            </div>
            <div class="w-full bg-black/40 border-t-6 end-0 py-10 mt-16">
                <div class="uppercase text-4xl text-white w-full px-14">
                    <h1 class="font-bold uppercase xl:text-6xl lg:text-6xl md:text-4xl sm:text-2xl lt:text-2xl text-center ">{{ __('Contact') }}</h1>
                </div>
            </div>
        </div>
        <div class="max-w-7xl mx-auto pt-2 xl:mb-10 lg:mb-10 md:mb-8 sm:mb-3 lt:mb-3">
            <div class="flex justify-start pt-14 ">
                <div class="xl:w-2/4 lg:w-2/4 md:w-2/4 sm:w-full lt:w-full p-4">
                    <form method="POST" action="{{ route('contactsSend') }}">
                        @csrf
                        <div class="mt-4">
                            <x-input-label for="name" :value="__('Name')" />
                            <x-text-input id="name" class="block mt-1 w-full" type="text" name="name" :value="old('name')" required/>
                            <x-input-error :messages="$errors->get('name')" class="mt-2" />
                        </div>
                        <div class="mt-4">
                            <x-input-label for="email" :value="__('Email')" />
                            <x-text-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" required />
                            <x-input-error :messages="$errors->get('email')" class="mt-2" />
                        </div>
                        <div class="mt-4">
                            <x-input-label for="message" :value="__('Message')" />
                            <x-text-area id="message" class="block mt-1 w-full" type="text" name="message" :value="old('message')" required></x-text-area>
                            <x-input-error :messages="$errors->get('message')" class="mt-2" />
                        </div>
                        @php
                            $attributes = [
                            ];
                        @endphp
                        {!! app('captcha')->display($attributes) !!}
                        <div class="flex items-center justify-end mt-4">
                            <x-primary-button class="ml-4">
                                {{ __('Send') }}
                            </x-primary-button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
