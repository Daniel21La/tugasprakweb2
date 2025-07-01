<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Mobil extends Model
{
    protected $table = 'mobils';
    protected $primaryKey = 'id';
    protected $fillable = ['id', 'merk', 'nama_mobil', 'deskripsi', 'harga_per_hari', 'gambar', 'status',];
}
