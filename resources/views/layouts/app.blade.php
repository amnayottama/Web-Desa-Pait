<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Laravel - Dashboard</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])

</head>

<body class="bg-gray-100 min-h-screen">
    <div class="flex">
        <div class="fixed w-20 h-screen p-4 bg-white border-r[1px] flex flex-col justify-between">
            @include('layouts.sidebar')
        </div>
        {{-- Content --}}
        <main class="ml-20 w-full">
            @yield('contents')
        </main>
    </div>
</body>

</html>
