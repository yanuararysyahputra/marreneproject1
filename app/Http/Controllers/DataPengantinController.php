<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Pengantin;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use RealRashid\SweetAlert\Facades\Alert;


class DataPengantinController extends Controller
{
    //

    public function lihatdata()
    {
        $data = Pengantin::all();
        $data = Pengantin::where('uuid_user', Auth::user()->uuid)->get();
        return view('lihatdata',compact('data'));
    }

    public function index()
    {    
        $data = Pengantin::all();
        $data = Pengantin::where('uuid_user', Auth::user()->uuid)->get();
        return view('datapengantin',compact('data'));
    }


    public function store(Request $request)
    {
        $data = Pengantin::create([
            'uuid_pengantin'=>Str::uuid(),
            'uuid_user'=>Auth::user()->uuid,
            'nama_pria'=>$request->nama_pria,
            'nama_wanita'=>$request->nama_wanita,
            'akad'=>$request->akad,
            'resepsi'=>$request->resepsi,
            'waktu'=>$request->waktu,
            'wresepsi'=>$request->wresepsi,
            'tempat'=>$request->tempat,
            'image'=>$request->file('image')->store('background'),
            'slug'=>Str::slug($request->nama_pria . $request->nama_wanita)
        ]);

        return redirect()->back()->with('success','Data Pengantin Berhasil Disimpan');

    }

    public function destroy($id){
        $data = Pengantin::find($id);
        $data->delete();
        return redirect()->back()->with('success','Data Berhasil diHapus!');
    }
    
    

}
