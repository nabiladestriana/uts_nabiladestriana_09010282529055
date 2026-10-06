<x-app-layout>

    <x-slot name="header">
        <div>
            <h2 class="font-bold text-2xl text-[#3F6F91]">
                Detail Buku
            </h2>

            <p class="mt-1 text-sm text-[#6B8193]">
                Informasi lengkap buku perpustakaan
            </p>
        </div>
    </x-slot>

    <div class="py-10 bg-[#DCEAF7] min-h-[calc(100vh-65px)]">
        <div class="max-w-3xl mx-auto px-4 sm:px-6 lg:px-8">

            <div class="bg-[#FFF9ED] rounded-2xl shadow-sm border border-[#E8DFC9] overflow-hidden">

                <div class="p-6 sm:p-8">

                    <div class="mb-6">
                        <h3 class="text-xl font-bold text-[#3F6F91]">
                            {{ $book->title }}
                        </h3>

                        <p class="mt-1 text-sm text-[#6B8193]">
                            Detail informasi buku
                        </p>
                    </div>

                    <div class="space-y-4">

                        <!-- Judul -->
                        <div class="flex flex-col sm:flex-row sm:items-center border-b border-[#E8DFC9] pb-4">
                            <span class="w-full sm:w-40 text-sm font-semibold text-[#405568]">
                                Judul
                            </span>

                            <span class="text-sm text-[#5F7180]">
                                {{ $book->title }}
                            </span>
                        </div>

                        <!-- Penulis -->
                        <div class="flex flex-col sm:flex-row sm:items-center border-b border-[#E8DFC9] pb-4">
                            <span class="w-full sm:w-40 text-sm font-semibold text-[#405568]">
                                Penulis
                            </span>

                            <span class="text-sm text-[#5F7180]">
                                {{ $book->author }}
                            </span>
                        </div>

                        <!-- Penerbit -->
                        <div class="flex flex-col sm:flex-row sm:items-center border-b border-[#E8DFC9] pb-4">
                            <span class="w-full sm:w-40 text-sm font-semibold text-[#405568]">
                                Penerbit
                            </span>

                            <span class="text-sm text-[#5F7180]">
                                {{ $book->publisher }}
                            </span>
                        </div>

                        <!-- Tahun -->
                        <div class="flex flex-col sm:flex-row sm:items-center border-b border-[#E8DFC9] pb-4">
                            <span class="w-full sm:w-40 text-sm font-semibold text-[#405568]">
                                Tahun Terbit
                            </span>

                            <span class="text-sm text-[#5F7180]">
                                {{ $book->year }}
                            </span>
                        </div>

                        <!-- Stok -->
                        <div class="flex flex-col sm:flex-row sm:items-center border-b border-[#E8DFC9] pb-4">
                            <span class="w-full sm:w-40 text-sm font-semibold text-[#405568]">
                                Stok
                            </span>

                            <span class="text-sm text-[#5F7180]">
                                {{ $book->stock }}
                            </span>
                        </div>

                        <!-- Kategori -->
                        <div class="flex flex-col sm:flex-row sm:items-center pb-2">
                            <span class="w-full sm:w-40 text-sm font-semibold text-[#405568]">
                                Kategori
                            </span>

                            <span class="inline-flex w-fit px-3 py-1 rounded-full bg-[#E2EFF7] text-[#4F7895] text-xs font-semibold">
                                {{ $book->category->name }}
                            </span>
                        </div>

                    </div>

                    <!-- Tombol -->
                    <div class="mt-8 flex flex-wrap justify-end gap-3">

                        <a
                            href="{{ route('books.index') }}"
                            class="px-5 py-2.5 rounded-lg bg-[#E8DFC9] text-[#6B5D40] text-sm font-semibold hover:bg-[#DDD1B8] transition"
                        >
                            Kembali
                        </a>

                        <a
                            href="{{ route('books.edit', $book) }}"
                            class="px-5 py-2.5 rounded-lg bg-[#6F9FBD] text-white text-sm font-semibold hover:bg-[#5D8EAD] transition"
                        >
                            Edit Buku
                        </a>

                    </div>

                </div>

            </div>

        </div>
    </div>

</x-app-layout>