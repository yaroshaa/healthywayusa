<x-app-layout>
    <x-top-block>
        <x-slogan>
            We can help you create custom powder blends to suit your specific needs, and our team of experts
            is always available to answer any questions you may have about powder manufacturing
        </x-slogan>
        <x-h1>{{ __('Certificates') }}</x-h1>
    </x-top-block>
    <div class="max-w-7xl mx-auto pt-14 xl:mb-44 lg:mb-44 md:mb-8 sm:mb-3 lt:mb-3">
        <div class="pt-14 flex justify-center xl:flex-row lg:flex-row md:flex-col sm:flex-col lt:flex-col">
            <div class="xl:w-2/4 lg:w-2/4 md:w-full sm:w-full lt:w-full sm:pb-10 lt:pb-10">
                <img src="{{ asset('img/certificates/NSF-GMP for Sport Certificate.jpg') }}"
                     alt="NSF-GMP for Sport Certificate">
            </div>
            <div class="xl:w-2/4 lg:w-2/4 md:w-full sm:w-full lt:w-full sm:pb-10 lt:pb-10">
                <img
                    src="{{ asset('img/certificates/NSF certificate for Good Manufacturing Practices for Dietary Supplements.jpg') }}"
                    alt="NSF certificate for Good Manufacturing Practices for Dietary Supplements">
            </div>
        </div>
    </div>
</x-app-layout>
