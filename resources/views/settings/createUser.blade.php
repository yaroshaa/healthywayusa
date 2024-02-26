<x-app-layout>
    <x-top-block>
        <x-slogan>
            {{ __('User Create') }}
        </x-slogan>
        <x-h1>{{ __('Settings | User Create') }}</x-h1>
    </x-top-block>
    @if(Auth::user() && Auth::user()->isAdmin())
        <div class="max-w-7xl mx-auto pt-2 xl:mb-10 lg:mb-10 md:mb-8 sm:mb-3 lt:mb-3">
            {{ Breadcrumbs::render('userCreate') }}
            <div class="flex justify-start xl:flex-row lg:flex-row md:flex-row sm:flex-col lt:flex-col">
                <div class="w-1/2 p-4">
                    <form method="POST" action="{{ route('userstore') }}" enctype="multipart/form-data">
                        @csrf
                        <div class="mt-4">
                            <x-input-label for="name" :value="__('Name')"/>
                            <x-text-input id="name" class="block mt-1 w-full" type="text" name="name"
                                          :value="old('name')" required/>
                            <x-input-error :messages="$errors->get('name')" class="mt-2"/>
                        </div>

                        <div class="mt-4">
                            <x-input-label for="email" :value="__('Email')"/>
                            <x-text-input id="name" class="block mt-1 w-full" type="email" name="email"
                                          :value="old('email')" required/>
                            <x-input-error :messages="$errors->get('email')" class="mt-2"/>
                        </div>

                        <div class="mt-4">
                            <x-input-label for="password" :value="__('Password')"/>
                            <x-text-input id="password" class="block mt-1 w-full" type="password" name="password"
                                          required/>
                            <x-input-error :messages="$errors->get('password')" class="mt-2"/>
                        </div>

                        <div class="mt-4">
                            <x-input-label for="role_id" :value="__('Role')"/>
                            <select id="role_id"
                                    class="block xl:w-1/3 lg/w-1/3 md:w-2/4 sm:w-full lt:w-full border-gray-300 focus:border-gray-400 focus:ring-gray-400 rounded-md"
                                    name="role_id">
                                @isset($roles)
                                    @foreach($roles as $role)
                                        <option @if($role->key === 'user') selected @endif value="{{$role->id}}">{{ $role->name }}
                                        </option>
                                    @endforeach
                                @endisset
                            </select>
                            <x-input-error :messages="$errors->get('role_id')" class="mt-2"/>
                        </div>
                        <div class="flex items-center justify-end mt-4">
                            <x-primary-button class="ml-4">
                                {{ __('Save') }}
                            </x-primary-button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    @endif
</x-app-layout>
