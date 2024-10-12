<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\News;
use App\Models\People;
use App\Models\Job;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\File;
use Intervention\Image\Facades\Image;
use Carbon\Carbon;

class HomeController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        // Mengambil semua orang dengan relasi pekerjaan
        $pep = People::with('job')->get();

        // Mengelompokkan berdasarkan pekerjaan dan menghitung statistik
        $jobStats = $pep->groupBy('pekerjaan')->map(function ($group) {
            $job = $group->first()->job; // Ambil objek Job dari orang pertama di grup

            return [
                'total' => $group->count(),
                'male' => $group->where('jk', 'Laki-laki')->count(),
                'female' => $group->where('jk', 'Perempuan')->count(),
                'warna' => $job ? $job->warna : '#000000', // Warna dari job, jika ada
                'job' => $job, // Include job object for accessing nama_pekerjaan later
            ];
        });
        $chartData = [
            'series' => $jobStats->map(fn($stats) => ($stats['total'] / $pep->count()) * 100)->values()->toArray(), // percentages
            'colors' => $jobStats->map(fn($stats) => $stats['warna'])->values()->toArray(), // colors
            'labels' => $jobStats->map(fn($stats) => $stats['job']->nama_pekerjaan ?? 'Unknown')->values()->toArray(), // labels
        ];

        return view('statistic', compact('pep', 'jobStats', 'chartData'));
    }


    /**
     * Show the form for creating a new resource.
     */
    public function berita()
    {
        $news = News::all();
        return view('berita', compact('news'));
    }

    public function beritaDetail(string $id)
    {
        $berita = News::findOrFail($id);
        return view('detail-berita', compact('berita'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
