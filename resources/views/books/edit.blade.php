<x-app-layout>

    <x-slot name="header">
        <div>
            <h2 class="font-bold text-2xl text-[#3F6F91]">
                Edit Buku
            </h2>

            <p class="mt-1 text-sm text-[#6B8193]">
                Perbarui data buku perpustakaan
            </p>
        </div>
    </x-slot>

    <div class="py-10 bg-[#DCEAF7] min-h-[calc(100vh-65px)]">
        <div class="max-w-4xl mx-auto px-4 sm:px-6 lg:px-8">

            <div class="bg-[#FFF9ED] rounded-2xl shadow-sm border border-[#E8DFC9] p-6 sm:p-8">

                <form action="{{ route('books.update', $book) }}" method="POST">

                    @csrf
                    @method('PUT')

                    <!-- Judul -->
                    <div>
                        <label
                            for="title"
                            class="block text-sm font-semibold text-[#405568]"
                        >
                            Judul Buku
                        </label>

                        <input
                            type="text"
                            id="title"
                            name="title"
                            value="{{ old('title', $book->title) }}"
                            required
                            class="block mt-2 w-full rounded-lg border-[#C9D5DF] bg-white focus:border-[#79A9C8] focus:ring-[#79A9C8]"
                        >

                        @error('title')
                            <p class="mt-2 text-sm text-red-600">
                                {{ $message }}
                            </p>
                        @enderror
                    </div>

                    <!-- Penulis -->
                    <div class="mt-5">
                        <label
                            for="author"
                            class="block text-sm font-semibold text-[#405568]"
                        >
                            Penulis
                        </label>

                        <input
                            type="text"
                            id="author"
                            name="author"
                            value="{{ old('author', $book->author) }}"
                            required
                            class="block mt-2 w-full rounded-lg border-[#C9D5DF] bg-white focus:border-[#79A9C8] focus:ring-[#79A9C8]"
                        >

                        @error('author')
                            <p class="mt-2 text-sm text-red-600">
                                {{ $message }}
                            </p>
                        @enderror
                    </div>

                    <!-- Penerbit -->
                    <div class="mt-5">
                        <label
                            for="publisher"
                            class="block text-sm font-semibold text-[#405568]"
                        >
                            Penerbit
                        </label>

                        <input
                            type="text"
                            id="publisher"
                            name="publisher"
                            value="{{ old('publisher', $book->publisher) }}"
                            required
                            class="block mt-2 w-full rounded-lg border-[#C9D5DF] bg-white focus:border-[#79A9C8] focus:ring-[#79A9C8]"
                        >

                        @error('publisher')
                            <p class="mt-2 text-sm text-red-600">
                                {{ $message }}
                            </p>
                        @enderror
                    </div>

                    <!-- Tahun -->
                    <div class="mt-5">
                        <label
                            for="year"
                            class="block text-sm font-semibold text-[#405568]"
                        >
                            Tahun Terbit
                        </label>

                        <input
                            type="number"
                            id="year"
                            name="year"
                            value="{{ old('year', $book->year) }}"
                            required
                            min="1000"
                            max="9999"
                            class="block mt-2 w-full rounded-lg border-[#C9D5DF] bg-white focus:border-[#79A9C8] focus:ring-[#79A9C8]"
                        >

                        @error('year')
                            <p class="mt-2 text-sm text-red-600">
                                {{ $message }}
                            </p>
                        @enderror
                    </div>

                    <!-- Stok -->
                    <div class="mt-5">
                        <label
                            for="stock"
                            class="block text-sm font-semibold text-[#405568]"
                        >
                            Stok
                        </label>

                        <input
                            type="number"
                            id="stock"
                            name="stock"
                            value="{{ old('stock', $book->stock) }}"
                            required
                            min="0"
                            class="block mt-2 w-full rounded-lg border-[#C9D5DF] bg-white focus:border-[#79A9C8] focus:ring-[#79A9C8]"
                        >

                        @error('stock')
                            <p class="mt-2 text-sm text-red-600">
                                {{ $message }}
                            </p>
                        @enderror
                    </div>

                    <!-- Kategori -->
                    <div class="mt-5">
                        <label
                            for="category_id"
                            class="block text-sm font-semibold text-[#405568]"
                        >
                            Kategori
                        </label>

                        <select
                            id="category_id"
                            name="category_id"
                            required
                            class="block mt-2 w-full rounded-lg border-[#C9D5DF] bg-white focus:border-[#79A9C8] focus:ring-[#79A9C8]"
                        >
                            <option value="">-- Pilih Kategori --</option>

                            @foreach ($categories as $category)
                                <option
                                    value="{{ $category->id }}"
                                    {{ old('category_id', $book->category_id) == $category->id ? 'selected' : '' }}
                                >
                                    {{ $category->name }}
                                </option>
                            @endforeach
                        </select>

                        @error('category_id')
                            <p class="mt-2 text-sm text-red-600">
                                {{ $message }}
                            </p>
                        @enderror
                    </div>

                    <!-- Tombol -->
                    <div class="mt-8 flex items-center justify-end gap-3">

                        <a
                            href="{{ route('books.index') }}"
                            class="px-5 py-2.5 rounded-lg bg-[#E8DFC9] text-[#6B5D40] text-sm font-semibold hover:bg-[#DDD1B8] transition"
                        >
                            Batal
                        </a>

                        <button
                            type="submit"
                            class="px-5 py-2.5 rounded-lg bg-[#6F9FBD] text-white text-sm font-semibold hover:bg-[#5D8EAD] transition"
                        >
                            Simpan Perubahan
                        </button>

                    </div>

                </form>

            </div>

        </div>
    </div>

</x-app-layout>