@extends('layouts.main')
@section('title', 'Berita')
@section('content')
    <section>
        <div class="flex flex-col my-8 py-12 items-center justify-center bg-no-repeat"
            style="background-image: url('{{ asset('') }}');">
            <div class="flex flex-col justify-between gap-8 md:flex-row">
                <div class="mx-2 md:mt-28 md:mx-0 max-w-lg">
                    <p class="ms-4 mb-4 text-5xl max-w-xs font-medium text-[#2D2D2D]">Berita Seputar Desa Pait</p>
                    <div class="flex flex-row ms-4">
                        <p class="ps-1 text-lg text-gray-700">Desa Pait merupakan desa yang terletak di jantung alam,
                            dikenal dengan
                            keindahan pemandangan alamnya dan budaya yang kaya. Kami memiliki komitmen untuk membangun
                            komunitas yang sejahtera melalui berbagai inisiatif dan program.</p>
                    </div>
                    <div class="flex space-y-4 sm:flex-row sm:justify-start ms-4 mt-4 mb-10 md:mt-4 sm:space-y-0">
                        <a id="slide" href="#"
                            class="inline-flex justify-center items-center pt-2 pb-3 px-5 text-base font-medium text-center text-white rounded-full bg-red-600  shadow-sm-light shadow-red-600 hover:bg-red-700">
                            Profil Desa
                        </a>
                    </div>
                </div>
                <div class="mx-8 md:mx-0 max-w-2xl">
                    <img src="{{ asset('images/image4.png') }}" alt="">
                </div>
            </div>
            <div class="relative flex flex-col md:flex-row items-center my-12 mx-8">
                <button id="prevBtn"
                    class="absolute hidden md:block -left-20 top-1/2 -translate-y-1/2  p-2 rounded-lg z-10">
                    <svg class="text-[#AEADAD]" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="60"
                        height="60" fill="none" viewBox="0 0 24 24">
                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="m15 19-7-7 7-7" />
                    </svg>
                </button>
                <button id="prevBtn2" class="p-2 md:hidden rounded-lg z-10">
                    <svg class="text-[#AEADAD]" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="60"
                        height="60" fill="none" viewBox="0 0 24 24">
                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="m5 15 7-7 7 7" />
                    </svg>
                </button>
                <div id="slider"
                    class="flex flex-col md:flex-row max-w-screen-xl h-[1300px] md:h-full gap-8 overflow-y-hidden md:overflow-x-hidden scroll-smooth">
                    @foreach ($news as $item)
                    <div
                        class="min-w-[400px] h-fit flex flex-col items-center justify-center bg-white border border-gray-200 rounded-lg shadow">
                        <img class="rounded-t-lg w-full" src="{{ asset($item->gambar) }}" alt="{{ $item->judul }}" style="height: 250px"
                            alt="" />
                        <div class="p-5">
                            <p class="mb-3 line-clamp-3 font-normal text-gray-700">{!! Str::limit($item->deskripsi, 150) !!}</p>
                            <a href="{{ route('detail', $item->id) }}"
                                class="flex justify-end items-center px-3 py-2 text-sm font-medium text-gray-500">
                                Read more
                                <svg class="rtl:rotate-180 w-3.5 h-3.5 ms-2" aria-hidden="true"
                                    xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 10">
                                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                        stroke-width="2" d="M1 5h12m0 0L9 1m4 4L9 9" />
                                </svg>
                            </a>
                        </div>
                    </div>
                    @endforeach
                </div>
                <button id="nextBtn"
                    class="absolute hidden md:block -right-16 top-1/2 -translate-y-1/2 p-2 rounded-lg z-10">
                    <svg class="text-[#AEADAD]" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="60"
                        height="60" fill="none" viewBox="0 0 24 24">
                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="m9 5 7 7-7 7" />
                    </svg>
                </button>
                <button id="nextBtn2" class="p-2 md:hidden rounded-lg z-10">
                    <svg class="text-[#AEADAD]" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="60"
                        height="60" fill="none" viewBox="0 0 24 24">
                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="m19 9-7 7-7-7" />
                    </svg>

                </button>
            </div>
        </div>
    </section>
    <script>
        const slider = document.getElementById('slider');
        const prevBtn = document.getElementById('prevBtn');
        const nextBtn = document.getElementById('nextBtn');
        const prevBtn2 = document.getElementById('prevBtn2');
        const nextBtn2 = document.getElementById('nextBtn2');

        prevBtn.addEventListener('click', () => {
            slider.scrollBy({
                left: -430,
                behavior: 'smooth'
            });
        });

        nextBtn.addEventListener('click', () => {
            slider.scrollBy({
                left: 430,
                behavior: 'smooth'
            });
        });
        prevBtn2.addEventListener('click', () => {
            slider.scrollBy({
                top: -450,
                behavior: 'smooth'
            });
        });

        nextBtn2.addEventListener('click', () => {
            slider.scrollBy({
                top: 450,
                behavior: 'smooth'
            });
        });
    </script>
@endsection
