<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Karyawan extends Model
{
    use HasFactory;

    protected $table = 'karyawan';

    protected $fillable = [
        'kode_karyawan',
        'nama_karyawan',
        // tambahkan atribut lainnya sesuai kebutuhan
    ];

     public function detilKaryawan()
    {
        return $this->hasMany(DetilKaryawan::class, 'nama_karyawan', 'nama_karyawan');
    }
}
