

    <form action="{{ route('posts.store')}}" method="POST">

        @csrf

        <div class="space-y-2">
            <div class="flex">
                <img src="https://i.pravatar.cc/150?img=31" alt="default img" class="h-12 w-12 rounded-full" />

                <textarea class="ml-3 mt-1 block w-full rounded-md bg-gray-100 border-transparent resize-none" rows="3"
                    spellcheck="false" placeholder="What's on your mind Chamathka" name="body" required></textarea>
            </div>

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
                      <option value="1">Public</option>
                      <option value="0">Only me</option>              
                    </select>
                  </label>



                <button type="submit"
                    class="inline-flex items-center px-4 py-2 border border-transparent rounded-md shadow-sm text-sm font-medium text-white bg-indigo-600 hover:bg-indigo-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500">
                    Publish
                </button>
            </div>

        </div>

    </form>
