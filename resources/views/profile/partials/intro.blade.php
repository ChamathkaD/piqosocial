<div>
    <h1 class="text-2xl font-bold mb-3">Intro</h1>

    <small class="text-sm text-gray-500 text-center">
        {{ $user->bio }}
    </small>

    <ul class="space-y-2 py-5">

        @foreach ($user->works as $work)
            <x-profile.intro-list-item>
                <x-slot:icon>
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 text-gray-500" viewBox="0 0 20 20" fill="currentColor">
                        <path fill-rule="evenodd" d="M6 6V5a3 3 0 013-3h2a3 3 0 013 3v1h2a2 2 0 012 2v3.57A22.952 22.952 0 0110 13a22.95 22.95 0 01-8-1.43V8a2 2 0 012-2h2zm2-1a1 1 0 011-1h2a1 1 0 011 1v1H8V5zm1 5a1 1 0 011-1h.01a1 1 0 110 2H10a1 1 0 01-1-1z" clip-rule="evenodd" />
                        <path d="M2 13.692V16a2 2 0 002 2h12a2 2 0 002-2v-2.308A24.974 24.974 0 0110 15c-2.796 0-5.487-.46-8-1.308z" />
                    </svg>
                </x-slot>

                <p>{{ $work->position }} at <span class="font-semibold hover:underline hover:cursor-pointer"> {{ $work->company }}</span></p>
            </x-profile.intro-list-item>
        @endforeach

        @foreach ($user->educations as $education)
            <x-profile.intro-list-item>
                <x-slot:icon>
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 text-gray-500" viewBox="0 0 20 20" fill="currentColor">
                        <path
                            d="M10.394 2.08a1 1 0 00-.788 0l-7 3a1 1 0 000 1.84L5.25 8.051a.999.999 0 01.356-.257l4-1.714a1 1 0 11.788 1.838L7.667 9.088l1.94.831a1 1 0 00.787 0l7-3a1 1 0 000-1.838l-7-3zM3.31 9.397L5 10.12v4.102a8.969 8.969 0 00-1.05-.174 1 1 0 01-.89-.89 11.115 11.115 0 01.25-3.762zM9.3 16.573A9.026 9.026 0 007 14.935v-3.957l1.818.78a3 3 0 002.364 0l5.508-2.361a11.026 11.026 0 01.25 3.762 1 1 0 01-.89.89 8.968 8.968 0 00-5.35 2.524 1 1 0 01-1.4 0zM6 18a1 1 0 001-1v-2.065a8.935 8.935 0 00-2-.712V17a1 1 0 001 1z" />
                    </svg>
                </x-slot>

                <p>Studied at <span class="font-semibold hover:underline hover:cursor-pointer">{{ $education->name }}</span></p>
            </x-profile.intro-list-item>
        @endforeach

        @if ($user->address)
        <x-profile.intro-list-item>
            <x-slot:icon>
                <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 text-gray-500" viewBox="0 0 20 20" fill="currentColor">
                    <path d="M10.707 2.293a1 1 0 00-1.414 0l-7 7a1 1 0 001.414 1.414L4 10.414V17a1 1 0 001 1h2a1 1 0 001-1v-2a1 1 0 011-1h2a1 1 0 011 1v2a1 1 0 001 1h2a1 1 0 001-1v-6.586l.293.293a1 1 0 001.414-1.414l-7-7z" />
                </svg>
            </x-slot>

            <p>Lives in<span class="font-semibold hover:underline hover:cursor-pointer"> {{ $user->address->city }}, Sri Lanka</span></p>
        </x-profile.intro-list-item>
        @endif

        <x-profile.intro-list-item>
            <x-slot:icon>
                <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 text-gray-500" viewBox="0 0 20 20" fill="currentColor">
                    <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm1-12a1 1 0 10-2 0v4a1 1 0 00.293.707l2.828 2.829a1 1 0 101.415-1.415L11 9.586V6z" clip-rule="evenodd" />
                </svg>
            </x-slot>

            <p>Joined March {{ $user->created_at->format('Y') }}</p>
        </x-profile.intro-list-item>

        <x-profile.intro-list-item>
            <x-slot:icon>
                <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 text-gray-500" viewBox="0 0 20 20" fill="currentColor">
                    <path d="M5 3a1 1 0 000 2c5.523 0 10 4.477 10 10a1 1 0 102 0C17 8.373 11.627 3 5 3z" />
                    <path d="M4 9a1 1 0 011-1 7 7 0 017 7 1 1 0 11-2 0 5 5 0 00-5-5 1 1 0 01-1-1zM3 15a2 2 0 114 0 2 2 0 01-4 0z" />
                </svg>
            </x-slot>

            <p>Followed by <span class="font-semibold hover:underline hover:cursor-pointer"> 131 people</span></p>
        </x-profile.intro-list-item>

    </ul>

    @if ($user->hobbies->count())
        
        <h2 class="font-semibold text-lg">Hobbies</h2>

        <div class="flex flex-wrap gap-3 my-3">

            @foreach ($user->hobbies as $hobby)
                <x-hobby-item>
                    {{ $hobby->name }}
                </x-hobby-item>
            @endforeach
            
        </div>

    @endif

    @if ($user->languages->count())
        
        <h2 class="font-semibold text-lg">Languages</h2>

        <div class="flex flex-wrap gap-3 my-3">

            @foreach ($user->languages as $language)
                <x-hobby-item class="bg-indigo-50 hover:bg-indigo-100 border-indigo-100">
                    {{ $language->name }}
                </x-hobby-item>
            @endforeach
            
        </div>

    @endif

</div>