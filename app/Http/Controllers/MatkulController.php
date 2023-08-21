<?php

namespace App\Http\Controllers;

use App\Models\Dosen;
use App\Models\Matkul;
use Illuminate\Http\Request;

class MatkulController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //  pemanggilan data nama dosen berdasarkan dosen_id dan seluruh data dari tabel matkuls
        $matkuls = Matkul::with('dosen')->get();
        // return $matkuls;
        return view('matkul.index', ['matkuls' => $matkuls]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $dosens = Dosen::all();
        return view('matkul.create', ['dosens' => $dosens]);
        // return view('matkul.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        // validasi data dari form
        $validatedData = $request->validate([
            'kode_matkul' => 'required',
            'nama_matkul' => 'required',
            'sks' => 'required',
            'semester' => 'required',
            'dosen_id' => 'required',
        ]);
        // simpan data ke databse
        $matkul = new Matkul;
        $matkul->nama_matkul    = $validatedData['nama_matkul'];
        $matkul->kode_matkul    = $validatedData['kode_matkul'];
        $matkul->sks            = $validatedData['sks'];
        $matkul->semester       = $validatedData['semester'];
        $matkul->dosen_id       = $validatedData['dosen_id'];
        $matkul->save();
        // redirect ke halaman matkul
        return redirect('/matkul')->with('status', 'Data Mata Kuliah Berhasil Ditambahkan!');
    }

    /**
     * Display the specified resource.
     */
    public function show(Matkul $matkul)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $matkul = Matkul::find($id);
        $dosens = Dosen::all();
        return view('matkul.edit', ['matkul' => $matkul, 'dosens' => $dosens]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        $matkul = Matkul::find($id);

        if (!$matkul) {
            return redirect()->route('matkul.index')->with('error', 'Data matkul tidak ditemukan');
        }
        // validasi data dari form
        $validatedData = $request->validate([
            'kode_matkul' => 'required',
            'nama_matkul' => 'required',
            'sks' => 'required',
            'semester' => 'required',
            'dosen_id' => 'required',
        ]);
        // simpan data ke databse
        $matkul = Matkul::find($id);
        $matkul->nama_matkul    = $validatedData['nama_matkul'];
        $matkul->kode_matkul    = $validatedData['kode_matkul'];
        $matkul->sks            = $validatedData['sks'];
        $matkul->semester       = $validatedData['semester'];
        $matkul->dosen_id       = $validatedData['dosen_id'];
        $matkul->save();
        // redirect ke halaman matkul
        return redirect('/matkul')->with('status', 'Data Mata Kuliah Berhasil Diubah!');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Matkul $matkul)
    {
        //
    }
}
