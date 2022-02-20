<x-app-layout>

    <div class="max-w-6xl mx-auto sm:px-6 lg:px-8">
        
        <x-profile-header />

        <div class="my-3">
            <x-profile-navbar />
        </div>

        <div class="grid grid-cols-12 gap-4">

            <div class="col-span-4 h-fit p-6  bg-white border-b border-gray-200 rounded-2xl">
                <h1 class="font-bold">Intro</h1>

                    <button
                        class="mt-3 w-full justify-center group relative py-2 px-4 border border-transparent text-sm font-medium rounded-md text-black bg-gray-100 hover:bg-gray-200 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-gray-300">
                        Add Bio
                    </button>

                    <div class="flex items-center mt-2">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-12 w-12 mr-5" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path d="M12 14l9-5-9-5-9 5 9 5z" />
                            <path d="M12 14l6.16-3.422a12.083 12.083 0 01.665 6.479A11.952 11.952 0 0012 20.055a11.952 11.952 0 00-6.824-2.998 12.078 12.078 0 01.665-6.479L12 14z" />
                          <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 14l9-5-9-5-9 5 9 5zm0 0l6.16-3.422a12.083 12.083 0 01.665 6.479A11.952 11.952 0 0012 20.055a11.952 11.952 0 00-6.824-2.998 12.078 12.078 0 01.665-6.479L12 14zm-4 6v-7.5l4-2.222" />
                          </svg>

                        <p>Studied at
                            <span class="font-bold hover:underline hover:cursor-pointer">University of Moratuwa - Faculty of Information Technology
                            </span>
                        </p>
                    </div>

                    <div class="flex items-center mt-2">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 mr-5" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 12l2-2m0 0l7-7 7 7M5 10v10a1 1 0 001 1h3m10-11l2 2m-2-2v10a1 1 0 01-1 1h-3m-6 0a1 1 0 001-1v-4a1 1 0 011-1h2a1 1 0 011 1v4a1 1 0 001 1m-6 0h6" />
                          </svg>

                        <p>Lives in 
                            <span class="font-bold hover:underline hover:cursor-pointer">Colombo, Sri Lanka
                            </span>
                        </p>
                    </div>

                    <div class="flex items-center mt-2">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 mr-5" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 5c7.18 0 13 5.82 13 13M6 11a7 7 0 017 7m-6 0a1 1 0 11-2 0 1 1 0 012 0z" />
                          </svg>
                        <p>Followed by 
                            <span class="font-bold hover:underline hover:cursor-pointer">2,646 people
                            </span>
                        </p>
                    </div>

                    <button
                        class="mt-3 w-full justify-center group relative py-2 px-4 border border-transparent text-sm font-medium rounded-md text-black bg-gray-100 hover:bg-gray-200 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-gray-300">
                        Edit Details
                    </button>
            </div>
            <div class="col-span-8 h-fit p-6  bg-white border-b border-gray-200 rounded-2xl">
                <x-create-post/>
            </div>
        </div>

    </div>
    
</x-app-layout>
