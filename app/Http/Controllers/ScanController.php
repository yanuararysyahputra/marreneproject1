<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use App\Models\Tamu;
use App\Models\DaftarUndangan;


class ScanController extends Controller
{
    //
    public function index()
    {
        $data = tamu::all();
        $data = Tamu::where('uuid_user', Auth::user()->uuid)->simplePaginate(5);
        return view('scan',compact('data'));
    }

    public function tracking()
    {
        $data = tamu::all();
        $data = Tamu::where('uuid_user', Auth::user()->uuid)->latest()->first();
        return view('tracking',compact('data'));
    }

    public function indexmobile()
    {
        $data = tamu::all();
        $data = Tamu::where('uuid_user', Auth::user()->uuid)->simplePaginate(5);
        return view('scanmobile',compact('data'));
    }
}
