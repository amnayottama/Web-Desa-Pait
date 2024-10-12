@extends('layouts.app')
@section('contents')
    @php
        use Carbon\Carbon;
    @endphp
    <div class="flex flex-col mt-4">
        <div class="flex flex-col justify-between">
            <div class="flex flex-row justify-between">
                <p class="text-3xl font-semibold">Berita</p>
                <button data-modal-target="static-modal" data-modal-toggle="static-modal"
                    class="flex p-1 rounded-md border-[#198754] border-2 text-[#198754]" type="button">
                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="size-4 mt-1">
                        <path fill-rule="evenodd"
                            d="M12 3.75a.75.75 0 0 1 .75.75v6.75h6.75a.75.75 0 0 1 0 1.5h-6.75v6.75a.75.75 0 0 1-1.5 0v-6.75H4.5a.75.75 0 0 1 0-1.5h6.75V4.5a.75.75 0 0 1 .75-.75Z"
                            clip-rule="evenodd" />
                    </svg>
                    Tambah Data
                </button>
            </div>

            {{-- Modal Tambah Data: Judul, Berita(WYSIWYG), Gambar --}}
            <div id="static-modal" data-modal-backdrop="static" tabindex="-1" aria-hidden="true"
                class="hidden overflow-y-auto overflow-x-hidden fixed top-0 right-0 left-0 z-50 justify-center items-center w-full md:inset-0 h-full">
                <div class="relative p-4 w-full max-w-2xl max-h-full">
                    <!-- Modal content -->
                    <div class="relative bg-white rounded-lg shadow">
                        <!-- Modal header -->
                        <div class="flex items-center justify-between p-4 md:p-5 border-b rounded-t">
                            <div class="w-1/3"></div>
                            <h3 class="text-xl text-center font-semibold text-gray-900">
                                Form Tambah Berita
                            </h3>
                            <button type="button"
                                class="text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm w-8 h-8 ms-auto inline-flex justify-center items-center"
                                data-modal-hide="static-modal">
                                <svg class="w-3 h-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none"
                                    viewBox="0 0 14 14">
                                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                        stroke-width="2" d="m1 1 6 6m0 0 6 6M7 7l6-6M7 7l-6 6" />
                                </svg>
                            </button>
                        </div>
                        <!-- Modal body -->
                        <div class="px-4">
                            <form class="space-y-4" action="{{ route('news.store') }}" method="POST"
                                enctype="multipart/form-data">
                                @csrf
                                <label for="judul" class="text-sm text-gray-500">Judul</label>
                                <div class="my-2">
                                    <input type="text" id="judul" name="judul"
                                        class=" border border-gray-300 text-gray-500 text-xs rounded-md focus:ring-blue-500 focus:border-blue-500 w-full p-2"
                                        required />
                                </div>

                                <label for="editor" class="text-sm text-gray-500  ">Berita</label>

                                <textarea rows="10" name="deskripsi" id="editor"></textarea>


                                <label class="block py-2 text-sm text-gray-500" for="small_size">Gambar</label>
                                <button id="uploadButton" type="button"
                                    class="bg-white border-gray-300 text-[#101E9E] border rounded-sm w-full py-6 mb-2">Browse</button>
                                <input class="hidden" id="small_size" name="gambar" type="file">
                                <div id="fileName" class="mt-2 text-gray-700"></div>

                                <input type="hidden" id="tanggalHariIni" name="created">

                        </div>

                        <!-- Modal footer -->
                        <div class="flex justify-end p-4 md:p-5 border-gray-200 rounded-b">
                            <button data-modal-hide="static-modal" type="submit"
                                class="text-white bg-[#435EBE] hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center">Submit
                            </button>
                        </div>
                        </form>
                    </div>
                </div>
            </div>
            {{-- Modal Edit Data: Judul, Berita(WYSIWYG), Gambar --}}
            @foreach ($news as $item)
                <div id="edit-modal-{{ $item->id }}" data-modal-backdrop="edit" tabindex="-1" aria-hidden="true"
                    class="hidden overflow-y-auto overflow-x-hidden fixed top-0 right-0 left-0 z-50 justify-center items-center w-full md:inset-0 h-full">
                    <div class="relative p-4 w-full max-w-2xl max-h-full">
                        <!-- Modal edit content -->
                        <div class="relative bg-white rounded-lg shadow">
                            <!-- Modal edit header -->
                            <div class="flex items-center justify-between p-4 md:p-5 border-b rounded-t">
                                <div class="w-1/3"></div>
                                <h3 class="text-xl text-center font-semibold text-gray-900">
                                    Form Edit Berita
                                </h3>
                                <button type="button"
                                    class="text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm w-8 h-8 ms-auto inline-flex justify-center items-center"
                                    data-modal-hide="edit-modal-{{ $item->id }}">
                                    <svg class="w-3 h-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
                                        fill="none" viewBox="0 0 14 14">
                                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                            stroke-width="2" d="m1 1 6 6m0 0 6 6M7 7l6-6M7 7l-6 6" />
                                    </svg>
                                </button>
                            </div>
                            <!-- Modal edit body -->
                            <div class="px-4">
                                <form action="{{ route('news.update', $item->id) }}" method="POST"
                                    enctype="multipart/form-data">
                                    @csrf
                                    @method('PUT')
                                    <label for="judul2" class="text-sm text-gray-500">Judul</label>
                                    <div class="my-2">
                                        <input type="judul2" id="judul2" name="judul"
                                            class=" border border-gray-300 text-gray-500 text-xs rounded-md focus:ring-blue-500 focus:border-blue-500 w-full p-2"
                                            value="{{ $item->judul }}" required />
                                    </div>
                                    <label for="editor2" class="text-sm text-gray-500  ">Berita</label>
                                    <textarea rows="10" name="deskripsi" id="editor2">{{ $item->deskripsi }}</textarea>
                                    <label class="block py-2 text-sm text-gray-500" for="small_size">Gambar</label>
                                    <button id="uploadButton2"
                                        class="bg-white border-gray-300 text-[#101E9E] border rounded-sm w-full py-6 mb-2">Browse</button>
                                    <input class="hidden" id="small_size2" type="file" name="gambar">
                                    <img src="{{ asset($item->gambar) }}" alt="{{ $item->judul }}"
                                        class="w-20 h-20 object-cover">
                                    @php
                                        $fileName = $item->gambar; // Path gambar
                                        $fileNameWithoutPrefix = basename($fileName); // Hanya nama file
                                    @endphp
                                    {{ $fileNameWithoutPrefix }}

                                    <div id="fileName2" class="mt-2 text-gray-700"></div>
                                    <input type="hidden" id="tanggalHariIni" name="created">
                            </div>

                            <!-- Modal edit footer -->
                            <div class="flex justify-end p-4 md:p-5 border-gray-200 rounded-b">
                                <button data-modal-hide="edit-modal" type="submit"
                                    class="text-white bg-[#435EBE] hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center">Submit
                                </button>
                            </div>
                            </form>
                        </div>
                    </div>
                </div>
            @endforeach
            @foreach ($news as $item)
                <!-- Delete modal -->
                <div id="popup-modal-{{ $item->id }}" tabindex="-1"
                    class="hidden overflow-y-auto overflow-x-hidden fixed top-0 right-0 left-0 z-50 justify-center items-center w-full md:inset-0 h-full">
                    <div class="relative p-4 w-full max-w-md max-h-full">
                        <div class="relative bg-white rounded-lg shadow">
                            <button type="button"
                                class="absolute top-3 end-2.5 text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm w-8 h-8 ms-auto inline-flex justify-center items-center"
                                data-modal-hide="popup-modal-{{ $item->id }}">
                                <svg class="w-3 h-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
                                    fill="none" viewBox="0 0 14 14">
                                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                        stroke-width="2" d="m1 1 6 6m0 0 6 6M7 7l6-6M7 7l-6 6" />
                                </svg>
                                <span class="sr-only">Close modal</span>
                            </button>
                            <div class="p-4 md:p-5 text-center">
                                <svg class="mx-auto mb-4 text-gray-400 w-12 h-12" aria-hidden="true"
                                    xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 20 20">
                                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                        stroke-width="2" d="M10 11V6m0 8h.01M19 10a9 9 0 1 1-18 0 9 9 0 0 1 18 0Z" />
                                </svg>
                                <h3 class="mb-5 text-lg font-normal text-gray-500">Apakah Anda yakin
                                    ingin
                                    menghapus data ini?</h3>
                                <form action="{{ route('news.destroy', ['id' => $item->id]) }}" method="POST"
                                    id="deleteForm-{{ $item->id }}" style="display: none;">
                                    @csrf
                                    @method('DELETE')
                                </form>
                                <button data-modal-hide="popup-modal-{{ $item->id }}"
                                    onclick="document.getElementById('deleteForm-{{ $item->id }}').submit();"
                                    type="button"
                                    class="text-white bg-red-600 hover:bg-red-800 focus:ring-4 focus:outline-none focus:ring-red-300 font-medium rounded-lg text-sm inline-flex items-center px-5 py-2.5 text-center">
                                    Ya
                                </button>
                                <button data-modal-hide="popup-modal-{{ $item->id }}" type="button"
                                    class="py-2.5 px-5 ms-3 text-sm font-medium text-gray-900 focus:outline-none bg-white rounded-lg border border-gray-200 hover:bg-gray-100 hover:text-blue-700 focus:z-10 focus:ring-4 focus:ring-gray-100">Tidak</button>
                            </div>
                        </div>
                    </div>
                </div>
            @endforeach
            <div class="text-gray-500">
                Halaman ini berisi berita untuk informasi masyarakat
            </div>
            {{-- notif CRUD data --}}
            @if (session('status'))
                <div class="mt-2 text-green-600">
                    {{ session('status') }}
                </div>
            @endif

            @if ($errors->any())
                <div class="mt-2 text-red-600">
                    <ul>
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif
            <div class="relative mt-4 p-4 overflow-x-auto shadow-md rounded-lg bg-white sm:rounded-lg">
                <table id="myTable" class="display w-full text-sm text-left rtl:text-right">
                    <thead class="text-base border-b text-gray-500">
                        <tr>
                            <th scope="col" class="p-4">
                                No.
                            </th>
                            <th scope="col" class="px-6 py-3">
                                Judul
                            </th>
                            <th scope="col" class="px-6 py-3">
                                Gambar
                            </th>
                            <th scope="col" class="px-6 py-3">
                                Created
                            </th>
                            <th scope="col" class="px-6 py-3">
                                Aksi
                            </th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($news as $item)
                            <tr class="bg-white border-b hover:bg-gray-50">
                                <td class="w-4 p-4">
                                    {{ $loop->iteration }}
                                </td>
                                <th scope="row" class="px-6 py-4 font-medium text-gray-500 whitespace-nowrap">
                                    {{ $item->judul }}
                                </th>
                                <td class="flex py-4 px-6">
                                    <img src="{{ asset($item->gambar) }}" alt="{{ $item->judul }}"
                                        class="w-20 h-20 object-cover">
                                </td>
                                <th scope="row" class="px-6 py-4 font-medium text-gray-500 whitespace-nowrap">
                                    {{ Carbon::parse($item->created)->translatedFormat('d F Y') }}
                                </th>
                                <td class="px-6 py-4">
                                    <button data-modal-target="edit-modal-{{ $item->id }}"
                                        data-modal-toggle="edit-modal-{{ $item->id }}"
                                        class="p-2 rounded-md text-black bg-[#FFC107] hover:bg-yellow-400" type="button">
                                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor"
                                            class="size-5">
                                            <path
                                                d="M21.731 2.269a2.625 2.625 0 0 0-3.712 0l-1.157 1.157 3.712 3.712 1.157-1.157a2.625 2.625 0 0 0 0-3.712ZM19.513 8.199l-3.712-3.712-12.15 12.15a5.25 5.25 0 0 0-1.32 2.214l-.8 2.685a.75.75 0 0 0 .933.933l2.685-.8a5.25 5.25 0 0 0 2.214-1.32L19.513 8.2Z" />
                                        </svg>
                                    </button>
                                    <button data-modal-target="popup-modal-{{ $item->id }}"
                                        data-modal-toggle="popup-modal-{{ $item->id }}"
                                        class="p-2 rounded-md text-white bg-[#DC3545] hover:bg-red-700" type="button">
                                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor"
                                            class="size-5">
                                            <path fill-rule="evenodd"
                                                d="M16.5 4.478v.227a48.816 48.816 0 0 1 3.878.512.75.75 0 1 1-.256 1.478l-.209-.035-1.005 13.07a3 3 0 0 1-2.991 2.77H8.084a3 3 0 0 1-2.991-2.77L4.087 6.66l-.209.035a.75.75 0 0 1-.256-1.478A48.567 48.567 0 0 1 7.5 4.705v-.227c0-1.564 1.213-2.9 2.816-2.951a52.662 52.662 0 0 1 3.369 0c1.603.051 2.815 1.387 2.815 2.951Zm-6.136-1.452a51.196 51.196 0 0 1 3.273 0C14.39 3.05 15 3.684 15 4.478v.113a49.488 49.488 0 0 0-6 0v-.113c0-.794.609-1.428 1.364-1.452Zm-.355 5.945a.75.75 0 1 0-1.5.058l.347 9a.75.75 0 1 0 1.499-.058l-.346-9Zm5.48.058a.75.75 0 1 0-1.498-.058l-.347 9a.75.75 0 0 0 1.5.058l.345-9Z"
                                                clip-rule="evenodd" />
                                        </svg>
                                    </button>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>

        </div>
    @endsection
    @push('scripts')
        {{-- javascript tambah berita --}}
        <script>
            ClassicEditor
                .create(document.getElementById('editor'))
                .catch(error => {
                    console.error(error);
                });
        </script>
        <script>
            document.addEventListener('DOMContentLoaded', function() {
                const uploadButton = document.getElementById('uploadButton');
                const fileInput = document.getElementById('small_size');
                const fileNameDisplay = document.getElementById('fileName');

                uploadButton.addEventListener('click', function(event) {
                    event.preventDefault(); // Mencegah tombol dari tindakan defaultnya
                    fileInput.click();
                });

                fileInput.addEventListener('change', function() {
                    const file = fileInput.files[0];
                    if (file) {
                        fileNameDisplay.textContent = `File terpilih: ${file.name}`;
                    } else {
                        fileNameDisplay.textContent = '';
                    }
                });
            });
        </script>

        {{-- javascript edit berita --}}
        <script>
            ClassicEditor
                .create(document.getElementById('editor2'))
                .catch(error => {
                    console.error(error);
                });
        </script>
        <script>
            // Ambil referensi elemen
            const uploadButton2 = document.getElementById('uploadButton2');
            const fileInput2 = document.getElementById('small_size2');
            const fileNameDisplay2 = document.getElementById('fileName2');

            // Tambahkan event listener untuk tombol
            uploadButton2.addEventListener('click', function(event) {
                event.preventDefault(); // Mencegah pengiriman formulir
                fileInput2.click();
            });
            // Tambahkan event listener untuk input file
            fileInput2.addEventListener('change', function() {
                const file = fileInput2.files[0]; // Ambil file yang diunggah
                if (file) {
                    fileNameDisplay2.textContent = `File terpilih: ${file.name}`; // Tampilkan nama file
                } else {
                    fileNameDisplay2.textContent = ''; // Kosongkan jika tidak ada file
                }
            });
        </script>
    @endpush
    <script>
        // Mendapatkan tanggal hari ini
        const today = new Date();
        const yyyy = today.getFullYear();
        const mm = String(today.getMonth() + 1).padStart(2, '0'); // Bulan dimulai dari 0, jadi perlu +1
        const dd = String(today.getDate()).padStart(2, '0');

        // Format tanggal sesuai kebutuhan, misalnya yyyy-mm-dd
        const formattedDate = `${yyyy}-${mm}-${dd}`;

        // Mengisi nilai ke input hidden
        document.getElementById('tanggalHariIni').value = formattedDate;
    </script>
