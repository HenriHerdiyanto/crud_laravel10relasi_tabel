@extends('layouts.app')

@section('content')
    <div class="container mt-1">
        <div class="row justify-content-center">
            <div class="card">
                <div class="card-header">
                    <h2>Tambah Mahasiswa</h2>
                </div>
                <div class="card-body">
                    <form action="{{ route('mahasiswa.store') }}" method="post" enctype="multipart/form-data">
                        @csrf
                        <div class="row mb-2">
                            <label for="nama" class="col-sm-2 col-form-label">Nama Lengkap :</label>
                            <div class="col-sm-10">
                                <input type="text" name="nama" class="form-control" id="nama" required>
                            </div>
                        </div>
                        <div class="row mb-2">
                            <label for="nim" class="col-sm-2 col-form-label">NIM :</label>
                            <div class="col-sm-10">
                                <input type="text" name="nim" class="form-control" id="nim" placeholder="NIM"
                                    required>
                            </div>
                        </div>
                        <div class="row mb-2">
                            <label for="email" class="col-sm-2 col-form-label">Email :</label>
                            <div class="col-sm-10">
                                <input type="text" name="email" class="form-control" id="email" placeholder="Email"
                                    required>
                            </div>
                        </div>
                        <div class="row mb-2">
                            <label for="jurusan" class="col-sm-2 col-form-label">Jurusan :</label>
                            <div class="col-sm-10">
                                <input type="text" name="jurusan" class="form-control" id="jurusan"
                                    placeholder="Jurusan" required>
                            </div>
                        </div>
                        <div class="row mb-2">
                            <label for="alamat" class="col-sm-2 col-form-label">Alamat :</label>
                            <div class="col-sm-10">
                                <textarea name="alamat" id="alamat" cols="30" rows="10" class="form-control" placeholder="Alamat"
                                    required></textarea>
                            </div>
                        </div>
                        <div class="row mb-5">
                            <label for="gambar" class="col-sm-2 col-form-label">Gambar:</label>
                            <div class="col-sm-10">
                                <input type="file" name="gambar" class="form-control" id="gambar">
                            </div>
                        </div>
                        <div class="row justify-content-end mb-2">
                            <button type="submit" class="btn btn-primary">Tambah</button>
                        </div>

                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
