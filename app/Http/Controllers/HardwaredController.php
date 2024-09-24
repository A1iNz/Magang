<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HardwaredController extends Controller
{
    public function index ()
    {
        return view('hardware.hardware');
    }
}