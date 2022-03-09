<x-app-layout>

    <div class="max-w-6xl mx-auto sm:px-6 lg:px-8 pb-20">

        <x-profile.header />

        <div class="my-3">
            <x-profile.navbar />
        </div>

        <div class="flex flex-row mt-4">

            @include('profile.partials.about-category')

            <div class="bg-white p-5 basis-4/6 shadow-md rounded-r-md space-y-10">

                <div>

                    <h3 class="font-semibold">About You</h3>

                    <form action="{{ route('profile.update.about-details') }}" method="POST" class="py-3 space-y-3" enctype="multipart/form-data">

                        @csrf

                        @method('PUT')

                        <div class="flex items-center space-x-6">
                            <div class="shrink-0">
                                <img class="h-16 w-16 object-fill rounded-full"
                                    src="{{ asset($user->profile_photo_url) }}"
                                    alt="{{ $user->fullname }}" />
                            </div>
                            <label class="block">
                                <span class="sr-only">Choose profile photo</span>
                                <input type="file" name="profile_photo" class="block w-full text-sm text-slate-500
                                file:mr-4 file:py-2 file:px-4
                                file:rounded-full file:border-0
                                file:text-sm file:font-semibold
                                file:bg-indigo-50 file:text-indigo-700
                                hover:file:bg-indigo-100
                              " />
                            </label>
                            @if ($user->photo_path)
                                <a href="{{ route('profile.delete.profile-photo') }}">
                                    <x-button type="button" class="bg-red-500 hover:bg-red-600 ring-red-300 active:bg-red-700 focus:border-red-400">Delete</x-button>
                                </a>
                            @endif
                            <x-error value="profile_photo" />
                        </div>

                        <div>
                            <x-label :value="__('Cover Photo')" />

                            @if ($user->cover_photo_path)
                                
                            <div class="mt-1 flex justify-center p-1 border-2 border-gray-300 border-dashed rounded-md relative">

                                <img src="{{ asset($user->cover_photo_path) }}" alt="{{ $user->fullname }}" class="h-72 w-full object-center">

                                <div class="absolute bottom-4 right-8 space-x-2 inline-flex">
                                    <label for="file-upload" class="relative inline-flex items-center px-4 py-2 bg-indigo-500 border border-transparent rounded-md font-semibold text-xs text-white uppercase tracking-widest hover:bg-indigo-600 active:bg-indigo-700 focus:outline-none focus:border-indigo-600 focus:ring ring-indigo-300 disabled:opacity-25 transition ease-in-out duration-150">
                                        <span>Change Cover Photo</span>
                                        <input id="file-upload" name="cover_photo" type="file" class="sr-only">
                                    </label>
                                    <a href="{{ route('profile.delete.cover-photo') }}">
                                        <x-button type="button" class="bg-red-500 hover:bg-red-600 ring-red-300 active:bg-red-700 focus:border-red-400">
                                            Delete
                                        </x-button>
                                    </a>
                                </div>

                            </div>

                            @else

                            <div class="mt-1 flex justify-center px-6 pt-5 pb-6 border-2 border-gray-300 border-dashed rounded-md">
                                <div class="space-y-1 text-center">
                                    <svg class="mx-auto h-12 w-12 text-gray-400" stroke="currentColor" fill="none" viewBox="0 0 48 48" aria-hidden="true">
                                      <path d="M28 8H12a4 4 0 00-4 4v20m32-12v8m0 0v8a4 4 0 01-4 4H12a4 4 0 01-4-4v-4m32-4l-3.172-3.172a4 4 0 00-5.656 0L28 28M8 32l9.172-9.172a4 4 0 015.656 0L28 28m0 0l4 4m4-24h8m-4-4v8m-12 4h.02" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                                    </svg>
                                    <div class="flex text-sm text-gray-600">
                                      <label for="file-upload" class="relative cursor-pointer bg-white rounded-md font-medium text-indigo-600 hover:text-indigo-500 focus-within:outline-none focus-within:ring-2 focus-within:ring-offset-2 focus-within:ring-indigo-500">
                                        <span>Upload a image</span>
                                        <input id="file-upload" name="cover_photo" type="file" class="sr-only">
                                      </label>
                                      <p class="pl-1">to your cover</p>
                                    </div>
                                    <p class="text-xs text-gray-500">PNG, JPG, GIF up to 5MB</p>
                                </div>
                            </div>

                            @endif
                          </div>

                          <x-error value="cover_photo" />
                        </div>

                        <div class="flex flex-row space-x-2">

                            <!-- First Name -->
                            <div class="basis-1/2">
                                <x-label for="first_name" :value="__('First Name')" />

                                <x-input id="first_name" class="block mt-1 w-full" type="text" name="first_name"
                                    :value="old('first_name', $user->first_name)" />

                                <x-error value="first_name" />
                            </div>

                            <!-- Last Name -->
                            <div class="basis-1/2">
                                <x-label for="last_name" :value="__('Last Name')" />

                                <x-input id="last_name" class="block mt-1 w-full" type="text" name="last_name"
                                    :value="old('last_name', $user->last_name)" />

                                <x-error value="last_name" />
                            </div>

                        </div>

                        <div class="flex flex-row space-x-2">

                            <!-- Nickname -->
                            <div class="basis-1/2">
                                <x-label for="nic_name" :value="__('Nickname')" />

                                <x-input id="nic_name" class="block mt-1 w-full" type="text" name="nic_name"
                                    :value="old('nic_name', $user->nic_name)" />

                                <x-error value="nic_name" />
                            </div>

                            <!-- Username -->
                            <div class="basis-1/2">
                                <x-label for="username" :value="__('Username')" />

                                <x-input id="username" class="block mt-1 w-full" type="text" name="username"
                                    :value="old('username', $user->username)" />

                                <x-error value="username" />
                            </div>

                        </div>

                        <!-- Bio -->
                        <div>
                            <x-label for="bio" :value="__('Bio')" />

                            <x-textarea id="bio" class="block mt-1 w-full" name="bio">{{
                                old('bio', $user->bio) }}</x-textarea>

                            <x-error value="bio" />
                        </div>

                        <hr>

                        <div class="flex justify-end">

                            <x-button>Save</x-button>

                        </div>

                    </form>

                </div>

            </div>

        </div>

    </div>

</x-app-layout>