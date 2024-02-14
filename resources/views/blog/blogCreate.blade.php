<x-app-layout>
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
                    <h1 class="font-bold uppercase xl:text-6xl lg:text-6xl md:text-4xl sm:text-2xl lt:text-2xl text-center ">{{ __('Create new post') }}</h1>
                </div>
            </div>
        </div>
        <div class="max-w-7xl mx-auto pt-2 xl:mb-10 lg:mb-10 md:mb-8 sm:mb-3 lt:mb-3">
            <div class="flex justify-start pt-14 xl:flex-row lg:flex-row md:flex-row sm:flex-col lt:flex-col">
                <div class="w-full p-4">
                    <form method="POST" action="{{ route('poststore') }}" enctype="multipart/form-data">
                        @csrf
                        <div>
                            <x-input-label for="language_id" :value="__('Language')" />
                            <select id="language_id" class="block xl:w-1/3 lg/w-1/3 md:w-2/4 sm:w-full lt:w-full border-gray-300 focus:border-gray-400 focus:ring-gray-400 rounded-md" name="language_id" >
                                @foreach($languages as $language)
                                    <option value="{{$language->id}}" >{{$language->name}}</option>
                                @endforeach
                            </select>
                            <x-input-error :messages="$errors->get('language_id')" class="mt-2" />
                        </div>

                        <div class="mt-4">
                            <x-input-label for="name" :value="__('Name')" />
                            <x-text-input id="name" class="block mt-1 w-full" type="text" name="name" :value="old('name')" required/>
                            <x-input-error :messages="$errors->get('name')" class="mt-2" />
                        </div>

                        <div class="mt-4">
                            <x-input-label for="content" :value="__('Content')" />
                            <x-text-area id="content" class="block mt-1 w-full" type="text" name="content" :value="old('content')" required></x-text-area>
                            <x-input-error :messages="$errors->get('content')" class="mt-2" />
                        </div>

                        <div class="mt-4">
                            <x-input-label for="meta_keys" :value="__('Keys')" />
                            <x-text-input id="meta_keys" class="block mt-1 w-full" type="text" name="meta_keys" :value="old('meta_keys')" required />
                            <x-input-error :messages="$errors->get('meta_keys')" class="mt-2" />
                        </div>

                        <div class="mt-4">
                            <x-input-label for="meta_description" :value="__('Meta description')" />
                            <x-text-input id="meta_description" class="block mt-1 w-full" type="text" name="meta_description" :value="old('meta_description')" required />
                            <x-input-error :messages="$errors->get('meta_description')" class="mt-2" />
                        </div>

                        <div class="mt-4">
                            <x-input-label for="image" :value="__('Image')" />
                            <x-text-input id="image" class="block mt-1 w-full " type="file" name="image" :value="old('image')"/>
                            <x-input-error :messages="$errors->get('image')" class="mt-2" />
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
    </div>
</x-app-layout>
