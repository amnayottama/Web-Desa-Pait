<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('admin.dashboard');
});
Route::get('/profile', function () {
    return view('admin.profile');
});
Route::get('/data-pekerjaan', function () {
    return view('admin.data-pekerjaan');
});
Route::get('/data-masyarakat', function () {
    return view('admin.data-masyarakat');
});
Route::get('/login', function () {
    return view('login');
});
Route::get('/home', function () {
    return view('home');
});
