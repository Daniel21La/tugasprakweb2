<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class matakuliah extends Model
{
    protected $table = 'matakuliahs';
    protected $primaryKey = 'id';
    public $fillable = ['id','nama', 'sks'];
}
