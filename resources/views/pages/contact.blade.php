<x-app-layout>
    <x-top-block>
        <x-slogan>
            {{ __('Send us a message') }}
        </x-slogan>
        <x-h1>{{ __('Contact') }}</x-h1>
    </x-top-block>
    <div class="max-w-7xl mx-auto pt-2 xl:mb-10 lg:mb-10 md:mb-8 sm:mb-3 lt:mb-3">
        <div class="flex justify-start pt-14 ">
            <div class="xl:w-2/4 lg:w-2/4 md:w-2/4 sm:w-full lt:w-full p-4">
                <form method="POST" action="{{ route('contactsSend') }}">
                    @csrf
                    <div class="mt-4">
                        <x-input-label for="name" :value="__('Name')"/>
                        <x-text-input id="name" class="block mt-1 w-full" type="text" name="name" :value="old('name')"
                                      required/>
                        <x-input-error :messages="$errors->get('name')" class="mt-2"/>
                    </div>
                    <div class="mt-4">
                        <x-input-label for="email" :value="__('Email')"/>
                        <x-text-input id="email" class="block mt-1 w-full" type="email" name="email"
                                      :value="old('email')" required/>
                        <x-input-error :messages="$errors->get('email')" class="mt-2"/>
                    </div>
                    <div class="mt-4">
                        <x-input-label for="message" :value="__('Message')"/>
                        <x-text-area id="message" class="block mt-1 w-full" type="text" name="message"
                                     :value="old('message')" required></x-text-area>
                        <x-input-error :messages="$errors->get('message')" class="mt-2"/>
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
</x-app-layout>
