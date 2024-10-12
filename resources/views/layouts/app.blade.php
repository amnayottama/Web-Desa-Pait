<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="icon" href="{{ asset('images/logo.png') }}" type="image/x-icon" />
    <title>Dashboard</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Nunito+Sans:ital,opsz,wght@0,6..12,200..1000;1,6..12,200..1000&display=swap"
        rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.datatables.net/1.10.25/css/jquery.dataTables.min.css">
    <script src="https://cdn.ckeditor.com/ckeditor5/39.0.1/classic/ckeditor.js"></script>

</head>

<body class="bg-gray-100 min-h-screen">
    <div class="flex flex-col md:flex-row">
        <div class="static md:fixed top-0 left-0 z-40 h-0 md:h-screen bg-none md:bg-white border-r[1px]">
            @include('layouts.sidebar')
        </div>
        {{-- Content --}}
        <main class="py-4 ps-4 md:ps-72 pe-10 pt-10 md:pt-4 w-screen">
            @yield('contents')
            <div class="flex p-4 justify-end text-md font-medium text-gray-400">
                2024 © Made with by Inaharsa Technology
            </div>
        </main>
    </div>
    @stack('scripts')
</body>

</html>
