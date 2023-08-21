@extends('layouts.app')

@section('content')
    <div class="container mt-3">
        <div class="row justify-content-center">
            <div class="card">
                <div class="card-header d-flex justify-content-between">
                    <h2 class="m-0">Data Mahasiswa</h2>
                    <a href="{{ route('mahasiswa.create') }}" class="btn btn-primary">Tambah Data</a>
                </div>

                <div class="card-body">
                    {{-- <a href="" class="btn btn-primary mb-3">Tambah Data</a> --}}
                    <table class="table table-bordered">
                        <thead>
                            <tr class="text-center">
                                <th>No</th>
                                <th>Nama</th>
                                <th>Nim</th>
                                <th>Email</th>
                                <th>Jurusan</th>
                                <th>Alamat</th>
                                <th>Foto Mhs</th>
                                <th colspan="3" style="text-align: center;">Aksi</th>
                            </tr>
                        </thead>
                        <tbody>
                            @forelse ($mahasiswas as $mhs)
                                <tr class="text-center">
                                    <td>{{ $loop->iteration }}</td>
                                    <td>{{ $mhs->nama }}</td>
                                    <td>{{ $mhs->nim }}</td>
                                    <td>{{ $mhs->email }}</td>
                                    <td>{{ $mhs->jurusan }}</td>
                                    <td>{{ $mhs->alamat }}</td>
                                    <td>
                                        <img src="{{ asset('gambar/' . $mhs->gambar) }}" alt="" width="100px">
                                    </td>
                                    <td>
                                        <a href="{{ route('mahasiswa.edit', $mhs->id) }}" class="btn btn-warning"><i
                                                class="fas fa-edit"></i></a>
                                        <form action="{{ route('mahasiswa.destroy', $mhs->id) }}" method="POST"
                                            class="d-inline">
                                            @csrf
                                            @method('DELETE')
                                            <button type="submit" class="btn btn-danger"><i
                                                    class="fas fa-trash"></i></button>
                                        </form>
                                    </td>
                                </tr>
                            @empty
                                <tr>
                                    <td colspan="7" class="text-center">Data Kosong</td>
                                </tr>
                            @endforelse
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    @endsection
