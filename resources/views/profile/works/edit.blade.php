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

                    <h3 class="font-semibold">Edit Work</h3>

                    <form action="{{ route('works.update', $work->id) }}" class="py-3 space-y-3" method="POST">

                        @csrf

                        @method('PUT')

                        <!-- Company -->
                        <div>
                            <x-label for="company" :value="__('Company')" />

                            <x-input id="company" class="block mt-1 w-full" type="text" name="company"
                                :value="old('company', $work->company)" />

                            <x-error value="company" />
                        </div>

                        <!-- Position -->
                        <div>
                            <x-label for="position" :value="__('Position')" />

                            <x-input id="position" class="block mt-1 w-full" type="text" name="position"
                                :value="old('position', $work->position)" />

                            <x-error value="position" />
                        </div>

                        <!-- City -->
                        <div>
                            <x-label for="city" :value="__('City')" />

                            <x-input id="city" class="block mt-1 w-full" type="text" name="city" :value="old('city', $work->city)" />

                            <x-error value="city" />
                        </div>

                        <!-- Description -->
                        <div>
                            <x-label for="description" :value="__('Description')" />

                            <x-textarea id="description" class="block mt-1 w-full" name="description">{{
                                old('description', $work->description) }}</x-textarea>

                            <x-error value="description" />
                        </div>

                        <div class="flex justify-start space-x-5 items-center">

                            <!-- From -->
                            <div>
                                <x-label for="year" :value="__('From')" />

                                <x-input id="year" class="block mt-1 w-full" type="text" name="year"
                                    :value="old('year', $work->year)" />

                                <x-error value="year" />
                            </div>

                            <!-- Status -->
                            <div class="inline-flex space-x-4">
                                <label class="flex items-center">
                                    <x-radio-button name="status" value="1" :checked="$work->status == 1" />
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
                                    <x-radio-button name="status" value="0" :checked="$work->status == 0" />
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

                            <x-button>Update Work</x-button>

                        </div>

                    </form>

                </div>

            </div>

        </div>

    </div>

</x-app-layout>