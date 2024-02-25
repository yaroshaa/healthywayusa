<x-app-layout>
    @if(Auth::user() && Auth::user()->hasRole('admin'))
        <x-white-button href="{{ route('postcreate', ['key' => null]) }}">
            {{ __('Add post') }}
        </x-white-button>
    @endif
        <x-top-block>
            <x-slogan>
                {{ __('Blog') }}
            </x-slogan>
            <x-h1>{{ $post['name'] }}</x-h1>
        </x-top-block>
        <div class="max-w-7xl mx-auto pt-2 xl:mb-10 lg:mb-10 md:mb-8 sm:mb-3 lt:mb-3">
            {{ Breadcrumbs::render('post', $post) }}
                <div class="flex justify-start flex-col">
                    <div class="w-full p-4">
                        <img src="{{ asset('img/blog/'.$post['image']) }}" alt="">
                    </div>
                    <div class="w-full p-4">
                        <h3 class="uppercase xl:text-4xl lg:text-4xl md:text-2xl sm:text-2xl lt:text-2xl font-medium mb-8 xl:text-left lg:text-left md:text-center sm:text-center lt:text-center text-cyan-800">
                            {{ $post['name'] }}
                        </h3>
                        <div class="mb-3 text-justify xl:pr-10 lg:pr-10 md:pr-0 sm:pr-0 lt:pr-0">
                            <p>{{ $post['content'] }}</p><br>
                        </div>
                        @if(Auth::user() && Auth::user()->hasRole('admin'))
                            <div class="w-full flex flex-row justify-between xl:pr-10 lg:pr-10 items-center">
                                <div class="actions flex flex-row ">
                                    <div class="inline-block p-2">
                                        <a href="{{  route('postedit', ['id' => $post['blog_id']]) }}" class="text-sm">
                                            edit
                                        </a>
                                    </div>
                                    <div class="inline-block p-2">
                                        <x-link-modal x-data="" x-on:click="$dispatch('open-modal', 'confirm-post-deletion')">
                                            delete
                                        </x-link-modal>
                                        <x-post-modal name="confirm-post-deletion">
                                            <form method="POST" action="{{ route('postdelete', ['id' => $post['blog_id']]) }}" class="p-2" >
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
</x-app-layout>
