<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Tamu;
use App\Models\User;
use App\Models\DaftarUndangan;
use SimpleSoftwareIO\QrCode\Facades\QrCode;
use RealRashid\SweetAlert\Facades\Alert;


class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $totaltamu = Tamu::where('uuid_user', Auth::user()->uuid)->get()->count();
        $totalundangan = DaftarUndangan::where('uuid_user', Auth::user()->uuid)->get()->count();
        return view('home', compact('totaltamu','totalundangan'));
    }

    public function tema()
    {
        return view('tema');
    }

    
    public function addTamu($nama, $tamu){
        $tamus = DaftarUndangan::where('nama_tamu', $tamu)->first();
        // dd($tamus);
        $tamu = Tamu::create([
            'uuid_user'=>Auth::user()->uuid,
            'nama'=>$tamu,
            'alamat'=>$tamus->alamat_tamu,
            'type'=>$tamus->type_tamu,
            'notelp'=>$tamus->notelp_tamu,
            'jabatan'=>$tamus->jab_tamu,
        ]);
        
        return redirect()->back()->with('success', 'Selamat Datang Bpk/Ibu ' . $tamu->nama .' ,Silahkan Masuk');
    }


    
}
