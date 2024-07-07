<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

use App\Models\User;
use App\Models\Pengantin;
use App\Http\Controllers\Controller;
use App\Models\DaftarUndangan;
use App\Models\Tamu;
use SimpleSoftwareIO\QrCode\Facades\QrCode;

class SendUndanganController extends Controller
{
    //
    public function undangan($slug,  $nama)
    {
        $url = url('add-tamu/' . $slug . '/' . $nama);
        $qrcode = QrCode::size(200)->generate($url);
        
        $data = Pengantin::where('slug', $slug)->first();
        $tamu = DaftarUndangan::where('uuid_user', $data->uuid_user)->where('nama_tamu', $nama)->first();

        return view('undanganku', ['qrcode' => $qrcode, 'nama'=>$nama,'alamat'=>$tamu->alamat_tamu, 'data'=>$data]);
    }

}
