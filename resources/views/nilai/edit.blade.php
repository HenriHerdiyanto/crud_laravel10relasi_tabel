@extends('layouts.app')
@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="card">
                <div class="card-header">
                    <h2>Edit Data</h2>
                </div>
                @if ($errors->any())
                    <div class="alert alert-danger">
                        @foreach ($errors->all() as $item)
                            <li>{{ $item }}</li>
                        @endforeach
                    </div>
                @endif
                {{-- form munculkan data bersarkan id di url --}}
                <form action="{{ route('nilai.update', $nilais->id) }}" method="post">
                    @csrf
                    @method('PUT')
                    <!-- nama -->
                    <div class="mb-4 mt-4">
                        <div class="row mb-4">
                            <label for="nama" class="col-sm-2 col-form-label">Nama Mahasiswa :</label>
                            <div class="col-sm-10">
                                <select name="siswa_id" id="siswa_id" class="form-control" required>
                                    <option value="">-- Pilih Mahasiswa --</option>
                                    @foreach ($mahasiswas as $item)
                                        <option value="{{ $item->id }}"
                                            @if ($item->id == $nilais->siswa_id) selected @endif>{{ $item->nama }}</option>
                                    @endforeach
                                </select>
                            </div>
                        </div>
                    </div>
                    <div class="mb-4">
                        <div class="row mb-4">
                            <label for="mapel" class="col-sm-2 col-form-label">Nama Mata Kuliah :</label>
                            <div class="col-sm-10">
                                <select name="mapel_id" id="mapel_id" class="form-control" required>
                                    <option value="">-- Pilih Matkul --</option>
                                    @foreach ($matkuls as $item)
                                        <option value="{{ $item->id }}"
                                            @if ($item->id == $nilais->mapel_id) selected @endif>{{ $item->nama_matkul }}
                                        </option>
                                    @endforeach
                                </select>
                            </div>
                        </div>
                    </div>
                    <div class="mb-4">
                        <div class="row mb-4">
                            <label for="kelas" class="col-sm-2 col-form-label">Kelas :</label>
                            <div class="col-sm-10">
                                <select name="kelas_id" id="kelas_id" class="form-control" required>
                                    <option value="">-- Pilih Kelas --</option>
                                    @foreach ($kelas as $item)
                                        <option value="{{ $item->id }}"
                                            @if ($item->id == $nilais->kelas_id) selected @endif>{{ $item->nama_kelas }}
                                        </option>
                                    @endforeach
                                </select>
                            </div>
                        </div>
                    </div>
                    <div class="mb-4">
                        <div class="row mb-4">
                            <label for="nilai" class="col-sm-2 col-form-label">Nilai :</label>
                            <div class="col-sm-10">
                                <input type="number" name="nilai" id="nilai" class="form-control"
                                    value="{{ $nilais->nilai }}" required>
                            </div>
                        </div>
                    </div>
                    <div class="mb-4">
                        <div class="row mb-4">
                            <div class="col-sm-2"></div>
                            <div class="col-sm-10">
                                <button type="submit" class="btn btn-primary">Simpan</button>
                            </div>
                        </div>
                    </div>
                </form>

            </div>
        </div>
    </div>
    </div>
@endsection
