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

                    <h3 class="font-semibold">Phone</h3>

                    <form action="#" class="py-3 space-y-3">

                        <!-- Phone -->
                        <div>
                            <x-label for="company" :value="__('Phone')" />

                            <x-input id="company" class="block mt-1 w-full" type="text" name="company"
                                :value="old('company')" required />
                        </div>

                        
                        <div class="flex justify-start space-x-5 items-center">

                            <!-- Status -->
                            <div class="inline-flex space-x-4">
                                <label class="flex items-center">
                                    <x-radio-button name="status"  checked/>
                                    <span class="flex ml-2 items-center">
                                        <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 mr-2 text-gray-600"
                                            viewBox="0 0 20 20" fill="currentColor">
                                            <path fill-rule="evenodd"
                                                d="M10 18a8 8 0 100-16 8 8 0 000 16zM4.332 8.027a6.012 6.012 0 011.912-2.706C6.512 5.73 6.974 6 7.5 6A1.5 1.5 0 019 7.5V8a2 2 0 004 0 2 2 0 011.523-1.943A5.977 5.977 0 0116 10c0 .34-.028.675-.083 1H15a2 2 0 00-2 2v2.197A5.973 5.973 0 0110 16v-2a2 2 0 00-2-2 2 2 0 01-2-2 2 2 0 00-1.668-1.973z"
                                                clip-rule="evenodd" />
                                        </svg>
                                        <span>Public</span>
                                    </span>
                                </label>

                                <label class="flex items-center">
                                    <x-radio-button name="status" />
                                    <span class="flex ml-2 items-center">
                                        <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 mr-2 text-gray-600"
                                            viewBox="0 0 20 20" fill="currentColor">
                                            <path fill-rule="evenodd"
                                                d="M5 9V7a5 5 0 0110 0v2a2 2 0 012 2v5a2 2 0 01-2 2H5a2 2 0 01-2-2v-5a2 2 0 012-2zm8-2v2H7V7a3 3 0 016 0z"
                                                clip-rule="evenodd" />
                                        </svg>
                                        <span>Only Me</span>
                                    </span>
                                </label>
                            </div>

                        </div>

                        <hr>

                        <div class="flex justify-end">

                            <x-button>Add New Phone</x-button>

                        </div>

                    </form>

                    <div>

                        <ul class="space-y-6">
                            <li class="flex justify-between items-center">
                                <div class="flex items-center">
                                    <div class="p-2 bg-gray-100">
                                       
                                        <svg xmlns="http://www.w3.org/2000/svg" class="h-8 w-8 text text-gray-500" viewBox="0 0 20 20" fill="currentColor">
                                            <path d="M2 3a1 1 0 011-1h2.153a1 1 0 01.986.836l.74 4.435a1 1 0 01-.54 1.06l-1.548.773a11.037 11.037 0 006.105 6.105l.774-1.548a1 1 0 011.059-.54l4.435.74a1 1 0 01.836.986V17a1 1 0 01-1 1h-2C7.82 18 2 12.18 2 5V3z" />
                                          </svg>
                                        
                                    </div>
                                    <div class="ml-3 leading-none">
                                        <p class="text-sm leading-none">071753889
                                        </p>
                                        <small class="text-gray-500">Phone</small>
                                    </div>
                                </div>

                                <div class="flex items-center space-x-4">
                                    <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 text-gray-500"
                                        viewBox="0 0 20 20" fill="currentColor">
                                        <path fill-rule="evenodd"
                                            d="M10 18a8 8 0 100-16 8 8 0 000 16zM4.332 8.027a6.012 6.012 0 011.912-2.706C6.512 5.73 6.974 6 7.5 6A1.5 1.5 0 019 7.5V8a2 2 0 004 0 2 2 0 011.523-1.943A5.977 5.977 0 0116 10c0 .34-.028.675-.083 1H15a2 2 0 00-2 2v2.197A5.973 5.973 0 0110 16v-2a2 2 0 00-2-2 2 2 0 01-2-2 2 2 0 00-1.668-1.973z"
                                            clip-rule="evenodd" />
                                    </svg>

                                    <x-dropdown align="right" width="48">
                                        <x-slot name="trigger">

                                            <button class="flex items-center">

                                                <a
                                                    class="bg-gray-200 hover:bg-gray-300 p-2 rounded-full focus:border focus:border-blue-500">
                                                    <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none"
                                                        viewBox="0 0 24 24" stroke="currentColor">
                                                        <path stroke-linecap="round" stroke-linejoin="round"
                                                            stroke-width="2"
                                                            d="M5 12h.01M12 12h.01M19 12h.01M6 12a1 1 0 11-2 0 1 1 0 012 0zm7 0a1 1 0 11-2 0 1 1 0 012 0zm7 0a1 1 0 11-2 0 1 1 0 012 0z" />
                                                    </svg>
                                                </a>

                                            </button>
                                        </x-slot>

                                        <x-slot name="content">

                                            <x-dropdown-link>
                                                <div class="flex justify-start items-center hover:cursor-pointer">
                                                    <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 mr-2"
                                                        fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                                        <path stroke-linecap="round" stroke-linejoin="round"
                                                            stroke-width="2"
                                                            d="M15.232 5.232l3.536 3.536m-2.036-5.036a2.5 2.5 0 113.536 3.536L6.5 21.036H3v-3.572L16.732 3.732z" />
                                                    </svg>
                                                    Edit
                                                </div>
                                            </x-dropdown-link>

                                            <x-dropdown-link class="hover:bg-red-50">
                                                <form action="#" method="POST">

                                                    @csrf
                                                    @method('DELETE')

                                                    <button type="submit"
                                                        class="flex justify-start items-center text-red-600 hover:cursor-pointer">
                                                        <svg xmlns="http://www.w3.org/2000/svg"
                                                            class="h-4 w-4 text-red-600 mr-2" fill="none"
                                                            viewBox="0 0 24 24" stroke="currentColor">
                                                            <path stroke-linecap="round" stroke-linejoin="round"
                                                                stroke-width="2"
                                                                d="M19 7l-.867 12.142A2 2 0 0116.138 21H7.862a2 2 0 01-1.995-1.858L5 7m5 4v6m4-6v6m1-10V4a1 1 0 00-1-1h-4a1 1 0 00-1 1v3M4 7h16" />
                                                        </svg>
                                                        Delete
                                                    </button>
                                                </form>
                                            </x-dropdown-link>

                                        </x-slot>
                                    </x-dropdown>
                                </div>
                            </li>
                        </ul>

                    </div>

                </div>

                <div>

                    <h3 class="font-semibold">Email</h3>

                    <form action="#" class="py-3 space-y-3">

                        <!-- Email -->
                        <div>
                            <x-label for="company" :value="__('Email')" />

                            <x-input id="company" class="block mt-1 w-full" type="text" name="company"
                                :value="old('company')" required />
                        </div>

                        
                        <div class="flex justify-start space-x-5 items-center">

                            <!-- Status -->
                            <div class="inline-flex space-x-4">
                                <label class="flex items-center">
                                    <x-radio-button name="status"  checked/>
                                    <span class="flex ml-2 items-center">
                                        <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 mr-2 text-gray-600"
                                            viewBox="0 0 20 20" fill="currentColor">
                                            <path fill-rule="evenodd"
                                                d="M10 18a8 8 0 100-16 8 8 0 000 16zM4.332 8.027a6.012 6.012 0 011.912-2.706C6.512 5.73 6.974 6 7.5 6A1.5 1.5 0 019 7.5V8a2 2 0 004 0 2 2 0 011.523-1.943A5.977 5.977 0 0116 10c0 .34-.028.675-.083 1H15a2 2 0 00-2 2v2.197A5.973 5.973 0 0110 16v-2a2 2 0 00-2-2 2 2 0 01-2-2 2 2 0 00-1.668-1.973z"
                                                clip-rule="evenodd" />
                                        </svg>
                                        <span>Public</span>
                                    </span>
                                </label>

                                <label class="flex items-center">
                                    <x-radio-button name="status" />
                                    <span class="flex ml-2 items-center">
                                        <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 mr-2 text-gray-600"
                                            viewBox="0 0 20 20" fill="currentColor">
                                            <path fill-rule="evenodd"
                                                d="M5 9V7a5 5 0 0110 0v2a2 2 0 012 2v5a2 2 0 01-2 2H5a2 2 0 01-2-2v-5a2 2 0 012-2zm8-2v2H7V7a3 3 0 016 0z"
                                                clip-rule="evenodd" />
                                        </svg>
                                        <span>Only Me</span>
                                    </span>
                                </label>
                            </div>

                        </div>

                        <hr>

                        <div class="flex justify-end">

                            <x-button>Add New Email</x-button>

                        </div>

                    </form>

                    <div>

                        <ul class="space-y-6">
                            <li class="flex justify-between items-center">
                                <div class="flex items-center">
                                    <div class="p-2 bg-gray-100">
                
                                          <svg xmlns="http://www.w3.org/2000/svg" class="h-8 w-8 text text-gray-500" viewBox="0 0 20 20" fill="currentColor">
                                            <path d="M2.003 5.884L10 9.882l7.997-3.998A2 2 0 0016 4H4a2 2 0 00-1.997 1.884z" />
                                            <path d="M18 8.118l-8 4-8-4V14a2 2 0 002 2h12a2 2 0 002-2V8.118z" />
                                          </svg>
                                        
                                    </div>
                                    <div class="ml-3 leading-none">
                                        <p class="text-sm leading-none">Chama@gmail.com
                                        </p>
                                        <small class="text-gray-500">Email</small>
                                    </div>
                                </div>

                                <div class="flex items-center space-x-4">
                                    <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 text-gray-500"
                                        viewBox="0 0 20 20" fill="currentColor">
                                        <path fill-rule="evenodd"
                                            d="M10 18a8 8 0 100-16 8 8 0 000 16zM4.332 8.027a6.012 6.012 0 011.912-2.706C6.512 5.73 6.974 6 7.5 6A1.5 1.5 0 019 7.5V8a2 2 0 004 0 2 2 0 011.523-1.943A5.977 5.977 0 0116 10c0 .34-.028.675-.083 1H15a2 2 0 00-2 2v2.197A5.973 5.973 0 0110 16v-2a2 2 0 00-2-2 2 2 0 01-2-2 2 2 0 00-1.668-1.973z"
                                            clip-rule="evenodd" />
                                    </svg>

                                    <x-dropdown align="right" width="48">
                                        <x-slot name="trigger">

                                            <button class="flex items-center">

                                                <a
                                                    class="bg-gray-200 hover:bg-gray-300 p-2 rounded-full focus:border focus:border-blue-500">
                                                    <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none"
                                                        viewBox="0 0 24 24" stroke="currentColor">
                                                        <path stroke-linecap="round" stroke-linejoin="round"
                                                            stroke-width="2"
                                                            d="M5 12h.01M12 12h.01M19 12h.01M6 12a1 1 0 11-2 0 1 1 0 012 0zm7 0a1 1 0 11-2 0 1 1 0 012 0zm7 0a1 1 0 11-2 0 1 1 0 012 0z" />
                                                    </svg>
                                                </a>

                                            </button>
                                        </x-slot>

                                        <x-slot name="content">

                                            <x-dropdown-link>
                                                <div class="flex justify-start items-center hover:cursor-pointer">
                                                    <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 mr-2"
                                                        fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                                        <path stroke-linecap="round" stroke-linejoin="round"
                                                            stroke-width="2"
                                                            d="M15.232 5.232l3.536 3.536m-2.036-5.036a2.5 2.5 0 113.536 3.536L6.5 21.036H3v-3.572L16.732 3.732z" />
                                                    </svg>
                                                    Edit
                                                </div>
                                            </x-dropdown-link>

                                            <x-dropdown-link class="hover:bg-red-50">
                                                <form action="#" method="POST">

                                                    @csrf
                                                    @method('DELETE')

                                                    <button type="submit"
                                                        class="flex justify-start items-center text-red-600 hover:cursor-pointer">
                                                        <svg xmlns="http://www.w3.org/2000/svg"
                                                            class="h-4 w-4 text-red-600 mr-2" fill="none"
                                                            viewBox="0 0 24 24" stroke="currentColor">
                                                            <path stroke-linecap="round" stroke-linejoin="round"
                                                                stroke-width="2"
                                                                d="M19 7l-.867 12.142A2 2 0 0116.138 21H7.862a2 2 0 01-1.995-1.858L5 7m5 4v6m4-6v6m1-10V4a1 1 0 00-1-1h-4a1 1 0 00-1 1v3M4 7h16" />
                                                        </svg>
                                                        Delete
                                                    </button>
                                                </form>
                                            </x-dropdown-link>

                                        </x-slot>
                                    </x-dropdown>
                                </div>
                            </li>
                        </ul>

                    </div>

                </div>

                <div>

                    <h3 class="font-semibold">Gender</h3>

                    <form action="#" class="py-3 space-y-3">

                        <!-- Gender -->
                        <div>
                            <x-label for="type" :value="__('Gender')" />

                            <x-select id="type" class="block mt-1 w-full" name="type">
                                <option>Male</option>
                                <option>Female</option>
                                <option>Other</option>
                            </x-select>
                        </div>

                        
                        <div class="flex justify-start space-x-5 items-center">

                            <!-- Status -->
                            <div class="inline-flex space-x-4">
                                <label class="flex items-center">
                                    <x-radio-button name="status"  checked/>
                                    <span class="flex ml-2 items-center">
                                        <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 mr-2 text-gray-600"
                                            viewBox="0 0 20 20" fill="currentColor">
                                            <path fill-rule="evenodd"
                                                d="M10 18a8 8 0 100-16 8 8 0 000 16zM4.332 8.027a6.012 6.012 0 011.912-2.706C6.512 5.73 6.974 6 7.5 6A1.5 1.5 0 019 7.5V8a2 2 0 004 0 2 2 0 011.523-1.943A5.977 5.977 0 0116 10c0 .34-.028.675-.083 1H15a2 2 0 00-2 2v2.197A5.973 5.973 0 0110 16v-2a2 2 0 00-2-2 2 2 0 01-2-2 2 2 0 00-1.668-1.973z"
                                                clip-rule="evenodd" />
                                        </svg>
                                        <span>Public</span>
                                    </span>
                                </label>

                                <label class="flex items-center">
                                    <x-radio-button name="status" />
                                    <span class="flex ml-2 items-center">
                                        <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 mr-2 text-gray-600"
                                            viewBox="0 0 20 20" fill="currentColor">
                                            <path fill-rule="evenodd"
                                                d="M5 9V7a5 5 0 0110 0v2a2 2 0 012 2v5a2 2 0 01-2 2H5a2 2 0 01-2-2v-5a2 2 0 012-2zm8-2v2H7V7a3 3 0 016 0z"
                                                clip-rule="evenodd" />
                                        </svg>
                                        <span>Only Me</span>
                                    </span>
                                </label>
                            </div>

                        </div>

                        <hr>

                        <div class="flex justify-end">

                            <x-button>Add New Gender</x-button>

                        </div>

                    </form>

                    <div>

                        <ul class="space-y-6">
                            <li class="flex justify-between items-center">
                                <div class="flex items-center">
                                    <div class="p-2 bg-gray-100">

                                          <svg xmlns="http://www.w3.org/2000/svg" class="h-8 w-8 text text-gray-500" viewBox="0 0 20 20" fill="currentColor">
                                            <path d="M9 6a3 3 0 11-6 0 3 3 0 016 0zM17 6a3 3 0 11-6 0 3 3 0 016 0zM12.93 17c.046-.327.07-.66.07-1a6.97 6.97 0 00-1.5-4.33A5 5 0 0119 16v1h-6.07zM6 11a5 5 0 015 5v1H1v-1a5 5 0 015-5z" />
                                          </svg>
                                        
                                    </div>
                                    <div class="ml-3 leading-none">
                                        <p class="text-sm leading-none">Female
                                        </p>
                                        <small class="text-gray-500">Gender</small>
                                    </div>
                                </div>

                                <div class="flex items-center space-x-4">
                                    <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 text-gray-500"
                                        viewBox="0 0 20 20" fill="currentColor">
                                        <path fill-rule="evenodd"
                                            d="M10 18a8 8 0 100-16 8 8 0 000 16zM4.332 8.027a6.012 6.012 0 011.912-2.706C6.512 5.73 6.974 6 7.5 6A1.5 1.5 0 019 7.5V8a2 2 0 004 0 2 2 0 011.523-1.943A5.977 5.977 0 0116 10c0 .34-.028.675-.083 1H15a2 2 0 00-2 2v2.197A5.973 5.973 0 0110 16v-2a2 2 0 00-2-2 2 2 0 01-2-2 2 2 0 00-1.668-1.973z"
                                            clip-rule="evenodd" />
                                    </svg>

                                    <x-dropdown align="right" width="48">
                                        <x-slot name="trigger">

                                            <button class="flex items-center">

                                                <a
                                                    class="bg-gray-200 hover:bg-gray-300 p-2 rounded-full focus:border focus:border-blue-500">
                                                    <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none"
                                                        viewBox="0 0 24 24" stroke="currentColor">
                                                        <path stroke-linecap="round" stroke-linejoin="round"
                                                            stroke-width="2"
                                                            d="M5 12h.01M12 12h.01M19 12h.01M6 12a1 1 0 11-2 0 1 1 0 012 0zm7 0a1 1 0 11-2 0 1 1 0 012 0zm7 0a1 1 0 11-2 0 1 1 0 012 0z" />
                                                    </svg>
                                                </a>

                                            </button>
                                        </x-slot>

                                        <x-slot name="content">

                                            <x-dropdown-link>
                                                <div class="flex justify-start items-center hover:cursor-pointer">
                                                    <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 mr-2"
                                                        fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                                        <path stroke-linecap="round" stroke-linejoin="round"
                                                            stroke-width="2"
                                                            d="M15.232 5.232l3.536 3.536m-2.036-5.036a2.5 2.5 0 113.536 3.536L6.5 21.036H3v-3.572L16.732 3.732z" />
                                                    </svg>
                                                    Edit
                                                </div>
                                            </x-dropdown-link>

                                            <x-dropdown-link class="hover:bg-red-50">
                                                <form action="#" method="POST">

                                                    @csrf
                                                    @method('DELETE')

                                                    <button type="submit"
                                                        class="flex justify-start items-center text-red-600 hover:cursor-pointer">
                                                        <svg xmlns="http://www.w3.org/2000/svg"
                                                            class="h-4 w-4 text-red-600 mr-2" fill="none"
                                                            viewBox="0 0 24 24" stroke="currentColor">
                                                            <path stroke-linecap="round" stroke-linejoin="round"
                                                                stroke-width="2"
                                                                d="M19 7l-.867 12.142A2 2 0 0116.138 21H7.862a2 2 0 01-1.995-1.858L5 7m5 4v6m4-6v6m1-10V4a1 1 0 00-1-1h-4a1 1 0 00-1 1v3M4 7h16" />
                                                        </svg>
                                                        Delete
                                                    </button>
                                                </form>
                                            </x-dropdown-link>

                                        </x-slot>
                                    </x-dropdown>
                                </div>
                            </li>
                        </ul>

                    </div>

                </div>

                <div>

                    <h3 class="font-semibold">Language</h3>

                    <form action="#" class="py-3 space-y-3">

                        <!-- Language -->
                        <div>
                            <x-label for="type" :value="__('Language')" />

                            <x-select id="type" class="block mt-1 w-full" name="type">
                                <option>English</option>
                                <option>Tamil</option>
                                <option>Sinhala</option>
                            </x-select>
                        </div>

                        
                        <div class="flex justify-start space-x-5 items-center">

                            <!-- Status -->
                            <div class="inline-flex space-x-4">
                                <label class="flex items-center">
                                    <x-radio-button name="status"  checked/>
                                    <span class="flex ml-2 items-center">
                                        <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 mr-2 text-gray-600"
                                            viewBox="0 0 20 20" fill="currentColor">
                                            <path fill-rule="evenodd"
                                                d="M10 18a8 8 0 100-16 8 8 0 000 16zM4.332 8.027a6.012 6.012 0 011.912-2.706C6.512 5.73 6.974 6 7.5 6A1.5 1.5 0 019 7.5V8a2 2 0 004 0 2 2 0 011.523-1.943A5.977 5.977 0 0116 10c0 .34-.028.675-.083 1H15a2 2 0 00-2 2v2.197A5.973 5.973 0 0110 16v-2a2 2 0 00-2-2 2 2 0 01-2-2 2 2 0 00-1.668-1.973z"
                                                clip-rule="evenodd" />
                                        </svg>
                                        <span>Public</span>
                                    </span>
                                </label>

                                <label class="flex items-center">
                                    <x-radio-button name="status" />
                                    <span class="flex ml-2 items-center">
                                        <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 mr-2 text-gray-600"
                                            viewBox="0 0 20 20" fill="currentColor">
                                            <path fill-rule="evenodd"
                                                d="M5 9V7a5 5 0 0110 0v2a2 2 0 012 2v5a2 2 0 01-2 2H5a2 2 0 01-2-2v-5a2 2 0 012-2zm8-2v2H7V7a3 3 0 016 0z"
                                                clip-rule="evenodd" />
                                        </svg>
                                        <span>Only Me</span>
                                    </span>
                                </label>
                            </div>

                        </div>

                        <hr>

                        <div class="flex justify-end">

                            <x-button>Add New Language</x-button>

                        </div>

                    </form>

                    <div>

                        <ul class="space-y-6">
                            <li class="flex justify-between items-center">
                                <div class="flex items-center">
                                    <div class="p-2 bg-gray-100">

                                          <svg xmlns="http://www.w3.org/2000/svg" class="h-8 w-8 text text-gray-500" viewBox="0 0 20 20" fill="currentColor">
                                            <path fill-rule="evenodd" d="M7 2a1 1 0 011 1v1h3a1 1 0 110 2H9.578a18.87 18.87 0 01-1.724 4.78c.29.354.596.696.914 1.026a1 1 0 11-1.44 1.389c-.188-.196-.373-.396-.554-.6a19.098 19.098 0 01-3.107 3.567 1 1 0 01-1.334-1.49 17.087 17.087 0 003.13-3.733 18.992 18.992 0 01-1.487-2.494 1 1 0 111.79-.89c.234.47.489.928.764 1.372.417-.934.752-1.913.997-2.927H3a1 1 0 110-2h3V3a1 1 0 011-1zm6 6a1 1 0 01.894.553l2.991 5.982a.869.869 0 01.02.037l.99 1.98a1 1 0 11-1.79.895L15.383 16h-4.764l-.724 1.447a1 1 0 11-1.788-.894l.99-1.98.019-.038 2.99-5.982A1 1 0 0113 8zm-1.382 6h2.764L13 11.236 11.618 14z" clip-rule="evenodd" />
                                          </svg>
                                        
                                    </div>
                                    <div class="ml-3 leading-none">
                                        <p class="text-sm leading-none">English,Tamil
                                        </p>
                                        <small class="text-gray-500">Language</small>
                                    </div>
                                </div>

                                <div class="flex items-center space-x-4">
                                    <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 text-gray-500"
                                        viewBox="0 0 20 20" fill="currentColor">
                                        <path fill-rule="evenodd"
                                            d="M10 18a8 8 0 100-16 8 8 0 000 16zM4.332 8.027a6.012 6.012 0 011.912-2.706C6.512 5.73 6.974 6 7.5 6A1.5 1.5 0 019 7.5V8a2 2 0 004 0 2 2 0 011.523-1.943A5.977 5.977 0 0116 10c0 .34-.028.675-.083 1H15a2 2 0 00-2 2v2.197A5.973 5.973 0 0110 16v-2a2 2 0 00-2-2 2 2 0 01-2-2 2 2 0 00-1.668-1.973z"
                                            clip-rule="evenodd" />
                                    </svg>

                                    <x-dropdown align="right" width="48">
                                        <x-slot name="trigger">

                                            <button class="flex items-center">

                                                <a
                                                    class="bg-gray-200 hover:bg-gray-300 p-2 rounded-full focus:border focus:border-blue-500">
                                                    <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none"
                                                        viewBox="0 0 24 24" stroke="currentColor">
                                                        <path stroke-linecap="round" stroke-linejoin="round"
                                                            stroke-width="2"
                                                            d="M5 12h.01M12 12h.01M19 12h.01M6 12a1 1 0 11-2 0 1 1 0 012 0zm7 0a1 1 0 11-2 0 1 1 0 012 0zm7 0a1 1 0 11-2 0 1 1 0 012 0z" />
                                                    </svg>
                                                </a>

                                            </button>
                                        </x-slot>

                                        <x-slot name="content">

                                            <x-dropdown-link>
                                                <div class="flex justify-start items-center hover:cursor-pointer">
                                                    <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 mr-2"
                                                        fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                                        <path stroke-linecap="round" stroke-linejoin="round"
                                                            stroke-width="2"
                                                            d="M15.232 5.232l3.536 3.536m-2.036-5.036a2.5 2.5 0 113.536 3.536L6.5 21.036H3v-3.572L16.732 3.732z" />
                                                    </svg>
                                                    Edit
                                                </div>
                                            </x-dropdown-link>

                                            <x-dropdown-link class="hover:bg-red-50">
                                                <form action="#" method="POST">

                                                    @csrf
                                                    @method('DELETE')

                                                    <button type="submit"
                                                        class="flex justify-start items-center text-red-600 hover:cursor-pointer">
                                                        <svg xmlns="http://www.w3.org/2000/svg"
                                                            class="h-4 w-4 text-red-600 mr-2" fill="none"
                                                            viewBox="0 0 24 24" stroke="currentColor">
                                                            <path stroke-linecap="round" stroke-linejoin="round"
                                                                stroke-width="2"
                                                                d="M19 7l-.867 12.142A2 2 0 0116.138 21H7.862a2 2 0 01-1.995-1.858L5 7m5 4v6m4-6v6m1-10V4a1 1 0 00-1-1h-4a1 1 0 00-1 1v3M4 7h16" />
                                                        </svg>
                                                        Delete
                                                    </button>
                                                </form>
                                            </x-dropdown-link>

                                        </x-slot>
                                    </x-dropdown>
                                </div>
                            </li>
                        </ul>

                    </div>

                </div>

                <div>

                    
                </div>

            </div>

        </div>

    </div>

