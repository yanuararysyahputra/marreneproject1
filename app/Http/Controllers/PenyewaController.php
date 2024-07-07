<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Hash;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class PenyewaController extends Controller
{
    public function index(){
        if(Auth::user()->role === 'Admin'){
            $user = User::where('role', 'Client')->get();
            // dd($user);
            return view('Admin.Penyewa',['user'=>$user]);
        }else{
            return abort('403');
        }
    }

    public function storeUser(Request $request)
    {
        User::create([
            'uuid' => Str::uuid(),
            'name' => $request['name'],
            'email' => $request['email'],
            'password' => Hash::make($request['password']),
            'role'=> 'Client'
        ]);
        return redirect()->back()->with('success','User Berhasil Di Buat !');

    }

    public function delete($uid){
        $user = User::where('uuid',$uid)->first();
        $user->delete();
        return redirect()->back()->with('success','Data Berhasil diHapus!');
    }
}
