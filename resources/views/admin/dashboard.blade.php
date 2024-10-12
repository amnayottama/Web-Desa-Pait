@extends('layouts.app')

@section('contents')
@php
    use Carbon\Carbon;
@endphp
    <div class="flex flex-col m-4 w-full">
        <div class="text-2xl font-normal">
            Dashboard Website Desa
        </div>
        <div class="flex flex-col md:flex-row my-8 gap-6 md:gap-9">
            <div
                class="flex flex-row md:w-1/4 justify-between px-6 py-6 md:px-6 md:py-8 gap-10 bg-white rounded-lg border-gray-500 shadow-md">
                <div class="">
                    <p class="font-medium text-gray-500">Admin</p>
                    <span class="font-bold">{{ $userCount }}</span>
                </div>
                <div class="p-3 text-white bg-[#9694FF] rounded-lg">
                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="size-6">
                        <path fill-rule="evenodd"
                            d="M7.5 6a4.5 4.5 0 1 1 9 0 4.5 4.5 0 0 1-9 0ZM3.751 20.105a8.25 8.25 0 0 1 16.498 0 .75.75 0 0 1-.437.695A18.683 18.683 0 0 1 12 22.5c-2.786 0-5.433-.608-7.812-1.7a.75.75 0 0 1-.437-.695Z"
                            clip-rule="evenodd" />
                    </svg>
                </div>
            </div>
            <div
                class="flex flex-row md:w-1/4 justify-between px-6 py-6 md:px-6 md:py-8 gap-10 bg-white rounded-lg border-gray-500 shadow-md">
                <div class="">
                    <p class="font-medium text-gray-500 whitespace-nowrap">Total Berita</p>
                    <span class="font-bold">{{ $newsCount }}</span>
                </div>
                <div class="p-3 text-white bg-[#57CAEB] rounded-lg">
                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="size-6">
                        <path fill-rule="evenodd"
                            d="M4.125 3C3.089 3 2.25 3.84 2.25 4.875V18a3 3 0 0 0 3 3h15a3 3 0 0 1-3-3V4.875C17.25 3.839 16.41 3 15.375 3H4.125ZM12 9.75a.75.75 0 0 0 0 1.5h1.5a.75.75 0 0 0 0-1.5H12Zm-.75-2.25a.75.75 0 0 1 .75-.75h1.5a.75.75 0 0 1 0 1.5H12a.75.75 0 0 1-.75-.75ZM6 12.75a.75.75 0 0 0 0 1.5h7.5a.75.75 0 0 0 0-1.5H6Zm-.75 3.75a.75.75 0 0 1 .75-.75h7.5a.75.75 0 0 1 0 1.5H6a.75.75 0 0 1-.75-.75ZM6 6.75a.75.75 0 0 0-.75.75v3c0 .414.336.75.75.75h3a.75.75 0 0 0 .75-.75v-3A.75.75 0 0 0 9 6.75H6Z"
                            clip-rule="evenodd" />
                        <path d="M18.75 6.75h1.875c.621 0 1.125.504 1.125 1.125V18a1.5 1.5 0 0 1-3 0V6.75Z" />
                    </svg>
                </div>
            </div>
            <div
                class="flex flex-row md:w-1/4 justify-between px-6 py-6 md:px-6 md:py-8 gap-10 bg-white rounded-lg border-gray-500 shadow-md">
                <div class="">
                    <p class="font-medium text-gray-500 whitespace-nowrap">Data Masyarakat</p>
                    <span class="font-bold">{{ $personCount }}</span>
                </div>
                <div class="p-3 text-white bg-[#5DDAB4] rounded-lg">
                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="size-6">
                        <path fill-rule="evenodd"
                            d="M8.25 6.75a3.75 3.75 0 1 1 7.5 0 3.75 3.75 0 0 1-7.5 0ZM15.75 9.75a3 3 0 1 1 6 0 3 3 0 0 1-6 0ZM2.25 9.75a3 3 0 1 1 6 0 3 3 0 0 1-6 0ZM6.31 15.117A6.745 6.745 0 0 1 12 12a6.745 6.745 0 0 1 6.709 7.498.75.75 0 0 1-.372.568A12.696 12.696 0 0 1 12 21.75c-2.305 0-4.47-.612-6.337-1.684a.75.75 0 0 1-.372-.568 6.787 6.787 0 0 1 1.019-4.38Z"
                            clip-rule="evenodd" />
                        <path
                            d="M5.082 14.254a8.287 8.287 0 0 0-1.308 5.135 9.687 9.687 0 0 1-1.764-.44l-.115-.04a.563.563 0 0 1-.373-.487l-.01-.121a3.75 3.75 0 0 1 3.57-4.047ZM20.226 19.389a8.287 8.287 0 0 0-1.308-5.135 3.75 3.75 0 0 1 3.57 4.047l-.01.121a.563.563 0 0 1-.373.486l-.115.04c-.567.2-1.156.349-1.764.441Z" />
                    </svg>
                </div>
            </div>
            <div
                class="flex flex-row md:w-1/4 justify-between px-6 py-6 md:px-6 md:py-8 gap-10 bg-white rounded-lg border-gray-500 shadow-md">
                <div class="">
                    <p class="font-medium text-gray-500 whitespace-nowrap">Data Pekerjaan</p>
                    <span class="font-bold">{{ $jobCount }}</span>
                </div>
                <div class="p-3 text-white bg-[#FF7976] rounded-lg">
                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="size-6">
                        <path fill-rule="evenodd"
                            d="M7.5 5.25a3 3 0 0 1 3-3h3a3 3 0 0 1 3 3v.205c.933.085 1.857.197 2.774.334 1.454.218 2.476 1.483 2.476 2.917v3.033c0 1.211-.734 2.352-1.936 2.752A24.726 24.726 0 0 1 12 15.75c-2.73 0-5.357-.442-7.814-1.259-1.202-.4-1.936-1.541-1.936-2.752V8.706c0-1.434 1.022-2.7 2.476-2.917A48.814 48.814 0 0 1 7.5 5.455V5.25Zm7.5 0v.09a49.488 49.488 0 0 0-6 0v-.09a1.5 1.5 0 0 1 1.5-1.5h3a1.5 1.5 0 0 1 1.5 1.5Zm-3 8.25a.75.75 0 1 0 0-1.5.75.75 0 0 0 0 1.5Z"
                            clip-rule="evenodd" />
                        <path
                            d="M3 18.4v-2.796a4.3 4.3 0 0 0 .713.31A26.226 26.226 0 0 0 12 17.25c2.892 0 5.68-.468 8.287-1.335.252-.084.49-.189.713-.311V18.4c0 1.452-1.047 2.728-2.523 2.923-2.12.282-4.282.427-6.477.427a49.19 49.19 0 0 1-6.477-.427C4.047 21.128 3 19.852 3 18.4Z" />
                    </svg>
                </div>
            </div>
        </div>
        <div class="overflow-x-auto shadow-md sm:rounded-lg">
            <table class="w-full text-sm text-left rtl:text-right text-gray-500 ">
                <caption class="p-5 text-lg font-semibold text-left rtl:text-right text-gray-500 bg-white">
                    Berita Terbaru
                </caption>
                <thead class="text-xs">
                    <tr class="border-b">
                        <th scope="col" class="px-6 py-3 w-1/12">
                            No
                        </th>
                        <th scope="col" class="px-6 py-3 w-5/12">
                            Judul
                        </th>
                        <th scope="col" class="px-6 py-3 w-2/12">
                            Created
                        </th>
                        <th scope="col" class="px-6 py-3 w-2/12">
                            Status
                        </th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($news as $item)
                    <tr class="bg-white border-b">
                        <th scope="row" class="px-6 py-4 font-medium text-gray-500 whitespace-nowrap">
                            {{$loop->iteration}}
                        </th>
                        <td class="px-6 py-4">
                            {{ $item->judul }}
                        </td>
                        <td class="px-6 py-4">
                        {{-- @if($item->gambar)
                            <img src="{{ asset('images/news/' . $item->gambar) }}" alt="{{ $item->judul }}" width="100">
                        @else
                            <p>No Image</p>
                        @endif --}}
                        {{ Carbon::parse($item->created)->translatedFormat('d F Y') }}
                        </td>
                        <td class="px-6 py-4">
                        @if($item->created)
                            <p>Published</p>
                        @else
                            <p>Not Published</p>
                        @endif
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
@endsection
