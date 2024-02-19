<x-app-layout>
    <div
        class="w-full flex flex-col justify-between bg-home bg-no-repeat xl:bg-cover lg:bg-cover md:bg-cover sm:bg-cover lt:bg-cover xl::bg-bottom lg:bg-bottom md:bg-bottom sm:bg-left-top lt:bg-left-top min-h-96 h-dvh  ">
        <div class="h-20"></div>
            <div class="max-w-7xl mx-auto grid xl:grid-cols-3 lg:grid-cols-3 md:grid-cols-3 sm:grid-cols-1 lt:grid-cols-1">
                <div
                    class="w-full text-white xl:text-4xl lg:text-4xl md:text-3xl sm:text-3xl lt:text-2xl uppercase sm:pl-5 lt:pl-5">
                    Before caps go on - <br> our quality goes in!
                </div>
            </div>

        <div class="w-full">
            <div class="max-w-7xl mx-auto">
                <div class="flex flex-row justify-between text-white text-3xl uppercase xl:p-5 lg:p-5 md:p-5 sm:p-10 lt:p-5 font-bold">
                    #betterhealth
                </div>
                <h1 class="w-full uppercase lg:text-4xl xl:text-4xl md:text-3xl sm:text-xl lt:text-base text-white p-5 sm:px-3 lt:px-3">
                    Whatever your product idea may be, we can help you bring it to market quickly and efficiently
                </h1>
            </div>
        </div>
    </div>
    <div
        class="max-w-7xl mx-auto xl:mt-20 lg:mt-20 md:mt-20 sm:mt-10 lt:mt-10 bg-no-repeat bg-molecule-left bg-left-top lg:bg-60% xl:bg-60% md:bg-60% sm:bg-80% lt:bg-100%">
        <div class="flex justify-center">
            <x-h2> {{ __('About us') }} </x-h2>
        </div>
        <div class="flex flex-col w-full items-center p-3">
            <div class="flex flex-col w-full items-center lx:w-3/6 lg:w-3/6 md:w-3/6 sm:w-full lt:w-full">
                <div class="xl:mb-10 lg:mb-10 md:mb-8 sm:mb-5 lt:mb-5">
                    <div class="text-justify">
                        At Healthyway Production Inc/, we are committed to helping our customers succeed. We offer a
                        wide array of services to ensure your products are of the highest quality and compliant with all
                        industry regulations.<br>
                        We specialize in custom product manufacturing, with an emphasis on quality and customer service.<br>
                        <br>
                        PuroVite is a nutraceutical contract manufacturer that can help you develop, test and bring your
                        products to domestic and international markets quickly and efficiently. We are NSF GMP and NSF
                        for Sports registered and use only the highest quality ingredients in our products.
                    </div>
                    <br>
                    <div class="text-justify">
                        At Healthyway Production Inc/, we are committed to helping our customers succeed. We offer a
                        wide array of services to ensure your products are of the highest quality and compliant with all
                        industry regulations.<br>
                        We specialize in custom product manufacturing, with an emphasis on quality and customer service.<br>
                        <br>
                        PuroVite is a nutraceutical contract manufacturer that can help you develop, test and bring your
                        products to domestic and international markets quickly and efficiently. We are NSF GMP and NSF
                        for Sports registered and use only the highest quality ingredients in our products.
                    </div>
                </div>
                <div>
                    <x-read-more-button :href="route('about_us')" :active="request()->routeIs('about_us')">
                        {{ __('Read more') }}
                    </x-read-more-button>
                </div>
            </div>
        </div>
    </div>
    <div
        class="w-full mx-auto xl:mt-36 lg:mt-28 md:mt-28 sm:mt-10 lt:mt-10 bg-manufacturing  xl:bg-cover lg:bg-cover xl:py-8 lg:py-5 md:py-5 sm:py-3 lt:py-3">
        <div class="flex flex-col items-center">
            <div class="xl:w-3/6 lg:w-5/6 md:w-5/6 sm:w-full lt:w-full p-2 lg:pl-10 pb-6">
                <div class="flex justify-center">
                    <x-h2>{{ __('Manufacturing') }}</x-h2>
                </div>
                <div class="mb-10 flex xl:flex-row lg:flex-row md:flex-row sm:flex-col lt:flex-col text-justify">
                    <div class="text-dark-green p-3">
                        <div>
                            When you source your manufacturing to Healthyway Production Inc., you can be confident that
                            you are receiving the best possible product for your customers.
                            <br>
                            <br>
                            Our state-of-the-art facility and team of highly skilled professionals ensure that every
                            product we produce meets the highest standards of quality and safety.
                        </div>
                    </div>
                    <div class="text-dark-green p-3">
                        <div>
                            With our experience and expertise, you can trust us to provide you with the best possible
                            products to meet the needs of your customers.
                            <br>
                            <br>
                            Contact us today to learn more about how we can help you grow your business.
                        </div>
                    </div>
                </div>
                <div class="flex justify-center">
                    <x-read-more-button :href="route('manufacturing')" :active="request()->routeIs('manufacturing')">
                        {{ __('Read more') }}
                    </x-read-more-button>
                </div>
            </div>
        </div>
    </div>
    <div class="bg-molecule-right bg-right-bottom bg-no-repeat bg-60%">
        <div class="max-w-7xl mx-auto xl:mt-20 lg:mt-20 md:mt-20 sm:mt-10 lt:mt-10">
            <div class="flex justify-center lg:mb-14 lx:mb-14 md:mb-14 sm:mb-3 lt:mb-3">
                <x-h2> {{ __('Products') }} </x-h2>
            </div>
            <div class="flex flex-col">
                <div
                    class="flex xl:flex-row lg:flex-row md:flex-row sm:flex-col lt:flex-col w-full py-2 xl:pr-5 lg:pr-5 mb-5">
                    <div
                        class="xl:w-3/4 lg:w-3/4 md:w-2/3 sm:w-full lt:w-full xl:pl-10 lg:pl-5 md:pl-5 lg:pr-5 xl:pr-5 md:pr-5 sm:p-2 lt:p-2">
                        <img src="{{ asset('img/caps.png') }}" alt="caps">
                    </div>
                    <div
                        class="xl:w-1/4 lg:w-1/4 md:w-1/3 sm:w-full lt:w-full sm:p-3 lt:p-3 text-left lg:text-left xl:text-left md:text-left sm:text-center lt:text-center">
                        <h3 class="text-3xl font-medium text-dark-green xl:mt-5 lg:mt-5 md:mt-0 sm:mt-5 lt:mt-5">{{ __('Caps') }}</h3>
                        <div class="xl:mt-5 lg:mt-5 md:mt-1 sm:mt-5 lt:mt-5">
                            We design your specific capsules
                            with your whole business in mind
                        </div>
                    </div>
                </div>
                <div
                    class="flex xl:flex-row lg:flex-row md:flex-row sm:flex-col lt:flex-col w-full py-2 xl:pr-5 lg:pr-5 mb-5">
                    <div
                        class="xl:w-3/4 lg:w-3/4 md:w-2/3 sm:w-full lt:w-full xl:pl-10 lg:pl-5 md:pl-5 lg:pr-5 xl:pr-5 md:pr-5 sm:p-2 lt:p-2">
                        <img src="{{ asset('img/tabl.png') }}" alt="tablets">
                    </div>
                    <div
                        class="xl:w-1/4 lg:w-1/4 md:w-1/3 sm:w-full lt:w-full sm:p-3 lt:p-3 lg:text-left xl:text-left md:text-left sm:text-center lt:text-center">
                        <h3 class="text-3xl font-medium text-dark-green xl:mt-5 lg:mt-5 md:mt-0 sm:mt-5 lt:mt-5">{{ __('Tablets') }}</h3>
                        <div class="xl:mt-5 lg:mt-5 md:mt-1 sm:mt-5 lt:mt-5">
                            We'll work with you to create the custom product you need
                        </div>
                    </div>
                </div>
                <div
                    class="flex xl:flex-row lg:flex-row md:flex-row sm:flex-col lt:flex-col w-full py-2 xl:pr-5 lg:pr-5 mb-5">
                    <div
                        class="xl:w-3/4 lg:w-3/4 md:w-2/3 sm:w-full lt:w-full xl:pl-10 lg:pl-5 md:pl-5 lg:pr-5 xl:pr-5 md:pr-5 sm:p-2 lt:p-2">
                        <img src="{{ asset('img/powd.png') }}" alt="powders">
                    </div>
                    <div
                        class="xl:w-1/4 lg:w-1/4 md:w-1/3 sm:w-full lt:w-full sm:p-3 lt:p-3 text-left lg:text-left xl:text-left md:text-left sm:text-center lt:text-center">
                        <h3 class="text-3xl font-medium text-dark-green xl:mt-5 lg:mt-5 md:mt-0 sm:mt-5 lt:mt-5">{{ __('Powders') }}</h3>
                        <div class="xl:mt-5 lg:mt-5 md:mt-1 sm:mt-5 lt:mt-5">
                            Are you looking for a reliable powder manufacturer? We can help!
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div
            class="w-full mx-auto xl:mt-10 lg:mt-10 md:mt-10 sm:mt-1 lt:mt-1 xl:bg-100% lg:bg-100% xl:py-20 lg:py-20 md:py-8 sm:py-3 lt:py-3">
            <div class="max-w-7xl mx-auto lg:mt-5 sm:my-4 text-white">
                <div class="flex justify-center lg:mb-14 lx:mb-14 md:mb-14 sm:mb-3 lt:mb-3">
                    <div class="w-5/6 text-center">
                        <x-h2>{{ __('Quality control & quality assurance') }}</x-h2>
                    </div>
                </div>
                <div class="flex flex-row justify-center">
                    <div
                        class="lg:w-3/5 sm:w-full lg:text-xl sm:text-md text-dark-green text-center">
                        On the other hand, we denounce with righteous indignation and dislike men who are so beguiled
                        and demoralized by the charms of pleasure of the moment, so blinded by desire, that they cannot
                        foresee the pain and trouble that are bound to ensue; and equal blame belongs to those who fail
                        in their duty through weakness of will.
                    </div>
                </div>
            </div>
        </div>
        <div class="max-w-7xl mx-auto xl:mt-10 lg:mt-10 md:mt-10 sm:mt-3 lt:mt-3">
            <div class="flex xl:flex-row lg:flex-row md:flex-row sm:flex-col lt:flex-col">
                <div class="xl:w-3/5 lg:w-1/2 md:w-1/2 sm:w-full lt:w-full xl:p-5 lg:p-5 md:p-5 sm:p-5 lt:p-5 md:pt-20">
                    <img src="{{ asset('img/request.png') }}" alt="request">
                </div>
                <div class="xl:w-2/5 lg:w-1/2 md:w-1/2 sm:w-full lt:w-full p-5">
                    <div class="lg:text-left xl:text-left md:text-left sm:text-center lt:text-center">
                        <x-h2>{{ __('Request a quote') }}</x-h2>
                    </div>
                    <div class="xl:mb-20 lg:mb-5 md:mb-5 sm:mb-5 lt:mb-5 text-justify mt-5">
                        With Healthyway Production Inc., you'll never be in the dark. We'll work with you to create the
                        custom product you need. We're dedicated to providing the best possible service and support, so
                        you can focus on making your business a success.
                    </div>
                    <div
                        class="flex lg:justify-start xl:justify-start md:justify-start sm:justify-center lt:justify-center">
                        <x-read-more-button :href="route('faq')" :active="request()->routeIs('faq')">
                            {{ __('Read more') }}
                        </x-read-more-button>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="max-w-7xl mx-auto xl:mt-20 lg:mt-20 md:mt-20 sm:mt-3 lt:mt-3 mb-10">
        <div class="flex xl:flex-row lg:flex-row md:flex-row sm:flex-col-reverse lt:flex-col-reverse">
            <div class="xl:w-2/5 lg:w-2/5 md:w-2/5 sm:w-full lt:w-full p-5 lg:pl-10 sm:pl-2">
                <div
                    class="flex flex-col lg:items-start xl:items-start md:items-start sm:items-center lt:items-center">
                    <div class="flex justify-start">
                        <x-h2>{{ __('Services') }}</x-h2>
                    </div>
                    <div class="mt-10">
                        <x-h3-black>{{ __('Filfulment services') }}</x-h3-black>
                    </div>
                    <div class="mt-2">
                        <x-read-more-button :href="route('faq')" :active="request()->routeIs('faq')">
                            {{ __('Read more') }}
                        </x-read-more-button>
                    </div>
                    <div class="mt-10">
                        <x-h3-black>{{ __('Regulatory services') }}</x-h3-black>
                    </div>
                    <div class="mt-2">
                        <x-read-more-button :href="route('services')" :active="request()->routeIs('faq')">
                            {{ __('Read more') }}
                        </x-read-more-button>
                    </div>
                </div>
            </div>
            <div class="xl:w-3/5 lg:w-3/5 md:w-3/5 sm:w-full lt:w-full xl:p-5 lg:p-5 md:p-3 sm:p-1 lt:p-1">
                <img src="{{ asset('img/services.png') }}" alt="services">
            </div>
        </div>
    </div>
</x-app-layout>
