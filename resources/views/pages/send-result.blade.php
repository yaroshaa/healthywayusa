<x-app-layout>
    <x-top-block>
        <x-slogan>
            @if($result)
                {{ __('Your message has been sent') }}
            @else
                {{ __('Something went wrong. Message not sent') }}
            @endif
        </x-slogan>
        <x-h1>{{ __('Contact') }}</x-h1>
    </x-top-block>
    <div class="max-w-7xl mx-auto pt-2 xl:mb-10 lg:mb-10 md:mb-8 sm:mb-3 lt:mb-3">
        <div class="flex justify-start pt-14 mx-auto">
            <div class="w-full p-4 text-xl text-cyan-800 text-center">
                @if($result)
                    {{ __('Your message has been sent . Thank you for the message.') }}
                @else
                    {{ __('Something went wrong. Message not sent') }}
                @endif
            </div>
        </div>
    </div>
</x-app-layout>
