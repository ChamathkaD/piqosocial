<x-app-layout>

    <div class="max-w-[50%] mx-auto py-3">

        <x-post>

            <x-slot:heading>
                <x-post.heading :post="$post" :routeName="'posts'" />
            </x-slot>
        
            <div>
               
                <form action="{{ route('posts.update', $post->id)}}" method="POST">

                @csrf

                @method('PUT')

                <div class="space-y-2">
                    
                    <textarea class="ml-3 mt-1 block w-full rounded-md bg-gray-100 border-transparent resize-none" rows="3"
                    spellcheck="false" name="body" required>{{ $post->body }}</textarea>

                    <div class="flex justify-end items-center">

                        <label class="block mr-2">

                            <select name="status" class="
                                    text-sm
                                    py-2
                                    block
                                    w-full
                                    mt-1
                                    rounded-md
                                    bg-gray-100
                                    border-indigo-600
                                    focus:border-indigo-700 focus:bg-white focus:ring-0
                                ">
                                <option value="1" @selected($post->status == 1)>Public</option>
                                <option value="0" @selected($post->status == 0)>Only me</option>
                            </select>
                        </label>

                        <button type="submit"
                            class="inline-flex items-center px-4 py-2 border border-transparent rounded-md shadow-sm text-sm font-medium text-white bg-indigo-600 hover:bg-indigo-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500">
                            Update Post
                        </button>
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