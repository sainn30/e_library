<x-guest-layout>
        <div class="w-full max-w-md bg-white shadow-md p-8 border border-gray-200">
            <h2 class="text-2xl font-semibold text-center text-gray-800 mb-6">Login</h2>

            <!-- Session Status -->
            <x-auth-session-status class="mb-4" :status="session('status')" />

            <form method="POST" action="{{ route('login') }}">
                @csrf

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
                        autofocus
                        autocomplete="username"
                        placeholder="youremail@example.com"
                    />
                    <x-input-error :messages="$errors->get('email')" class="mt-2 text-red-600" />
                </div>

                <!-- Password -->
                <div class="mb-4">
                    <x-input-label for="password" :value="__('Password')" class="text-gray-700" />
                    <div class="relative">
                        <x-text-input
                            id="password"
                            class="block mt-1 w-full bg-gray-50 text-gray-800 border border-gray-300 pr-10 focus:border-red-500 focus:ring-red-500"
                            type="password"
                            name="password"
                            required
                            autocomplete="current-password"
                            placeholder="Password"
                        />
                        <button type="button" class="absolute inset-y-0 right-0 pr-3 flex items-center text-gray-500" onclick="togglePassword()">
                            <i id="toggleIcon" class="ri-eye-close-line text-lg"></i>
                        </button>
                    </div>
                    <x-input-error :messages="$errors->get('password')" class="mt-2 text-red-600" />
                </div>

                <!-- Remember Me -->
                <div class="mb-4">
                    <label for="remember_me" class="inline-flex items-center">
                        <input
                            id="remember_me"
                            type="checkbox"
                            class="rounded border-gray-300 text-red-500 shadow-sm focus:ring-red-500"
                            name="remember"
                        >
                        <span class="ml-2 text-sm text-gray-700">Ingat saya</span>
                    </label>
                </div>

                <div class="flex items-center justify-between">
                    @if (Route::has('password.request'))
                        <a class="text-sm text-gray-600 hover:underline hover:text-red-500" href="{{ route('password.request') }}">
                            Lupa password?
                        </a>
                    @endif

                    <x-primary-button class="ml-3 bg-red-600 hover:bg-red-700 border-none">
                        {{ __('Log in') }}
                    </x-primary-button>
                </div>
            </form>
            <p class="mt-7 text-sm text-gray-600 text-center">Belum punya akun? <a href="{{ route('register') }}" class="text-light font-semibold hover:underline hover:text-red-500"">Daftar</a></p>
        </div>

    <!-- Toggle Password Script -->
    <script>
        function togglePassword() {
            const passwordInput = document.getElementById('password');
            const toggleIcon = document.getElementById('toggleIcon');
            if (passwordInput.type === 'password') {
                passwordInput.type = 'text';
                toggleIcon.classList.remove('ri-eye-close-line');
                toggleIcon.classList.add('ri-eye-line');
            } else {
                passwordInput.type = 'password';
                toggleIcon.classList.remove('ri-eye-line');
                toggleIcon.classList.add('ri-eye-close-line');
            }
        }
    </script>

    <!-- Remix Icon -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/remixicon/fonts/remixicon.css">
</x-guest-layout>
