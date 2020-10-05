<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSepedaTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('sepeda', function (Blueprint $table) {
            $table->id();
            $table->string('merk')->unique();
            $table->string('jenis');
            $table->string('no_rangka');
            $table->string('warna');
            $table->string('gambar');
            $table->text('deskripsi');
            $table->integer('jml_sepeda');
            $table->integer('harga_sewa');
            $table->enum('status', ['tersedia', 'kosong']);
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
        Schema::dropIfExists('sepeda');
    }
}
