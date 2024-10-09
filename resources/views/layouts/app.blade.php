<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Laravel - Dashboard</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Nunito+Sans:ital,opsz,wght@0,6..12,200..1000;1,6..12,200..1000&display=swap"
        rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('css/index.css') }}">
    <link rel="stylesheet" href="https://cdn.datatables.net/1.10.25/css/jquery.dataTables.min.css">

</head>

<body class="bg-gray-100 min-h-screen">
    <div class="flex flex-col md:flex-row">
        <div class="fixed left-0 top-0 z-40 h-screen md:bg-white border-r[1px]">
            @include('layouts.sidebar')
        </div>
        {{-- Content --}}
        <main class="py-4 ps-4 pt-10 md:pt-4 md:ps-72 pe-10 w-screen">
            @yield('contents')
            <div class="flex p-4 justify-end text-md font-medium text-gray-400">
                2024 © Made with by Inaharsa Technology
            </div>
        </main>
    </div>
    @include('sweetalert::alert')
</body>

</html>
