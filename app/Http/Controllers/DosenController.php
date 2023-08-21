<?php

namespace App\Http\Controllers;

use App\Models\Dosen;
use Illuminate\Http\Request;

class DosenController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $dosens = Dosen::all();
        return view('dosen.index', ['dosens' => $dosens]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('dosen.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        // Validasi data yang diterima dari formulir
        $validatedData = $request->validate([
            'nama' => 'required|max:255',
            'nidn' => 'required|unique:dosens,nidn',
            'email' => 'required|email|max:255',
            'jabatan' => 'required|max:255',
            'prodi' => 'required',
            'no_hp' => 'required',
            'foto' => 'required|file|image|mimes:jpeg,png,jpg|max:2048',
        ]);

        // Verifikasi apakah gambar ada dan valid
        if (!$request->hasFile('foto') || !$request->file('foto')->isValid()) {
            return redirect()->back()->with('error', 'Gambar tidak valid atau tidak terunggah');
        }

        // Upload dan simpan gambar
        $file = $request->file('foto');
        $nama_file = time() . "_" . $file->getClientOriginalName();
        $tujuan_upload = 'gambar';
        $file->move(public_path($tujuan_upload), $nama_file);

        // Simpan data ke database
        $dosen = new Dosen;
        $dosen->nama = $validatedData['nama'];
        $dosen->nidn = $validatedData['nidn'];
        $dosen->email = $validatedData['email'];
        $dosen->jabatan = $validatedData['jabatan'];
        $dosen->prodi = $validatedData['prodi'];
        $dosen->no_hp = $validatedData['no_hp'];
        $dosen->foto = $nama_file;
        $dosen->save();

        // Redirect user kembali ke halaman utama dosen
        return redirect('/dosen')->with('success', 'Data Dosen berhasil ditambahkan');
    }


    /**
     * Display the specified resource.
     */
    public function show(Dosen $dosen)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $dosen = Dosen::findOrFail($id);
        return view('dosen.edit', ['dosen' => $dosen]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        $dosen = Dosen::find($id);

        if (!$dosen) {
            return redirect()->route('dosen.index')->with('error', 'Data dosen tidak ditemukan');
        }

        // Validasi input dari user
        $validatedData = $request->validate([
            'nama' => 'required|max:255',
            'nidn' => 'required|unique:dosens,nidn,' . $id,
            'email' => 'required|email|max:255',
            'jabatan' => 'required|max:255',
            'prodi' => 'required',
            'no_hp' => 'required',
            'foto' => 'file|image|mimes:jpeg,png,jpg|max:2048',
        ]);

        // Upload dan simpan gambar jika ada
        if ($request->hasFile('foto')) {
            $file = $request->file('foto');
            $nama_file = time() . "_" . $file->getClientOriginalName();
            $tujuan_upload = 'gambar';
            $file->move(public_path($tujuan_upload), $nama_file);
            $dosen->foto = $nama_file;
        }

        // Perbarui data dosen
        $dosen->nama = $validatedData['nama'];
        $dosen->nidn = $validatedData['nidn'];
        $dosen->email = $validatedData['email'];
        $dosen->jabatan = $validatedData['jabatan'];
        $dosen->prodi = $validatedData['prodi'];
        $dosen->no_hp = $validatedData['no_hp'];
        $dosen->save();
        // buatkan dd
        // dd($dosen);

        // Redirect user kembali ke halaman utama dosen
        return redirect('/dosen')->with('success', 'Data dosen berhasil diperbarui');
    }


    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $dosen = Dosen::find($id);

        if (!$dosen) {
            return redirect()->route('/dosen')->with('error', 'Data dosen tidak ditemukan');
        }

        $dosen->delete();
        return redirect()->route('/dosen')->with('success', 'Data dosen berhasil dihapus');
    }
}
