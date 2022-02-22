<x-dropdown align="right" width="96">

    <x-slot name="trigger">
        <button
            class="flex items-center text-sm font-medium text-gray-500 hover:text-gray-700 hover:border-gray-300 focus:outline-none focus:text-gray-700 focus:border-gray-300 transition duration-150 ease-in-out">


            <div class="flex flex-row items-center space-x-4">
                <img src="https://i.pravatar.cc/150?img=31" alt="default img" class="h-8 w-8 rounded-full" />
            </div>
        </button>
    </x-slot>

    <x-slot name="content">

        <div>
            <x-dropdown-link>
                <div class="flex items-center ">
                    <img src="https://i.pravatar.cc/150?img=31" alt="default img" class="h-12 w-12 rounded-full" />
                    <div class="ml-2">
                        <h3 class="font-bold">Chamayhka Dissanayaka</h3>
                        <p class="text-xs font-bold text-gray-400">See Your Profile</p>
                    </div>
                </div>
            </x-dropdown-link>
        </div>

        <!-- Authentication -->
        <form method="POST" action="{{ route('logout') }}">
            @csrf

            <x-dropdown-link :href="route('logout')" onclick="event.preventDefault();
                                this.closest('form').submit();">

                <div class="flex">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24"
                        stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M17 16l4-4m0 0l-4-4m4 4H7m6 4v1a3 3 0 01-3 3H6a3 3 0 01-3-3V7a3 3 0 013-3h4a3 3 0 013 3v1" />
                    </svg>

                    <span class="ml-2">
                        {{ __('Log Out') }}
                    </span>
                </div>
            </x-dropdown-link>

        </form>

    </x-slot>
    
</x-dropdown>