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

                    <h3 class="font-semibold">Contact Information</h3>

                    <form action="{{ route('profile.contact.update') }}" class="py-3 space-y-3" method="POST">

                        @csrf

                        @method('PUT')

                        <!-- Phone -->
                        <div>
                            <x-label for="phone" :value="__('Phone')" />

                            <x-input id="phone" class="block mt-1 w-full" type="text" name="phone"
                                :value="$user->phone" required />

                            <x-error value="phone" />
                        </div>

                        <!-- Email -->
                        <div>
                            <x-label for="email" :value="__('Email')" />

                            <x-input id="email" class="block mt-1 w-full" type="email" name="email"
                                :value="$user->email" required />

                            <x-error value="email" />
                        </div>

                        <h3 class="font-semibold">Gender</h3>

                        <!-- Gender -->
                        <div>
                            <x-label for="gender" :value="__('Gender')" />

                            <x-select id="gender" class="block mt-1 w-full" name="gender">
                                <option value="Male" @selected($user->gender == "Male")>Male</option>
                                <option value="Female" @selected($user->gender == "Female")>Female</option>
                                <option value="Other" @selected($user->gender == "Other")>Other</option>
                            </x-select>

                            <x-error value="gender" />
                        </div>

                        <div class="flex justify-end">

                            <x-button>Save Info</x-button>

                        </div>

                    </form>

                </div>

                <div>

                    <h3 class="font-semibold mb-2">Languages</h3>

                    <div class="flex flex-wrap gap-3">

                        @foreach ($user->languages as $language)
                            <form method="POST" action="{{ route('languages.destroy', $language->id) }}">
                                @csrf
                                @method('DELETE')
                                <x-hobby-item class="bg-indigo-50 hover:bg-red-300 border-indigo-100 font-normal">
                                    <button type="submit" class="flex items-center space-x-1 -ml-1">
                                        <div class="rounded-full bg-red-500 p-1">
                                            <svg xmlns="http://www.w3.org/2000/svg" class="h-3 w-3 text-white" viewBox="0 0 20 20" fill="currentColor">
                                                <path fill-rule="evenodd" d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z" clip-rule="evenodd" />
                                              </svg>
                                        </div>
                                        <div>
                                            {{ $language->name }}
                                        </div>
                                    </button>
                                </x-hobby-item>
                            </form>
                        @endforeach
                        
                    </div>

                    <form action="{{ route('languages.store') }}" method="POST" class="space-y-3">

                        @csrf

                        <!-- Language -->
                        <div>
                            <x-label for="languages" :value="__('Language')" />

                            <x-select id="languages" class="block mt-1 w-full" name="languages[]" multiple>
                                @foreach ($languages as $language)
                                    <option value="{{ $language->id }}">{{ $language->name }}</option>
                                @endforeach
                            </x-select>
                        </div>

                        <div class="flex justify-end">

                            <x-button>Set Languages</x-button>

                        </div>

                    </form>

                </div>

                <div>

                    <h3 class="font-semibold mb-2">Hobbies</h3>

                    <div class="flex flex-wrap gap-3">

                        @foreach ($user->hobbies as $hobby)
                            <form method="POST" action="{{ route('hobbies.destroy', $hobby->id) }}">

                                @csrf
                                @method('DELETE')

                                <x-hobby-item class="bg-indigo-50 hover:bg-red-300 border-indigo-100 font-normal">
                                    <button type="submit" class="flex items-center space-x-1 -ml-1">
                                        <div class="rounded-full bg-red-500 p-1">
                                            <svg xmlns="http://www.w3.org/2000/svg" class="h-3 w-3 text-white" viewBox="0 0 20 20" fill="currentColor">
                                                <path fill-rule="evenodd" d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z" clip-rule="evenodd" />
                                              </svg>
                                        </div>
                                        <div>
                                            {{ $hobby->name }}
                                        </div>
                                    </button>
                                </x-hobby-item>
                            </form>
                        @endforeach
                        
                    </div>

                    <form action="{{ route('hobbies.store') }}" method="POST" class="space-y-3">

                        @csrf

                        <!-- Hobbies -->
                        <div>
                            <x-label for="name" :value="__('Select Your Hobbies')" />

                            <x-select id="name" class="block mt-1 w-full" name="name[]" multiple>
                                @foreach ($hobbies as $hobby)
                                    <option value="{{ $hobby->id }}">{{ $hobby->name }}</option>
                                @endforeach
                            </x-select>
                        </div>

                        <div class="flex justify-end">

                            <x-button>Set Hobbies</x-button>

                        </div>

                    </form>

                </div>

            </div>

        </div>

    </div>

</x-app-layout>