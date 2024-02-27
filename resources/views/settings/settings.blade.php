<x-app-layout>
    @if(Auth::user() && Auth::user()->isAdmin())
        <x-top-block>
            <x-slogan>
                {{ __('Edit settings') }}...
            </x-slogan>
            <x-h1>{{ __('Admin Settings') }}</x-h1>
        </x-top-block>
        <div class="lg:py-8 md:py-8 sm:py-5 lt:py-5 p-2">
            {{ Breadcrumbs::render('settings') }}
            <div class="max-w-7xl mx-auto pt-2 xl:mb-10 lg:mb-10 md:mb-8 sm:mb-3 lt:mb-3">
                <div class="justify-start pt-14 lg:flex-row md:flex-row sm:flex-col lt:flex-col">
                    <div class="tab-wrapper pb-10" x-data="{ activeTab:  0 }">
                        <div class="flex">
                            <label
                                    @click="activeTab = 0"
                                    class="tab-control p-3 pl-0 pr-5 cursor-pointer"
                                    :class="{ 'active': activeTab === 0 }"
                            >Settings</label>
                            <label
                                    @click="activeTab = 1"
                                    class="tab-control p-3 pl-0 pr-5 cursor-pointer"
                                    :class="{ 'active': activeTab === 1 }"
                            >Users</label>
                            <label
                                    @click="activeTab = 2"
                                    class="tab-control p-3 pl-0 cursor-pointer"
                                    :class="{ 'active': activeTab === 2 }"
                            >Messages</label>
                            <label
                                    @click="activeTab = 3"
                                    class="tab-control p-3 pl-0 cursor-pointer"
                                    :class="{ 'active': activeTab === 3 }"
                            >Social</label>
                        </div>

                        <div class="tab-panel mt-10" :class="{ 'active': activeTab === 0 }"
                             x-show.transition.in.opacity.duration.600="activeTab === 0">

                            <div class="w-full">
                                <form method="POST" action="{{ route('settingsupdate') }}">
                                    @csrf

                                    <div class="mt-4">
                                        <x-input-label for="admin_email" :value="__('Admin Email')"/>
                                        <x-text-input id="admin_email" class="mt-1 w-full" type="text"
                                                      name="admin_email"
                                                      :value="$settings->admin_email"
                                                      required/>
                                        <x-input-error :messages="$errors->get('admin_email')" class="mt-2"/>
                                    </div>
                                    <div class="mt-4">
                                        <x-input-label for="phone_1" :value="__('Phone #1')"/>
                                        <x-text-input id="phone_1" class="mt-1 w-full" type="text" name="phone_1"
                                                      :value="$settings->phone_1"
                                                      required/>
                                        <x-input-error :messages="$errors->get('phone_1')" class="mt-2"/>
                                    </div>
                                    <div class="mt-4">
                                        <x-input-label for="phone_2" :value="__('Phone #2')"/>
                                        <x-text-input id="phone_2" class="mt-1 w-full" type="text" name="phone_2"
                                                       :value="$settings->phone_2"
                                                       required/>
                                        <x-input-error :messages="$errors->get('phone_2')" class="mt-2"/>
                                    </div>
                                    <div class="mt-4">
                                        <x-input-label for="phone_3" :value="__('Phone #3')"/>
                                        <x-text-input id="phone_3" class="mt-1 w-full" type="text" name="phone_3"
                                                      :value="$settings->phone_3"
                                                      required/>
                                        <x-input-error :messages="$errors->get('phone_3')" class="mt-2"/>
                                    </div>
                                    <div class="mt-4">
                                        <x-input-label for="phone_4" :value="__('Phone #4')"/>
                                        <x-text-input id="phone_4" class="mt-1 w-full" type="text" name="phone_4"
                                                      :value="$settings->phone_4"
                                                      required/>
                                        <x-input-error :messages="$errors->get('phone_4')" class="mt-2"/>
                                    </div>

                                    <div class="mt-4">
                                        <x-input-label for="facebook_link" :value="__('Facebook')"/>
                                        <x-text-input id="facebook_link" class="mt-1 w-full" type="text"
                                                      name="facebook_link"
                                                      :value="$settings->facebook_link"
                                                      required/>
                                        <x-input-error :messages="$errors->get('facebook_link')" class="mt-2"/>
                                    </div>
                                    <div class="mt-4">
                                        <x-input-label for="twitter_link" :value="__('Twitter')"/>
                                        <x-text-input id="twitter_link" class="mt-1 w-full" type="text"
                                                      name="twitter_link"
                                                      :value="$settings->twitter_link"
                                                      required/>
                                        <x-input-error :messages="$errors->get('twitter_link')" class="mt-2"/>
                                    </div>
                                    <div class="mt-4">
                                        <x-input-label for="instagram_link" :value="__('Instagram')"/>
                                        <x-text-input id="instagram_link" class="mt-1 w-full" type="text"
                                                      name="instagram_link"
                                                      :value="$settings->instagram_link"
                                                      required/>
                                        <x-input-error :messages="$errors->get('instagram_link')" class="mt-2"/>
                                    </div>
                                    <div class="mt-4">
                                        <x-input-label for="telegram_link" :value="__('Telegram')"/>
                                        <x-text-input id="telegram_link" class="mt-1 w-full" type="text"
                                                      name="telegram_link"
                                                      :value="$settings->telegram_link"
                                                      required/>
                                        <x-input-error :messages="$errors->get('telegram_link')" class="mt-2"/>
                                    </div>
                                    <div class="mt-4">
                                        <x-input-label for="whatsapp_link" :value="__('Whatsapp')"/>
                                        <x-text-input id="whatsapp_link" class="mt-1 w-full" type="text"
                                                      name="whatsapp_link"
                                                      :value="$settings->whatsapp_link"
                                                      required/>
                                        <x-input-error :messages="$errors->get('whatsapp_link')" class="mt-2"/>
                                    </div>
                                    <div class="mt-4">
                                        <x-input-label for="slack_link" :value="__('Slack')"/>
                                        <x-text-input id="slack_link" class="mt-1 w-full" type="text"
                                                      name="slack_link"
                                                      :value="$settings->slack_link"
                                                      required/>
                                        <x-input-error :messages="$errors->get('slack_link')" class="mt-2"/>
                                    </div>
                                    <div class="mt-4">
                                        <x-input-label for="address" :value="__('Address')"/>
                                        <x-text-input id="address" class="mt-1 w-full" type="text"
                                                      name="address"
                                                      :value="$settings->address"
                                                      required/>
                                        <x-input-error :messages="$errors->get('address')" class="mt-2"/>
                                    </div>
                                    <div class="mt-4">
                                        <x-input-label for="postal_code" :value="__('Postal code')"/>
                                        <x-text-input id="postal_code" class="mt-1 w-full" type="text"
                                                      name="postal_code"
                                                      :value="$settings->postal_code"
                                                      required/>
                                        <x-input-error :messages="$errors->get('postal_code')" class="mt-2"/>
                                    </div>

                                    <div class="flex items-center justify-start mt-4">
                                        <x-primary-button class="">
                                            {{ __('Save') }}
                                        </x-primary-button>
                                    </div>
                                </form>
                            </div>

                        </div>
                        <div class="tab-panel  mt-10" :class="{ 'active': activeTab === 1 }"
                             x-show.transition.in.opacity.duration.600="activeTab === 1">

                            <div class="p-2 border border-t-red-100 rounded inline-block hover:bg-gray-100 mb-8">
                                <a href="{{ route('usercreate') }}" class="inline-block">Add User</a>
                            </div>
                            <div class="flex flex-row p-2">
                                @if($users->count() > 0)
                                    @php($counter = 1)
                                    <table cellspacing="0" cellpadding="4">
                                        <tbody>
                                        @foreach($users as $user)
                                            @php($counter++)
                                            <tr>
                                                <td>
                                                    {{ $user->name }}<br>
                                                    {{ $user->email }}
                                                </td>
                                                <td class="pl-5">
                                                    <a href="{{ route('useredit', ['id' => $user->id]) }}">
                                                        <svg version="1.1" id="Capa" xmlns="http://www.w3.org/2000/svg"
                                                             xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
                                                             width="20px" height="20px" viewBox="0 0 386.375 386.375"
                                                             style="enable-background:new 0 0 386.375 386.375;"
                                                             xml:space="preserve" class="fill-cyan-600">
                                                        <g>
                                                            <path d="M21.05,286.875l76.5,76.5l-1.9,3.8l-95.6,19.2l19.1-95.6L21.05,286.875z M34.65,272.775l77.1,77.1l216.4-216.399
                                                                l-77.101-77.1L34.65,272.775z M374.85,34.375l-23-22.9c-15.3-15.3-38.199-15.3-53.5,0l-32.5,32.5l76.5,76.5l32.5-32.5
                                                                C390.15,72.675,390.15,47.775,374.85,34.375z"/>
                                                        </g>
                                                        </svg>
                                                    </a>
                                                </td>
                                                <td class="pl-5">
                                                    <x-link-modal x-data=""
                                                                  x-on:click="$dispatch('open-modal', 'confirm-user-deletion-{{$counter}}')">
                                                        <svg version="1.1" id="Capa_1"
                                                             xmlns="http://www.w3.org/2000/svg"
                                                             xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
                                                             width="20px" height="20px" viewBox="0 0 612.043 612.043"
                                                             style="enable-background:new 0 0 612.043 612.043;"
                                                             xml:space="preserve" class="fill-red-400 mt-2">
                                                        <g>
                                                            <g id="cross">
                                                                <g>
                                                                    <path d="M397.503,306.011l195.577-195.577c25.27-25.269,25.27-66.213,0-91.482c-25.269-25.269-66.213-25.269-91.481,0
                                                                        L306.022,214.551L110.445,18.974c-25.269-25.269-66.213-25.269-91.482,0s-25.269,66.213,0,91.482L214.54,306.033L18.963,501.61
                                                                        c-25.269,25.269-25.269,66.213,0,91.481c25.269,25.27,66.213,25.27,91.482,0l195.577-195.576l195.577,195.576
                                                                        c25.269,25.27,66.213,25.27,91.481,0c25.27-25.269,25.27-66.213,0-91.481L397.503,306.011z"/>
                                                                </g>
                                                            </g>
                                                        </g>
                                                        </svg>
                                                    </x-link-modal>
                                                    <x-post-modal name="confirm-user-deletion-{{$counter}}">
                                                        <form method="POST"
                                                              action="{{ route('userdelete', ['id' => $user->id]) }}"
                                                              class="p-2">
                                                            @csrf
                                                            <h2 class="text-lg font-medium text-gray-900">
                                                                {{ __('Are you sure you want to delete user ').$user->name.'?' }}
                                                            </h2>

                                                            <div class="mt-6 flex justify-end">
                                                                <x-secondary-button
                                                                        x-on:click.prevent="$dispatch('close', 'confirm-user-deletion-{{$counter}}')">
                                                                    {{ __('Cancel') }}
                                                                </x-secondary-button>

                                                                <x-danger-button class="ml-3">
                                                                    {{ __('Delete') }}
                                                                </x-danger-button>
                                                            </div>
                                                        </form>
                                                    </x-post-modal>
                                                </td>
                                            </tr>
                                        @endforeach
                                        </tbody>
                                    </table>
                                @endif
                            </div>
                        </div>
                        <div class="tab-panel  mt-10" :class="{ 'active': activeTab === 2 }"
                             x-show.transition.in.opacity.duration.600="activeTab === 2">
                            @if($emails->count() > 0)
                                @php($messageCounter = 1)


                                @foreach($emails as $email)
                                    @php($messageCounter++)

                                    <div class="flex flex-row">
                                        <div class="flex flex-col w-4/5 ">
                                            <div class="block p-2">{{$email->name}}</div>
                                            <div class="block p-2">{{$email->email}}</div>
                                            <div class="block p-2">{{$email->message}}</div>
                                        </div>
                                        <div class="p-2 w-1/5">
                                            <x-link-modal x-data=""
                                                          x-on:click="$dispatch('open-modal', 'confirm-message-deletion-{{$messageCounter}}')">
                                                <svg version="1.1" id="kapa_1" xmlns="http://www.w3.org/2000/svg"
                                                     xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
                                                     width="20px" height="20px" viewBox="0 0 612.043 612.043"
                                                     style="enable-background:new 0 0 612.043 612.043;"
                                                     xml:space="preserve" class="fill-red-400 mt-2">
                                                        <g>
                                                            <g id="cross">
                                                                <g>
                                                                    <path d="M397.503,306.011l195.577-195.577c25.27-25.269,25.27-66.213,0-91.482c-25.269-25.269-66.213-25.269-91.481,0
                                                                        L306.022,214.551L110.445,18.974c-25.269-25.269-66.213-25.269-91.482,0s-25.269,66.213,0,91.482L214.54,306.033L18.963,501.61
                                                                        c-25.269,25.269-25.269,66.213,0,91.481c25.269,25.27,66.213,25.27,91.482,0l195.577-195.576l195.577,195.576
                                                                        c25.269,25.27,66.213,25.27,91.481,0c25.27-25.269,25.27-66.213,0-91.481L397.503,306.011z"/>
                                                                </g>
                                                            </g>
                                                        </g>
                                                        </svg>
                                            </x-link-modal>
                                            <x-post-modal name="confirm-message-deletion-{{$messageCounter}}">
                                                <form method="POST"
                                                      action="{{ route('contactdelete', ['id' => $email->id]) }}"
                                                      class="p-2">
                                                    @csrf
                                                    <h2 class="text-lg font-medium text-gray-900">
                                                        {{ __('Are you sure you want to delete message ').$email->id }}
                                                    </h2>

                                                    <div class="mt-6 flex justify-end">
                                                        <x-secondary-button
                                                                x-on:click.prevent="$dispatch('close', 'confirm-message-deletion-{{$messageCounter}}')">
                                                            {{ __('Cancel') }}
                                                        </x-secondary-button>

                                                        <x-danger-button class="ml-3">
                                                            {{ __('Delete') }}
                                                        </x-danger-button>
                                                    </div>
                                                </form>
                                            </x-post-modal>
                                        </div>
                                    </div>

                                @endforeach
                            @endif
                        </div>
                        <div class="tab-panel  mt-10" :class="{ 'active': activeTab === 3 }"
                             x-show.transition.in.opacity.duration.600="activeTab === 3">
                            <div class="flex flex-col w-4/5 ">
                                <div class="block p-2"></div>
                                <div class="block p-2">

                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    @endif
</x-app-layout>
