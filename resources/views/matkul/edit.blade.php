@extends('layouts.app')
@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="card">
                <div class="card-header">
                    <h2>Edit Data Matkul</h2>
                </div>
                <div class="card-body">
                    @if ($errors->any())
                        <div class="alert alert-danger">
                            <strong>Whoops!!</strong> there where some problems with your input.<br>
                            <ul>
                                @foreach ($errors as $error)
                                    <li>{{ $error }}</li>
                                @endforeach
                            </ul>
                        </div>
                    @endif
                    <form action="{{ route('nilai.update', $nilais->id) }}" method="post">
                        @csrf
                        @method('PUT')
                        <div class="row">
                            <div class="col-lg-8">
                                <div class="form-group row mb-3 ">
                                    <label for="kode_matkul" class="col-md-2 col-form-label text-md-left">Kode
                                        Matkul</label>
                                    <div class="col-md-10">
                                        <input type="text" name="kode_matkul" class="form-control" id="kode_matkul"
                                            value="{{ $matkul->kode_matkul }}" placeholder="Masukkan kode_matkul">
                                    </div>
                                </div>
                                <div class="form-group row mb-3">
                                    <label for="nama_matkul" class="col-md-2 col-form-label text-md-left">Nama
                                        Matkul</label>
                                    <div class="col-md-10">
                                        <input type="text" name="nama_matkul" class="form-control" id="nama_matkul"
                                            value="{{ $matkul->nama_matkul }}" placeholder="Masukkan nama_matkul">
                                    </div>
                                </div>
                                <div class="form-group row mb-3">
                                    <label for="sks" class="col-md-2 col-form-label text-md-left">SKS</label>
                                    <div class="col-md-10">
                                        <input type="text" name="sks" class="form-control" id="sks"
                                            value="{{ $matkul->sks }}" placeholder="Masukkan sks">
                                    </div>
                                </div>
                                <div class="form-group row mb-3">
                                    <label for="semester" class="col-md-2 col-form-label text-md-left">Semester</label>
                                    <div class="col-md-10">
                                        <input type="text" name="semester" class="form-control" id="semester"
                                            value="{{ $matkul->semester }}" placeholder="Masukkan semester">
                                    </div>
                                </div>
                                <div class="form-group row mb-3">
                                    <label for="dosen_id" class="col-md-2 col-form-label text-md-left">Nama Dosen</label>
                                    <div class="col-md-10">
                                        <select name="dosen_id" id="dosen_id" class="form-control" required>
                                            <option value="{{ $matkul->dosen->id }}">{{ $matkul->dosen->nama }}</option>
                                            @foreach ($dosens as $item)
                                                <option value="{{ $item->id }}">{{ $item->nama }}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-4">
                                <div class="form-group row mb-3">
                                    <div class="col-md-10">
                                        <img src="{{ asset('gambar/' . $matkul->dosen->foto) }}" alt="">
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-12">
                                <button type="submit" class="btn btn-sm btn-primary">Submit</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
