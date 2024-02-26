<x-app-layout>
    <x-top-block>
        <x-slogan>
            {{ __('Added information') }}...
        </x-slogan>
        <x-h1>{{ __('Create new post') }}</x-h1>
    </x-top-block>
    @if(Auth::user() && Auth::user()->isAdmin())
        <div class="max-w-7xl mx-auto pt-2 xl:mb-10 lg:mb-10 md:mb-8 sm:mb-3 lt:mb-3">
            <div class="flex justify-start pt-14 xl:flex-row lg:flex-row md:flex-row sm:flex-col lt:flex-col">
                <div class="w-full p-4">
                    <form method="POST" action="{{ route('poststore') }}" enctype="multipart/form-data">
                        @csrf
                        <div class="flex flex-col">
                            <x-input-label for="language_id" :value="__('Language')"/>
                            <select id="language_id"
                                    class="block xl:w-1/3 lg/w-1/3 md:w-2/4 sm:w-full lt:w-full border-gray-300 focus:border-gray-400 focus:ring-gray-400 rounded-md"
                                    name="language_id">
                                @foreach($languages as $language)
                                    <option value="{{$language->id}}">{{$language->name}}</option>
                                @endforeach
                            </select>
                            <x-input-error :messages="$errors->get('language_id')" class="mt-2"/>
                        </div>

                        <div class="mt-8 flex flex-col">
                            <x-input-label for="name" :value="__('Name')"/>
                            <x-text-input id="name" class="block mt-1 w-full" type="text" name="name"
                                          :value="old('name')"
                                          required/>
                            <x-input-error :messages="$errors->get('name')" class="mt-2"/>
                        </div>

                        <div class="mt-4 flex flex-col">
                            <x-input-label for="meta_keys" :value="__('Keys')"/>
                            <x-text-input id="meta_keys" class="block mt-1 w-full" type="text" name="meta_keys"
                                          :value="old('meta_keys')" required/>
                            <x-input-error :messages="$errors->get('meta_keys')" class="mt-2"/>
                        </div>

                        <div class="mt-4 flex flex-col">
                            <x-input-label for="meta_description" :value="__('Meta description')"/>
                            <x-text-input id="meta_description" class="block mt-1 w-full" type="text"
                                          name="meta_description" :value="old('meta_description')" required/>
                            <x-input-error :messages="$errors->get('meta_description')" class="mt-2"/>
                        </div>

                        <div class="mt-4 flex flex-col">
                            <x-input-label for="content" :value="__('Content')"/>
                            <x-text-area id="content" class="block mt-1 w-full" type="text" name="content"
                                         :value="old('content')" required></x-text-area>
                            <x-input-error :messages="$errors->get('content')" class="mt-2"/>
                        </div>

                        <div class="mt-4 flex flex-col">
                            <x-input-label for="input_file" :value="__('Upload Image')"/>
                            <x-file-input id="input_file" class="" type="file" name="image" :value="old('image')"/>
                            <x-input-error :messages="$errors->get('image')" class="mt-2"/>
                        </div>

                        <div class="flex items-center justify-end mt-4">
                            <x-primary-button class="ml-4">
                                {{ __('Save post') }}
                            </x-primary-button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    @endif
</x-app-layout>
