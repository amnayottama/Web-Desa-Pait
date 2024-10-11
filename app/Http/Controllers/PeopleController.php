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

class PeopleController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $pep = People::with('job')->get();
        $job = Job::all();
        return view('admin.data-masyarakat', compact('pep','job'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'nama' => 'required|string|max:255',
            'nik' => 'required|digits:16|numeric|unique:people,nik,',
            'jk' => 'required|string|max:255',
            'alamat' => 'required',
            'pekerjaan' => 'required|string|max:255',
        ]);

        People::create([
            'nama' => $request->nama,
            'nik' => $request->nik,
            'jk' => $request->jk,
            'alamat' => $request->alamat,
            'pekerjaan' => $request->pekerjaan,
        ]);

        return redirect()->route('masyarakat')->with('status', 'Data berhasil ditambahkan.');
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'nama' => 'required|string|max:255',
            'nik' => 'required|digits:16|numeric|unique:people,nik,' . $id,
            'jk' => 'required|string|max:255',
            'alamat' => 'required',
            'pekerjaan' => 'required|string|max:255',
        ]);

        $masyarakat = People::findOrFail($id);

        $masyarakat->update($request->only(['nama', 'nik', 'jk', 'alamat', 'pekerjaan']));

        return redirect()->route('masyarakat')->with('status', 'Data berhasil diupdate.');
    }

    public function destroy($id)
    {
        $masyarakat = People::findOrFail($id);

        if ($masyarakat) {
            $masyarakat->delete();
            return redirect()->route('masyarakat')->with('status', 'Data berhasil dihapus.');
        } else {
            return redirect()->route('masyarakat')->with('error', 'Data tidak ditemukan.');
        }
    }
}
