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

</x-app-layout>