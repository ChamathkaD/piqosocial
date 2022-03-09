<div class="bg-white p-5 basis-2/6 border-r-2 shadow-md rounded-l-md">

    <h1 class="text-2xl font-bold mb-3">About</h1>

    <ul class="font-semibold text-slate-600 space-y-2">
        <a href="{{ route('profile.about.overview') }}">
            <li class="hover:bg-gray-100 py-2 rounded -ml-2 pl-2">
                Overview
            </li>
        </a>
        <a href="{{ route('works.create') }}">
            <li class="hover:bg-gray-100 py-2 rounded -ml-2 pl-2">
                Work and Education
            </li>
        </a>
        <a href="{{ route('addresses.create')}}">
            <li class="hover:bg-gray-100 py-2 rounded -ml-2 pl-2">
                Places Lived
            </li>
        </a>
        <a href="{{ route('profile.contact.update')}}">
            <li class="hover:bg-gray-100 py-2 rounded -ml-2 pl-2">
                Contact & Basic Info
            </li>
        </a>
        <a href="{{ route('profile.about.about-details') }}">
            <li class="hover:bg-gray-100 py-2 rounded -ml-2 pl-2">
                Details About You
            </li>
        </a>
        <a href="{{ route('profile.update.password') }}">
            <li class="hover:bg-gray-100 py-2 rounded -ml-2 pl-2">
                Manage Password
            </li>
        </a>
    </ul>

</div>
