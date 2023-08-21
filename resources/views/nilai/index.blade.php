@extends('layouts.app')
@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="card">
                <div class="card-header d-flex justify-content-between">
                    <h2>Data Nilai</h2>
                    <a href="{{ route('nilai.create') }}" class="btn btn-primary">Tambah Data</a>
                </div>
                <div class="card-body">
                    <table class="table table-bordered">
                        <thead>
                            <th style="width: 5%;">No</th>
                            <th style="width: 20%;">Nama Mahasiswa</th>
                            <th style="width: auto;">FOTO</th>
                            <th style="width: 20%;">Mata Kuliah</th>
                            <th style="width: 20%;">Kelas</th>
                            <th style="width: 10%;" class="text-center">Nilai</th>
                            <th style="width: 15%;" class="text-center">Aksi</th>
                        </thead>
                        <tbody>
                            @foreach ($nilais as $item)
                                <tr>
                                    <td>{{ $loop->iteration }}</td>
                                    <td>{{ $item->mahasiswa->nama }}</td>
                                    <td>
                                        <img src="{{ asset('gambar/' . $item->mahasiswa->gambar) }}" alt=""
                                            width="100px">
                                    </td>
                                    <td>{{ $item->matkul->kode_matkul }} - {{ $item->matkul->nama_matkul }}</td>
                                    <td>{{ $item->kelas->nama_kelas }}</td>
                                    <td class="text-center">{{ $item->nilai }}</td>
                                    <td class="text-center">
                                        <form action="{{ route('nilai.destroy', $item->id) }}" method="post">
                                            @csrf
                                            @method('DELETE')
                                            <a href="{{ route('nilai.edit', $item->id) }}" class="btn btn-warning">
                                                {{-- icon --}}
                                                <i class="fas fa-edit"></i>
                                            </a>
                                            <button type="submit" class="btn btn-danger">
                                                {{-- icon --}}
                                                <i class="fas fa-trash"></i>
                                            </button>
                                        </form>
                                    </td>
                                </tr>
                            @endforeach


                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
@endsection
