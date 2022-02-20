<x-app-layout>

    <div class="max-w-6xl mx-auto sm:px-6 lg:px-8">

        <x-profile-header />

        <div class="my-3">
            <x-profile-navbar />
        </div>

        <div class="bg-white p-5 basis-2/6 border-r-2 shadow-md rounded-l-md">
            <div class="flex justify-around">
                <h1 class="text-2xl font-bold mb-3">Friends</h1>
                <x-search />
                <button
                        class="mt-3justify-center group relative py-2 px-4 border border-transparent text-sm font-medium rounded-md text-blue-600 bg-none hover:bg-gray-200 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-gray-300">
                       Fiend Friends
                    </button>
            </div>

            <div class="grid grid-cols-12 gap-4">
                <div class="col-span-6">
                    <div class="flex justify-between mt-5">
                        <div class="flex items-center">
                            <img src="https://i.pravatar.cc/150?img=31" alt="default img" class="h-24 w-24 rounded-md" />
                            <div class="ml-2">
                                <h3 class="font-bold">Isuru Ahi</h3>
                                <p class="text-xs font-bold text-gray-400">206 mutual friends</p>
                            </div>
                        </div>
                        
                        
                        <x-dropdown align="right" width="48">
                            <x-slot name="trigger">
                        
                        
                                <button class="flex items-center">
                        
                                    <a class="hover:bg-gray-200 p-2 rounded-full focus:border focus:border-blue-500">
                                        <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24"
                                            stroke="currentColor">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                                d="M5 12h.01M12 12h.01M19 12h.01M6 12a1 1 0 11-2 0 1 1 0 012 0zm7 0a1 1 0 11-2 0 1 1 0 012 0zm7 0a1 1 0 11-2 0 1 1 0 012 0z" />
                                        </svg>
                                    </a>
                        
                                </button>
                            </x-slot>
                        
                            <x-slot name="content">
                               
                                <x-dropdown-link>
                                    <div class="flex justify-start items-center hover:cursor-pointer">
                                        <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 mr-2" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 7a4 4 0 11-8 0 4 4 0 018 0zM9 14a6 6 0 00-6 6v1h12v-1a6 6 0 00-6-6zM21 12h-6" />
                                          </svg>
                                        Unfriend
                                    </div>
                                </x-dropdown-link>
                        
                             
                        
                        
                            </x-slot>
                        </x-dropdown>
                        
                    </div>

                    <div class="flex justify-between mt-5">
                        <div class="flex items-center">
                            <img src="https://i.pravatar.cc/150?img=31" alt="default img" class="h-24 w-24 rounded-md" />
                            <div class="ml-2">
                                <h3 class="font-bold">Isuru Ahi</h3>
                                <p class="text-xs font-bold text-gray-400">206 mutual friends</p>
                            </div>
                        </div>
                        
                        
                        <x-dropdown align="right" width="48">
                            <x-slot name="trigger">
                        
                        
                                <button class="flex items-center">
                        
                                    <a class="hover:bg-gray-200 p-2 rounded-full focus:border focus:border-blue-500">
                                        <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24"
                                            stroke="currentColor">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                                d="M5 12h.01M12 12h.01M19 12h.01M6 12a1 1 0 11-2 0 1 1 0 012 0zm7 0a1 1 0 11-2 0 1 1 0 012 0zm7 0a1 1 0 11-2 0 1 1 0 012 0z" />
                                        </svg>
                                    </a>
                        
                                </button>
                            </x-slot>
                        
                            <x-slot name="content">
                               
                                <x-dropdown-link>
                                    <div class="flex justify-start items-center hover:cursor-pointer">
                                        <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 mr-2" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 7a4 4 0 11-8 0 4 4 0 018 0zM9 14a6 6 0 00-6 6v1h12v-1a6 6 0 00-6-6zM21 12h-6" />
                                          </svg>
                                        Unfriend
                                    </div>
                                </x-dropdown-link>
                        
                             
                        
                        
                            </x-slot>
                        </x-dropdown>
                        
                    </div>
                </div>

                <div class="col-span-6">
                    <div class="flex justify-between mt-5">
                        <div class="flex items-center">
                            <img src="https://i.pravatar.cc/150?img=31" alt="default img" class="h-24 w-24 rounded-md" />
                            <div class="ml-2">
                                <h3 class="font-bold">Isuru Ahi</h3>
                                <p class="text-xs font-bold text-gray-400">206 mutual friends</p>
                            </div>
                        </div>
                        
                        
                        <x-dropdown align="right" width="48">
                            <x-slot name="trigger">
                        
                        
                                <button class="flex items-center">
                        
                                    <a class="hover:bg-gray-200 p-2 rounded-full focus:border focus:border-blue-500">
                                        <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24"
                                            stroke="currentColor">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                                d="M5 12h.01M12 12h.01M19 12h.01M6 12a1 1 0 11-2 0 1 1 0 012 0zm7 0a1 1 0 11-2 0 1 1 0 012 0zm7 0a1 1 0 11-2 0 1 1 0 012 0z" />
                                        </svg>
                                    </a>
                        
                                </button>
                            </x-slot>
                        
                            <x-slot name="content">
                               
                                <x-dropdown-link>
                                    <div class="flex justify-start items-center hover:cursor-pointer">
                                        <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 mr-2" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 7a4 4 0 11-8 0 4 4 0 018 0zM9 14a6 6 0 00-6 6v1h12v-1a6 6 0 00-6-6zM21 12h-6" />
                                          </svg>
                                        Unfriend
                                    </div>
                                </x-dropdown-link>
                        
                             
                        
                        
                            </x-slot>
                        </x-dropdown>
                        
                    </div>
                </div>

            </div>

            
            
            

        </div>

    </div>
</x-app-layout>
