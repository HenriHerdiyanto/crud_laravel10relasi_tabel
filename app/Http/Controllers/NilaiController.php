<?php

namespace App\Http\Controllers;

use App\Models\Nilai;
use App\Models\Mahasiswa;
use App\Models\Matkul;
use App\Models\Kelas;
use Illuminate\Http\Request;

class NilaiController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //pemanggilan semua data yang berelasi dengan tabel nilais
        $nilais = Nilai::with('mahasiswa', 'matkul', 'kelas')->get();
        return view('nilai.index', compact('nilais'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //pemanggilan semua data yang berelasi dengan tabel nilais
        $mahasiswas = Mahasiswa::all();
        $matkuls = Matkul::all();
        $kelas = Kelas::all();
        return view('nilai.create', compact('mahasiswas', 'matkuls', 'kelas'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //validasi data yang diinputkan
        $request->validate([
            'siswa_id' => 'required',
            'mapel_id' => 'required',
            'kelas_id' => 'required',
            'nilai' => 'required',
        ]);

        //menyimpan data yang diinputkan
        $nilai = new Nilai;
        $nilai->siswa_id    = $request['siswa_id'];
        $nilai->mapel_id    = $request['mapel_id'];
        $nilai->kelas_id    = $request['kelas_id'];
        $nilai->nilai       = $request['nilai'];
        $nilai->save();

        //jika data berhasil ditambahkan, akan kembali ke halaman utama
        return redirect('/nilai')->with('success', 'Data nilai berhasil dihapus');
    }

    /**
     * Display the specified resource.
     */
    public function show(Nilai $nilai)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $nilais = Nilai::findOrFail($id); // Ambil data nilai yang ingin diedit
        $mahasiswas = Mahasiswa::all(); // Ambil data mahasiswa
        $matkuls = Matkul::all(); // Ambil data matkul
        $kelas = Kelas::all(); // Ambil data kelas
        return view('nilai.edit', ['nilais' => $nilais, 'mahasiswas' => $mahasiswas, 'matkuls' => $matkuls, 'kelas' => $kelas]);
    }


    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        $nilais = Nilai::find($id);

        if (!$nilais) {
            return redirect()->route('nilai.index')->with('error', 'Data nilai tidak ditemukan');
        }

        // Validasi data yang diinputkan
        $request->validate([
            'siswa_id' => 'required',
            'mapel_id' => 'required',
            'kelas_id' => 'required',
            'nilai' => 'required',
        ]);

        // Menyimpan data yang diinputkan
        $nilais->siswa_id = $request->siswa_id;
        $nilais->mapel_id = $request->mapel_id;
        $nilais->kelas_id = $request->kelas_id;
        $nilais->nilai = $request->nilai;
        $nilais->save();

        // Jika data berhasil diupdate, akan kembali ke halaman utama
        return redirect('/nilai')->with('success', 'Data nilai berhasil dihapus');
    }


    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $nilais = Nilai::find($id);
        $nilais->delete();

        // Jika data berhasil dihapus, akan kembali ke halaman utama
        return redirect('/nilai')->with('success', 'Data nilai berhasil dihapus');
    }
}
