<x-app-layout>

    <x-slot name="header">
        <div class="flex justify-center">
            <form
                action="{{ route('books.index') }}"
                method="GET"
                class="flex w-full max-w-xl"
            >
                <input
                    type="text"
                    name="search"
                    value="{{ $search ?? '' }}"
                    placeholder="Cari judul atau penulis buku..."
                    class="w-full rounded-l-lg border-[#C9D5DF] bg-white text-sm focus:border-[#79A9C8] focus:ring-[#79A9C8]"
                    oninput="clearSearch(this)"
                >

                <button
                    type="submit"
                    class="px-5 rounded-r-lg bg-[#6F9FBD] text-white text-sm font-semibold hover:bg-[#5D8EAD] transition"
                >
                    Cari
                </button>
            </form>
        </div>
    </x-slot>


    <div class="py-10 bg-[#DCEAF7] min-h-[calc(100vh-65px)]">

        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">

            <div class="bg-[#FFF9ED] rounded-2xl shadow-sm border border-[#E8DFC9] overflow-hidden">

                <!-- Header Daftar Buku -->
                <div class="p-6 flex flex-col sm:flex-row sm:items-center sm:justify-between gap-4">

                    <div>
                        <h3 class="text-lg font-bold text-[#3F6F91]">
                            Daftar Buku
                        </h3>

                        <p class="mt-1 text-sm text-[#6B8193]">
                            Daftar seluruh buku yang tersedia di perpustakaan.
                        </p>
                    </div>

                    <!-- Tambah Buku -->
                    <a
                        href="{{ route('books.create') }}"
                        class="inline-flex items-center justify-center px-5 py-2.5 rounded-lg bg-[#6F9FBD] text-white text-sm font-semibold hover:bg-[#5D8EAD] transition"
                    >
                        + Tambah Buku
                    </a>

                </div>


                <!-- Tabel Buku -->
                <div class="overflow-x-auto">

                    <table class="w-full text-sm text-left">

                        <thead class="bg-[#EAF3F9] text-[#405568]">

                            <tr>

                                <th class="px-6 py-4 font-semibold">
                                    No
                                </th>

                                <th class="px-6 py-4 font-semibold">
                                    Judul
                                </th>

                                <th class="px-6 py-4 font-semibold">
                                    Penulis
                                </th>

                                <th class="px-6 py-4 font-semibold">
                                    Penerbit
                                </th>

                                <th class="px-6 py-4 font-semibold">
                                    Tahun
                                </th>

                                <th class="px-6 py-4 font-semibold">
                                    Stok
                                </th>

                                <th class="px-6 py-4 font-semibold">
                                    Kategori
                                </th>

                                <th class="px-6 py-4 font-semibold text-center">
                                    Aksi
                                </th>

                            </tr>

                        </thead>


                        <tbody class="divide-y divide-[#E8DFC9]">

                            @forelse ($books as $book)

                                <tr class="hover:bg-[#FFFCF4] transition">

                                    <td class="px-6 py-4 text-[#6B8193]">
                                        {{ $loop->iteration }}
                                    </td>

                                    <td class="px-6 py-4 font-semibold text-[#3F6F91]">
                                        {{ $book->title }}
                                    </td>

                                    <td class="px-6 py-4 text-[#5F7180]">
                                        {{ $book->author }}
                                    </td>

                                    <td class="px-6 py-4 text-[#5F7180]">
                                        {{ $book->publisher }}
                                    </td>

                                    <td class="px-6 py-4 text-[#5F7180]">
                                        {{ $book->year }}
                                    </td>

                                    <td class="px-6 py-4 text-[#5F7180]">
                                        {{ $book->stock }}
                                    </td>

                                    <td class="px-6 py-4">

                                        <span class="inline-flex px-3 py-1 rounded-full bg-[#E2EFF7] text-[#4F7895] text-xs font-semibold">
                                            {{ $book->category->name }}
                                        </span>

                                    </td>

                                    <td class="px-6 py-4">

                                        <div class="flex items-center justify-center gap-2">

                                            <!-- Detail -->
                                            <a
                                                href="{{ route('books.show', $book) }}"
                                                class="px-3 py-1.5 rounded-lg bg-[#DCEAF7] text-[#4F7895] text-xs font-semibold hover:bg-[#C9DFEE]"
                                            >
                                                Detail
                                            </a>


                                            <!-- Edit -->
                                            <a
                                                href="{{ route('books.edit', $book) }}"
                                                class="px-3 py-1.5 rounded-lg bg-[#DCEAF7] text-[#4F7895] text-xs font-semibold hover:bg-[#C9DFEE]"
                                            >
                                                Edit
                                            </a>


                                            <!-- Form Hapus -->
                                            <form
                                                id="delete-form-{{ $book->id }}"
                                                action="{{ route('books.destroy', $book) }}"
                                                method="POST"
                                            >

                                                @csrf
                                                @method('DELETE')

                                                <button
                                                    type="button"
                                                    onclick="openDeleteModal({{ $book->id }}, '{{ addslashes($book->title) }}')"
                                                    class="px-3 py-1.5 rounded-lg bg-[#DCEAF7] text-[#4F7895] text-xs font-semibold hover:bg-[#C9DFEE]"
                                                >
                                                    Hapus
                                                </button>

                                            </form>

                                        </div>

                                    </td>

                                </tr>


                            @empty

                                <tr>

                                    <td
                                        colspan="8"
                                        class="px-6 py-10 text-center text-[#6B8193]"
                                    >

                                        @if ($search)

                                            Buku dengan kata pencarian

                                            <span class="font-semibold">
                                                "{{ $search }}"
                                            </span>

                                            tidak ditemukan.

                                        @else

                                            Belum ada data buku.

                                        @endif

                                    </td>

                                </tr>

                            @endforelse

                        </tbody>

                    </table>

                </div>

            </div>

        </div>

    </div>


    <!-- Modal Konfirmasi Hapus -->
    <div
        id="deleteModal"
        class="fixed inset-0 z-50 hidden items-center justify-center bg-[#263746]/50 px-4"
    >

        <div class="w-full max-w-md rounded-2xl bg-white shadow-xl border border-[#D9E2E8]">

            <div class="p-7">

                <!-- Ikon Peringatan -->
                <div class="flex justify-center">

                    <div class="flex items-center justify-center w-14 h-14 rounded-full bg-[#FCECEA]">

                        <span class="text-3xl text-[#A94840]">
                            ⚠
                        </span>

                    </div>

                </div>


                <!-- Judul -->
                <h3 class="mt-5 text-center text-xl font-bold text-[#A94840]">
                    Hapus Buku?
                </h3>


                <!-- Keterangan -->
                <p class="mt-3 text-center text-sm leading-6 text-[#526575]">

                    Apakah kamu yakin ingin menghapus buku

                    <span
                        id="deleteBookTitle"
                        class="font-bold text-[#315A7D]"
                    ></span>?

                </p>


                <!-- Peringatan -->
                <div class="mt-4 rounded-xl border border-[#E5BDB8] bg-[#FCECEA] px-4 py-3">

                    <p class="text-center text-xs font-semibold leading-5 text-[#A94840]">
                        ⚠ Data buku yang sudah dihapus tidak dapat dikembalikan.
                    </p>

                </div>


                <!-- Tombol -->
                <div class="mt-6 flex justify-center gap-3">

                    <button
                        type="button"
                        onclick="closeDeleteModal()"
                        class="px-5 py-2.5 rounded-lg bg-[#EEF2F5] text-[#526575] text-sm font-semibold hover:bg-[#E2E8ED] transition"
                    >
                        Batal
                    </button>

                    <button
                        type="button"
                        onclick="confirmDelete()"
                        class="px-5 py-2.5 rounded-lg bg-[#FCECEA] text-[#A94840] text-sm font-semibold hover:bg-[#F8DFDC] transition"
                    >
                        Hapus Buku
                    </button>

                </div>

            </div>

        </div>

    </div>


    <!-- JavaScript -->
    <script>

        let deleteBookId = null;


        function openDeleteModal(id, title) {

            deleteBookId = id;

            document.getElementById('deleteBookTitle').textContent = title;

            const modal = document.getElementById('deleteModal');

            modal.classList.remove('hidden');
            modal.classList.add('flex');

        }


        function closeDeleteModal() {

            const modal = document.getElementById('deleteModal');

            modal.classList.remove('flex');
            modal.classList.add('hidden');

            deleteBookId = null;

        }


        function confirmDelete() {

            if (deleteBookId) {

                document
                    .getElementById('delete-form-' + deleteBookId)
                    .submit();

            }

        }


        function clearSearch(input) {

            if (input.value.trim() === '') {

                window.location.href = "{{ route('books.index') }}";

            }

        }

    </script>

</x-app-layout>