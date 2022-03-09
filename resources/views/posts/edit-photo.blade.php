<x-app-layout>

    <div class="max-w-[50%] mx-auto py-3">

        <x-post>

            <x-slot:heading>
                <x-post.heading :post="$photo" :routeName="'photos'" />
            </x-slot>
        
            <div>
               
                <form action="{{ route('photos.update', $photo->id)}}" method="POST" enctype="multipart/form-data">

                @csrf

                @method('PUT')

                <div class="space-y-2">
                    
                    <textarea class="mt-1 block w-full rounded-md bg-gray-100 border-transparent resize-none" rows="3"
                    spellcheck="false" name="body" required>{{ $photo->description }}</textarea>

                    <div class="relative">
                        <img src="{{ asset($photo->photo) }}" alt="" class="w-full rounded-lg">

                        <div class="absolute bottom-4 right-8 inline-flex">
                            <label for="photo" class="relative inline-flex items-center px-4 py-2 bg-indigo-500 border border-transparent rounded-md font-semibold text-xs text-white uppercase tracking-widest hover:bg-indigo-600 active:bg-indigo-700 focus:outline-none focus:border-indigo-600 focus:ring ring-indigo-300 disabled:opacity-25 transition ease-in-out duration-150">
                                <span>Change Photo</span>
                                <input id="photo" name="photo" type="file" class="sr-only">
                            </label>
                        </div>
                    </div>

                    <div class="flex justify-end items-center">

                        <label class="block mr-2">

                            <select name="status" class="
                                    text-xs
                                    py-2
                                    block
                                    w-full
                                    rounded-md
                                    bg-gray-100
                                    border-indigo-600
                                    focus:border-indigo-700 focus:bg-white focus:ring-0
                                ">
                                <option value="1" @selected($photo->status == 1)>Public</option>
                                <option value="0" @selected($photo->status == 0)>Only me</option>
                            </select>
                        </label>

                        <x-button
                            class="bg-indigo-600 hover:bg-indigo-700 focus:ring-indigo-500">
                            Update Post
                        </x-button>
                    </div>

                </div>

            </form>

            </div>
        
            <x-slot:icons>
                <x-post.icons />
            </x-slot>
        
            <x-slot:likes>
                <x-post.likes />
            </x-slot>
        
        </x-post>

    </div>

</x-app-layout>