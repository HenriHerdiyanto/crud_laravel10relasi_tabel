@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="card">
                <div class="card-header">
                    <div class="card-header d-flex justify-content-between">
                        <h2 class="m-0">Data Dosen</h2>
                        <a href="{{ route('dosen.create') }}" class="btn btn-primary">Tambah Data</a>
                    </div>
                </div>
                <div class="card-body">
                    <table class="table table-bordered">
                        <thead>
                            <tr>
                                <th>No</th>
                                <th>Nama Dosen</th>
                                <th>NIP</th>
                                <th>Email</th>
                                <th>Jabatan</th>
                                <th>Prodi</th>
                                <th>No Handpone</th>
                                <th>Foto Dosen</th>
                                <th class="text-center">Aksi</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($dosens as $item)
                                <tr>
                                    <td>{{ $loop->iteration }}</td>
                                    <td>{{ $item->nama }}</td>
                                    <td>{{ $item->nidn }}</td>
                                    <td>{{ $item->email }}</td>
                                    <td>{{ $item->jabatan }}</td>
                                    <td>{{ $item->prodi }}</td>
                                    <td>{{ $item->no_hp }}</td>
                                    <td>
                                        <img src="{{ asset('gambar/' . $item->foto) }}" alt="" width="100px">
                                    </td>
                                    <td class="text-center">
                                        <a href="{{ route('dosen.edit', $item->id) }}" class="btn btn-warning"><i
                                                class="fas fa-edit"></i></a>
                                        <form action="{{ route('dosen.destroy', $item->id) }}" method="post"
                                            class="d-inline">
                                            @csrf
                                            @method('delete')
                                            <button type="submit" class="btn btn-danger"><i
                                                    class="fas fa-trash"></i></button>
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
