<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DetilKaryawan extends Model
{
    // use HasFactory;
    // // protected $table = 'detil_karyawan';
    // protected $primaryKey = 'kode_karyawan_detail';
    // protected $fillable = [
    //     'kode_karyawan_detail',
    //     'kode_karyawan',
    //     'nomor_ktp',
    //     'tempat_lahir',
    //     'tanggal_lahir',
    //     'alamat_ktp',
    //     'kota_ktp',
    //     'provinsi_ktp',
    //     'kode_pos_ktp',
    //     'nomor_telepon',
    //     'email'
    // ];
    
        use HasFactory;
    
        protected $table = 'detil_karyawan'; // Sesuaikan dengan nama tabel yang benar
    
        protected $primaryKey = 'kode_karyawan_detail';
        protected $fillable = ['kode_karyawan', 'nomor_ktp', 'tempat_lahir', 'tanggal_lahir', 'alamat_ktp', 'kota_ktp', 'provinsi_ktp', 'kode_pos_ktp', 'nomor_telepon', 'email'];
    
    

}
