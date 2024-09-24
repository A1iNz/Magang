<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Hardware;

class HardwaredController extends Controller
{
    // Display the dashboard with hardware data
    public function index()
    {
        $hardware = Hardware::all(); // Retrieve all hardware records from the database
        return view('hardware.hardware', compact('hardware')); // Pass hardware data to the view
    }

    // Show the form to add new hardware
    public function create()
    {
        return view('hardware.create'); // Show the form
    }

    // Store the new hardware in the database
    public function store(Request $request)
    {
        // Validate the request
        $request->validate([
            'nama_hardware' => 'required|string|max:255',
            'jenis_hardware' => 'required|string|max:255',
            'lokasi' => 'required|string|max:255',
            'status' => 'required|string|max:255',
        ]);
    
        // Create a new hardware record (mass assignment)
        Hardware::create($request->only('nama_hardware', 'jenis_hardware', 'lokasi', 'status'));
    
        // Redirect to the hardware dashboard with success message
        return redirect()->route('hardware.hardware')->with('success', 'Hardware berhasil ditambahkan!');
    }
}
