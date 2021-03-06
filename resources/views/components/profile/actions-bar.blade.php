<li class="flex justify-between items-start">

    <div class="flex items-start">

        <div class="p-2 bg-gray-100">
            {{ $actionIcon }}
        </div>
        <div class="ml-3 leading-none">
            {{ $slot }}
        </div>
    </div>

    <div class="flex items-center space-x-4">

        <x-profile.visibility-icon :data="$data" />


        <x-dropdown align="right" width="48">
            <x-slot name="trigger">

                <button class="flex items-center">

                    <a class="bg-gray-200 hover:bg-gray-300 p-2 rounded-full focus:border focus:border-blue-500">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24"
                            stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M5 12h.01M12 12h.01M19 12h.01M6 12a1 1 0 11-2 0 1 1 0 012 0zm7 0a1 1 0 11-2 0 1 1 0 012 0zm7 0a1 1 0 11-2 0 1 1 0 012 0z" />
                        </svg>
                    </a>

                </button>
            </x-slot>

            <x-slot name="content">

                <x-dropdown-link href="{{ route($routeName . '.edit', $data->id) }}">
                    <div class="flex justify-start items-center hover:cursor-pointer">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 mr-2" fill="none" viewBox="0 0 24 24"
                            stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M15.232 5.232l3.536 3.536m-2.036-5.036a2.5 2.5 0 113.536 3.536L6.5 21.036H3v-3.572L16.732 3.732z" />
                        </svg>
                        Edit
                    </div>
                </x-dropdown-link>

                <x-dropdown-link class="hover:bg-red-50">
                    <form action="{{ route($routeName . '.destroy', $data->id) }}" method="POST">

                        @csrf
                        @method('DELETE')

                        <button type="submit" class="flex justify-start items-center text-red-600 hover:cursor-pointer">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 text-red-600 mr-2" fill="none"
                                viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
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