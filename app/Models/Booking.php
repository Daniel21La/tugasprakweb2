<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Booking extends Model
{
    protected $table = 'bookings';
    protected $primaryKey = 'id';
    protected $fillable = ['id', 'user_id', 'mobil_id', 'tanggal_mulai', 'tanggal_selesai', 'total_harga', 'status'];
}
