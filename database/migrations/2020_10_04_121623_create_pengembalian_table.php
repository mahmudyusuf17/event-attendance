<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePengembalianTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pengembalian', function (Blueprint $table) {
            $table->id();
            $table->dateTime('tgl_pengembalian');
            $table->dateTime('tgl_peminjaman');
            $table->unsignedBigInteger('id_pelanggan');
            $table->unsignedBigInteger('id_sepeda');
            $table->unsignedBigInteger('id_pegawai');
            $table->string('gambar');
            $table->integer('jml_sepeda');
            $table->integer('denda');
            $table->enum('status_pengembalian', ['sudah', 'belum']);
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
        Schema::dropIfExists('pengembalian');
    }
}
