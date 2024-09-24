<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Complaint; // Ensure you have the Complaint model

class ComplaintController extends Controller
{
    public function store(Request $request)
    {
        // Validate the request
        $request->validate([
            'tanggal' => 'required|date',
            'waktu' => 'required',
            'ruangan' => 'required|string',
            'nama_pelapor' => 'required|string',
            'sumber_laporan' => 'required|string',
            'topik' => 'required|string',
            'kategori' => 'required|string',
            'deskripsi' => 'required|string',
            'pic' => 'required|string',
            'tanggal_selesai' => 'required|date',
            'waktu_selesai' => 'required',
        ]);

        // Create a new complaint record
        Complaint::create($request->all());

        // Redirect with a success message
        return redirect()->back()->with('success', 'Pengaduan berhasil disimpan!');
    }
}

