<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('transaksilogistik', function (Blueprint $table) {
            $table->id('id');
            $table->string('nama_logistik');
            $table->string('nama_pemohon');
            $table->string('nama_kategori');
            $table->string('nama_barang');
            $table->integer('jumlah_barang');
            $table->integer('total_harga');
            $table->string('nama_rektor_wr3');
            $table->string('status_surat');
            $table->string('status_pengiriman')->nullable();
            $table->string('pembayaran_dp')->nullable();
            $table->string('status_dp')->nullable();
            $table->string('pembayaran_lunas')->nullable();
            $table->string('status_lunas')->nullable();
            $table->string('bukti_dp')->nullable();
            $table->string('bukti_lunas')->nullable();
            $table->string('total_bayar')->nullable();
            $table->string('shipping_doc')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('transaksilogistik');
    }
};
