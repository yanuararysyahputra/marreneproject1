<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pengantin extends Model
{
    use HasFactory;
    protected $fillable =[
        'uuid_pengantin',
        'uuid_user',
        'nama_pria',
        'nama_wanita',
        'akad',
        'resepsi',
        'waktu',
        'wresepsi',
        'tempat',
        'image',
        'slug'
    ];

}
