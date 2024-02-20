<x-app-layout>
    <x-top-block>
        <x-slogan>
            QA Associates oversee every aspect of the manufacturing process, from receipt of raw materials
            through delivery of finished products to ensure that established in-process specifications are met.
        </x-slogan>
        <x-h1>{{ __('Quality Control & Quality Assurance') }}</x-h1>
    </x-top-block>
    <div class="max-w-7xl mx-auto mb-5 pt-10">
        <div class="flex justify-center xl:flex-row lg:flex-row md:flex-col sm:flex-col lt:flex-col">
            <div class="w-full">
                <div class="w-full flex flex-col items-center">
                    <x-h2> {{ __('Laboratory') }} </x-h2>
                </div>
                <div class="uppercase text-3xl font-medium my-8 text-center text-dark-green">
                    {{ __('Equipment and testing technologies available for use includes: ') }}
                </div>
            </div>
        </div>
    </div>
    <div class="w-full bg-quality bg-no-repeat xl:bg-right-bottom lg:bg-right-bottom md:bg-right sm:bg-center lt:bg-center xl:bg-60% lg:bg-60% md:bg-100% sm:bg-120% lt:bg-200%">
        <div class="max-w-7xl mx-auto mt-3 ">
            <div class="flex lg:flex-row xl:flex-row md:flex-col sm:flex-col lt:flex-col">
                <div class="xl:w-1/3 lg:w-1/2 md:w-full sm:w-full lt:w-full xl:pl-2 lg:pl-5 md:pl-2 sm:pl-2 lt:pl-2 p-2">
                    <div class="text-justify mb-10">
                        Our laboratory team consists of experienced scientists, chemists, biologists,
                        microbiologists, and laboratory technicians. <br><br> We pride ourselves on having a
                        state-of-the-art
                        5,000-square-foot laboratory that is equipped with the latest technology and tools. This
                        allows us to provide our clients with accurate and reliable results.
                    </div>
                    <div >
                        <img class="mx-auto" src="{{ asset('img/quality/quality-1.png') }}" alt="quality-1">
                    </div>
                </div>
                <div class="xl:w-2/3 lg:w-1/2 md:w-full sm:w-full lt:w-full xl:pl-20 lg:pl-10 md:pl-32 sm:pl-14 lt:pl-5 xl:mt-0 lg:mt-0 md:mt-8 sm:mt-8 lt:mt-8 ">
                    <ul class="pl-10 list-disc uppercase text-2xl font-light">
                        <li class="pb-5 px-5">HPLC (High Performance Liquid Chromatography)</li>
                        <li class="p-5">HPTLC (High Performance Thin Layer Chromatography)</li>
                        <li class="p-5">UPLC (Ultra Performance Liquid Chromatography)</li>
                        <li class="p-5">FT-IR Spectrometry</li>
                        <li class="p-5">Gas Chromatography</li>
                        <li class="p-5">ICP-MS</li>
                        <li class="p-5">ICP-OES</li>
                        <li class="p-5">Dissolution Apparatus</li>
                        <li class="p-5">Stability Chambers</li>
                        <li class="p-5">Microbiology Laboratory</li>
                    </ul>
                </div>
            </div>
        </div>
        <div class="max-w-7xl mx-auto mt-3">
            <div class="w-11/12 flex flex-col items-center mb-10 pl-3">
                <x-h2>Quality Assurance</x-h2>
            </div>
            <div class="xl:w-1/2 lg:w-1/2 md:w-full sm:w-full lt:w-full">
                <div class="mb-10 xl:px-8 lg:px-8 md:px-4 sm:px-4 lt:px-4 text-justify pb-5">
                    <p>The Quality Assurance Department at PuroVite is responsible for ensuring compliance with
                        regulatory, corporate, and client requirements. QA Associates oversee every aspect of the
                        manufacturing process, from receipt of raw materials to delivery of finished products, to ensure
                        that established in-process specifications are met. This ensures that our products meet the
                        highest standards of quality and safety.</p><br>
                    <p>The QA Department is responsible for managing a comprehensive training program for all employees
                        of the company. This includes orientation and refresher training on job-specific duties, as well
                        as Good Manufacturing Practices. By ensuring that all employees are properly trained, the QA
                        Department helps to maintain a high level of quality control throughout the company.</p>
                </div>
            </div>
        </div>
    </div>
    <div class="w-full bg-quality-image-line py-72 bg-no-repeat bg-cover xl:bg-center lg:bg-center md:bg-center sm:bg-top lt:bg-top mt-20 mb-20">
    </div>
    <div class="max-w-7xl mx-auto xl:mt-20 lg:mt-20 md:mt-20 sm:mt-3 lt:mt-3">
        <div class="flex lg:flex-row xl:flex-row md:flex-row sm:flex-col lt:flex-col">
            <div class="xl:w-2/5 lg:w-2/5 md:w-2/4 sm:w-full lt:w-full">
                <div class="w-full flex flex-col items-center">
                    <x-h2-small-text>
                        Product Development
                    </x-h2-small-text>
                </div>
                <div class="p-5 text-justify">
                    <p>Our team of experts has extensive experience in developing various dosage forms including
                        tablets, capsules, powders, and liquid capsules. We can help you create products with the
                        perfect ingredients and dosages, while also verifying label claims and ensuring allergen
                        control. Plus, our formulations are shelf-stable, so you can be confident your product will stay
                        fresh and effective for longer.
                </div>
            </div>
            <div class="xl:w-2/5 lg:w-2/5 md:w-2/4 sm:w-full lt:w-full px-10">
                <div class="w-full flex flex-col items-center">
                    <x-h2-small-text>
                        Regulatory Compliance
                    </x-h2-small-text>
                </div>
                <div class="mx-auto xl:w-full lg:w-full md:w-full sm:w-7/12 lt:w-full">
                    <ul class="p-5 pl-10 list-disc">
                        <li>FDA inspected</li>
                        <li>NSF GMP program registered</li>
                        <li>Kosher Certified</li>
                        <li>Halal Certified</li>
                        <li>OSHA Inspected</li>
                        <li>Meets Health Canada Standards</li>
                        <li>Various customer audits</li>
                        <li>Conducts vendor qualifications</li>
                    </ul>
                </div>
            </div>
            <div class="xl:w-1/5 lg:w-1/5 md:w-0 sm:w-full lt:w-full xl:block lg:block md:hidden sm:hidden lt:hidden items-center xl:pt-5 lg:pt-20 p-5">
                    <img src="{{ asset('img/quality/quality-2.png') }}" alt="quality-2">
            </div>
        </div>
    </div>
    <div class="max-w-7xl mx-auto xl:mt-20 lg:mt-20 md:mt-20 sm:mt-3 lt:mt-3 my-10">
        <div class="flex flex-col w-11/12 justify-around-center text-center p-5 xl:pl-14 lg:pl-14 md:pl-12 sm:pl-10 lt:pl-5">
            <x-h2>
                The Quality Assurance Department at Healthyway Production Inc.
            </x-h2>
        </div>
        <div class="flex justify-start xl:flex-row lg:flex-row md:flex-col sm:flex-col lt:flex-col">
            <div class="xl:w-1/2 lg:w-1/2 md:w-full sm:w-full lt:w-full xl:p-16 lg:p-10 md:p-10 sm:p-5 lt:p-5">
                <img class="mx-auto" src="{{ asset('img/quality/quality-3.png') }}" alt="quality-3">
            </div>
            <div class="xl:w-1/2 lg:w-1/2 md:w-full sm:w-full lt:w-full xl:pt-20 lg:pt-5 md:pt-5 sm:pt-5 lt:pt-5 text-justify p-5">
                <p>The Quality Assurance Department at Healthyway is committed to ensuring compliance with all
                    regulatory, corporate, and client requirements. QA Associates oversee every aspect of the
                    manufacturing process, from receipt of raw materials through delivery of finished products to
                    ensure
                    that established in-process specifications are met.
                    <br>
                    <br>
                    The department also manages a comprehensive training program for all company employees that
                    includes
                    orientation and refresher training on job-specific duties and Good Manufacturing Practices. With
                    its
                    expertise in various dosage forms, ingredient uses, label claims verification, and allergen
                    control
                    programs, PuroVite is a reliable partner for all your shelf-stable formulation needs.</p>
            </div>
        </div>
    </div>
</x-app-layout>
