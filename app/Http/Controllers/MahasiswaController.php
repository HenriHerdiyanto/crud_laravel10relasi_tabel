<?php

namespace App\Http\Controllers;

use App\Models\Mahasiswa;
use Illuminate\Http\Request;

class MahasiswaController extends Controller
{
    /**
     * Display a listing of the resource.
     */

    public function index()
    {
        $mahasiswas = Mahasiswa::all();
        // dd($mahasiswas);
        return view('mahasiswa.index', compact('mahasiswas'));
        // return view('mahasiswa.index', ['mahasiswas' => $mahasiswas]);
    }


    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('mahasiswa.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        // Validasi data yang diterima dari formulir
        $validatedData = $request->validate([
            'nama' => 'required|max:255',
            'nim' => 'required|unique:mahasiswas,nim',
            'email' => 'required|email|max:255',
            'jurusan' => 'required|max:255',
            'alamat' => 'required',
            'gambar' => 'required|file|image|mimes:jpeg,png,jpg|max:2048',
        ]);

        // Upload dan simpan gambar
        if ($request->hasFile('gambar')) {
            $file = $request->file('gambar');
            $nama_file = time() . "_" . $file->getClientOriginalName();
            $tujuan_upload = 'gambar';
            $file->move(public_path($tujuan_upload), $nama_file); // Gunakan public_path untuk menentukan direktori tujuan penyimpanan
        } else {
            return redirect()->back()->with('error', 'Gagal upload gambar');
        }

        // Simpan data ke database
        $mahasiswa = new Mahasiswa;
        $mahasiswa->nama = $validatedData['nama'];
        $mahasiswa->nim = $validatedData['nim'];
        $mahasiswa->email = $validatedData['email'];
        $mahasiswa->jurusan = $validatedData['jurusan'];
        $mahasiswa->alamat = $validatedData['alamat'];
        $mahasiswa->gambar = $nama_file;
        $mahasiswa->save();

        // Redirect user kembali ke halaman utama mahasiswa
        return redirect('/mahasiswa')->with('success', 'Data mahasiswa berhasil ditambahkan');
    }



    /**
     * Display the specified resource.
     */
    public function show(Mahasiswa $mahasiswa)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $mahasiswas = Mahasiswa::find($id);
        return view('mahasiswa.edit', ['mahasiswa' => $mahasiswas]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        $mahasiswa = Mahasiswa::find($id);

        if (!$mahasiswa) {
            return redirect()->route('mahasiswa.index')->with('error', 'Data mahasiswa tidak ditemukan');
        }

        // Validasi data yang diterima dari formulir
        $validatedData = $request->validate([
            'nama' => 'required|max:255',
            'nim' => 'required|unique:mahasiswas,nim,' . $id,
            'email' => 'required|email|max:255',
            'jurusan' => 'required|max:255',
            'alamat' => 'required',
            'gambar' => 'image|mimes:jpeg,png,jpg,gif|max:2048',
        ]);

        // Upload gambar jika ada
        if ($request->hasFile('gambar')) {
            $file = $request->file('gambar');
            $nama_file = time() . "_" . $file->getClientOriginalName();
            $tujuan_upload = 'gambar';
            $file->move(public_path($tujuan_upload), $nama_file);
            $mahasiswa->gambar = $nama_file;
        }

        // Perbarui data mahasiswa
        $mahasiswa->nama = $validatedData['nama'];
        $mahasiswa->nim = $validatedData['nim'];
        $mahasiswa->email = $validatedData['email'];
        $mahasiswa->jurusan = $validatedData['jurusan'];
        $mahasiswa->alamat = $validatedData['alamat'];
        $mahasiswa->save();

        // Redirect user kembali ke halaman utama mahasiswa
        return redirect('/mahasiswa')->with('success', 'Data mahasiswa berhasil diperbarui');
    }



    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $mahasiswa = Mahasiswa::find($id);
        $mahasiswa->delete();

        // Redirect ke halaman mahasiswa
        return redirect('/mahasiswa')->with('success', 'Data mahasiswa berhasil dihapus');
    }
}
