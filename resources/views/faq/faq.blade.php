<x-app-layout>
    @if(Auth::user() && Auth::user()->hasRole('admin'))
        <x-white-button href="{{ route('postcreate', ['key' => null]) }}">
            {{ __('Add post') }}
        </x-white-button>
    @endif
    <div class="w-full">
        <div class="w-full">
            <div class="max-w-7xl mx-auto">
                <div
                    class="py-12 font-bold w-full  text-white xl:text-3xl lg:text-3xl md:text-2l sm:text-xs lt:text-xs lg:my-16 sm:my-6">
                    Added information
                </div>
            </div>
            <div class="w-full bg-black/40 border-t-6 end-0 py-10 mt-16">
                <div class="uppercase text-4xl text-white w-full px-14">
                    <h1 class="font-bold uppercase xl:text-6xl lg:text-6xl md:text-4xl sm:text-2xl lt:text-2xl text-center ">{{ __(' Frequently Asked Questions') }}</h1>
                </div>
            </div>
        </div>
        <div class="max-w-7xl mx-auto xl:mb-40 lg:mb-40 md:mb-8 sm:mb-3 lt:mb-3">
            <div class="w-4/5 text-white">
                <h2 class="uppercase xl:text-6xl lg:text-6xl md:text-4xl sm:text-2xl lt:text-2xl">
                    {{ __('Blog') }}
                </h2>
                <div class="p-2 xl:text-white lg:text-white md:text-gray-600 sm:text-gray-600 lt:text-gray-600 lg:my-16 sm:my-2 xl:w-3/4 lg:w-3/4 md:w-full sm:w-full lt:w-full sm:text-xs md:text-2xl">
                    {{ $data['name'] }}
                </div>
            </div>
        </div>
        <div class="max-w-7xl mx-auto pt-2 xl:mb-10 lg:mb-10 md:mb-8 sm:mb-3 lt:mb-3">
                <div class="flex justify-start pt-14 flex-col border-b-2 border-gray-200">
                    <div class="w-full p-4">
                        <img src="{{ asset('img/'.$data['image']) }}" alt="">
                    </div>
                    <div class="w-full p-4">
                        <h3 class="uppercase xl:text-4xl lg:text-4xl md:text-2xl sm:text-2xl lt:text-2xl font-medium mb-8 xl:text-left lg:text-left md:text-center sm:text-center lt:text-center text-cyan-800">
                            {{ $data['name'] }}
                        </h3>
                        <div class="mb-3 text-justify xl:pr-10 lg:pr-10 md:pr-0 sm:pr-0 lt:pr-0">
                            <p>{{ $data['content'] }}</p><br>
                        </div>
                        @if(Auth::user() && Auth::user()->hasRole('admin'))
                            <div class="w-full flex flex-row justify-between xl:pr-10 lg:pr-10 items-center">
                                <div class="actions flex flex-row ">
                                    <div class="inline-block p-2">
                                        <a href="{{  route('postedit', ['id' => $data['blog_id']]) }}" class="text-sm">
                                            edit
                                        </a>
                                    </div>
                                    <div class="inline-block p-2">
                                        <x-link-modal x-data="" x-on:click="$dispatch('open-modal', 'confirm-post-deletion')">
                                            delete
                                        </x-link-modal>
                                        <x-post-modal name="confirm-post-deletion">
                                            <form method="POST" action="{{ route('postdelete', ['id' => $data['blog_id']]) }}" class="p-2" >
                                                @csrf
                                                <h2 class="text-lg font-medium text-gray-900">
                                                    {{ __('Are you sure you want to delete this post?') }}
                                                </h2>

                                                <div class="mt-6 flex justify-end">
                                                    <x-secondary-button x-on:click.prevent="$dispatch('close', 'confirm-post-deletion')">
                                                        {{ __('Cancel') }}
                                                    </x-secondary-button>

                                                    <x-danger-button class="ml-3" x-on:click="console.log('11111111111')">
                                                        {{ __('Delete') }}
                                                    </x-danger-button>
                                                </div>
                                            </form>
                                        </x-post-modal>
                                    </div>
                                </div>
                            </div>
                        @endif
                    </div>
                </div>
        </div>
    </div>
</x-app-layout>
