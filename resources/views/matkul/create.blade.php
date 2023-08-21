@extends('layouts.app')
@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="card">
                <div class="card-header d-flex justify-content-between">
                    <h2>Tambah Data</h2>
                </div>
                <div class="card-body">
                    <form action="{{ route('matkul.store') }}" method="post">
                        @csrf
                        {{-- Nama --}}
                        <div class="mb-2">
                            <div class="row mb-2">
                                <label for="kode_matkul" class="col-sm-2 col-form-label">Kode Matkul :</label>
                                <div class="col-sm-10">
                                    <input type="text" name="kode_matkul" class="form-control" id="kode_matkul" required>
                                </div>
                            </div>
                        </div>
                        {{-- Nama --}}
                        <div class="mb-2">
                            <div class="row mb-2">
                                <label for="nama_matkul" class="col-sm-2 col-form-label">Nama Matkul :</label>
                                <div class="col-sm-10">
                                    <input type="text" name="nama_matkul" class="form-control" id="nama_matkul" required>
                                </div>
                            </div>
                        </div>
                        {{-- SKS --}}
                        <div class="mb-2">
                            <div class="row mb-2">
                                <label for="sks" class="col-sm-2 col-form-label">SKS :</label>
                                <div class="col-sm-10">
                                    <input type="number" name="sks" class="form-control" id="sks" required>
                                </div>
                            </div>
                        </div>
                        {{-- Semester --}}
                        <div class="mb-2">
                            <div class="row mb-2">
                                <label for="semester" class="col-sm-2 col-form-label">Semester :</label>
                                <div class="col-sm-10">
                                    <input type="number" name="semester" class="form-control" id="semester" required>
                                </div>
                            </div>
                        </div>
                        {{-- Dosen --}}
                        <div class="mb-4">
                            <div class="row mb-4">
                                <label for="dosen" class="col-sm-2 col-form-label">Dosen :</label>
                                <div class="col-sm-10">
                                    <select name="dosen_id" id="dosen_id" class="form-control" required>
                                        <option value="">-- Pilih Dosen --</option>
                                        @foreach ($dosens as $item)
                                            <option value="{{ $item->id }}">{{ $item->nama }}</option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>
                        </div>
                        {{-- button --}}
                        <div class="mb-2">
                            <div class="row mb-2">
                                <div class="col-sm-2"></div>
                                <div class="col-sm-10">
                                    <button type="submit" class="btn btn-outline-primary w-100">Tambah</button>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
