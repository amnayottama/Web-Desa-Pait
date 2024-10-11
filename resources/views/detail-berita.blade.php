@extends('layouts.main')
@section('title', 'Berita')
@section('content')
    <section class="m-6">
        <a class="flex items-center m-4 mb-4 text-lg font-semibold" href="/berita#slide">
            <svg class="w-3 h-3 text-black rtl:rotate-180" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none"
                viewBox="0 0 6 10">
                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                    d="M5 1 1 5l4 4" />
            </svg>
            <span class="ps-1">Kembali</span>
        </a>
        <div class="flex flex-col m-4 p-4 md:p-8 bg-gray-100 rounded-lg border shadow-md">
            <h1 class="text-3xl md:text-4xl font-semibold">Judul Berita Terkait</h1>
            <span class="text-sm md:text-base font-medium">28 Oktober 2025</span>
            <img class="py-4" src="{{ asset('images/image.png') }}" width="100%" alt="">
            <p class="text-sm md:text-base font-medium">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do
                eiusmod tempor
                incididunt
                ut labore et dolore
                magna aliqua.</p>
        </div>
    </section>
@endsection
