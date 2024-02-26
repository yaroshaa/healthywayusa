<x-app-layout>
    <x-top-block>
        <x-slogan>
            {{ __('Blog, information') }}...
        </x-slogan>
        <x-h1>{{ __('Blog List') }}</x-h1>
    </x-top-block>
    @if(Auth::user() && Auth::user()->isAdmin() && count($blog) > 0)
        <div class="max-w-7xl mx-auto pt-10">
            <div class="w-4/5 pl-4">
                <x-white-button href="{{ route('postcreate', ['key' => null]) }}">
                    {{ __('Add post') }}
                </x-white-button>
            </div>
        </div>
    @endif
    <div class="max-w-7xl mx-auto pt-2 xl:mb-10 lg:mb-10 md:mb-8 sm:mb-3 lt:mb-3">
        {{ Breadcrumbs::render('blog') }}
        @if(count($blog) > 0 )
            @php($counter = 1)
            @foreach($blog as $post)
                @php($counter++)
                @if(Auth::user() && Auth::user()->isAdmin())
                    <div
                        class="flex justify-start xl:flex-row lg:flex-row md:flex-row sm:flex-col lt:flex-col border-b-2 last:border-b-0 border-gray-200">
                        <div class="xl:w-1/5 lg:w-1/5 md:w-1/5 sm:w-full lt:w-full p-4">
                            <img src="{{ asset('img/blog/'.$post['content'][0]['image']) }}"
                                 alt="{{ $post['content'][0]['image'].'_'.$post['id'] }}">
                        </div>
                        <div class="xl:w-4/5 lg:w-4/5 md:w-4/5 sm:w-full lt:w-full p-4">
                            <h3 class="uppercase xl:text-2xl lg:text-2xl md:text-xl sm:text-xl lt:text-xl font-medium mb-4 xl:text-left lg:text-left md:text-center sm:text-center lt:text-center text-cyan-800">
                                {{ $post['content'][0]['name'] }}
                            </h3>
                            <div class="mb-1 text-justify xl:pr-10 lg:pr-10 md:pr-0 sm:pr-0 lt:pr-0">
                                <p>{{Illuminate\Support\Str::limit(strip_tags($post['content'][0]['content']),150)}}
                                    ...</p><br>
                            </div>
                            <div class="w-full flex flex-row justify-between xl:pr-10 lg:pr-10 items-center">
                                <div class="actions flex flex-row ">
                                    <div class="inline-block pr-2">
                                        <x-link-modal href="{{  route('postshow', ['id' => $post['id']]) }}">
                                            show
                                        </x-link-modal>
                                    </div>
                                    <div class="inline-block px-2">
                                        <x-link-modal href="{{route('postedit', ['id' => $post['id']])}}">
                                            edit
                                        </x-link-modal>
                                    </div>
                                    <div class="inline-block px-2">
                                        <x-link-modal x-data=""
                                                      x-on:click="$dispatch('open-modal', 'confirm-post-deletion-{{$counter}}')">
                                            delete
                                        </x-link-modal>
                                        <x-post-modal name="confirm-post-deletion-{{$counter}}">
                                            <form method="POST"
                                                  action="{{ route('postdelete', ['id' => $post['id']]) }}" class="p-2">
                                                @csrf
                                                <h2 class="text-lg font-medium text-gray-900">
                                                    {{ __('Are you sure you want to delete this post?') }}
                                                </h2>

                                                <div class="mt-6 flex justify-end">
                                                    <x-secondary-button
                                                        x-on:click.prevent="$dispatch('close', 'confirm-post-deletion-{{$counter}}')">
                                                        {{ __('Cancel') }}
                                                    </x-secondary-button>

                                                    <x-danger-button class="ml-3" x-on:click="">
                                                        {{ __('Delete') }}
                                                    </x-danger-button>
                                                </div>
                                            </form>
                                        </x-post-modal>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                @elseif($post['status'])
                    <div
                        class="flex justify-start xl:flex-row lg:flex-row md:flex-row sm:flex-col lt:flex-col border-b-2 last:border-b-0 border-gray-200">

                        <div class="xl:w-1/5 lg:w-1/5 md:w-1/5 sm:w-full lt:w-full p-4">
                            <img src="{{ asset('img/blog/'.$post['content'][0]['image']) }}" alt="">
                        </div>
                        <div class="xl:w-4/5 lg:w-4/5 md:w-4/5 sm:w-full lt:w-full p-4">
                            <h3 class="uppercase xl:text-2xl lg:text-2xl md:text-xl sm:text-xl lt:text-xl font-medium mb-4 xl:text-left lg:text-left md:text-center sm:text-center lt:text-center text-cyan-800">
                                {{ $post['content'][0]['name'] }}
                            </h3>
                            <div class="mb-1 text-justify xl:pr-10 lg:pr-10 md:pr-0 sm:pr-0 lt:pr-0">
                                <p>{{Illuminate\Support\Str::limit(strip_tags($post['content'][0]['content']),150)}}
                                    ...</p><br>
                            </div>
                            <div class="w-full flex flex-row justify-between xl:pr-10 lg:pr-10 items-center">
                                <x-read-more-link :href="route('postshow', ['id' => $post['id']])">
                                    {{ __('Read more') }}
                                </x-read-more-link>
                            </div>
                        </div>
                    </div>
                @endif
            @endforeach
        @else
            <div class="flex justify-start pt-14 xl:flex-row lg:flex-row md:flex-row sm:flex-col lt:flex-col">
                <div class="xl:w-2/3 lg:w-2/3 md:w-2/3 sm:w-full lt:w-full p-4">
                    <h3 class="uppercase xl:text-4xl lg:text-4xl md:text-2xl sm:text-2xl lt:text-2xl font-medium mb-8 xl:text-left lg:text-left md:text-center sm:text-center lt:text-center text-cyan-800">
                        {{ __('No posts for display!') }}
                    </h3>

                    <div class="w-full flex flex-row justify-between xl:pr-10 lg:pr-10 items-center">

                        @if(Auth::user() && Auth::user()->hasRole('admin'))
                            <a href="{{ route('postcreate', ['key' => null]) }}"
                               class="inline-flex items-center px-4 py-2 bg-gray-800 border border-transparent rounded-md font-semibold text-xs text-white uppercase tracking-widest hover:bg-gray-700 focus:bg-gray-700 active:bg-gray-900 focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:ring-offset-2 transition ease-in-out duration-150">
                                {{ __('Add post') }}
                            </a>
                        @endif
                    </div>
                </div>
            </div>
        @endif

    </div>
    <div class="max-w-7xl mx-auto p-5">
        {{ $blog->links('layouts.pagination') }}
    </div>
</x-app-layout>
