<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Pengantin;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use App\Models\DaftarUndangan;
use Illuminate\Support\Facades\Auth;
use RealRashid\SweetAlert\Facades\Alert;

class DaftarUndanganController extends Controller
{
    //
    public function index()
    {
        // $dtamu = DaftarUndangan::all();
        $dtamu = DaftarUndangan::where('uuid_user', Auth::user()->uuid)->get();
        // $pengantin = Pengantin::all();
        $pengantin = Pengantin::where('uuid_user', Auth::user()->uuid)->first();
        // dd($dtamu);
        return view('daftarundangan',[
            'dtamu'=>$dtamu,
            'pengantin'=>$pengantin
        ]);
    }

    public function store_dtamu(Request $request)
    {
        $dtamu = DaftarUndangan::create([
            'uuid_dtamu'=>Str::uuid(),
            'uuid_user'=>Auth::user()->uuid,
            'nama_tamu'=>$request->nama_tamu,
            'alamat_tamu'=>$request->alamat_tamu,
            'notelp_tamu'=>$request->notelp_tamu,
            'type_tamu'=>$request->type_tamu,
            'jab_tamu'=>$request->jab_tamu
        ]);

        return redirect()->route('daftarundangan')->with('success','Tamu Undangan Berhasil Disimpan');

    }

    
}
