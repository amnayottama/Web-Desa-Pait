<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <!-- Fonts -->
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Nunito+Sans:ital,opsz,wght@0,6..12,200..1000;1,6..12,200..1000&display=swap');
    </style>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>

<body class="font-sans text-gray-900 antialiased bg-red-50">
    <div class="flex items-center ps-8 pt-8">
        <a href="/">
            <img src="{{ asset('images/logo.png') }}" class="h-16 fill-current" alt="Logo">
        </a>
        <div class="text-gray-800 ps-2">
            <p class="text-md font-semibold">Website Desa</p>
            <span class="text-sm font-normal">Desa Pait - Malang</span>
        </div>
    </div>
    <div class="mt-3 flex flex-col sm:justify-center items-center pt-6 sm:pt-0">
        <div class="w-11/12 sm:max-w-lg m-6 px-6 py-6 bg-white shadow-md overflow-hidden sm:rounded-lg">
            <div class="pb-4">
                <img src="{{ asset('images/logo2.png') }}" class="h-12 fill-current" alt="Logo">
                <div class="px-4 py-2">
                    <p class="text-4xl font-semibold text-gray-600">
                        Login Website
                    </p>
                    <span class="text-gray-600">Desa Pait - Kecamatan Kasembon - Kabupaten Malang</span>
                </div>
            </div>
            <div class="mx-auto flex flex-col items-center justify-center space-y-10 md:flex-row">
                <!-- Session Status -->
                <x-auth-session-status class="mb-4" :status="session('status')" />

                <form method="POST" action="{{ route('login') }}" class="w-full px-1">
                    @csrf

                    <!-- Email Address -->
                    <div class="mb-6">
                        <label for="account_id" class="block mb-2 text-sm font-medium text-gray-600 dark:text-white">Akun
                            ID</label>
                        <input type="text" id="account_id" name="account_id"
                            class="bg-gray-50 border border-gray-300 text-gray-600 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5"
                            placeholder="Akun ID" required />
                        <x-input-error :messages="$errors->get('account_id')" class="mt-2" />
                    </div>

                    <!-- Password -->
                    <div class="mb-6">
                        <label for="password"
                            class="block mb-2 text-sm font-medium text-gray-600 dark:text-white">Password</label>
                        <input type="password" id="password" name="password"
                            class="bg-gray-50 border border-gray-300 text-gray-600 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5"
                            placeholder="•••••••••" required />
                        <x-input-error :messages="$errors->get('password')" class="mt-2" />
                    </div>

                    {{-- <!-- Remember Me -->
                    <div class="block mt-4">
                        <label for="remember_me" class="inline-flex items-center">
                            <input id="remember_me" type="checkbox" class="rounded dark:bg-gray-900 border-gray-300 dark:border-gray-700 text-indigo-600 shadow-sm focus:ring-indigo-500 dark:focus:ring-indigo-600 dark:focus:ring-offset-gray-800" name="remember">
                            <span class="ms-2 text-sm text-gray-600 dark:text-gray-400">{{ __('Remember me') }}</span>
                        </label>
                    </div> --}}

                    <div class="flex justify-end mb-6">
                        @if (Route::has('password.request'))
                            <a class="text-red-600 hover:underline" href="{{ route('password.request') }}">
                                {{ __('Forgot your password?') }}
                            </a>
                        @endif
                    </div>
                        <div class="w-full">
                            <button type="submit"
                                class="text-white bg-red-600 hover:bg-red-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm  block w-full px-4 py-2.5 text-center">Login</button>
                        </div>

                </form>
            </div>
    </div>
</div>
</body>
</html>
