<x-app-layout>

    <div class="max-w-6xl mx-auto sm:px-6 lg:px-8">
        <div class="relative ">
            <img src="{{ asset('img/cover.jpg') }}" alt="default img" class="rounded-b-lg h-96 w-full object-center" />

            <div>
                <button
                    class="absolute bottom-5 right-10  inline-flex items-center px-4 py-2 border border-transparent rounded-md shadow-sm text-sm font-medium text-black bg-gray-50 hover:bg-gray-100 focus:outline-non">

                    <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 mr-2" fill="none" viewBox="0 0 24 24"
                        stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M3 9a2 2 0 012-2h.93a2 2 0 001.664-.89l.812-1.22A2 2 0 0110.07 4h3.86a2 2 0 011.664.89l.812 1.22A2 2 0 0018.07 7H19a2 2 0 012 2v9a2 2 0 01-2 2H5a2 2 0 01-2-2V9z" />
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M15 13a3 3 0 11-6 0 3 3 0 016 0z" />
                    </svg>
                    Edit Cover Photo
                </button>
            </div>

        </div>

        <div class="relative flex justify-between items-center">
            <div class="flex">
                <img src="https://i.pravatar.cc/150?img=31" alt="default img"
                    class="h-15 w-15 rounded-full ml-10 -mt-10 ring-4 ring-white" />

                <div class="ml-3 mt-3 space-y-1">
                    <h2 class="text-3xl font-black">Chamathka Dissanayaka</h2>
                    <p class="text-gray-500 font-semibold">1.8K Friends</p>
                    <div class="flex -space-x-1 overflow-hidden">
                        <img class="inline-block h-8 w-8 rounded-full ring-2 ring-white"
                            src="https://images.unsplash.com/photo-1491528323818-fdd1faba62cc?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=facearea&facepad=2&w=256&h=256&q=80"
                            alt="">
                        <img class="inline-block h-8 w-8 rounded-full ring-2 ring-white"
                            src="https://images.unsplash.com/photo-1550525811-e5869dd03032?ixlib=rb-1.2.1&auto=format&fit=facearea&facepad=2&w=256&h=256&q=80"
                            alt="">
                        <img class="inline-block h-8 w-8 rounded-full ring-2 ring-white"
                            src="https://images.unsplash.com/photo-1500648767791-00dcc994a43e?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=facearea&facepad=2.25&w=256&h=256&q=80"
                            alt="">
                        <img class="inline-block h-8 w-8 rounded-full ring-2 ring-white"
                            src="https://images.unsplash.com/photo-1472099645785-5658abf4ff4e?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=facearea&facepad=2&w=256&h=256&q=80"
                            alt="">
                        <img class="inline-block h-8 w-8 rounded-full ring-2 ring-white"
                            src="https://images.unsplash.com/photo-1491528323818-fdd1faba62cc?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=facearea&facepad=2&w=256&h=256&q=80"
                            alt="">
                        <img class="inline-block h-8 w-8 rounded-full ring-2 ring-white"
                            src="https://images.unsplash.com/photo-1550525811-e5869dd03032?ixlib=rb-1.2.1&auto=format&fit=facearea&facepad=2&w=256&h=256&q=80"
                            alt="">
                        <img class="inline-block h-8 w-8 rounded-full ring-2 ring-white"
                            src="https://images.unsplash.com/photo-1500648767791-00dcc994a43e?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=facearea&facepad=2.25&w=256&h=256&q=80"
                            alt="">
                        <img class="inline-block h-8 w-8 rounded-full ring-2 ring-white"
                            src="https://images.unsplash.com/photo-1472099645785-5658abf4ff4e?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=facearea&facepad=2&w=256&h=256&q=80"
                            alt="">
                    </div>
                </div>
            </div>

            <button
                class="inline-flex items-center px-4 py-2 border border-transparent rounded-md shadow-sm text-sm text-white font-semibold bg-indigo-500 hover:bg-indigo-600 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500">

                <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 mr-2" fill="none" viewBox="0 0 24 24"
                    stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                        d="M11 5H6a2 2 0 00-2 2v11a2 2 0 002 2h11a2 2 0 002-2v-5m-1.414-9.414a2 2 0 112.828 2.828L11.828 15H9v-2.828l8.586-8.586z" />
                </svg>
                Edit Profile
            </button>
        </div>

        <div class="mt-5">
            <hr>

            <div class="mt-5 hidden justify-between items-center w-full md:flex md:w-auto md:order-1"
                id="mobile-menu-4">
                <ul class="flex flex-col mt-4 md:flex-row md:space-x-8 md:mt-0 md:text-base md:font-medium font-bold ">
                    <li class="hover:bg-gray-200">
                        <a href="#"
                            class="m-2 block text-white bg-blue-700 rounded md:bg-transparent md:text-blue-700 md:p-0 dark:text-white"
                            aria-current="page">Posts</a>
                    </li>

                    <li class="hover:bg-gray-200">
                        <a href="#"
                            class="m-2 block py-2 pr-4 pl-3 text-gray-700 border-b border-gray-100 hover:bg-gray-50 md:hover:bg-transparent md:border-0 md:hover:text-blue-700 md:p-0 md:dark:hover:text-white dark:text-gray-400 dark:hover:bg-gray-700 dark:hover:text-white md:dark:hover:bg-transparent dark:border-gray-700">About</a>
                    </li>

                    <li class="hover:bg-gray-200">
                        <a href="#"
                            class="m-2 block py-2 pr-4 pl-3 text-gray-700 border-b border-gray-100 hover:bg-gray-50 md:hover:bg-transparent md:border-0 md:hover:text-blue-700 md:p-0 md:dark:hover:text-white dark:text-gray-400 dark:hover:bg-gray-700 dark:hover:text-white md:dark:hover:bg-transparent dark:border-gray-700">Friends</a>
                    </li>

                    <li class="hover:bg-gray-200">
                        <a href="#"
                            class="m-2 block py-2 pr-4 pl-3 text-gray-700 border-b border-gray-100 hover:bg-gray-50 md:hover:bg-transparent md:border-0 md:hover:text-blue-700 md:p-0 md:dark:hover:text-white dark:text-gray-400 dark:hover:bg-gray-700 dark:hover:text-white md:dark:hover:bg-transparent dark:border-gray-700">Photos</a>
                    </li>

                    <li class="hover:bg-gray-200">
                        <a href="#"
                            class="m-2 block py-2 pr-4 pl-3 text-gray-700 border-b border-gray-100 hover:bg-gray-50 md:hover:bg-transparent md:border-0 md:hover:text-blue-700 md:p-0 md:dark:hover:text-white dark:text-gray-400 dark:hover:bg-gray-700 dark:hover:text-white md:dark:hover:bg-transparent dark:border-gray-700">Videos</a>
                    </li>

                </ul>
            </div>
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
            <div class="col-span-8 h-fit p-6  bg-white border-b border-gray-200 rounded-2xl">hii</div>
        </div>

    </div>

    </div>
</x-app-layout>
