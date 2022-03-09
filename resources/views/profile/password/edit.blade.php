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

                    <h3 class="font-semibold">Update Your Password</h3>

                    <form action="{{ route('profile.update.password') }}" method="POST" class="py-3 space-y-3">

                        @csrf

                        @method('PUT')

                        <div>
                            <x-label for="current_password" :value="__('Current Password')" />

                            <x-input id="current_password" class="block mt-1 w-full" type="password" name="current_password"
                                :value="old('current_password')" />
                            <x-error value="current_password" /> 
                        </div>

                        <div>
                            <x-label for="password" :value="__('New Password')" />

                            <x-input id="password" class="block mt-1 w-full" type="password" name="password"
                                :value="old('password')" />
                            <x-error value="password" />
                        </div>

                        <div>
                            <x-label for="password_confirmation" :value="__('Confirm New Password')" />

                            <x-input id="password_confirmation" class="block mt-1 w-full" type="password" name="password_confirmation"
                                :value="old('current_password')" />
                        </div>

                        <div class="flex justify-end">

                            <x-button>Upadate Password</x-button>

                        </div>

                    </form>

                </div>

            </div>

        </div>

    </div>

</x-app-layout>