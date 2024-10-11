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
                        <a href="#"
                            class="inline-flex justify-center items-center pt-2 pb-3 px-5 text-base font-medium text-center text-white rounded-full bg-red-600  shadow-sm-light shadow-red-600 hover:bg-red-700 focus:ring-4 focus:ring-red-300">
                            Profil Desa
                        </a>
                    </div>
                </div>
                <div class="mx-8 md:mx-0 max-w-2xl">
                    <img src="{{ asset('images/image4.png') }}" alt="">
                </div>
            </div>
            <div id="controls-carousel" class="relative w-full" data-carousel="active">
                <div class="relative mx-16 h-screen overflow-hidden rounded-lg">
                    <div class="hidden py-40" data-carousel-item>
                        <div class="flex w-full justify-center gap-8">
                            <div
                                class="w-1/3 h-fit flex flex-col items-center justify-center bg-white border border-gray-200 rounded-lg shadow">
                                <img class="rounded-t-lg w-full h-auto" src="{{ asset('images/image.png') }}"
                                    alt="" />
                                <div class="p-5">
                                    <p class="mb-3 line-clamp-3 font-normal text-gray-700">Lorem ipsum dolor
                                        sit amet consectetur adipisicing elit. At soluta ipsam voluptate iure, quae
                                        molestias
                                        explicabo
                                        asperiores repellendus id, reiciendis perferendis vitae nihil repellat ipsa
                                        distinctio
                                        expedita
                                        ipsum praesentium sint.</p>
                                    <a href="#"
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
                            <div
                                class="w-1/3 h-fit flex flex-col items-center justify-center bg-white border border-gray-200 rounded-lg shadow">
                                <img class="rounded-t-lg w-full h-auto" src="{{ asset('images/jumbotron-desain.png') }}"
                                    alt="" />
                                <div class="p-5">
                                    <p class="mb-3 line-clamp-3 font-normal text-gray-700">Lorem ipsum dolor
                                        sit amet consectetur adipisicing elit. At soluta ipsam voluptate iure, quae
                                        molestias
                                        explicabo
                                        asperiores repellendus id, reiciendis perferendis vitae nihil repellat ipsa
                                        distinctio
                                        expedita
                                        ipsum praesentium sint.</p>
                                    <a href="#"
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
                            <div
                                class="w-1/3 h-fit flex flex-col items-center justify-center bg-white border border-gray-200 rounded-lg shadow">
                                <img class="rounded-t-lg w-full h-auto" src="{{ asset('images/jumbotron-desain.png') }}"
                                    alt="" />
                                <div class="p-5">
                                    <p class="mb-3 line-clamp-3 font-normal text-gray-700">Lorem ipsum dolor
                                        sit amet consectetur adipisicing elit. At soluta ipsam voluptate iure, quae
                                        molestias
                                        explicabo
                                        asperiores repellendus id, reiciendis perferendis vitae nihil repellat ipsa
                                        distinctio
                                        expedita
                                        ipsum praesentium sint.</p>
                                    <a href="#"
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
                        </div>
                    </div>
                    <!-- Slide 2 (menampilkan 2 gambar) -->
                    <div class="hidden py-40" data-carousel-item>
                        <div class="flex w-full justify-center gap-8">
                            <div
                                class="w-1/3 h-fit flex flex-col items-center justify-center bg-white border border-gray-200 rounded-lg shadow">
                                <img class="rounded-t-lg w-full h-auto" src="{{ asset('images/image.png') }}"
                                    alt="" />
                                <div class="p-5">
                                    <p class="mb-3 line-clamp-3 font-normal text-gray-700">Lorem ipsum dolor
                                        sit amet consectetur adipisicing elit. At soluta ipsam voluptate iure, quae
                                        molestias
                                        explicabo
                                        asperiores repellendus id, reiciendis perferendis vitae nihil repellat ipsa
                                        distinctio
                                        expedita
                                        ipsum praesentium sint.</p>
                                    <a href="#"
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
                            <div
                                class="w-1/3 h-fit flex flex-col items-center justify-center bg-white border border-gray-200 rounded-lg shadow">
                                <img class="rounded-t-lg w-full h-auto" src="{{ asset('images/jumbotron-desain.png') }}"
                                    alt="" />
                                <div class="p-5">
                                    <p class="mb-3 line-clamp-3 font-normal text-gray-700">Lorem ipsum dolor
                                        sit amet consectetur adipisicing elit. At soluta ipsam voluptate iure, quae
                                        molestias
                                        explicabo
                                        asperiores repellendus id, reiciendis perferendis vitae nihil repellat ipsa
                                        distinctio
                                        expedita
                                        ipsum praesentium sint.</p>
                                    <a href="#"
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
                        </div>
                    </div>
                </div>
                <!-- Slider controls -->
                <button type="button"
                    class="absolute top-0 left-0 z-30 flex items-center justify-center h-full px-4 cursor-pointer group"
                    data-carousel-prev>
                    <span
                        class="inline-flex items-center justify-center w-10 h-10 rounded-full bg-white/30 group-hover:bg-white/50">
                        <svg class="w-4 h-4 text-black rtl:rotate-180" aria-hidden="true"
                            xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 6 10">
                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M5 1 1 5l4 4" />
                        </svg>
                        <span class="sr-only">Previous</span>
                    </span>
                </button>
                <button type="button"
                    class="absolute top-0 right-0 z-30 flex items-center justify-center h-full px-4 cursor-pointer group"
                    data-carousel-next>
                    <span
                        class="inline-flex items-center justify-center w-10 h-10 rounded-full bg-white/30 group-hover:bg-white/50">
                        <svg class="w-4 h-4 text-black rtl:rotate-180" aria-hidden="true"
                            xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 6 10">
                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="m1 9 4-4-4-4" />
                        </svg>
                        <span class="sr-only">Next</span>
                    </span>
                </button>
            </div>
        </div>
    </section>
@endsection
