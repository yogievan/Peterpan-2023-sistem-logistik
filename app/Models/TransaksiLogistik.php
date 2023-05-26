<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TransaksiLogistik extends Model
{
    use HasFactory;
    protected $table = 'transaksilogistik';
    protected $fillable = [
        'nama_logistik',
        'nama_pemohon',
        'nama_kategori',
        'nama_barang',
        'jumlah_barang',
        'total_harga',
        'nama_rektor_wr3',
        'status_surat',
        'pembayaran_dp',
        'pembayaran_lunas',
    ];
}
