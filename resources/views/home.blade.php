@extends('layouts.main')
@section('title', 'Home')
@section('content')
    <section class="relative bg-center bg-no-repeat bg-cover bg-gray-700 bg-blend-screen"
        style="background-image: url('{{ asset('images/jumbotron-desain.png') }}');">
        <div class="absolute inset-0 bg-gradient-to-r from-[#AA0000] to-[#F2295B] opacity-75 z-0"></div>
        <div class="relative z-10 px-4 mx-auto max-w-screen-xl text-left py-24 lg:py-56">
            <h1
                class="mb-4 text-2xl font-bold md:font-extrabold tracking-tight leading-none text-white md:text-4xl lg:text-6xl">
                Selamat
                Datang Di <br> Website Desa Pait Kesambon</h1>
            <p class="mb-8 text-md font-normal text-gray-300 lg:text-xl">Desa Pait Merupakan Desa yang Terletak di Kecamatan
                <br> Kesambon, Kabupaten Malang, Provinsi Jawa Timur
            </p>
            <div class="flex space-y-4 sm:flex-row sm:justify-start sm:space-y-0">
                <a href="#"
                    class="inline-flex justify-center items-center pt-2 pb-3 px-5 text-base font-medium text-center text-white rounded-full bg-red-600 shadow-sm-light shadow-red-600 hover:bg-red-700 focus:ring-4 focus:ring-red-300">
                    Buka Sistem Informasi Desa
                    <svg class="w-3.5 h-3.5 ms-2 mt-1 rtl:rotate-180" aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
                        fill="none" viewBox="0 0 14 10">
                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M1 5h12m0 0L9 1m4 4L9 9" />
                    </svg>
                </a>
            </div>
        </div>
    </section>
    <section>
        <div class="flex flex-col md:flex-row items-center justify-center my-8 mx-10 md:mx-60 gap-10 md:gap-32">
            <div class="md:order-2">
                <img class="max-w-[250px] md:max-w-full" src="{{ asset('images/kepala-desa.png') }}"
                    style="width: 1000px; height: auto;" alt="">
            </div>
            <div class="md:order-1">
                <h1 class="pb-3 text-2xl font-bold text-red-800">Website Desa Pait <br>Untuk Semua</h1>
                <p class="pb-3 text-gray-500">Kami senang Anda sudah berkunjung, semoga melalui situs web ini
                    kami dapat memberikan segala informasi yang aktual dan terperbarui
                    langsung dari desa kami. Situs web ini merupakan salah satu wujud dari
                    komitmen pemerintah desa, pada pentingnya komunikasi dan
                    transparansi publik.</p>
                <span class="text-gray-500"><b>Bapak Sunarto</b> <br><i>Kepala Desa Pait</i></span>
            </div>
        </div>
    </section>
    <section>
        <div
            class="flex flex-col md:flex-row items-center my-8 justify-between rounded-3xl gap-6 md:gap-10 mx-4 md:mx-44 bg-gradient-to-r from-[#AA0000] to-[#E21600]">
            <div class="flex-1 pt-8 md:p-8">
                <img class="rounded-lg max-w-[350px] md:max-w-full" src="{{ asset('images/image.png') }}"
                    style="width: 100%; height: auto;" alt="">
            </div>
            <div class="flex-1 px-10 pb-8 md:p-8 text-white font-semibold">
                <span class="text-sm">Saatnya beralih ke digital</span>
                <p class="text-3xl md:text-4xl">Akses Lebih Mudah, Semua Ada Dalam Genggaman Tangan</p>
            </div>
        </div>
    </section>
    <section>
        <div class="flex flex-col my-8 items-center justify-center rounded-tl-3xl rounded-br-3xl bg-red-100">
            <div class="flex flex-col my-6 items-center justify-center">
                <h1 class="text-[#AA0000] text-3xl font-bold">Ragam Fitur Serba Digital</h1>
                <span class="mx-4 text-center text-gray-500">Akses semua fitur dengan mudah hanya
                    menggunakan perangkat
                    digital</span>
            </div>
            <div class="flex flex-col md:flex-row mx-8 md:0 mb-10 gap-8">
                <div class="max-w-fit text-center bg-white border border-gray-200 rounded-3xl shadow">
                    <img class="" src="{{ asset('images/image1.png') }}" style="width: 360px" alt="" />
                    <div class="p-5 rounded-3xl shadow-inner shadow-gray-300">
                        <h5 class="mb-2 text-xl font-bold tracking-tight text-[#AA0000] ">Berita Terbaru Desa Gembong
                        </h5>
                        <p class="mb-3 max-w-sm md:max-w-80 font-normal text-center text-gray-700">Dapatkan berita terbaru
                            terkait desa
                            Pait di
                            website https://sisteminformasi.desapait.id</p>
                        <a href="#"
                            class="inline-flex items-center px-4 py-2 text-md font-medium text-center text-[#E21600] hover:text-[#AA0000]">
                            Klik untuk pergi ke sistem informasi
                        </a>
                    </div>
                </div>
                <div class="max-w-fit text-center bg-white border border-gray-200 rounded-3xl shadow">
                    <img class="mx-8 mt-6" src="{{ asset('images/image2.png') }}" style="width: 300px" alt="" />
                    <div class="p-5 rounded-3xl shadow-inner shadow-gray-300">
                        <h5 class="mb-2 text-xl font-bold tracking-tight text-[#AA0000] ">Layanan Mandiri</h5>
                        <p class="mb-3 max-w-sm md:max-w-80 font-normal text-center text-gray-700">Gunakan layanan mandiri
                            di website
                            https://sisteminfromasi.desapait.id</p>
                        <a href="#"
                            class="inline-flex items-center px-4 pt-2 pb-3 text-md font-medium text-center text-[#E21600] hover:text-[#AA0000]">
                            Klik untuk pergi ke sistem informasi
                        </a>
                    </div>
                </div>
                <div class="max-w-fit text-center bg-white border border-gray-200 rounded-3xl shadow">
                    <img class="mt-10" src="{{ asset('images/image3.png') }}" style="width: 360px" alt="" />
                    <div class="p-5 rounded-3xl shadow-inner shadow-gray-300">
                        <h5 class="mb-2 text-xl font-bold tracking-tight text-[#AA0000] ">Statistik Data Penduduk</h5>
                        <p class="mb-3 max-w-sm md:max-w-80 font-normal text-center text-gray-700">Cek statistik data desa
                            Pait hanya di
                            website https://sisteminformasi.desapait.id</p>
                        <a href="#"
                            class="inline-flex items-center px-4 pt-2 pb-3 text-md font-medium text-center text-[#E21600] hover:text-[#AA0000]">
                            Klik untuk pergi ke sistem informasi
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section>
        <div class="flex flex-col my-8 py-12 items-center justify-center bg-left bg-no-repeat"
            style="background-image: url('{{ asset('images/background-content.png') }}'); background-size: 25%; background-position: left 30%;">
            <div class="flex flex-col justify-center md:flex-row gap-6">
                <div class="mx-4 md:mx-0">
                    <span class="text-xl font-bold text-gray-600">Website Kami</span>
                    <p class="ms-4 mb-4 text-4xl max-w-sm font-bold text-[#AA0000]">Pelayanan Informasi Desa Pait</p>
                    <div class="flex flex-row ms-4 mb-2">
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor"
                            class="size-5 md:size-6 text-[#AA0000]">
                            <path fill-rule="evenodd"
                                d="M19.916 4.626a.75.75 0 0 1 .208 1.04l-9 13.5a.75.75 0 0 1-1.154.114l-6-6a.75.75 0 0 1 1.06-1.06l5.353 5.353 8.493-12.74a.75.75 0 0 1 1.04-.207Z"
                                clip-rule="evenodd" />
                        </svg>
                        <p class="ps-1 text-gray-700">Berita Terbaru Terkait Kegiatan di Desa Pait</p>
                    </div>
                    <div class="flex flex-row ms-4 mb-2">
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor"
                            class="size-6 text-[#AA0000]">
                            <path fill-rule="evenodd"
                                d="M19.916 4.626a.75.75 0 0 1 .208 1.04l-9 13.5a.75.75 0 0 1-1.154.114l-6-6a.75.75 0 0 1 1.06-1.06l5.353 5.353 8.493-12.74a.75.75 0 0 1 1.04-.207Z"
                                clip-rule="evenodd" />
                        </svg>
                        <p class="ps-1 text-gray-700">Data Statistik Kependudukan dan Pemetaan Wilayah Desa pait</p>
                    </div>
                    <div class="flex space-y-4 sm:flex-row sm:justify-start ms-4 mt-16 mb-10 md:mt-20 sm:space-y-0">
                        <a href="#"
                            class="inline-flex justify-center items-center pt-2 pb-3 px-5 text-base font-medium text-center text-white rounded-full bg-red-600  shadow-sm-light shadow-red-600 hover:bg-red-700 focus:ring-4 focus:ring-red-300">
                            Buka Sistem Informasi Desa
                            <svg class="w-3.5 h-3.5 ms-2 mt-1 rtl:rotate-180" aria-hidden="true"
                                xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 10">
                                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                    stroke-width="2" d="M1 5h12m0 0L9 1m4 4L9 9" />
                            </svg>
                        </a>
                    </div>
                </div>
                <div class="max-h-min mx-8 md:mx-0 bg-red-100 border border-gray-200 rounded-3xl shadow">
                    <div class="p-5 rounded-3xl">
                        <h5 class="text-left mb-4 text-xl font-bold tracking-tight text-gray-600">Berita Terbaru Desa
                            Pait
                        </h5>
                        <p class="mb-3 max-w-sm md:max-w-80 font-normal text-left text-gray-700">Memberikan akses cepat
                            kepada penduduk dan pengunjung untuk mendapatkan informasi terkini seputar kegiatan, pengumuman,
                            dan peristiwa penting yang terjadi di Desa Pait</p>
                        <a href="#"
                            class="flex justify-end mt-8 pt-2 pb-3 text-md font-medium text-right text-[#E21600] hover:text-[#AA0000]">
                            Pergi ke Laman Berita
                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor"
                                class="size-4 mt-1.5">
                                <path fill-rule="evenodd"
                                    d="M16.28 11.47a.75.75 0 0 1 0 1.06l-7.5 7.5a.75.75 0 0 1-1.06-1.06L14.69 12 7.72 5.03a.75.75 0 0 1 1.06-1.06l7.5 7.5Z"
                                    clip-rule="evenodd" />
                            </svg>
                        </a>
                    </div>
                </div>
                <div class="max-h-min mx-8 md:mx-0 bg-red-100 border border-gray-200 rounded-3xl shadow">
                    <div class="p-5 rounded-3xl">
                        <h5 class="text-left mb-4 text-xl font-bold tracking-tight text-gray-600">Statistik Data Penduduk
                        </h5>
                        <p class="mb-3 max-w-sm md:max-w-80 font-normal text-left text-gray-700">menyajikan informasi
                            statistik tentang jumlah
                            penduduk, usia, jenis kelamin, pendidikan,
                            pekerjaan, dan aspek demografis lainnya. Ini
                            membantu pengguna memahami komposisi
                            dan perubahan populasi di desa Pait</p>
                        <a href="#"
                            class="flex justify-end mt-8 pt-2 pb-3 text-md font-medium text-right text-[#E21600] hover:text-[#AA0000]">
                            Pergi ke Laman Statistik
                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor"
                                class="size-4 mt-1.5">
                                <path fill-rule="evenodd"
                                    d="M16.28 11.47a.75.75 0 0 1 0 1.06l-7.5 7.5a.75.75 0 0 1-1.06-1.06L14.69 12 7.72 5.03a.75.75 0 0 1 1.06-1.06l7.5 7.5Z"
                                    clip-rule="evenodd" />
                            </svg>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
