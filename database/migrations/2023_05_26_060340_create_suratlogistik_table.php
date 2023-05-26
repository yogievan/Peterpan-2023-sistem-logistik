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
        Schema::create('suratlogistik', function (Blueprint $table) {
            $table->id('id');
            $table->string('nama_pemohon');
            $table->string('nama_kategori');
            $table->string('nama_barang');
            $table->integer('jumlah_barang');
            $table->integer('total_harga');
            $table->string('status_surat');
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
        Schema::dropIfExists('suratlogistik');
    }
};
