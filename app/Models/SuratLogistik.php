<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SuratLogistik extends Model
{
    use HasFactory;
    protected $table = 'suratlogistik';
    protected $fillable = [
        'nama_pemohon',
        'nama_kategori',
        'nama_barang',
        'jumlah_barang',
        'total_harga',
        'status_surat',
    ];
}
