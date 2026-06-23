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
        Schema::create('fields', function (Blueprint $table) {
            $table->id();
            $table->string('name');           // Nama lapangan (Contoh: Giant Arena Court)
            $table->string('location');       // Lokasi/Alamat (Contoh: Jakarta Selatan)
            $table->integer('price');          // Harga per jam (Contoh: 250000)
            $table->decimal('rating', 2, 1)->default(5.0); // Rating lapangan (Contoh: 4.8)
            $table->string('image')->nullable(); // Foto lapangan (bisa dikosongkan dulu)
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('fields');
    }
};