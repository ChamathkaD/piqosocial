<div class="mt-5 hidden justify-between items-center w-full md:flex md:w-auto md:order-1">
    <ul class="flex flex-col mt-4 md:flex-row md:space-x-5 md:mt-0 md:text-base font-semibold">
        <a href="{{ route('profile.index') }}" class="hover:bg-gray-200 rounded-md">
            <li class="m-2 block rounded md:bg-transparent text-slate-600 md:p-0">
                Posts
            </li>
        </a>

        <a href="{{ route('profile.about.overview') }}" class="hover:bg-gray-200 rounded-md">
            <li class="m-2 block rounded md:bg-transparent text-slate-600 md:p-0">
                About
            </li>
        </a>

        <a href="{{ route('profile.friends') }}" class="hover:bg-gray-200 rounded-md">
            <li class="m-2 block rounded md:bg-transparent text-slate-600 md:p-0">
                Friends
            </li>
        </a>

        <a href="{{ route('photos.index') }}" class="hover:bg-gray-200 rounded-md">
            <li class="m-2 block rounded md:bg-transparent text-slate-600 md:p-0">
                Photos
            </li>
        </a>

        <a href="{{ route('profile.videos') }}" class="hover:bg-gray-200 rounded-md">
            <li class="m-2 block rounded md:bg-transparent text-slate-600 md:p-0">
                Videos
            </li>
        </a>

    </ul>
</div>