<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Kendaraan extends Model
{
    use HasFactory;

    protected $primaryKey = 'no_pol'; // Menggunakan no_pol sebagai primary key
    protected $keyType = 'string'; // Tipe data primary key adalah string

    protected $fillable = [
        'no_pol', 'no_mesin', 'jenis_mobil', 'nama_mobil', 'merk', 'kapasitas', 'tarif',
    ];
}
