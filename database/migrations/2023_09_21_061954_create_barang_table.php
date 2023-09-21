<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('barang', function (Blueprint $table) {
            $table->id('id_barang');
            $table->binary('gambar_laptop');
            $table->string('judul');
            $table->integer('harga');
            $table->enum('Kondisi', ['Baru','Bekas']);
            $table->mediumText('deskripsi');
            $table->string('merek');
            $table->bigInteger('stok');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('barang');
    }
};
