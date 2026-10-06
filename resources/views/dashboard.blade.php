<x-app-layout>

    

    <div class="py-10 bg-[#DCEAF7] min-h-[calc(100vh-65px)]">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">

            <!-- Welcome -->
            <div class="bg-[#FFF9ED] rounded-2xl shadow-sm border border-[#E8DFC9] p-6 mb-6">
                <h3 class="text-xl font-bold text-[#3F6F91]">
                    Halo, {{ Auth::user()->name }}!
                </h3>

                <p class="mt-2 text-[#6B8193]">
                    Selamat datang di MyPerpustakaan. Silakan kelola data buku melalui menu yang tersedia.
                </p>
            </div>

            <!-- Menu -->
            <div class="grid grid-cols-1 md:grid-cols-2 gap-6">

                <!-- Data Buku -->
                <div class="bg-[#FFF9ED] rounded-2xl shadow-sm border border-[#E8DFC9] p-6">
                    <div class="flex items-center justify-between">

                        <div>
                            <h3 class="text-lg font-bold text-[#3F6F91]">
                                Data Buku
                            </h3>

                            <p class="mt-2 text-sm text-[#6B8193]">
                                Lihat, tambah, edit, dan hapus data buku perpustakaan.
                            </p>
                        </div>

                        <div class="text-4xl">
                            📚
                        </div>

                    </div>

                    <div class="mt-5">
                        <a
                            href="{{ route('books.index') }}"
                            class="inline-flex items-center px-5 py-2.5 rounded-lg bg-[#6F9FBD] text-white text-sm font-semibold hover:bg-[#5D8EAD] transition"
                        >
                            Kelola Buku
                        </a>
                    </div>
                </div>

                <!-- Informasi -->
                <div class="bg-[#FFF9ED] rounded-2xl shadow-sm border border-[#E8DFC9] p-6">
                    <div class="flex items-center justify-between">

                        <div>
                            <h3 class="text-lg font-bold text-[#3F6F91]">
                                Informasi
                            </h3>

                            <p class="mt-2 text-sm text-[#6B8193]">
                               MyPerpustakaan merupakan sistem informasi perpustakaan untuk membantu mengelola data buku secara mudah dan terstruktur. Sistem ini menyediakan fitur untuk menambah, melihat, mengubah, menghapus, dan mencari data buku.
                            </p>
                        </div>

                        <div class="text-4xl">
                            📖
                        </div>

                    </div>
                </div>

            </div>

        </div>
    </div>

</x-app-layout>