<x-app-layout>
    <x-top-block>
        <x-slogan>
            {{ __('Search result list') }}...
        </x-slogan>
        <x-h1>{{ __('Search result') }}</x-h1>
    </x-top-block>
    <div class="max-w-7xl mx-auto pt-2 xl:mb-10 lg:mb-10 md:mb-8 sm:mb-3 lt:mb-3">
        @if(count($searchResult) > 0 )
            @php($counter = 1)
            @foreach($searchResult as $post)
                @php($counter++)
                @if($post['status'])
                    <div class="flex justify-start py-2 xl:flex-row lg:flex-row md:flex-row sm:flex-col lt:flex-col items-center border-b-2 border-dotted hover:border-solid hover:border-white last:border-b-0 border-gray-200 hover:bg-gray-100 duration-200 ease-linear">
                        <div class="xl:w-1/5 lg:w-1/5 md:w-1/5 sm:w-full lt:w-full p-4">
                            <img src="{{ asset('img/blog/'.$post['content'][0]['image']) }}" alt="">
                        </div>
                        <div class="xl:w-4/5 lg:w-4/5 md:w-4/5 sm:w-full lt:w-full p-2">
                            <a href="{{ route('postshow', ['id' => $post['id']]) }}">
                            <h3 class="uppercase xl:text-2xl lg:text-2xl md:text-xl sm:text-xl lt:text-xl font-medium mb-4 xl:text-left lg:text-left md:text-center sm:text-center lt:text-center text-dark-green">
                                {{ $post['content'][0]['name'] }}
                            </h3>
                            <div class="mb-3 text-justify xl:pr-10 lg:pr-10 md:pr-0 sm:pr-0 lt:pr-0">
                                <p>{{Illuminate\Support\Str::limit(strip_tags($post['content'][0]['content']),150)}}...</p><br>
                            </div>
                            </a>
{{--                            <div class="w-full flex flex-row justify-between xl:pr-10 lg:pr-10 items-center">--}}
{{--                                <x-blue-button :href="route('postshow', ['id' => $post['id']])">--}}
{{--                                    {{ __('Read more') }}--}}
{{--                                </x-blue-button>--}}
{{--                            </div>--}}
                        </div>
                    </div>
                @endif
            @endforeach
        @else
            <div class=" pt-14  ">
                No results for your query "{{ $searchQuery }}" !
            </div>
        @endif

    </div>
    <div class="max-w-7xl mx-auto p-5">
        {{ $searchResult->links('layouts.pagination') }}
    </div>
</x-app-layout>
