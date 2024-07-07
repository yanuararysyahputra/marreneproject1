<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DaftarUndangan extends Model
{
    use HasFactory;
    protected $fillable =['uuid_dtamu','uuid_user','nama_tamu','alamat_tamu','notelp_tamu','type_tamu','jab_tamu'];
}
