@extends('layouts.app')
@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="card">
                <div class="card-header bg-info">
                    <h2>Tambah kelas</h2>
                </div>
                <div class="card-body">
                    <form action="{{ route('kelas.store') }}" method="post">
                        @csrf
                        <div class="row">
                            <div class="mb-2">
                                <div class="row mb-2">
                                    <label for="nama_kelas" class="col-sm-2 col-form-label">Nama kelas :</label>
                                    <div class="col-sm-10">
                                        <input type="text" name="nama_kelas" class="form-control" id="nama_kelas"
                                            required>
                                    </div>
                                </div>
                            </div>
                            <div class="mb-2">
                                <div class="row mb-2">
                                    <label for="kode_kelas" class="col-sm-2 col-form-label">Kode Kelas
                                        :</label>
                                    <div class="col-sm-10">
                                        <input type="text" name="kode_kelas" class="form-control" id="kode_kelas"
                                            required>
                                    </div>
                                </div>
                            </div>
                            {{-- tombol --}}
                            <div class="mb-2">
                                <div class="row mb-2">
                                    <div class="col-sm-2 col-form-label"></div>
                                    <div class="col-sm-10">
                                        <button type="submit" class="btn btn-outline-primary w-100">Tambah</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
