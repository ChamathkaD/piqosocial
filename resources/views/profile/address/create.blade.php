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

                    <h3 class="font-semibold">Address</h3>

                    <form action="{{ route('addresses.update') }}" method="POST" class="py-3 space-y-3">

                        @csrf

                        @method('PUT')

                        <!-- Address -->
                        <div>
                            <x-label for="address" :value="__('Address')" />

                            <x-input id="address" class="block mt-1 w-full" type="text" name="address"
                                :value="old('address', $address->address ?? null)" />

                            <x-error value="address" />
                        </div>

                          <!-- City -->
                          <div>
                            <x-label for="city" :value="__('City')" />

                            <x-input id="city" class="block mt-1 w-full" type="text" name="city"
                                :value="old('city', $address->city ?? null)" />

                            <x-error value="city" />
                        </div>

                         <!-- Zip -->
                         <div>
                            <x-label for="zip" :value="__('Zip')" />

                            <x-input id="zip" class="block mt-1 w-full" type="text" name="zip"
                                :value="old('zip', $address->zip ?? null)" />

                            <x-error value="zip" />
                        </div>

                        
                        <div class="flex justify-start space-x-5 items-center">

                            <!-- Status -->
                            <div class="inline-flex space-x-4">
                                <label class="flex items-center">
                                    <x-radio-button name="status" value="1" :checked="$address ? $address->status == 1 : null" />
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
                                    <x-radio-button name="status" value="0" :checked="$address ? $address->status == 0 : null" />
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

                            <x-button>Save Address</x-button>

                        </div>

                    </form>

                </div>

            </div>

        </div>

    </div>

</x-app-layout>


