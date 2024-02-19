<x-app-layout>
    <x-top-block>
        <x-slogan>
            {{ __('Edit Question') }}...
        </x-slogan>
        <x-h1>{{ __('Frequently Asked Questions') }}</x-h1>
    </x-top-block>
        <div class="max-w-7xl mx-auto pt-2 xl:mb-10 lg:mb-10 md:mb-8 sm:mb-3 lt:mb-3">
            <div class="flex justify-start pt-14 xl:flex-row lg:flex-row md:flex-row sm:flex-col lt:flex-col">
                <div class="w-full p-4">
                    <form method="POST" action="{{ route('postupdate', ['id' => $data['id']]) }}">
                        @csrf
                        <input type="hidden" value="{{$data['blog_id']}}" name="blog_id">
                        <div>
                            <x-input-label for="language_id" :value="__('Language')" />
                            <select id="language_id" class="block xl:w-1/3 lg/w-1/3 md:w-2/4 sm:w-full lt:w-full border-gray-300 focus:border-gray-400 focus:ring-gray-400 rounded-md" name="language_id" >
                                @foreach($languages as $language)
                                    <option value="{{$language->id}}" @if($language->id ===  $data['language_id']) selected @endif >{{$language->name}}</option>
                                @endforeach
                            </select>
                            <x-input-error :messages="$errors->get('language_id')" class="mt-2" />
                        </div>

                        <div class="mt-4">
                            <x-input-label for="name" :value="__('Name')" />
                            <x-text-input id="name" class="block mt-1 w-full" type="text" name="name" :value="$data['name']" required/>
                            <x-input-error :messages="$errors->get('name')" class="mt-2" />
                        </div>

                        <div class="mt-4">
                            <x-input-label for="content" :value="__('Content')" />
                            <x-text-area id="content" class="block mt-1 w-full" type="text" name="content" required>{{ $data['content'] }}</x-text-area>
                            <x-input-error :messages="$errors->get('content')" class="mt-2" />
                        </div>

                        <div class="mt-4">
                            <x-input-label for="meta_keys" :value="__('Keys')" />
                            <x-text-input id="meta_keys" class="block mt-1 w-full" type="text" name="meta_keys" :value="$data['meta_keys']" required />
                            <x-input-error :messages="$errors->get('meta_keys')" class="mt-2" />
                        </div>

                        <div class="mt-4">
                            <x-input-label for="meta_description" :value="__('Meta description')" />
                            <x-text-input id="meta_description" class="block mt-1 w-full" type="text" name="meta_description" :value="$data['meta_description']" required />
                            <x-input-error :messages="$errors->get('meta_description')" class="mt-2" />
                        </div>

                        <div class="mt-4">
                            <x-input-label for="status" :value="__('Status')" />
                            <x-text-input id="status" class="block mt-1" type="checkbox" value="1" checked  name="status"/>
                            <x-input-error :messages="$errors->get('status')" class="mt-2" />
                        </div>

                        <div class="mt-4 flex flex-row items-start" >
                            <div class="w-1/2">
                                <x-input-label for="image" :value="__('Image')" />
                                <x-text-input id="image" class="block mt-1" type="file" name="image"/>
                                <x-input-error :messages="$errors->get('image')" class="mt-2" />
                            </div>
                            @isset($data['image'])
                                <div class="w-1/5 p-5">
                                    <img src="{{ asset('img/blog/'.$data['image']) }}" alt="">
                                </div>
                            @endisset
                        </div>

                        <div class="flex items-center justify-end mt-4">
                            <x-primary-button class="ml-4">
                                {{ __('Update post') }}
                            </x-primary-button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
</x-app-layout>
