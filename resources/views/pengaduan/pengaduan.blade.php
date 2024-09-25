@extends('layouts.app')
@extends('layouts.header')
@section('content')
<div class="container">
    <div class="row">

        <!-- Right side (Form) -->
        <div class="col-lg-8 p-5">
            <h2 class="text-center mb-4">Formulir Transaksi/Pengaduan</h2>
            <form action="{{ route('complaints.store') }}" method="POST">
                @csrf
                <div class="row mb-3">
                    <!-- Tanggal -->
                    <div class="col-md-6">
                        <label for="tanggal" class="form-label">Tanggal</label>
                        <input type="date" class="form-control" id="tanggal" name="tanggal" required>
                    </div>
                    <!-- Waktu -->
                    <div class="col-md-6">
                        <label for="waktu" class="form-label">Waktu</label>
                        <input type="time" class="form-control" id="waktu" name="waktu" required>
                    </div>
                </div>

                <!-- Ruangan -->
                <div class="mb-3">
                    <label for="ruangan" class="form-label">Ruangan</label>
                    <input type="text" class="form-control" id="ruangan" name="ruangan" placeholder="Masukkan Nama Ruangan" required>
                </div>

                <!-- Nama Pelapor -->
                <div class="mb-3">
                    <label for="nama_pelapor" class="form-label">Nama Pelapor</label>
                    <input type="text" class="form-control" id="nama_pelapor" name="nama_pelapor" placeholder="Masukkan Nama Pelapor" required>
                </div>

                <!-- Sumber Laporan -->
                <div class="mb-3">
                    <label for="sumber_laporan" class="form-label">Sumber Laporan</label>
                    <select class="form-select" id="sumber_laporan" name="sumber_laporan" required>
                        <option value="">Pilih Sumber</option>
                        <option value="WhatsApp">WhatsApp</option>
                        <option value="Telepon">Telepon</option>
                        <option value="Email">Email</option>
                        <option value="Formulir Lainnya">Formulir Lainnya</option>
                    </select>
                </div>

                <!-- Topik Permasalahan -->
                <div class="mb-3">
                    <label for="topik" class="form-label">Topik Permasalahan</label>
                    <input type="text" class="form-control" id="topik" name="topik" placeholder="Masukkan Topik Permasalahan" required>
                </div>

                <!-- Kategori -->
                <div class="mb-3">
                    <label for="kategori" class="form-label">Kategori</label>
                    <select class="form-select" id="kategori" name="kategori" required>
                        <option value="">Pilih Kategori</option>
                        <option value="EMR">EMR</option>
                        <option value="SIESTA">SIESTA</option>
                        <option value="Hardware">Hardware</option>
                        <option value="Aplikasi Lainnya">Aplikasi Lainnya</option>
                        <option value="Lainnya">Lainnya</option>
                    </select>
                </div>

                <!-- Deskripsi -->
                <div class="mb-3">
                    <label for="deskripsi" class="form-label">Deskripsi</label>
                    <textarea class="form-control" id="deskripsi" name="deskripsi" rows="3" placeholder="Masukkan Deskripsi Masalah" required></textarea>
                </div>

                <!-- Penanganan/Solusi -->
                <div class="mb-3">
                    <label for="solusi" class="form-label">Penanganan/Solusi</label>
                    <textarea class="form-control" id="solusi" name="solusi" rows="3" placeholder="Masukkan Solusi (Opsional)"></textarea>
                </div>

                <!-- PIC -->
                <div class="mb-3">
                    <label for="pic" class="form-label">PIC</label>
                    <input type="text" class="form-control" id="pic" name="pic" placeholder="Masukkan Nama PIC" required>
                </div>

                <!-- Tanggal Selesai -->
                <div class="mb-3">
                    <label for="tanggal_selesai" class="form-label">Tanggal Selesai</label>
                    <input type="date" class="form-control" id="tanggal_selesai" name="tanggal_selesai" required>
                </div>

                <!-- Waktu Selesai -->
                <div class="mb-3">
                    <label for="waktu_selesai" class="form-label">Waktu Selesai</label>
                    <input type="time" class="form-control" id="waktu_selesai" name="waktu_selesai" required>
                </div>

                <!-- Buttons -->
                <div class="d-flex justify-content-between">
                    <button type="submit" class="btn btn-primary">Simpan</button>
                    <a href="{{ url()->previous() }}" class="btn btn-secondary">Batal</a>
                </div>
            </form>
        </div>
    </div>
</div>
@endsection
