<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Laporan;

class LaporanController extends Controller
{
    public function index()
    {
        // Hitung pengaduan berdasarkan status
        $totalPengaduan = Laporan::count();
        $pengaduanInProgress = Laporan::where('status', 'in-progress')->count();
        $pengaduanSelesai = Laporan::where('status', 'completed')->count();
        $pengaduanBelumDitangani = Laporan::where('status', 'pending')->count();

        // Kirimkan data ke view laporan.blade.php
        return view('laporan.laporan', compact('totalPengaduan', 'pengaduanInProgress', 'pengaduanSelesai', 'pengaduanBelumDitangani'));
    }
}

