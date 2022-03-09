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

                    <h3 class="font-semibold">Edit Education</h3>

                    <form action="{{ route('educations.update', $education->id) }}" method="POST" class="py-3 space-y-3">

                        @csrf

                        @method('PUT')

                        <!-- School -->
                        <div>
                            <x-label for="type" :value="__('Type of your School')" />

                            <x-select id="type" class="block mt-1 w-full" name="type">
                                <option @selected($education->type == "School") value="School">School</option>
                                <option @selected($education->type == "High School") value="High School">High School</option>
                                <option @selected($education->type == "University") value="University">University</option>
                            </x-select>

                            <x-error value="type" />
                        </div>

                        <!-- School -->
                        <div>
                            <x-label for="name" :value="__('School')" />

                            <x-input id="name" class="block mt-1 w-full" type="text" name="name"
                                :value="old('name', $education->name)" />

                            <x-error value="name" />
                        </div>

                        <div class="flex flex-row space-x-2">

                            <!-- From -->
                            <div class="basis-1/2">
                                <x-label for="from" :value="__('From')" />

                                <x-input id="from" class="block mt-1 w-full" type="text" name="from"
                                    :value="old('from', $education->from)" />

                                <x-error value="from" />
                            </div>

                            <!-- To -->
                            <div class="basis-1/2">
                                <x-label for="to" :value="__('To')" />

                                <x-input id="to" class="block mt-1 w-full" type="text" name="to" :value="old('to', $education->to)" />

                                <x-error value="to" />
                            </div>

                        </div>

                        <!-- Description -->
                        <div>
                            <x-label for="description" :value="__('Description')" />

                            <x-textarea id="description" class="block mt-1 w-full" name="description">{{
                                old('description', $education->description) }}</x-textarea>

                            <x-error value="description" />
                        </div>

                        <!-- Status -->
                        <div>
                            <div class="inline-flex space-x-4">
                                <label class="flex items-center">
                                    <x-radio-button name="status" value="1" :checked="$education->status == 1" />
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
                                    <x-radio-button name="status" value="0" :checked="$education->status == 0"/>
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

                            <x-button>Update Education</x-button>

                        </div>

                    </form>

                </div>

            </div>

        </div>

    </div>

</x-app-layout>