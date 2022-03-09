<form action="{{ route('posts.store')}}" method="POST" enctype="multipart/form-data">

    @csrf

    <div class="space-y-2">
        <div class="flex">
            <img src="{{ Auth::user()->profile_photo_url }}" alt="default img" class="h-12 w-12 rounded-full" />

            <textarea class="ml-3 mt-1 block w-full rounded-md bg-gray-100 border-transparent resize-none" rows="3"
                spellcheck="false" placeholder="What's on your mind {{ Auth::user()->fullname }}..." name="body" required></textarea>
        </div>

        <div class="flex justify-end items-center space-x-2">

            <label for="photo" class="relative inline-flex items-center px-4 py-2 bg-yellow-500 border border-transparent rounded-md font-semibold text-xs text-white uppercase tracking-widest hover:bg-yellow-600 active:bg-yellow-700 focus:outline-none focus:border-yellow-600 focus:ring ring-yellow-300 disabled:opacity-25 transition ease-in-out duration-150">
                <div class="flex items-center">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 mr-1" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M4 16l4.586-4.586a2 2 0 012.828 0L16 16m-2-2l1.586-1.586a2 2 0 012.828 0L20 14m-6-6h.01M6 20h12a2 2 0 002-2V6a2 2 0 00-2-2H6a2 2 0 00-2 2v12a2 2 0 002 2z" />
                      </svg>
                    <span>Photo</span>
                </div>
                <input id="photo" name="photo" type="file" class="sr-only">
              </label>

            {{-- <label for="file-upload" class="relative inline-flex items-center px-4 py-2 bg-purple-500 border border-transparent rounded-md font-semibold text-xs text-white uppercase tracking-widest hover:bg-purple-600 active:bg-purple-700 focus:outline-none focus:border-purple-600 focus:ring ring-purple-300 disabled:opacity-25 transition ease-in-out duration-150">
                <div class="flex items-center">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 mr-1" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M7 4v16M17 4v16M3 8h4m10 0h4M3 12h18M3 16h4m10 0h4M4 20h16a1 1 0 001-1V5a1 1 0 00-1-1H4a1 1 0 00-1 1v14a1 1 0 001 1z" />
                      </svg>
                    <span>Video</span>
                </div>
            <input id="file-upload" name="photo" type="file" class="sr-only">
            </label> --}}

            <label class="block">

                <select name="status" class="
                        text-xs
                        block
                        w-full
                        rounded-md
                        bg-gray-100
                        border-indigo-600
                        focus:border-indigo-700 focus:bg-white focus:ring-0
                      ">
                    <option value="1">Public</option>
                    <option value="0">Only me</option>
                </select>
            </label>

            <x-button
                class="bg-indigo-600 hover:bg-indigo-700 focus:ring-indigo-500">
                Publish
            </x-button>
        </div>

    </div>

</form>