<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBarangTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('barang', function (Blueprint $table) {
            $table->id();
            $table->foreign('id_kategori')->references('id')->on('kategori');
            $table->foreign('penerbit')->references('id')->on('penerbit');
            $table->string('nama_barang',50);
            $table->string('harga');
            $table->integer('stok');
            $table->string('diskon',50);
            $table->string('penulis',50);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('barang');
    }
}
