<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Buku extends Model
{
    // dpt diakses oleh buku
    protected $table = 'bukus';
    protected $primaryKey = 'id';
    protected $fillable = ['id', 'isbn', 'judul', 'tahun', 'penulis', 'penerbit', 'cover'];
}
