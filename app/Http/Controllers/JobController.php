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

class JobController extends Controller
{

    public function index()
    {
        $job = Job::all();
        return view('admin.data-pekerjaan', compact('job'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'nama_pekerjaan' => 'required|string|max:255',
        ]);
        $randomColor = $this->generateRandomColor();

        Job::create([
            'nama_pekerjaan' => $request->nama_pekerjaan,
            'warna' => $randomColor,
        ]);

        return redirect()->route('job')->with('status', 'Pekerjaan berhasil ditambahkan.');
    }
    private function generateRandomColor()
    {
        // Menghasilkan warna random dalam format HEX
        return sprintf('#%06X', mt_rand(0, 0xFFFFFF));
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'nama_pekerjaan' => 'required|string|max:255',
        ]);

        $job = Job::findOrFail($id);
        $job->nama_pekerjaan = $request->input('nama_pekerjaan');
        $job->save();

        return redirect()->route('job')->with('status', 'Data pekerjaan berhasil diupdate.');
    }


    public function destroy($id)
    {
        $job = Job::findOrFail($id);

        if ($job) {
            $job->delete();
            return redirect()->route('job')->with('status', 'Pekerjaan berhasil dihapus.');
        } else {
            return redirect()->route('job')->with('error', 'Pekerjaan tidak ditemukan.');
        }
    }
}
