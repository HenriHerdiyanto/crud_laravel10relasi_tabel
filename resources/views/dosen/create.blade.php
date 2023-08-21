@extends('layouts.app')
@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="card">
                <div class="card-header">
                    <h2>Tambah Data</h2>
                </div>
                <div class="card-body">
                    <form action="{{ route('dosen.store') }}" method="post" enctype="multipart/form-data">
                        @csrf
                        <div class="mb-2">
                            <div class="row">
                                <label for="nama" class="col-sm-2 col-form-label">Nama Dosen</label>
                                <div class="col-sm-10">
                                    <input type="text" name="nama" id="nama" class="form-control"
                                        placeholder="Masukkan Nama">
                                </div>
                            </div>
                        </div>
                        <div class="mb-2">
                            <div class="row">
                                <label for="nip" class="col-sm-2 col-form-label">NIP Dosen</label>
                                <div class="col-sm-10">
                                    <input type="text" name="nidn" id="nidn" class="form-control"
                                        placeholder="Masukkan NIP">
                                </div>
                            </div>
                        </div>
                        <div class="mb-2">
                            <div class="row">
                                <label for="email" class="col-sm-2 col-form-label">Email Dosen</label>
                                <div class="col-sm-10">
                                    <input type="email" name="email" id="email" class="form-control"
                                        placeholder="Masukkan Email">
                                </div>
                            </div>
                        </div>
                        <div class="mb-2">
                            <div class="row">
                                <label for="jabatan" class="col-sm-2 col-form-label">Jabatan Dosen</label>
                                <div class="col-sm-10">
                                    <input type="text" name="jabatan" id="jabatan" class="form-control"
                                        placeholder="Masukkan Jabatan">
                                </div>
                            </div>
                        </div>
                        <div class="mb-2">
                            <div class="row">
                                <label for="prodi" class="col-sm-2 col-form-label">Program Studi</label>
                                <div class="col-sm-10">
                                    <input type="text" name="prodi" id="prodi" class="form-control"
                                        placeholder="Masukkan Program Studi">
                                </div>
                            </div>
                        </div>
                        <div class="mb-2">
                            <div class="row">
                                <label for="no_hp" class="col-sm-2 col-form-label">No HP Dosen</label>
                                <div class="col-sm-10">
                                    <input type="text" name="no_hp" id="no_hp" class="form-control"
                                        placeholder="Masukkan No HP">
                                </div>
                            </div>
                        </div>
                        <div class="mb-2">
                            <div class="row">
                                <label for="foto" class="col-sm-2 col-form-label">Foto Dosen</label>
                                <div class="col-sm-10">
                                    <input type="file" name="foto" id="foto" class="form-control">
                                </div>
                            </div>
                        </div>
                        <div class="mb-2">
                            <div class="row">
                                <div class="col-sm-2"></div>
                                <div class="col-sm-10">
                                    <button type="submit" class="btn btn-success">Simpan</button>
                                    <a href="#" class="btn btn-danger">Kembali</a>
                                </div>
                            </div>
                        </div>

                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