</x-app-layout>


{{-- <x-app-layout>

    <div class="max-w-6xl mx-auto sm:px-6 lg:px-8 pb-20">

        <x-profile-header />

        <div class="my-3">
            <x-profile-navbar />
        </div>

        <div class="flex flex-row mt-4">

            @include('profile.partials.about-category')

            <div class="bg-white p-5 basis-4/6 shadow-md rounded-r-md space-y-10">

                <div>

                    <h3 class="font-semibold">Contact</h3>


                    <div class="mt-5">

                        <ul class="space-y-6">
                            <li class="flex justify-between items-center">
                                <div class="flex items-center">
                                    <div class="p-2 bg-gray-100">
                                        
                                        <svg xmlns="http://www.w3.org/2000/svg" class="h-8 w-8 text text-gray-500" viewBox="0 0 20 20" fill="currentColor">
                                            <path d="M2 3a1 1 0 011-1h2.153a1 1 0 01.986.836l.74 4.435a1 1 0 01-.54 1.06l-1.548.773a11.037 11.037 0 006.105 6.105l.774-1.548a1 1 0 011.059-.54l4.435.74a1 1 0 01.836.986V17a1 1 0 01-1 1h-2C7.82 18 2 12.18 2 5V3z" />
                                          </svg>
                                    </div>
                                    <div class="ml-3 leading-none">
                                        <p class="text-sm leading-none">071 734 5288
                                          
                                        </p>
                                        <small class="text-gray-500">Mobile</small>
                                    </div>
                                </div>

                                <div class="flex items-center space-x-4">
                                    <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 text-gray-500"
                                        viewBox="0 0 20 20" fill="currentColor">
                                        <path fill-rule="evenodd"
                                            d="M10 18a8 8 0 100-16 8 8 0 000 16zM4.332 8.027a6.012 6.012 0 011.912-2.706C6.512 5.73 6.974 6 7.5 6A1.5 1.5 0 019 7.5V8a2 2 0 004 0 2 2 0 011.523-1.943A5.977 5.977 0 0116 10c0 .34-.028.675-.083 1H15a2 2 0 00-2 2v2.197A5.973 5.973 0 0110 16v-2a2 2 0 00-2-2 2 2 0 01-2-2 2 2 0 00-1.668-1.973z"
                                            clip-rule="evenodd" />
                                    </svg>

                                    <x-dropdown align="right" width="48">
                                        <x-slot name="trigger">

                                            <button class="flex items-center">

                                                <a
                                                    class="bg-gray-200 hover:bg-gray-300 p-2 rounded-full focus:border focus:border-blue-500">
                                                    <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none"
                                                        viewBox="0 0 24 24" stroke="currentColor">
                                                        <path stroke-linecap="round" stroke-linejoin="round"
                                                            stroke-width="2"
                                                            d="M5 12h.01M12 12h.01M19 12h.01M6 12a1 1 0 11-2 0 1 1 0 012 0zm7 0a1 1 0 11-2 0 1 1 0 012 0zm7 0a1 1 0 11-2 0 1 1 0 012 0z" />
                                                    </svg>
                                                </a>

                                            </button>
                                        </x-slot>

                                        <x-slot name="content">

                                            <x-dropdown-link>
                                                <div class="flex justify-start items-center hover:cursor-pointer">
                                                    <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 mr-2"
                                                        fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                                        <path stroke-linecap="round" stroke-linejoin="round"
                                                            stroke-width="2"
                                                            d="M15.232 5.232l3.536 3.536m-2.036-5.036a2.5 2.5 0 113.536 3.536L6.5 21.036H3v-3.572L16.732 3.732z" />
                                                    </svg>
                                                    Edit
                                                </div>
                                            </x-dropdown-link>

                                            <x-dropdown-link class="hover:bg-red-50">
                                                <form action="#" method="POST">

                                                    @csrf
                                                    @method('DELETE')

                                                    <button type="submit"
                                                        class="flex justify-start items-center text-red-600 hover:cursor-pointer">
                                                        <svg xmlns="http://www.w3.org/2000/svg"
                                                            class="h-4 w-4 text-red-600 mr-2" fill="none"
                                                            viewBox="0 0 24 24" stroke="currentColor">
                                                            <path stroke-linecap="round" stroke-linejoin="round"
                                                                stroke-width="2"
                                                                d="M19 7l-.867 12.142A2 2 0 0116.138 21H7.862a2 2 0 01-1.995-1.858L5 7m5 4v6m4-6v6m1-10V4a1 1 0 00-1-1h-4a1 1 0 00-1 1v3M4 7h16" />
                                                        </svg>
                                                        Delete
                                                    </button>
                                                </form>
                                            </x-dropdown-link>

                                        </x-slot>
                                    </x-dropdown>
                                </div>
                            </li>
                        </ul>

                        

                    </div>

                    <div class="mt-5">

                        <ul class="space-y-6">
                            <li class="flex justify-between items-center">
                                <div class="flex items-center">
                                    <div class="p-2 bg-gray-100">
                                        
                                        <svg xmlns="http://www.w3.org/2000/svg" class="h-8 w-8 text text-gray-500" viewBox="0 0 20 20" fill="currentColor">
                                            <path fill-rule="evenodd" d="M2.94 6.412A2 2 0 002 8.108V16a2 2 0 002 2h12a2 2 0 002-2V8.108a2 2 0 00-.94-1.696l-6-3.75a2 2 0 00-2.12 0l-6 3.75zm2.615 2.423a1 1 0 10-1.11 1.664l5 3.333a1 1 0 001.11 0l5-3.333a1 1 0 00-1.11-1.664L10 11.798 5.555 8.835z" clip-rule="evenodd" />
                                          </svg>
                                    </div>
                                    <div class="ml-3 leading-none">
                                        <p class="text-sm leading-none">Chama@gmail.com
                                          
                                        </p>
                                        <small class="text-gray-500">Email</small>
                                    </div>
                                </div>

                                <div class="flex items-center space-x-4">
                                    <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 text-gray-500"
                                        viewBox="0 0 20 20" fill="currentColor">
                                        <path fill-rule="evenodd"
                                            d="M10 18a8 8 0 100-16 8 8 0 000 16zM4.332 8.027a6.012 6.012 0 011.912-2.706C6.512 5.73 6.974 6 7.5 6A1.5 1.5 0 019 7.5V8a2 2 0 004 0 2 2 0 011.523-1.943A5.977 5.977 0 0116 10c0 .34-.028.675-.083 1H15a2 2 0 00-2 2v2.197A5.973 5.973 0 0110 16v-2a2 2 0 00-2-2 2 2 0 01-2-2 2 2 0 00-1.668-1.973z"
                                            clip-rule="evenodd" />
                                    </svg>

                                    <x-dropdown align="right" width="48">
                                        <x-slot name="trigger">

                                            <button class="flex items-center">

                                                <a
                                                    class="bg-gray-200 hover:bg-gray-300 p-2 rounded-full focus:border focus:border-blue-500">
                                                    <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none"
                                                        viewBox="0 0 24 24" stroke="currentColor">
                                                        <path stroke-linecap="round" stroke-linejoin="round"
                                                            stroke-width="2"
                                                            d="M5 12h.01M12 12h.01M19 12h.01M6 12a1 1 0 11-2 0 1 1 0 012 0zm7 0a1 1 0 11-2 0 1 1 0 012 0zm7 0a1 1 0 11-2 0 1 1 0 012 0z" />
                                                    </svg>
                                                </a>

                                            </button>
                                        </x-slot>

                                        <x-slot name="content">

                                            <x-dropdown-link>
                                                <div class="flex justify-start items-center hover:cursor-pointer">
                                                    <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 mr-2"
                                                        fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                                        <path stroke-linecap="round" stroke-linejoin="round"
                                                            stroke-width="2"
                                                            d="M15.232 5.232l3.536 3.536m-2.036-5.036a2.5 2.5 0 113.536 3.536L6.5 21.036H3v-3.572L16.732 3.732z" />
                                                    </svg>
                                                    Edit
                                                </div>
                                            </x-dropdown-link>

                                            <x-dropdown-link class="hover:bg-red-50">
                                                <form action="#" method="POST">

                                                    @csrf
                                                    @method('DELETE')

                                                    <button type="submit"
                                                        class="flex justify-start items-center text-red-600 hover:cursor-pointer">
                                                        <svg xmlns="http://www.w3.org/2000/svg"
                                                            class="h-4 w-4 text-red-600 mr-2" fill="none"
                                                            viewBox="0 0 24 24" stroke="currentColor">
                                                            <path stroke-linecap="round" stroke-linejoin="round"
                                                                stroke-width="2"
                                                                d="M19 7l-.867 12.142A2 2 0 0116.138 21H7.862a2 2 0 01-1.995-1.858L5 7m5 4v6m4-6v6m1-10V4a1 1 0 00-1-1h-4a1 1 0 00-1 1v3M4 7h16" />
                                                        </svg>
                                                        Delete
                                                    </button>
                                                </form>
                                            </x-dropdown-link>

                                        </x-slot>
                                    </x-dropdown>
                                </div>
                            </li>
                        </ul>

                        

                    </div>

                    <div class="mt-5">

                        <ul class="space-y-6">
                            <li class="flex justify-between items-center">
                                <div class="flex items-center">
                                    <div class="p-2 bg-gray-100">
                                        
                                        <svg xmlns="http://www.w3.org/2000/svg" class="h-8 w-8 text text-gray-500" viewBox="0 0 20 20" fill="currentColor">
                                            <path fill-rule="evenodd" d="M6 3a1 1 0 011-1h.01a1 1 0 010 2H7a1 1 0 01-1-1zm2 3a1 1 0 00-2 0v1a2 2 0 00-2 2v1a2 2 0 00-2 2v.683a3.7 3.7 0 011.055.485 1.704 1.704 0 001.89 0 3.704 3.704 0 014.11 0 1.704 1.704 0 001.89 0 3.704 3.704 0 014.11 0 1.704 1.704 0 001.89 0A3.7 3.7 0 0118 12.683V12a2 2 0 00-2-2V9a2 2 0 00-2-2V6a1 1 0 10-2 0v1h-1V6a1 1 0 10-2 0v1H8V6zm10 8.868a3.704 3.704 0 01-4.055-.036 1.704 1.704 0 00-1.89 0 3.704 3.704 0 01-4.11 0 1.704 1.704 0 00-1.89 0A3.704 3.704 0 012 14.868V17a1 1 0 001 1h14a1 1 0 001-1v-2.132zM9 3a1 1 0 011-1h.01a1 1 0 110 2H10a1 1 0 01-1-1zm3 0a1 1 0 011-1h.01a1 1 0 110 2H13a1 1 0 01-1-1z" clip-rule="evenodd" />
                                          </svg>
                                    </div>
                                    <div class="ml-3 leading-none">
                                        <p class="text-sm leading-none">5 september
                                          
                                        </p>
                                        <small class="text-gray-500">Birth date</small>
                                    </div>
                                </div>

                                <div class="flex items-center space-x-4">
                                    <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 text-gray-500"
                                        viewBox="0 0 20 20" fill="currentColor">
                                        <path fill-rule="evenodd"
                                            d="M10 18a8 8 0 100-16 8 8 0 000 16zM4.332 8.027a6.012 6.012 0 011.912-2.706C6.512 5.73 6.974 6 7.5 6A1.5 1.5 0 019 7.5V8a2 2 0 004 0 2 2 0 011.523-1.943A5.977 5.977 0 0116 10c0 .34-.028.675-.083 1H15a2 2 0 00-2 2v2.197A5.973 5.973 0 0110 16v-2a2 2 0 00-2-2 2 2 0 01-2-2 2 2 0 00-1.668-1.973z"
                                            clip-rule="evenodd" />
                                    </svg>

                                    <x-dropdown align="right" width="48">
                                        <x-slot name="trigger">

                                            <button class="flex items-center">

                                                <a
                                                    class="bg-gray-200 hover:bg-gray-300 p-2 rounded-full focus:border focus:border-blue-500">
                                                    <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none"
                                                        viewBox="0 0 24 24" stroke="currentColor">
                                                        <path stroke-linecap="round" stroke-linejoin="round"
                                                            stroke-width="2"
                                                            d="M5 12h.01M12 12h.01M19 12h.01M6 12a1 1 0 11-2 0 1 1 0 012 0zm7 0a1 1 0 11-2 0 1 1 0 012 0zm7 0a1 1 0 11-2 0 1 1 0 012 0z" />
                                                    </svg>
                                                </a>

                                            </button>
                                        </x-slot>

                                        <x-slot name="content">

                                            <x-dropdown-link>
                                                <div class="flex justify-start items-center hover:cursor-pointer">
                                                    <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 mr-2"
                                                        fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                                        <path stroke-linecap="round" stroke-linejoin="round"
                                                            stroke-width="2"
                                                            d="M15.232 5.232l3.536 3.536m-2.036-5.036a2.5 2.5 0 113.536 3.536L6.5 21.036H3v-3.572L16.732 3.732z" />
                                                    </svg>
                                                    Edit
                                                </div>
                                            </x-dropdown-link>

                                            <x-dropdown-link class="hover:bg-red-50">
                                                <form action="#" method="POST">

                                                    @csrf
                                                    @method('DELETE')

                                                    <button type="submit"
                                                        class="flex justify-start items-center text-red-600 hover:cursor-pointer">
                                                        <svg xmlns="http://www.w3.org/2000/svg"
                                                            class="h-4 w-4 text-red-600 mr-2" fill="none"
                                                            viewBox="0 0 24 24" stroke="currentColor">
                                                            <path stroke-linecap="round" stroke-linejoin="round"
                                                                stroke-width="2"
                                                                d="M19 7l-.867 12.142A2 2 0 0116.138 21H7.862a2 2 0 01-1.995-1.858L5 7m5 4v6m4-6v6m1-10V4a1 1 0 00-1-1h-4a1 1 0 00-1 1v3M4 7h16" />
                                                        </svg>
                                                        Delete
                                                    </button>
                                                </form>
                                            </x-dropdown-link>

                                        </x-slot>
                                    </x-dropdown>
                                </div>
                            </li>
                        </ul>

                        

                    </div>

                    <div class="mt-5">

                        <ul class="space-y-6">
                            <li class="flex justify-between items-center">
                                <div class="flex items-center">
                                    <div class="p-2 bg-gray-100">
                                          <svg xmlns="http://www.w3.org/2000/svg" class="h-8 w-8 text text-gray-500" viewBox="0 0 20 20" fill="currentColor">
                                            <path d="M9 6a3 3 0 11-6 0 3 3 0 016 0zM17 6a3 3 0 11-6 0 3 3 0 016 0zM12.93 17c.046-.327.07-.66.07-1a6.97 6.97 0 00-1.5-4.33A5 5 0 0119 16v1h-6.07zM6 11a5 5 0 015 5v1H1v-1a5 5 0 015-5z" />
                                          </svg>
                                    </div>
                                    <div class="ml-3 leading-none">
                                        <p class="text-sm leading-none">Female
                                          
                                        </p>
                                        <small class="text-gray-500">Gender</small>
                                    </div>
                                </div>

                                <div class="flex items-center space-x-4">
                                    <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 text-gray-500"
                                        viewBox="0 0 20 20" fill="currentColor">
                                        <path fill-rule="evenodd"
                                            d="M10 18a8 8 0 100-16 8 8 0 000 16zM4.332 8.027a6.012 6.012 0 011.912-2.706C6.512 5.73 6.974 6 7.5 6A1.5 1.5 0 019 7.5V8a2 2 0 004 0 2 2 0 011.523-1.943A5.977 5.977 0 0116 10c0 .34-.028.675-.083 1H15a2 2 0 00-2 2v2.197A5.973 5.973 0 0110 16v-2a2 2 0 00-2-2 2 2 0 01-2-2 2 2 0 00-1.668-1.973z"
                                            clip-rule="evenodd" />
                                    </svg>

                                    <x-dropdown align="right" width="48">
                                        <x-slot name="trigger">

                                            <button class="flex items-center">

                                                <a
                                                    class="bg-gray-200 hover:bg-gray-300 p-2 rounded-full focus:border focus:border-blue-500">
                                                    <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none"
                                                        viewBox="0 0 24 24" stroke="currentColor">
                                                        <path stroke-linecap="round" stroke-linejoin="round"
                                                            stroke-width="2"
                                                            d="M5 12h.01M12 12h.01M19 12h.01M6 12a1 1 0 11-2 0 1 1 0 012 0zm7 0a1 1 0 11-2 0 1 1 0 012 0zm7 0a1 1 0 11-2 0 1 1 0 012 0z" />
                                                    </svg>
                                                </a>

                                            </button>
                                        </x-slot>

                                        <x-slot name="content">

                                            <x-dropdown-link>
                                                <div class="flex justify-start items-center hover:cursor-pointer">
                                                    <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 mr-2"
                                                        fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                                        <path stroke-linecap="round" stroke-linejoin="round"
                                                            stroke-width="2"
                                                            d="M15.232 5.232l3.536 3.536m-2.036-5.036a2.5 2.5 0 113.536 3.536L6.5 21.036H3v-3.572L16.732 3.732z" />
                                                    </svg>
                                                    Edit
                                                </div>
                                            </x-dropdown-link>

                                            <x-dropdown-link class="hover:bg-red-50">
                                                <form action="#" method="POST">

                                                    @csrf
                                                    @method('DELETE')

                                                    <button type="submit"
                                                        class="flex justify-start items-center text-red-600 hover:cursor-pointer">
                                                        <svg xmlns="http://www.w3.org/2000/svg"
                                                            class="h-4 w-4 text-red-600 mr-2" fill="none"
                                                            viewBox="0 0 24 24" stroke="currentColor">
                                                            <path stroke-linecap="round" stroke-linejoin="round"
                                                                stroke-width="2"
                                                                d="M19 7l-.867 12.142A2 2 0 0116.138 21H7.862a2 2 0 01-1.995-1.858L5 7m5 4v6m4-6v6m1-10V4a1 1 0 00-1-1h-4a1 1 0 00-1 1v3M4 7h16" />
                                                        </svg>
                                                        Delete
                                                    </button>
                                                </form>
                                            </x-dropdown-link>

                                        </x-slot>
                                    </x-dropdown>
                                </div>
                            </li>
                        </ul>

                        

                    </div>

                </div>

                

            </div>

        </div>

    </div>

</x-app-layout> --}}