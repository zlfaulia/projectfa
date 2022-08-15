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
        Schema::create('stoks', function (Blueprint $table) {
            $table->increments('id');
            $table->unsignedInteger('produk_id');
            $table->foreign('produk_id')->references('id')->on('produks');
            // $table->foreign('produk_id')->references('id')->on('produks');
            // $table->foreignId('produk_id')->constrained('produks');
            $table->string('harga_produk');
            $table->string('ukuran');
            $table->string('variasi');
            $table->string('warna');
            $table->string('stok');
            $table->date('tanggal_input');
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
        Schema::dropIfExists('stoks');
    }
};
