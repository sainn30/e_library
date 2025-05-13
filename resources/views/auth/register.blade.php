<x-guest-layout>
        <div class="w-full max-w-md bg-white shadow-md p-8 border border-gray-200 ">
            <h2 class="text-2xl font-semibold text-center text-gray-800 mb-6">Register</h2>

            <form method="POST" action="{{ route('register') }}">
                @csrf

                <!-- Name -->
                <div class="mb-4">
                    <x-input-label for="name" :value="__('Name')" class="text-gray-700" />
                    <x-text-input
                        id="name"
                        class="block mt-1 w-full bg-gray-50 text-gray-800 border border-gray-300 focus:border-red-500 focus:ring-red-500"
                        type="text"
                        name="name"
                        :value="old('name')"
                        required
                        autofocus
                        autocomplete="name"
                    />
                    <x-input-error :messages="$errors->get('name')" class="mt-2 text-red-600" />
                </div>

                <!-- Email Address -->
                <div class="mb-4">
                    <x-input-label for="email" :value="__('Email')" class="text-gray-700" />
                    <x-text-input
                        id="email"
                        class="block mt-1 w-full bg-gray-50 text-gray-800 border border-gray-300 focus:border-red-500 focus:ring-red-500"
                        type="email"
                        name="email"
                        :value="old('email')"
                        required
                        autocomplete="username"
                    />
                    <x-input-error :messages="$errors->get('email')" class="mt-2 text-red-600" />
                </div>

                <!-- Password -->
                <div class="mb-4">
                    <x-input-label for="password" :value="__('Password')" class="text-gray-700" />
                    <x-text-input
                        id="password"
                        class="block mt-1 w-full bg-gray-50 text-gray-800 border border-gray-300 focus:border-red-500 focus:ring-red-500"
                        type="password"
                        name="password"
                        required
                        autocomplete="new-password"
                    />
                    <x-input-error :messages="$errors->get('password')" class="mt-2 text-red-600" />
                </div>

                <!-- Confirm Password -->
                <div class="mb-4">
                    <x-input-label for="password_confirmation" :value="__('Confirm Password')" class="text-gray-700" />
                    <x-text-input
                        id="password_confirmation"
                        class="block mt-1 w-full bg-gray-50 text-gray-800 border border-gray-300 focus:border-red-500 focus:ring-red-500"
                        type="password"
                        name="password_confirmation"
                        required
                        autocomplete="new-password"
                    />
                    <x-input-error :messages="$errors->get('password_confirmation')" class="mt-2 text-red-600" />
                </div>

                <div class="flex items-center justify-between mt-4">
                    <a class="text-sm text-gray-600 hover:underline hover:text-red-500" href="{{ route('login') }}">
                        {{ __('Already registered?') }}
                    </a>

                    <x-primary-button class="ml-3 bg-red-600 hover:bg-red-700 border-none">
                        {{ __('Register') }}
                    </x-primary-button>
                </div>
            </form>
        </div>
</x-guest-layout>
