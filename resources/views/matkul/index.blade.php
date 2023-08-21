@extends('layouts.app')
@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md">
                <div class="card">
                    <div class="card-header d-flex justify-content-between">
                        <h2>Data Mata Kuliah</h2>
                        <a href="{{ route('matkul.create') }}" class="btn btn-primary">Tambah Data</a>
                    </div>
                    <div class="card-body">
                        <table class="table table-bordered">
                            <tr>
                                <th>No</th>
                                <th>Nama Dosen</th>
                                <th>Kode Mata Kuliah</th>
                                <th>Nama Mata Kuliah</th>
                                <th>SKS</th>
                                <th style="width: 13%;" class="text-center">Aksi</th>
                            </tr>
                            @foreach ($matkuls as $m)
                                <tr>
                                    <td>{{ $m->id }}</td>
                                    {{-- panggil nama dosen yang idnya sama dengan dosen_id --}}
                                    <td>{{ $m->dosen->nama }}</td>
                                    <td>{{ $m->kode_matkul }}</td>
                                    <td>{{ $m->nama_matkul }}</td>
                                    <td>{{ $m->sks }}</td>
                                    <td class="text-center">
                                        {{-- <a href="{{ route('matkul.show', $m->id) }}" class="btn btn-success">Show</a> --}}
                                        <form action="{{ route('matkul.destroy', $m->id) }}" method="post">
                                            {{-- buat href edit dengan icon --}}
                                            <a href="{{ route('matkul.edit', $m->id) }}" class="btn btn-warning"><i
                                                    class="fas fa-edit"></i></a>
                                            @csrf
                                            @method('DELETE')
                                            <button type="submit" class="btn btn-danger"><i
                                                    class="fas fa-trash"></i></button>
                                        </form>
                                    </td>
                                </tr>
                            @endforeach
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
