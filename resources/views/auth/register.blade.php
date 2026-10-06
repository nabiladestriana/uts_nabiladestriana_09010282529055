<x-guest-layout>

    <!-- Judul -->
    <div class="text-center mb-6">
        <h2 class="text-2xl font-bold text-[#3F6F91]">
            Buat Akun
        </h2>

        <p class="mt-2 text-sm text-[#6B8193]">
            Daftar untuk menggunakan MyPerpustakaan
        </p>
    </div>

    <form method="POST" action="{{ route('register') }}">
        @csrf

        <!-- Name -->
        <div>
            <x-input-label
                for="name"
                :value="__('Nama')"
                class="text-[#405568]"
            />

            <x-text-input
                id="name"
                class="block mt-2 w-full rounded-lg border-[#C9D5DF] bg-white focus:border-[#79A9C8] focus:ring-[#79A9C8]"
                type="text"
                name="name"
                :value="old('name')"
                required
                autofocus
                autocomplete="name"
            />

            <x-input-error
                :messages="$errors->get('name')"
                class="mt-2"
            />
        </div>

        <!-- Email -->
        <div class="mt-4">
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
                autocomplete="new-password"
            />

            <x-input-error
                :messages="$errors->get('password')"
                class="mt-2"
            />
        </div>

        <!-- Confirm Password -->
        <div class="mt-4">
            <x-input-label
                for="password_confirmation"
                :value="__('Konfirmasi Password')"
                class="text-[#405568]"
            />

            <x-text-input
                id="password_confirmation"
                class="block mt-2 w-full rounded-lg border-[#C9D5DF] bg-white focus:border-[#79A9C8] focus:ring-[#79A9C8]"
                type="password"
                name="password_confirmation"
                required
                autocomplete="new-password"
            />

            <x-input-error
                :messages="$errors->get('password_confirmation')"
                class="mt-2"
            />
        </div>

        <!-- Button -->
        <div class="mt-6">
            <x-primary-button
                class="w-full justify-center rounded-lg bg-[#6F9FBD] py-3 text-sm font-semibold uppercase tracking-wide hover:bg-[#5D8EAD] focus:bg-[#5D8EAD] active:bg-[#4F7E9B]"
            >
                Daftar
            </x-primary-button>
        </div>

    </form>

    <!-- Login -->
    <div class="text-center mt-5">
        <p class="text-sm text-[#6B8193]">
            Sudah punya akun?

            <a
                href="{{ route('login') }}"
                class="font-semibold text-[#4F83A8] hover:text-[#315A7D]"
            >
                Login
            </a>
        </p>
    </div>

</x-guest-layout>