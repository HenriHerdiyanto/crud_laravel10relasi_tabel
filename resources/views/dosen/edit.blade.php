@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="card">
                <div class="card-header">
                    <h2>Edit Data Dosen</h2>
                </div>
                <div class="card-body">
                    <form action="{{ route('dosen.update', $dosen->id) }}" method="POST" enctype="multipart/form-data">
                        {{-- Form --}}
                        @csrf
                        @method('PUT')
                        <div class="row">
                            <div class="col-lg-8">
                                <div class="form-group row mb-3 ">
                                    <label for="nama" class="col-md-2 col-form-label text-md-left">Nama</label>
                                    <div class="col-md-10">
                                        <input type="text" name="nama" class="form-control" id="nama"
                                            value="{{ $dosen->nama }}" placeholder="Masukkan Nama">
                                    </div>
                                </div>
                                <div class="form-group row mb-3 mt-4" style="">
                                    <label for="nidn" class="col-md-2 col-form-label text-md-left">NIDN</label>
                                    <div class="col-md-10">
                                        <input type="text" name="nidn" class="form-control" id="nidn"
                                            value="{{ $dosen->nidn }}" placeholder="Masukkan NIDN">
                                    </div>
                                </div>
                                <div class="form-group row mb-3 ">
                                    <label for="nama" class="col-md-2 col-form-label text-md-left">Email</label>
                                    <div class="col-md-10">
                                        <input type="text" name="email" class="form-control" id="Email"
                                            value="{{ $dosen->email }}" placeholder="Masukkan Email">
                                    </div>
                                </div>
                                <div class="form-group row mb-3 ">
                                    <label for="nama" class="col-md-2 col-form-label text-md-left">Jabatan</label>
                                    <div class="col-md-10">
                                        <input type="text" name="jabatan" class="form-control" id="jabatan"
                                            value="{{ $dosen->jabatan }}" placeholder="Masukkan jabatan">
                                    </div>
                                </div>
                                <div class="form-group row mb-3 ">
                                    <label for="prodi" class="col-md-2 col-form-label text-md-left">Program Studi</label>
                                    <div class="col-md-10">
                                        <input type="text" name="prodi" class="form-control" id="prodi"
                                            value="{{ $dosen->prodi }}" placeholder="Masukkan prodi">
                                    </div>
                                </div>
                                <div class="form-group row mb-3 ">
                                    <label for="no_hp" class="col-md-2 col-form-label text-md-left">Nomor
                                        Handphone</label>
                                    <div class="col-md-10">
                                        <input type="text" name="no_hp" class="form-control" id="no_hp"
                                            value="{{ $dosen->no_hp }}" placeholder="Masukkan no_hp">
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-4">
                                <div class="form-group row mb-3 ">
                                    <div class="col-md-10">
                                        <img src="{{ asset('gambar/' . $dosen->foto) }}" alt=""><br>
                                        <input type="file" name="foto" class="form-control" id="foto"
                                            value="{{ $dosen->foto }}" placeholder="Masukkan foto">
                                    </div>
                                </div>
                            </div>
                            <button type="submit" class="btn btn-outline-success">UPDATE</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    @endsection
