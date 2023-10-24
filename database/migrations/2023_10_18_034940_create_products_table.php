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
        Schema::create('products', function (Blueprint $table) {
            $table->id('id_produk');
            $table->binary('foto_produk');
            $table->string('nama_produk');
            $table->enum('Kategori', ['Komputer','Laptop']);
            $table->integer('harga');
            $table->enum('Kondisi', ['Baru','Bekas']);
            $table->text('deskripsi');
            $table->string('merek');
            $table->bigInteger('stok');
            $table->timestamp('published_at')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('products');
    }
};
