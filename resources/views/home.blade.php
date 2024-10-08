@extends('layouts.main')
@section('title', 'Home')
@section('content')
    <section class="relative bg-center bg-no-repeat bg-cover bg-gray-700 bg-blend-screen"
        style="background-image: url('{{ asset('images/jumbotron-desain.png') }}');">
        <div class="absolute inset-0 bg-gradient-to-r from-[#AA0000] to-[#F2295B] opacity-75 z-0"></div>
        <div class="relative z-10 px-4 mx-auto max-w-screen-xl text-left py-24 lg:py-56">
            <h1 class="mb-4 text-3xl font-extrabold tracking-tight leading-none text-white md:text-4xl lg:text-6xl">Selamat
                Datang Di <br> Website Desa Pait Kesambon</h1>
            <p class="mb-8 text-lg font-normal text-gray-300 lg:text-xl">Desa Pait Merupakan Desa yang Terletak di Kecamatan
                <br> Kesambon, Kabupaten Malang, Provinsi Jawa Timur
            </p>
            <div class="flex space-y-4 sm:flex-row sm:justify-start sm:space-y-0">
                <a href="#"
                    class="inline-flex justify-center items-center py-3 px-5 text-base font-medium text-center text-white rounded-full bg-red-600 shadow-red-600 hover:bg-red-700 focus:ring-4 focus:ring-red-300">
                    Buka Sistem Informasi Desa
                    <svg class="w-3.5 h-3.5 ms-2 rtl:rotate-180" aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
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
                <img class="" src="{{ asset('images/kepala-desa.png') }}" style="width: 1000px; height: auto;"
                    alt="">
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
                <img class="rounded-lg" src="{{ asset('images/image.png') }}" style="width: 100%; height: auto;"
                    alt="">
            </div>
            <div class="flex-1 px-10 pb-8 md:p-8 text-white font-semibold">
                <span class="text-sm">Saatnya beralih ke digital</span>
                <p class="text-4xl">Akses Lebih Mudah, Semua Ada Dalam Genggaman Tangan</p>
            </div>
        </div>
    </section>
    <section>
        <div class="flex flex-col md:flex-row my-8 items-center justify-center bg-red-100">
            <div class="flex flex-col items-center justify-center">
                <h1 class="text-red-900 text-3xl font-bold">Ragam Fitur Serba Digital</h1>
                <span class="text-gray-500">Akses semua fitur dengan mudah hanya menggunakan perangkat digital</span>
            </div>
        </div>
    </section>
@endsection
