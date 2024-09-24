@extends('layouts.app')

@section('content')
<div class="container mt-5">
    <h2 class="mb-4">Tambah Hardware Baru</h2>

    <form action="{{ route('hardware.store') }}" method="POST">
        @csrf
        <div class="mb-3">
            <label for="nama_hardware" class="form-label">Nama Hardware</label>
            <input type="text" class="form-control" id="nama_hardware" name="nama_hardware" required>
        </div>

        <div class="mb-3">
            <label for="jenis_hardware" class="form-label">Jenis Hardware</label>
            <input type="text" class="form-control" id="jenis_hardware" name="jenis_hardware" required>
        </div>

        <div class="mb-3">
            <label for="lokasi" class="form-label">Lokasi</label>
            <input type="text" class="form-control" id="lokasi" name="lokasi" required>
        </div>

        <div class="mb-3">
            <label for="status" class="form-label">Status</label>
            <select class="form-select" id="status" name="status" required>
                <option value="Aktif">Aktif</option>
                <option value="Tidak Aktif">Tidak Aktif</option>
            </select>
        </div>

        <button type="submit" class="btn btn-primary">Simpan</button>
        <a href="{{ route('hardware.hardware') }}" class="btn btn-secondary">Batal</a>
    </form>
</div>
@endsection
