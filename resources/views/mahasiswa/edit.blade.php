@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="card">
            <div class="card-header bg-primary">
                <h1 class="text-white">Edit Mahasiswa</h1>
            </div>
            <div class="card-body">
                <form action="{{ route('mahasiswa.update', $mahasiswa->id) }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    @method('PUT')

                    <div class="row">
                        <div class="col-lg-8">
                            <div class="mb-3">
                                <label for="nama" class="form-label">Nama Lengkap:</label>
                                <input type="text" name="nama" class="form-control" id="nama"
                                    value="{{ $mahasiswa->nama }}">
                            </div>
                            <div class="mb-3">
                                <label for="nim" class="form-label">NIM:</label>
                                <input type="text" name="nim" class="form-control" id="nim"
                                    value="{{ $mahasiswa->nim }}">
                            </div>
                            <div class="mb-3">
                                <label for="email" class="form-label">Email:</label>
                                <input type="text" name="email" class="form-control" id="email"
                                    value="{{ $mahasiswa->email }}">
                            </div>
                            <div class="mb-3">
                                <label for="jurusan" class="form-label">Jurusan:</label>
                                <input type="text" name="jurusan" class="form-control" id="jurusan"
                                    value="{{ $mahasiswa->jurusan }}">
                            </div>
                            <div class="mb-3">
                                <label for="alamat" class="form-label">Alamat:</label>
                                <textarea name="alamat" id="alamat" cols="30" rows="5" class="form-control">{{ $mahasiswa->alamat }}</textarea>
                            </div>
                        </div>
                        <div class="col-lg-4">
                            {{-- panggil gambar --}}
                            <div class="mb-3">
                                <img class="img-fluid" src="{{ asset('gambar/' . $mahasiswa->gambar) }}" alt="">
                                <input type="file" name="gambar" class="form-control" id="gambar">
                            </div>
                        </div>
                    </div>
                    <button type="submit" class="btn btn-primary">Update</button>
                </form>
            </div>
        </div>
    </div>
@endsection
