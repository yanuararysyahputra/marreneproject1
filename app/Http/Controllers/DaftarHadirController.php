<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use App\Models\Tamu;
use App\Models\DaftarUndangan;
use App\Models\Pengantin;
use Mpdf\Mpdf;


class DaftarHadirController extends Controller
{
    //
    public function index()
    {
        $data = tamu::all();
        $data = Tamu::where('uuid_user', Auth::user()->uuid)->simplePaginate(10);
        return view('daftarhadir',compact('data'));
    }
    

    public function download()
    {
        $data = tamu::all();
        $data = Tamu::where('uuid_user', Auth::user()->uuid)->get();
        $mpdf = new \Mpdf\Mpdf();
        $mpdf->WriteHTML(view('download',compact('data')));
        $mpdf->Output('daftar-hadir-tamu.pdf','D');
    }
}
