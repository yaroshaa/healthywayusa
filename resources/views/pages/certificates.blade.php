<x-app-layout>
    <x-top-block>
        <x-slogan>
            We can help you create custom powder blends to suit your specific needs, and our team of experts
            is always available to answer any questions you may have about powder manufacturing
        </x-slogan>
        <x-h1>{{ __('Certificates') }}</x-h1>
    </x-top-block>
    <div class="max-w-7xl mx-auto xl:mb-10 lg:mb-10 md:mb-8 sm:mb-3 lt:mb-3">
        <div class="pt-14 flex justify-center flex-col">
            <div class="w-full pb-10">
                <img class="mx-auto" src="{{ asset('img/certificates/NSF-GMP for Sport Certificate.jpg') }}"
                     alt="NSF-GMP for Sport Certificate">
            </div>
            <div class="w-full pb-10">
                <img class="mx-auto"
                    src="{{ asset('img/certificates/NSF certificate for Good Manufacturing Practices for Dietary Supplements.jpg') }}"
                    alt="NSF certificate for Good Manufacturing Practices for Dietary Supplements">
            </div>
        </div>
    </div>
</x-app-layout>
