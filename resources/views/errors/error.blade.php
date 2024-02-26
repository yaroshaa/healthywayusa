<x-app-layout>
    <x-top-block>
        <x-slogan>
            {{ __('Unknown Error') }}...
        </x-slogan>
        <x-h1>{{ __('Error') }}</x-h1>
    </x-top-block>
    <div class="max-w-7xl mx-auto pt-2 xl:mb-10 lg:mb-10 md:mb-8 sm:mb-3 lt:mb-3">
        {{ __($exception->getMessage() ?: 'Service Unavailable') }}
    </div>
</x-app-layout>
