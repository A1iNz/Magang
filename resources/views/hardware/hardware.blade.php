@extends('layouts.app')

@section('content')
<div class="container mt-5">
    <div class="row justify-content-between">
        <div class="col-md-8">
            <h2>Dashboard</h2>
        </div>
        <div class="col-md-4 text-end">
            <!-- Tambah Baru Button -->
            <a href="{{ route('hardware.create') }}" class="btn btn-primary">+ Tambah Baru</a>
        </div>
    </div>

    <div class="card mt-3">
        <div class="card-body">
            <!-- Table for displaying hardware -->
            <table class="table table-striped">
                <thead>
                    <tr>
                        <th>Nama Hardware</th>
                        <th>Jenis Hardware</th>
                        <th>Lokasi</th>
                        <th>Status</th>
                        <th>Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    <!-- This will be dynamically populated with hardware data from the database -->
                    @forelse($hardware as $item)
                        <tr>
                            <td>{{ $item->nama_hardware }}</td>
                            <td>{{ $item->jenis_hardware }}</td>
                            <td>{{ $item->lokasi }}</td>
                            <td>{{ $item->status }}</td>
                            <td>
                                <a href="#" class="btn btn-warning btn-sm">Edit</a>
                                <form action="{{ route('hardware.destroy', $item->id) }}" method="POST" style="display:inline;">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="btn btn-danger btn-sm">Hapus</button>
                                </form>
                            </td>
                        </tr>
                    @empty
                        <tr>
                            <td colspan="5" class="text-center">Belum ada hardware yang terdaftar.</td>
                        </tr>
                    @endforelse
                </tbody>
            </table>
        </div>
    </div>
</div>
@endsection
