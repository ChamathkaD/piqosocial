{{-- <x-guest-layout>
    <x-auth-card>
        <x-slot name="logo">
            <a href="/">
                <x-application-logo class="w-20 h-20 fill-current text-gray-500" />
            </a>
        </x-slot>

        <!-- Validation Errors -->
        <x-auth-validation-errors class="mb-4" :errors="$errors" />

        <form method="POST" action="{{ route('register') }}">
            @csrf

            <!-- Name -->
            <div>
                <x-label for="name" :value="__('Name')" />

                <x-input id="name" class="block mt-1 w-full" type="text" name="name" :value="old('name')" required autofocus />
            </div>

            <!-- Email Address -->
            <div class="mt-4">
                <x-label for="email" :value="__('Email')" />

                <x-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" required />
            </div>

            <!-- Password -->
            <div class="mt-4">
                <x-label for="password" :value="__('Password')" />

                <x-input id="password" class="block mt-1 w-full"
                                type="password"
                                name="password"
                                required autocomplete="new-password" />
            </div>

            <!-- Confirm Password -->
            <div class="mt-4">
                <x-label for="password_confirmation" :value="__('Confirm Password')" />

                <x-input id="password_confirmation" class="block mt-1 w-full"
                                type="password"
                                name="password_confirmation" required />
            </div>

            <div class="flex items-center justify-end mt-4">
                <a class="underline text-sm text-gray-600 hover:text-gray-900" href="{{ route('login') }}">
                    {{ __('Already registered?') }}
                </a>

                <x-button class="ml-4">
                    {{ __('Register') }}
                </x-button>
            </div>
        </form>
    </x-auth-card>
</x-guest-layout> --}}

<x-guest-layout>
    <x-auth-card>
        <x-slot:logo>
            <x-application-logo class="mx-auto h-12 w-auto" />
            <h2 class="mt-6 text-center text-3xl font-extrabold text-gray-900">Sign up to your account</h2>
            <p class="mt-2 text-center text-base font-medium text-indigo-600 hover:text-indigo-500">
                It's quick and easy.

            </p>
            </x-slot>

            <!-- Validation Errors -->
            <x-auth-validation-errors class="mb-4" :errors="$errors" />

            <form class="mt-8 space-y-6" action="{{ route('register') }}" method="POST">
                @csrf
                <input type="hidden" name="remember" value="true">
                <div class="rounded-md shadow-sm -space-y-px">

                    <div class="grid grid-cols-2 gap-2">

                        <div>
                            <label for="first_name" class="sr-only">First name</label>
                            <x-guest-input id="first_name" name="first_name" type="text" placeholder="First name"
                                :value="old('first_name')" required />
                        </div>

                        <div>
                            <label for="last_name" class="sr-only">Last name</label>
                            <x-guest-input id="last_name" name="last_name" type="text" placeholder="Last name"
                                :value="old('last_name')" required />
                        </div>
                    </div>


                    <div>
                        <label for="email" class="sr-only">Email address</label>
                        <x-guest-input id="email-address" name="email" type="email" autocomplete="email"
                            :value="old('email')" required
                            placeholder="Email address"/>
                    </div>
                    <div>
                        <label for="password" class="sr-only">Password</label>
                        <x-guest-input id="password" name="password" type="password" autocomplete="new-password"
                            :value="old('password')" required
                            placeholder="Password"/>
                    </div>
                    <div>
                        <label for="password_confirmation" class="sr-only">password confirmation</label>
                        <x-guest-input id="password_confirmation" name="password_confirmation" type="password"
                            :value="old('password_confirmation')" required
                            placeholder="Password confirmation"/>
                    </div>
                    <div>
                        <label for="birthday" class="sr-only">Birthday</label>
                        <x-guest-input id="birthday" name="birthday" type="text" autocomplete="current-password"
                            :value="old('birthday')" required
                            placeholder="Birthday" onfocus="(this.type='date')" onblur="(this.type='text')"/>
                    </div>


                </div>

                <div class="flex justify-between items-center">
                    <div>
                        <a href="{{ route('login') }}"
                            class="text-center text-base font-medium text-indigo-600 hover:text-indigo-500">Already
                            registered?</a>
                    </div>

                    <div>
                        <button type="submit"
                            class="group relative py-2 px-4 border border-transparent text-sm font-medium rounded-md text-white bg-indigo-600 hover:bg-indigo-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500">
                            Sign up
                        </button>
                    </div>

                </div>


            </form>



    </x-auth-card>
</x-guest-layout>
