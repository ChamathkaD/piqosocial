<x-app-layout>

    <div class="max-w-6xl mx-auto sm:px-6 lg:px-8 pb-20">

        <x-profile-header />

        <div class="my-3">
            <x-profile-navbar />
        </div>

        <div class="flex flex-row mt-4">

            @include('profile.partials.about-category')

            <div class="bg-white p-5 basis-4/6 shadow-md rounded-r-md space-y-10">

                <div>

                    <h3 class="font-semibold">About You</h3>

                    <form action="#" class="py-3 space-y-3">

                        <div class="flex items-center space-x-6">
                            <div class="shrink-0">
                                <img class="h-16 w-16 object-cover rounded-full"
                                    src="https://images.unsplash.com/photo-1580489944761-15a19d654956?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=1361&q=80"
                                    alt="Current profile photo" />
                            </div>
                            <label class="block">
                                <span class="sr-only">Choose profile photo</span>
                                <input type="file" class="block w-full text-sm text-slate-500
                                file:mr-4 file:py-2 file:px-4
                                file:rounded-full file:border-0
                                file:text-sm file:font-semibold
                                file:bg-indigo-50 file:text-indigo-700
                                hover:file:bg-indigo-100
                              " />
                            </label>
                        </div>

                        <div>
                            <x-label :value="__('Cover Photo')" />
                            <div class="mt-1 flex justify-center px-6 pt-5 pb-6 border-2 border-gray-300 border-dashed rounded-md">
                              <div class="space-y-1 text-center">
                                <svg class="mx-auto h-12 w-12 text-gray-400" stroke="currentColor" fill="none" viewBox="0 0 48 48" aria-hidden="true">
                                  <path d="M28 8H12a4 4 0 00-4 4v20m32-12v8m0 0v8a4 4 0 01-4 4H12a4 4 0 01-4-4v-4m32-4l-3.172-3.172a4 4 0 00-5.656 0L28 28M8 32l9.172-9.172a4 4 0 015.656 0L28 28m0 0l4 4m4-24h8m-4-4v8m-12 4h.02" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                                </svg>
                                <div class="flex text-sm text-gray-600">
                                  <label for="file-upload" class="relative cursor-pointer bg-white rounded-md font-medium text-indigo-600 hover:text-indigo-500 focus-within:outline-none focus-within:ring-2 focus-within:ring-offset-2 focus-within:ring-indigo-500">
                                    <span>Upload a file</span>
                                    <input id="file-upload" name="file-upload" type="file" class="sr-only">
                                  </label>
                                  <p class="pl-1">or drag and drop</p>
                                </div>
                                <p class="text-xs text-gray-500">PNG, JPG, GIF up to 10MB</p>
                              </div>
                            </div>
                          </div>
                        </div>

                        <div class="flex flex-row space-x-2">

                            <!-- First Name -->
                            <div class="basis-1/2">
                                <x-label for="first_name" :value="__('First Name')" />

                                <x-input id="first_name" class="block mt-1 w-full" type="text" name="first_name"
                                    :value="old('first_name')" required />
                            </div>

                            <!-- Last Name -->
                            <div class="basis-1/2">
                                <x-label for="last_name" :value="__('Last Name')" />

                                <x-input id="last_name" class="block mt-1 w-full" type="text" name="last_name"
                                    :value="old('last_name')" />
                            </div>

                        </div>

                        <div class="flex flex-row space-x-2">

                            <!-- Nickname -->
                            <div class="basis-1/2">
                                <x-label for="nickname" :value="__('Nickname')" />

                                <x-input id="nickname" class="block mt-1 w-full" type="text" name="nickname"
                                    :value="old('nickname')" />
                            </div>

                            <!-- Username -->
                            <div class="basis-1/2">
                                <x-label for="nickname" :value="__('Username')" />

                                <x-input id="nickname" class="block mt-1 w-full" type="text" name="nickname"
                                    :value="old('nickname')" />
                            </div>

                        </div>

                        <!-- Bio -->
                        <div>
                            <x-label for="bio" :value="__('Bio')" />

                            <x-textarea id="bio" class="block mt-1 w-full" type="text" name="bio">{{
                                old('bio') }}</x-textarea>
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