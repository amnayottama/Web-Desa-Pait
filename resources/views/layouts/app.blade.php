<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Laravel - Dashboard</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])

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
</body>

</html>
