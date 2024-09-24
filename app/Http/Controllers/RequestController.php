<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Validator;
use App\Models\Req;

use Carbon\Carbon;
class RequestController extends Controller
{
    public function index(){
        $tgl = Carbon::now('Asia/Jakarta')->isoFormat('D MMMM YYYY');
        $jam = Carbon::now('Asia/Jakarta')->isoFormat('h:mm:ss');

        return view('general request.request', compact('tgl', 'jam'));
    }
    
    public function proses_request(Request $request){
        $validator =  Validator::make($request->all(),[
            'tgl'=>'required',
            'jam'=>'required',
            'nama'=>'required',
            'topik'=>'required',
            'deskripsi'=>'required',
            'kategori'=>'required',
        ]);
        
        if($validator ->fails()){
            return redirect('/request')
             ->withErrors($validator)
             ->withInput();
        }

        Req::create($request->all());

        return redirect('/');
    }
}
