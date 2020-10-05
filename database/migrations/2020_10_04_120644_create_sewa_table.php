<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSewaTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('sewa', function (Blueprint $table) {
            $table->id();
            $table->dateTime('tgl_sewa');
            $table->dateTime('tgl_pengembalian');
            $table->integer('durasi_sewa');
            $table->unsignedBigInteger('id_pelanggan');
            $table->unsignedBigInteger('id_sepeda');
            $table->unsignedBigInteger('id_pegawai');
            $table->string('gambar');
            $table->integer('jml_sepeda');
            $table->string('fasilitas');
            $table->integer('total_harga');
            $table->string('jaminan');
            $table->string('keterangan');
            $table->enum('status_pembayaran', ['lunas', 'belum bayar']);
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
        Schema::dropIfExists('sewa');
    }
}
