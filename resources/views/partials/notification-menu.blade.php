<x-dropdown align="right" width="96">

    <x-slot name="trigger">

        <div class="bg-gray-200 rounded-full p-2 hover:cursor-pointer hover:bg-gray-300">
            <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5  text-black" fill="none" viewBox="0 0 24 24"
                stroke="currentColor">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                    d="M15 17h5l-1.405-1.405A2.032 2.032 0 0118 14.158V11a6.002 6.002 0 00-4-5.659V5a2 2 0 10-4 0v.341C7.67 6.165 6 8.388 6 11v3.159c0 .538-.214 1.055-.595 1.436L4 17h5m6 0v1a3 3 0 11-6 0v-1m6 0H9" />
            </svg>
        </div>

    </x-slot>

    <x-slot name="content">

        <div class="flex justify-between items-center px-4 py-2">

            <h1 class="text-xl font-bold">Notifications</h1>

            <a href="#">
                <div class="p-2 hover:bg-gray-100 rounded-full">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" viewBox="0 0 20 20" fill="currentColor">
                        <path fill-rule="evenodd"
                            d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z"
                            clip-rule="evenodd" />
                    </svg>
                </div>
            </a>

        </div>

        <x-dropdown-link class="flex justify-center bg-indigo-100 cursor-pointer">
            <div class="flex">
                <img src="https://i.pravatar.cc/150?img=31" alt="default img" class="h-10 w-10 rounded-full" />
                <p class="ml-2 text-xs">
                    Lorem ipsum dolor sit amet consectetur, adipisicing elit. Ipsum consequuntur cupiditate,
                    alias iste voluptatibus mollitia! Libero repudiandae in harum mollitia a expedita sit
                    laboriosam soluta, recusandae animi dolorum deleniti cum.
                    <span class="block font-semibold text-xs text-blue-500">About an 1 hour ago</span>
                </p>
            </div>

            <div class="flex animate-pulse place-items-center">
                <span class="rounded-full h-3 w-3 bg-indigo-500"></span>
            </div>
        </x-dropdown-link>

        <x-dropdown-link class="flex justify-center bg-indigo-100 cursor-pointer">
            <div class="flex">
                <img src="https://i.pravatar.cc/150?img=31" alt="default img" class="h-10 w-10 rounded-full" />
                <div>
                    <p class="ml-2 text-xs">
                        Lorem ipsum dolor sit amet consectetur, adipisicing elit. Ipsum consequuntur cupiditate,
                        alias iste voluptatibus mollitia! Libero repudiandae in harum mollitia a expedita sit
                        laboriosam soluta, recusandae animi dolorum deleniti cum.
                        <span class="block font-semibold text-xs text-blue-500">About an 1 hour ago</span>
                    </p>
                </div>
            </div>

            <div class="flex animate-pulse place-items-center">
                <span class="rounded-full h-3 w-3 bg-indigo-500"></span>
            </div>
        </x-dropdown-link>

        <x-dropdown-link class="flex justify-center bg-indigo-100 cursor-pointer">
            <div class="flex">
                <img src="https://i.pravatar.cc/150?img=31" alt="default img" class="h-10 w-10 rounded-full" />
                <div>
                    <div class="ml-2">
                        <p class="text-xs">
                            Lorem ipsum dolor sit amet consectetur, adipisicing elit. Ipsum consequuntur cupiditate,
                            alias iste voluptatibus mollitia! Libero repudiandae in harum mollitia a expedita sit
                            laboriosam soluta, recusandae animi dolorum deleniti cum.
                            <span class="block font-semibold text-xs text-blue-500">About an 1 hour ago</span>
                        </p>
                    </div>
                </div>
            </div>

            <div class="flex animate-pulse place-items-center">
                <span class="rounded-full h-3 w-3 bg-indigo-500"></span>
            </div>
        </x-dropdown-link>

        <x-dropdown-link class="text-center font-bold text-blue-500 cursor-pointer">
            See all notifications
        </x-dropdown-link>

    </x-slot>

</x-dropdown>