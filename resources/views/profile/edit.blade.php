@extends('layouts.app')

@section('contents')
<div class="mx-1 mt-4">
    <span class="font-semibold text-xl">Profil Akun</span>
    <br>
    <span class="text-xs font-light text-gray-400">Halaman ini berisi informasi tentang akun anda</span>
    <!-- Menampilkan Pesan Kesalahan atau Sukses -->
    @if (session('status'))
    <div class="mt-4 text-green-600">
        {{ session('status') }}
    </div>
    @endif

    @if ($errors->any())
    <div class="mt-4 text-red-600">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
    @endif
    <form action="{{ route('profile.update') }}" method="POST">
        @csrf
        @method('PUT')

        <div class="bg-white rounded-md py-3 my-2">
            <div class="mx-4">
                <label for="name" class="text-xs text-gray-500">Nama Lengkap</label>
                <div class="my-2">
                    <input type="text" id="name" name="name"
                           class="border border-gray-300 text-gray-500 text-xs rounded-md focus:ring-blue-500 focus:border-blue-500 w-full p-2"
                           placeholder="Nama Lengkap"
                           value="{{ old('name', $user->name) }}" />
                </div>
                <label for="username" class="text-xs text-gray-500">Username</label>
                <div class="my-2">
                    <input type="text" id="username" name="username"
                           class="border border-gray-300 text-gray-500 text-xs rounded-md focus:ring-blue-500 focus:border-blue-500 w-full p-2"
                           placeholder="Username"
                           value="{{ old('username', $user->username) }}" />
                </div>
                <div class="flex justify-end">
                    <button type="submit" class="text-white bg-[#435EBE] hover:bg-[#273b85] focus:ring-4 focus:outline-none focus:ring-blue-300 font-light rounded-md text-sm block px-4 py-2 text-center">Simpan Profil</button>
                </div>
            </div>
        </div>
    </form>

    @if (session('status-pw'))
    <div class="mt-2 text-green-600">
        {{ session('status-pw') }}
    </div>
    @endif

    @if ($errors->any())
    <div class="mt-2 text-red-600">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
    @endif

    <form action="{{ route('profile.updatePassword') }}" method="POST">
        @csrf
        @method('PUT')

        <div class="bg-white rounded-md py-3 my-5">
            <div class="mx-4">
                <label for="password-now" class="text-xs text-gray-500">Password Saat ini</label>
                <div class="my-2">
                    <input type="password" id="password-now" name="current_password"
                           class="border border-gray-300 text-gray-500 text-xs rounded-md focus:ring-blue-500 focus:border-blue-500 w-full p-2" required/>
                </div>
                <label for="password-new" class="text-xs text-gray-500">Password Baru</label>
                <div class="my-2">
                    <input type="password" id="password-new" name="new_password"
                           class="border border-gray-300 text-gray-500 text-xs rounded-md focus:ring-blue-500 focus:border-blue-500 w-full p-2" required/>
                </div>
                <label for="password-confirm" class="text-xs text-gray-500">Konfirmasi Password Baru</label>
                <div class="my-2">
                    <input type="password" id="password-confirm" name="new_password_confirmation"
                           class="border border-gray-300 text-gray-500 text-xs rounded-md focus:ring-blue-500 focus:border-blue-500 w-full p-2" required/>
                </div>
                <div class="flex justify-end">
                    <button type="submit" class="text-white bg-[#435EBE] hover:bg-[#273b85] focus:ring-4 focus:outline-none focus:ring-blue-300 font-light rounded-md text-sm block px-4 py-2 text-center">Simpan Password</button>
                </div>
            </div>
        </div>
    </form>
</div>
@endsection
