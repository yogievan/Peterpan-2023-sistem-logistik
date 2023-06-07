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
        'status_pengiriman',
        'pembayaran_dp',
        'status_dp',
        'pembayaran_lunas',
        'status_lunas',
        'bukti_dp',
        'bukti_lunas',
        'total_bayar',
        'status_pengiriman',
    ];
}
