@extends('layouts.app')
@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="card">
                <div class="card-header">
                    <h3>Tambah Nilai</h3>
                </div>
                <div class="card-body">
                    {{-- munculkan alert berhasil dan gagal --}}
                    @if (session('status'))
                        <div class="alert alert-success">
                            {{ session('status') }}
                        </div>
                    @elseif(session('error'))
                        <div class="alert alert-danger">
                            {{ session('error') }}
                        </div>
                    @endif
                    <form action="{{ route('nilai.store') }}" method="post">
                        @csrf
                        {{-- Dosen --}}
                        <div class="mb-4">
                            <div class="row mb-4">
                                <label for="dosen" class="col-sm-2 col-form-label">Nama Mahasiswa :</label>
                                <div class="col-sm-10">
                                    <select name="siswa_id" id="siswa_id" class="form-control" required>
                                        <option value="">-- Pilih Mahasiswa --</option>
                                        @foreach ($mahasiswas as $item)
                                            <option value="{{ $item->id }}">{{ $item->nama }}</option>
                                        @endforeach

                                    </select>
                                </div>
                            </div>
                        </div>
                        <div class="mb-4">
                            <div class="row mb-4">
                                <label for="dosen" class="col-sm-2 col-form-label">Nama Mata Kuliah :</label>
                                <div class="col-sm-10">
                                    <select name="mapel_id" id="mapel_id" class="form-control" required>
                                        <option value="">-- Pilih Matkul --</option>
                                        @foreach ($matkuls as $item)
                                            <option value="{{ $item->id }}">{{ $item->nama_matkul }}</option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>
                        </div>
                        <!-- kelas -->
                        <div class="mb-4">
                            <div class="row mb-4">
                                <label for="kelas" class="col-sm-2 col-form-label">Kelas :</label>
                                <div class="col-sm-10">
                                    <select name="kelas_id" id="kelas_id" class="form-control" required>
                                        <option value="">-- Pilih Kelas --</option>
                                        @foreach ($kelas as $item)
                                            <option value="{{ $item->id }}">{{ $item->nama_kelas }}</option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>
                        </div>
                        {{-- Nilai --}}
                        <div class="mb-4">
                            <div class="row mb-4">
                                <label for="nilai" class="col-sm-2 col-form-label">Nilai :</label>
                                <div class="col-sm-10">
                                    <input type="text" name="nilai" id="nilai" class="form-control" required>
                                </div>
                            </div>
                        </div>
                        {{-- Button --}}
                        <div class="mb-4">
                            <div class="row mb-4">
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
