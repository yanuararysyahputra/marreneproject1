<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Tamu;
use App\Models\User;
use App\Models\DaftarUndangan;
use App\Models\Pengantin;
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
        $vip = DaftarUndangan::where('uuid_user', Auth::user()->uuid)->where('type_tamu', 'TAMU VIP')->count();
        $otp = DaftarUndangan::where('uuid_user', Auth::user()->uuid)->where('type_tamu', 'TAMU ORANG TUA PRIA')->count();
        $otw = DaftarUndangan::where('uuid_user', Auth::user()->uuid)->where('type_tamu', 'TAMU ORANG TUA WANITA')->count();
        $mp = DaftarUndangan::where('uuid_user', Auth::user()->uuid)->where('type_tamu', 'TAMU MEMPELAI PRIA')->count();
        $mw = DaftarUndangan::where('uuid_user', Auth::user()->uuid)->where('type_tamu', 'TAMU MEMPELAI WANITA')->count();

        return view('home', ['vip'=>$vip, 'otp'=>$otp, 'otw'=>$otw, 'mp'=>$mp, 'mw'=>$mw], compact('totaltamu','totalundangan'));
    }

    public function indexvip()
    {
        $data = DaftarUndangan::all();
        $data = DaftarUndangan::where('type_tamu','TAMU VIP')->where('uuid_user', Auth::user()->uuid)->simplePaginate(10);
        $dp = Pengantin::all();
        $dp = Pengantin::where('uuid_user', Auth::user()->uuid)->get();
        return view('daftarvip',compact('data','dp'));
    }

    public function indexotp()
    {
        $data = DaftarUndangan::all();
        $data = DaftarUndangan::where('type_tamu','TAMU ORANG TUA PRIA')->where('uuid_user', Auth::user()->uuid)->simplePaginate(10);
        $dp = Pengantin::all();
        $dp = Pengantin::where('uuid_user', Auth::user()->uuid)->get();
        return view('daftarotp',compact('data','dp'));
    }

    public function indexotw()
    {
        $data = DaftarUndangan::all();
        $data = DaftarUndangan::where('type_tamu','TAMU ORANG TUA WANITA')->where('uuid_user', Auth::user()->uuid)->simplePaginate(10);
        $dp = Pengantin::all();
        $dp = Pengantin::where('uuid_user', Auth::user()->uuid)->get();
        return view('daftarotw',compact('data','dp'));
    }

    public function indexmp()
    {
        $data = DaftarUndangan::all();
        $data = DaftarUndangan::where('type_tamu','TAMU MEMPELAI PRIA')->where('uuid_user', Auth::user()->uuid)->simplePaginate(10);
        $dp = Pengantin::all();
        $dp = Pengantin::where('uuid_user', Auth::user()->uuid)->get();
        return view('daftarmp',compact('data','dp'));
    }

    public function indexmw()
    {
        $data = DaftarUndangan::all();
        $data = DaftarUndangan::where('type_tamu','TAMU MEMPELAI WANITA')->where('uuid_user', Auth::user()->uuid)->simplePaginate(10);
        $dp = Pengantin::all();
        $dp = Pengantin::where('uuid_user', Auth::user()->uuid)->get();
        return view('daftarmw',compact('data','dp'));
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
        
        return redirect()->back()->with('success', 'Selamat Datang Bpk/Ibu ' . $tamu->nama .' Silahkan Masuk');
    }


    
}
