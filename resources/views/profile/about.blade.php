<x-app-layout>

    <div class="max-w-6xl mx-auto sm:px-6 lg:px-8 pb-4">

        <x-profile.header />

        <div class="my-3">
            <x-profile.navbar />
        </div>

        <div class="flex flex-row mt-4">

            @include('profile.partials.about-category')

            <div class="bg-white p-5 basis-4/6 shadow-md rounded-r-md">

                <ul class="space-y-6">

                    @if ($works->count())
                    @foreach ($works as $work)
                    <x-profile.item :data="$work">

                        <x-slot:itemIcon>
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-8 w-8 text text-gray-500"
                                viewBox="0 0 20 20" fill="currentColor">
                                <path fill-rule="evenodd"
                                    d="M6 6V5a3 3 0 013-3h2a3 3 0 013 3v1h2a2 2 0 012 2v3.57A22.952 22.952 0 0110 13a22.95 22.95 0 01-8-1.43V8a2 2 0 012-2h2zm2-1a1 1 0 011-1h2a1 1 0 011 1v1H8V5zm1 5a1 1 0 011-1h.01a1 1 0 110 2H10a1 1 0 01-1-1z"
                                    clip-rule="evenodd" />
                                <path
                                    d="M2 13.692V16a2 2 0 002 2h12a2 2 0 002-2v-2.308A24.974 24.974 0 0110 15c-2.796 0-5.487-.46-8-1.308z" />
                            </svg>
                            </x-slot>

                            <p class="text-sm leading-none">{{ $work->position }} at <span
                                    class="font-semibold hover:underline hover:cursor-pointer">{{ $work->company
                                    }}</span> -
                                {{ $work->city }}
                            </p>
                            <small class="text-gray-500 font-semibold">{{ $work->year }} to present</small>
                            <small class="block text-gray-400">{{ $work->description }}</small>

                    </x-profile.item>
                    @endforeach
                    @endif

                    @if ($educations->count())
                        @foreach ($educations as $education)
                        <x-profile.item :data="$education">

                            <x-slot:itemIcon>
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-8 w-8 text text-gray-500"
                                    viewBox="0 0 20 20" fill="currentColor">
                                    <path
                                        d="M10.394 2.08a1 1 0 00-.788 0l-7 3a1 1 0 000 1.84L5.25 8.051a.999.999 0 01.356-.257l4-1.714a1 1 0 11.788 1.838L7.667 9.088l1.94.831a1 1 0 00.787 0l7-3a1 1 0 000-1.838l-7-3zM3.31 9.397L5 10.12v4.102a8.969 8.969 0 00-1.05-.174 1 1 0 01-.89-.89 11.115 11.115 0 01.25-3.762zM9.3 16.573A9.026 9.026 0 007 14.935v-3.957l1.818.78a3 3 0 002.364 0l5.508-2.361a11.026 11.026 0 01.25 3.762 1 1 0 01-.89.89 8.968 8.968 0 00-5.35 2.524 1 1 0 01-1.4 0zM6 18a1 1 0 001-1v-2.065a8.935 8.935 0 00-2-.712V17a1 1 0 001 1z" />
                                </svg>
                            </x-slot>

                            <p class="text-sm leading-none">Studied at <span class="font-semibold hover:underline hover:cursor-pointer">{{ $education->name }}</span></p>
                            <small class="font-semibold text-gray-500">Started from {{ $education->from }} to {{ $education->to }}</small>
                            <small class="block text-gray-400">{{ $education->description }}</small>

                        </x-profile.item>
                        @endforeach
                    @endif

                    @if ($address)
                        <x-profile.item :data="$education">

                            <x-slot:itemIcon>
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-8 w-8 text text-gray-500" viewBox="0 0 20 20" fill="currentColor">
                                    <path
                                        d="M10.707 2.293a1 1 0 00-1.414 0l-7 7a1 1 0 001.414 1.414L4 10.414V17a1 1 0 001 1h2a1 1 0 001-1v-2a1 1 0 011-1h2a1 1 0 011 1v2a1 1 0 001 1h2a1 1 0 001-1v-6.586l.293.293a1 1 0 001.414-1.414l-7-7z" />
                                </svg>
                            </x-slot>

                            <p>From <span class="font-semibold hover:underline hover:cursor-pointer">{{ $address->address }}, {{ $address->city }}, {{ $address->zip }}</span></p>

                        </x-profile.item>
                    @endif

                    @if (Auth::user()->phone)
                        <x-profile.item>

                            <x-slot:itemIcon>
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-8 w-8 text text-gray-500" viewBox="0 0 20 20" fill="currentColor">
                                    <path
                                        d="M2 3a1 1 0 011-1h2.153a1 1 0 01.986.836l.74 4.435a1 1 0 01-.54 1.06l-1.548.773a11.037 11.037 0 006.105 6.105l.774-1.548a1 1 0 011.059-.54l4.435.74a1 1 0 01.836.986V17a1 1 0 01-1 1h-2C7.82 18 2 12.18 2 5V3z" />
                                </svg>
                            </x-slot>

                            <p>{{ Auth::user()->phone }}</p>

                        </x-profile.item>
                    @endif
                </ul>

            </div>

        </div>

    </div>

</x-app-layout>