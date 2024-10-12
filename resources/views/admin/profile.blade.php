@extends('layouts.app')
@section('contents')

<div class="mx-1 mt-4">
    <span class="font-semibold text-xl">Profil Akun</span>
    <br>
    <span class="text-xs font-light text-gray-400">Halaman ini berisi informasi tentang akun anda</span>

    <div class="bg-white rounded-md py-3 my-2" >
            <div class="mx-4">
                <label for="name" class="text-xs text-gray-500">Nama Lengkap</label>
                <div class="my-2">
                    <input type="name" id="name" class=" border border-gray-300 text-gray-500 text-xs rounded-md focus:ring-blue-500 focus:border-blue-500 w-full p-2" placeholder="Admin" required/>
                </div>
                <label for="username" class="text-xs text-gray-500">Username</label>
                <div class="my-2">
                    <input type="username" id="username" class=" border border-gray-300 text-gray-500 text-xs rounded-md focus:ring-blue-500 focus:border-blue-500 w-full p-2" placeholder="admin" required/>
                </div>
                <div class="flex justify-end">
                        <button type="submit"
                            class="text-white bg-[#435EBE] hover:bg-[#273b85] focus:ring-4 focus:outline-none focus:ring-blue-300 font-light rounded-md text-sm  block px-4 py-2 text-center">Simpan</button>
                </div>
            </div>
    </div>
    <div class="bg-white rounded-md py-3 my-9" >
            <div class="mx-4">
                <label for="password-now" class="text-xs text-gray-500">Password Saat ini</label>
                <div class="my-2">
                    <input type="password" id="password-now" class=" border border-gray-300 text-gray-500 text-xs rounded-md focus:ring-blue-500 focus:border-blue-500 w-full p-2" required/>
                </div>
                <label for="password-new" class="text-xs text-gray-500">Password Baru</label>
                <div class="my-2">
                    <input type="password" id="password-new" class=" border border-gray-300 text-gray-500 text-xs rounded-md focus:ring-blue-500 focus:border-blue-500 w-full p-2" required/>
                </div>
                <label for="password-confirm" class="text-xs text-gray-500">Konfirmasi Password Baru</label>
                <div class="my-2">
                    <input type="password" id="password-confirm" class=" border border-gray-300 text-gray-500 text-xs rounded-md focus:ring-blue-500 focus:border-blue-500 w-full p-2" required/>
                </div>
                <div class="flex justify-end">
                        <button type="submit"
                            class="text-white bg-[#435EBE] hover:bg-[#273b85] focus:ring-4 focus:outline-none focus:ring-blue-300 font-light rounded-md text-sm  block px-4 py-2 text-center">Simpan</button>
                </div>
            </div>
    </div>

</div>

@endsection