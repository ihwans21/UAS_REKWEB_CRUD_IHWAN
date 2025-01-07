<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Hotel extends Model
{
    use HasFactory;

    protected $table = 'Hotel'; // Nama tabel
    protected $primaryKey = 'id_Pemesanan'; // Nama primary key
    protected $fillable = ['Nama_Tamu', 'Tipe_Kamar', 'Tanggal_Check_in', 'Tanggal_Check_out'];
}
