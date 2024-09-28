@extends('layouts.app')
@extends('layouts.header')
@section('content')
<div class="container mt-5">
    <div class="row text-center">
        <!-- Jumlah Pengaduan -->
        <div class="col-md-3 mb-4">
            <div class="card bg-light">
                <div class="card-body">
                    <h5 class="card-title">Jumlah Pengaduan</h5>
                    <p class="card-text display-4">{{ $totalPengaduan }}</p>
                </div>
            </div>
        </div>

        <!-- Sedang di Progress -->
        <div class="col-md-3 mb-4">
            <div class="card bg-info text-white">
                <div class="card-body">
                    <h5 class="card-title">Sedang Diproses</h5>
                    <p class="card-text display-4">{{ $pengaduanInProgress }}</p>
                </div>
            </div>
        </div>

        <!-- Belum Ditangani -->
        <div class="col-md-3 mb-4">
            <div class="card bg-warning text-white">
                <div class="card-body">
                    <h5 class="card-title">Belum Ditangani</h5>
                    <p class="card-text display-4">{{ $pengaduanBelumDitangani }}</p>
                </div>
            </div>
        </div>

        <!-- Pengaduan Selesai -->
        <div class="col-md-3 mb-4">
            <div class="card bg-success text-white">
                <div class="card-body">
                    <h5 class="card-title">Pengaduan Selesai</h5>
                    <p class="card-text display-4">{{ $pengaduanSelesai }}</p>
                </div>
            </div>
        </div>
    </div>

    <!-- Placeholder for Grafik Berdasarkan Status -->
    <div class="row mt-5">
        <div class="col-md-6">
            <div class="card">
                <div class="card-body">
                    <h5 class="card-title">Grafik Berdasarkan Status</h5>
                    <div id="chartStatus" style="height: 300px;">
                        <!-- Grafik akan dimuat di sini -->
                        <p>Grafik Kosong (Placeholder)</p>
                    </div>
                </div>
            </div>
        </div>

        <!-- Placeholder for Grafik Berdasarkan Kategori -->
        <div class="col-md-6">
            <div class="card">
                <div class="card-body">
                    <h5 class="card-title">Grafik Berdasarkan Kategori</h5>
                    <div id="chartCategory" style="height: 300px;">
                        <!-- Grafik akan dimuat di sini -->
                        <p>Grafik Kosong (Placeholder)</p>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Tabel Pengaduan -->
    <div class="row mt-5">
        <div class="col-12">
            <div class="card">
                <div class="card-body">
                    <h5 class="card-title">Tabel Detail Pengaduan</h5>
                    <table class="table table-striped">
                        <thead>
                            <tr>
                                <th>Tanggal</th>
                                <th>Waktu</th>
                                <th>Ruangan</th>
                                <th>Nama Pelapor</th>
                                <th>Topik Masalah</th>
                                <th>Status</th>
                            </tr>
                        </thead>
                        <tbody>
                            <!-- Kosong sementara -->
                            <tr>
                                <td colspan="6" class="text-center">Belum ada pengaduan</td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
