<x-app-layout>

    <div class="max-w-6xl mx-auto sm:px-6 lg:px-8 pb-20">

        <x-profile.header />

        <div class="my-3">
            <x-profile.navbar />
        </div>

        <div class="flex flex-row mt-4">

            @include('profile.partials.about-category')

            <div class="bg-white p-5 basis-4/6 shadow-md rounded-r-md space-y-10">

                <div>

                    <h3 class="font-semibold">Work</h3>

                    <form action="{{ route('works.store') }}" class="py-3 space-y-3" method="POST">

                        @csrf

                        <!-- Company -->
                        <div>
                            <x-label for="company" :value="__('Company')" />

                            <x-input id="company" class="block mt-1 w-full" type="text" name="company"
                                :value="old('company')" />

                            <x-error value="company" />
                        </div>

                        <!-- Position -->
                        <div>
                            <x-label for="position" :value="__('Position')" />

                            <x-input id="position" class="block mt-1 w-full" type="text" name="position"
                                :value="old('position')" />

                            <x-error value="position" />
                        </div>

                        <!-- City -->
                        <div>
                            <x-label for="city" :value="__('City')" />

                            <x-input id="city" class="block mt-1 w-full" type="text" name="city" :value="old('city')" />

                            <x-error value="city" />
                        </div>

                        <!-- Description -->
                        <div>
                            <x-label for="description" :value="__('Description')" />

                            <x-textarea id="description" class="block mt-1 w-full" name="description">{{
                                old('description') }}</x-textarea>

                            <x-error value="description" />
                        </div>

                        <div class="flex justify-start space-x-5 items-center">

                            <!-- From -->
                            <div>
                                <x-label for="year" :value="__('From')" />

                                <x-input id="year" class="block mt-1 w-full" type="text" name="year"
                                    :value="old('year')" />

                                <x-error value="year" />
                            </div>

                            <!-- Status -->
                            <div class="inline-flex space-x-4">
                                <label class="flex items-center">
                                    <x-radio-button name="status" value="1" checked/>
                                    <span class="flex ml-2 items-center">
                                        <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 mr-2 text-gray-600"
                                            viewBox="0 0 20 20" fill="currentColor">
                                            <path fill-rule="evenodd"
                                                d="M10 18a8 8 0 100-16 8 8 0 000 16zM4.332 8.027a6.012 6.012 0 011.912-2.706C6.512 5.73 6.974 6 7.5 6A1.5 1.5 0 019 7.5V8a2 2 0 004 0 2 2 0 011.523-1.943A5.977 5.977 0 0116 10c0 .34-.028.675-.083 1H15a2 2 0 00-2 2v2.197A5.973 5.973 0 0110 16v-2a2 2 0 00-2-2 2 2 0 01-2-2 2 2 0 00-1.668-1.973z"
                                                clip-rule="evenodd" />
                                        </svg>
                                        <span>Public</span>
                                    </span>
                                </label>

                                <label class="flex items-center">
                                    <x-radio-button name="status" value="0" />
                                    <span class="flex ml-2 items-center">
                                        <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 mr-2 text-gray-600"
                                            viewBox="0 0 20 20" fill="currentColor">
                                            <path fill-rule="evenodd"
                                                d="M5 9V7a5 5 0 0110 0v2a2 2 0 012 2v5a2 2 0 01-2 2H5a2 2 0 01-2-2v-5a2 2 0 012-2zm8-2v2H7V7a3 3 0 016 0z"
                                                clip-rule="evenodd" />
                                        </svg>
                                        <span>Only Me</span>
                                    </span>
                                </label>
                            </div>

                            <x-error value="status" />

                        </div>

                        <hr>

                        <div class="flex justify-end">

                            <x-button>Add New Work</x-button>

                        </div>

                    </form>

                    <div>

                        @if ($works->count())
                            <ul class="space-y-6">

                                @foreach ($works as $work)

                                    <x-profile.actions-bar :data="$work" :routeName="'works'">

                                        <x-slot:actionIcon>
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
                                                class="font-semibold hover:underline hover:cursor-pointer">{{ $work->company }}</span> -
                                            {{ $work->city }}
                                        </p>
                                        <small class="text-gray-500 font-semibold">{{ $work->year }} to present</small>
                                        <small class="block text-gray-400">{{ $work->description }}</small>

                                    </x-profile.actions-bar>

                                @endforeach
                                
                            </ul>
                        @endif

                    </div>

                </div>

                <div>

                    <h3 class="font-semibold">Education</h3>

                    <form action="{{ route('educations.store') }}" method="POST" class="py-3 space-y-3">

                        @csrf

                        <!-- School -->
                        <div>
                            <x-label for="type" :value="__('Type of your School')" />

                            <x-select id="type" class="block mt-1 w-full" name="type">
                                <option value="School">School</option>
                                <option value="High School">High School</option>
                                <option value="University">University</option>
                            </x-select>

                            <x-error value="type" />
                        </div>

                        <!-- School -->
                        <div>
                            <x-label for="name" :value="__('School')" />

                            <x-input id="name" class="block mt-1 w-full" type="text" name="name"
                                :value="old('name')" />

                            <x-error value="name" />
                        </div>

                        <div class="flex flex-row space-x-2">

                            <!-- From -->
                            <div class="basis-1/2">
                                <x-label for="from" :value="__('From')" />

                                <x-input id="from" class="block mt-1 w-full" type="text" name="from"
                                    :value="old('from')" />

                                <x-error value="from" />
                            </div>

                            <!-- To -->
                            <div class="basis-1/2">
                                <x-label for="to" :value="__('To')" />

                                <x-input id="to" class="block mt-1 w-full" type="text" name="to" :value="old('to')" />

                                <x-error value="to" />
                            </div>

                        </div>

                        <!-- Description -->
                        <div>
                            <x-label for="description" :value="__('Description')" />

                            <x-textarea id="description" class="block mt-1 w-full" name="description">{{
                                old('description') }}</x-textarea>

                            <x-error value="description" />
                        </div>

                        <!-- Status -->
                        <div>
                            <div class="inline-flex space-x-4">
                                <label class="flex items-center">
                                    <x-radio-button name="status" checked value="1" />
                                    <span class="flex ml-2 items-center">
                                        <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 mr-2 text-gray-600"
                                            viewBox="0 0 20 20" fill="currentColor">
                                            <path fill-rule="evenodd"
                                                d="M10 18a8 8 0 100-16 8 8 0 000 16zM4.332 8.027a6.012 6.012 0 011.912-2.706C6.512 5.73 6.974 6 7.5 6A1.5 1.5 0 019 7.5V8a2 2 0 004 0 2 2 0 011.523-1.943A5.977 5.977 0 0116 10c0 .34-.028.675-.083 1H15a2 2 0 00-2 2v2.197A5.973 5.973 0 0110 16v-2a2 2 0 00-2-2 2 2 0 01-2-2 2 2 0 00-1.668-1.973z"
                                                clip-rule="evenodd" />
                                        </svg>
                                        <span>Public</span>
                                    </span>
                                </label>

                                <label class="flex items-center">
                                    <x-radio-button name="status" value="0"/>
                                    <span class="flex ml-2 items-center">
                                        <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 mr-2 text-gray-600"
                                            viewBox="0 0 20 20" fill="currentColor">
                                            <path fill-rule="evenodd"
                                                d="M5 9V7a5 5 0 0110 0v2a2 2 0 012 2v5a2 2 0 01-2 2H5a2 2 0 01-2-2v-5a2 2 0 012-2zm8-2v2H7V7a3 3 0 016 0z"
                                                clip-rule="evenodd" />
                                        </svg>
                                        <span>Only Me</span>
                                    </span>
                                </label>
                            </div>

                            <x-error value="status" />
                        </div>

                        <hr>

                        <div class="flex justify-end">

                            <x-button>Add New School</x-button>

                        </div>

                    </form>

                    <div>

                        <ul class="space-y-6">

                            @if ($schools->count())
                                <h3 class="block text-xl font-semibold text-blue-500">Schools</h3>

                                @foreach ($schools as $school)
                                
                                    <x-profile.actions-bar :data="$school" :routeName="'educations'">

                                        <x-slot:actionIcon>
                                            <svg xmlns="http://www.w3.org/2000/svg" class="h-8 w-8 text text-gray-500" viewBox="0 0 20 20" fill="currentColor">
                                                <path
                                                    d="M10.394 2.08a1 1 0 00-.788 0l-7 3a1 1 0 000 1.84L5.25 8.051a.999.999 0 01.356-.257l4-1.714a1 1 0 11.788 1.838L7.667 9.088l1.94.831a1 1 0 00.787 0l7-3a1 1 0 000-1.838l-7-3zM3.31 9.397L5 10.12v4.102a8.969 8.969 0 00-1.05-.174 1 1 0 01-.89-.89 11.115 11.115 0 01.25-3.762zM9.3 16.573A9.026 9.026 0 007 14.935v-3.957l1.818.78a3 3 0 002.364 0l5.508-2.361a11.026 11.026 0 01.25 3.762 1 1 0 01-.89.89 8.968 8.968 0 00-5.35 2.524 1 1 0 01-1.4 0zM6 18a1 1 0 001-1v-2.065a8.935 8.935 0 00-2-.712V17a1 1 0 001 1z" />
                                            </svg>
                                        </x-slot>

                                        <p class="text-sm leading-none">Studied at <span class="font-semibold hover:underline hover:cursor-pointer">{{ $school->name }}</span></p>
                                        <small class="font-semibold text-gray-500">Started from {{ $school->from }} to {{ $school->to }}</small>
                                        <small class="block text-gray-400">{{ $school->description }}</small>

                                    </x-profile.actions-bar>

                                @endforeach
                            @endif

                            @if ($highSchools->count())
                                <h3 class="block text-xl font-semibold text-blue-500">High Schools</h3>

                                @foreach ($highSchools as $highSchool)

                                    <x-profile.actions-bar :data="$highSchool" :routeName="'educations'">

                                        <x-slot:actionIcon>
                                            <svg xmlns="http://www.w3.org/2000/svg" class="h-8 w-8 text text-gray-500" viewBox="0 0 20 20" fill="currentColor">
                                                <path
                                                    d="M10.394 2.08a1 1 0 00-.788 0l-7 3a1 1 0 000 1.84L5.25 8.051a.999.999 0 01.356-.257l4-1.714a1 1 0 11.788 1.838L7.667 9.088l1.94.831a1 1 0 00.787 0l7-3a1 1 0 000-1.838l-7-3zM3.31 9.397L5 10.12v4.102a8.969 8.969 0 00-1.05-.174 1 1 0 01-.89-.89 11.115 11.115 0 01.25-3.762zM9.3 16.573A9.026 9.026 0 007 14.935v-3.957l1.818.78a3 3 0 002.364 0l5.508-2.361a11.026 11.026 0 01.25 3.762 1 1 0 01-.89.89 8.968 8.968 0 00-5.35 2.524 1 1 0 01-1.4 0zM6 18a1 1 0 001-1v-2.065a8.935 8.935 0 00-2-.712V17a1 1 0 001 1z" />
                                            </svg>
                                        </x-slot>

                                        <p class="text-sm leading-none">Studied at <span class="font-semibold hover:underline hover:cursor-pointer">{{
                                                $highSchool->name }}</span></p>
                                        <small class="font-semibold text-gray-500">Started from {{ $highSchool->from }} to {{ $highSchool->to }}</small>
                                        <small class="block text-gray-400">{{ $highSchool->description }}</small>

                                    </x-profile.actions-bar>

                                @endforeach
                            @endif

                            @if ($universities->count())
                                <h3 class="block text-xl font-semibold text-blue-500">Universities</h3>

                                @foreach ($universities as $university)

                                    <x-profile.actions-bar :data="$university" :routeName="'educations'">

                                        <x-slot:actionIcon>
                                            <svg xmlns="http://www.w3.org/2000/svg" class="h-8 w-8 text text-gray-500" viewBox="0 0 20 20" fill="currentColor">
                                                <path
                                                    d="M10.394 2.08a1 1 0 00-.788 0l-7 3a1 1 0 000 1.84L5.25 8.051a.999.999 0 01.356-.257l4-1.714a1 1 0 11.788 1.838L7.667 9.088l1.94.831a1 1 0 00.787 0l7-3a1 1 0 000-1.838l-7-3zM3.31 9.397L5 10.12v4.102a8.969 8.969 0 00-1.05-.174 1 1 0 01-.89-.89 11.115 11.115 0 01.25-3.762zM9.3 16.573A9.026 9.026 0 007 14.935v-3.957l1.818.78a3 3 0 002.364 0l5.508-2.361a11.026 11.026 0 01.25 3.762 1 1 0 01-.89.89 8.968 8.968 0 00-5.35 2.524 1 1 0 01-1.4 0zM6 18a1 1 0 001-1v-2.065a8.935 8.935 0 00-2-.712V17a1 1 0 001 1z" />
                                            </svg>
                                        </x-slot>

                                        <p class="text-sm leading-none">Studied at <span class="font-semibold hover:underline hover:cursor-pointer">{{
                                                $university->name }}</span></p>
                                        <small class="font-semibold text-gray-500">Started from {{ $university->from }} to {{ $university->to }}</small>
                                        <small class="block text-gray-400">{{ $university->description }}</small>

                                    </x-profile.actions-bar>

                                @endforeach
                            @endif

                        </ul>

                    </div>

                </div>

            </div>

        </div>

    </div>

</x-app-layout>