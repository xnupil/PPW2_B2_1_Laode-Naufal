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
            $table->id();
            $table->string('nama_barang');
            $table->decimal('harga', 10, 2); // Kolom harga dengan 10 digit, 2 desimal
            $table->integer('stok');
            $table->unsignedBigInteger('id_supplier');
            $table->timestamps();

            // Menambahkan foreign key ke tabel supplier
            $table->foreign('id_supplier')->references('id')->on('supplier');
            
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
