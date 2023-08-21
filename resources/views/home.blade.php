@extends('layouts.app')

@section('content')
    <div class="container mt-3">
        <div class="row">
            <div class="col-lg-6">
                <div class="text-center mb-4">
                    <img src="{{ asset('img/amikom.jpg') }}" alt="Universitas Amikom Yogyakarta"
                        class="img-fluid rounded-circle">
                </div>
            </div>
            <div class="col-lg-6">
                <div class="text-lg-end">
                    <h2 class="fw-bold mb-4">Selamat Datang di Universitas Amikom Yogyakarta</h2>
                    <p class="lead">Universitas Amikom Yogyakarta adalah perguruan tinggi swasta di Yogyakarta yang
                        berdiri pada tanggal 2 Maret 1992. Universitas ini berada di bawah naungan Yayasan Amikom
                        Yogyakarta.
                    </p>
                    <p>Universitas ini memiliki tiga kampus yang strategis:</p>
                    <ul class="list-unstyled">
                        <li><i class="bi bi-check-circle text-primary"></i> Kampus Utama di Jalan Ringroad Utara</li>
                        <li><i class="bi bi-check-circle text-primary"></i> Kampus 2 di Jalan Palagan Tentara Pelajar</li>
                        <li><i class="bi bi-check-circle text-primary"></i> Kampus 3 di Jalan Wonosari KM 5,5</li>
                    </ul>
                    <a href="#" class="btn btn-primary me-3">Info Selengkapnya</a>
                    <a href="#" class="btn btn-info">Daftar</a>
                </div>
            </div>
        </div>
    </div>
@endsection
