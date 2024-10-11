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

class NewsController extends Controller
{
    public function index()
    {
        $userCount = User::count();
        $newsCount = News::count();
        $personCount = People::count();
        $jobCount = Job::count();

        $news = News::all();
        return view('admin.dashboard', compact('news', 'userCount', 'newsCount', 'personCount', 'jobCount'));
    }

    public function create()
    {
        $news = News::all();
        return view('admin.data-berita', compact('news'));
    }

    public function store(Request $request)
    {
        // Validasi data input
        $request->validate([
            'judul' => 'required|string|max:255',
            'deskripsi' => 'required|string',
            'gambar' => 'required|file|mimes:jpg,jpeg,png|max:2048', // Pastikan untuk menyesuaikan aturan validasi sesuai kebutuhan
        ]);

        // Simpan file gambar jika ada
        $gambarPath = null;
        if ($request->hasFile('gambar')) {
            $gambar = $request->file('gambar');
            $gambarName = time() . '_' . $gambar->getClientOriginalName();
            $gambar->move(public_path('gambar'), $gambarName);
            $gambarPath = 'gambar/' . $gambarName;
        }

        // Simpan data ke database
        News::create([
            'judul' => $request->input('judul'),
            'deskripsi' => $request->input('deskripsi'),
            'gambar' => $gambarPath,
            'created' => $request->input('created') ?: Carbon::now(),
        ]);

        // Redirect ke halaman yang diinginkan dengan pesan sukses
        return redirect()->route('news')->with('status', 'Berita berhasil ditambahkan!');
    }

    public function update(Request $request, $id)
    {
        // Validasi data input
        $request->validate([
            'judul' => 'required|string|max:255',
            'deskripsi' => 'required|string',
            'gambar' => 'nullable|file|mimes:jpg,jpeg,png|max:2048', // Gambar bersifat opsional
        ]);

        // Temukan berita yang ingin diupdate
        $news = News::findOrFail($id);

        // Simpan file gambar jika ada
        if ($request->hasFile('gambar')) {
            // Hapus gambar lama jika ada
            if ($news->gambar) {
                $oldImagePath = public_path($news->gambar);
                if (file_exists($oldImagePath)) {
                    unlink($oldImagePath); // Hapus gambar lama
                }
            }

            // Simpan gambar baru
            $gambar = $request->file('gambar');
            $gambarName = time() . '_' . $gambar->getClientOriginalName();
            $gambar->move(public_path('gambar'), $gambarName);
            $gambarPath = 'gambar/' . $gambarName;

            // Update gambar di database
            $news->gambar = $gambarPath;
        }

        // Update data lainnya
        $news->judul = $request->input('judul');
        $news->deskripsi = $request->input('deskripsi');
        $news->created = $request->input('created') ?: Carbon::now();
        $news->save(); // Simpan perubahan

        // Redirect ke halaman yang diinginkan dengan pesan sukses
        return redirect()->route('news')->with('status', 'Berita berhasil diperbarui!');
    }

    public function destroy($id)
    {
        // Temukan berita yang ingin dihapus
        $news = News::findOrFail($id);

        // Hapus gambar dari server jika ada
        if ($news->gambar) {
            $imagePath = public_path($news->gambar);
            if (file_exists($imagePath)) {
                unlink($imagePath); // Hapus gambar
            }
        }

        // Hapus berita dari database
        $news->delete();

        // Redirect ke halaman yang diinginkan dengan pesan sukses
        return redirect()->route('news')->with('status', 'Berita berhasil dihapus!');
    }

}
