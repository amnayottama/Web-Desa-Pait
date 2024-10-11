<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\NewsController;
use App\Http\Controllers\PeopleController;
use App\Http\Controllers\JobController;
use App\Http\Controllers\HomeController;

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});
Route::get('/statistik', [HomeController::class, 'index'])->name('statistik');
Route::get('/berita-tampil', [HomeController::class, 'berita'])->name('berita-tampil');
Route::get('/berita/{id}', [HomeController::class, 'beritaDetail'])->name('detail');


Route::middleware(['auth','verified'])->group(function () {
    //dashboard
    Route::get('/dashboard', [NewsController::class, 'index'])->name('dashboard');

    // profile
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile');
    Route::put('/profile/update', [ProfileController::class, 'update'])->name('profile.update');
    Route::put('/profile/password', [ProfileController::class, 'updatePassword'])->name('profile.updatePassword');

    //news
    Route::get('/news', [NewsController::class, 'create'])->name('news');
    Route::post('/news/store', [NewsController::class, 'store'])->name('news.store');
    Route::put('/news/update/{id}', [NewsController::class, 'update'])->name('news.update');
    Route::delete('/news/destroy/{id}', [NewsController::class, 'destroy'])->name('news.destroy');

    //data masyarakat
    Route::get('/masyarakat', [PeopleController::class, 'index'])->name('masyarakat');
    Route::post('/masyarakat/store', [PeopleController::class, 'store'])->name('masyarakat.store');
    Route::put('/masyarakat/update/{id}', [PeopleController::class, 'update'])->name('masyarakat.update');
    Route::delete('/masyarakat/destroy/{id}', [PeopleController::class, 'destroy'])->name('masyarakat.destroy');

    //pekerjaan
    Route::get('/job', [JobController::class, 'index'])->name('job');
    Route::post('/job/store', [JobController::class, 'store'])->name('job.store');
    Route::put('/job/update/{id}', [JobController::class, 'update'])->name('job.update');
    Route::delete('/job/destroy/{id}', [JobController::class, 'destroy'])->name('job.destroy');
});

// Route::middleware('auth')->group(function () {
//     Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
//     Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
//     Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
// });

require __DIR__.'/auth.php';
