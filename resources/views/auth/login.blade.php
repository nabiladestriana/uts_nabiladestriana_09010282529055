<x-guest-layout>

    <!-- Judul -->
    <div class="text-center mb-6">
        <h2 class="text-2xl font-bold text-[#3F6F91]">
            Selamat Datang
        </h2>

        <p class="mt-2 text-sm text-[#6B8193]">
            Silakan login untuk melanjutkan
        </p>
    </div>

    <!-- Session Status -->
    <x-auth-session-status
        class="mb-4"
        :status="session('status')"
    />

    <form method="POST" action="{{ route('login') }}">
        @csrf

        <!-- Email -->
        <div>
            <x-input-label
                for="email"
                :value="__('Email')"
                class="text-[#405568]"
            />

            <x-text-input
                id="email"
                class="block mt-2 w-full rounded-lg border-[#C9D5DF] bg-white focus:border-[#79A9C8] focus:ring-[#79A9C8]"
                type="email"
                name="email"
                :value="old('email')"
                required
                autofocus
                autocomplete="username"
            />

            <x-input-error
                :messages="$errors->get('email')"
                class="mt-2"
            />
        </div>

        <!-- Password -->
        <div class="mt-4">
            <x-input-label
                for="password"
                :value="__('Password')"
                class="text-[#405568]"
            />

            <x-text-input
                id="password"
                class="block mt-2 w-full rounded-lg border-[#C9D5DF] bg-white focus:border-[#79A9C8] focus:ring-[#79A9C8]"
                type="password"
                name="password"
                required
                autocomplete="current-password"
            />

            <x-input-error
                :messages="$errors->get('password')"
                class="mt-2"
            />
        </div>

        <!-- Remember -->
        <div class="mt-4">
            <label for="remember_me" class="inline-flex items-center">
                <input
                    id="remember_me"
                    type="checkbox"
                    name="remember"
                    class="rounded border-gray-300 text-[#6F9FBD] shadow-sm focus:ring-[#79A9C8]"
                >

                <span class="ms-2 text-sm text-[#6B8193]">
                    Ingat saya
                </span>
            </label>
        </div>

        <!-- Button -->
        <div class="mt-6">
            <x-primary-button
                class="w-full justify-center rounded-lg bg-[#6F9FBD] py-3 text-sm font-semibold uppercase tracking-wide hover:bg-[#5D8EAD] focus:bg-[#5D8EAD] active:bg-[#4F7E9B]"
            >
                Login
            </x-primary-button>
        </div>

    </form>

    <!-- Register -->
    <div class="text-center mt-5">
        <p class="text-sm text-[#6B8193]">
            Belum punya akun?

            <a
                href="{{ route('register') }}"
                class="font-semibold text-[#4F83A8] hover:text-[#315A7D]"
            >
                Daftar sekarang
            </a>
        </p>
    </div>

</x-guest-layout>