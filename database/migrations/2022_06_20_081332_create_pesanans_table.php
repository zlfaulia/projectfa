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
        Schema::create('pesanans', function (Blueprint $table) {
            $table->id();
            $table->integer('user_id');
            $table->string('alamat_pengiriman');
            $table->string('nama_produk');
            $table->string('ukuran');
            $table->string('variasi');
            $table->string('jumlah');
            $table->string('total_bayar');
            $table->date('tanggal_pesan');
            $table->string('catatan_pesanan');
            $table->string('opsi_pengiriman');
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
        Schema::dropIfExists('pesanans');
    }
};
