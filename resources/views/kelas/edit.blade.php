@extends('layouts.app')
@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="card">
                <div class="card-header">
                    <h2>Edit Kelas</h2>
                </div>
                <div class="card-body">
                    <form action="{{ route('kelas.update', $kelas->id) }}" method="post">
                        @method('PUT')
                        @csrf
                        <div class="form-group row mb-3 ">
                            <label for="kode_kelas" class="col-md-2 col-form-label text-md-left">Kode Kelas</label>
                            <div class="col-md-10">
                                <input type="text" name="kode_kelas" class="form-control" id="kode_kelas"
                                    value="{{ $kelas->kode_kelas }}" placeholder="Masukkan kode_kelas">
                            </div>
                        </div>
                        <div class="form-group row mb-3 ">
                            <label for="nama_kelas" class="col-md-2 col-form-label text-md-left">Nama Kelas</label>
                            <div class="col-md-10">
                                <input type="text" name="nama_kelas" class="form-control" id="nama_kelas"
                                    value="{{ $kelas->nama_kelas }}" placeholder="Masukkan nama_kelas">
                            </div>
                        </div>
                        <div class="form-group row mb-3 ">
                            <label for="nama_kelas" class="col-md-2 col-form-label text-md-left"></label>
                            <div class="col-md-10">
                                {{-- button update --}}
                                <button type="submit" class="btn btn-primary float-right mr-4 mt-5 w-100"><i
                                        class="fas fa-save mr-2"></i> Update</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
