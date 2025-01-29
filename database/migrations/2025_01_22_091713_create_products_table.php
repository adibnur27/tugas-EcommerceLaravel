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
            $table->id(); // Primary key
            $table->string('name'); // Nama produk
            $table->text('description'); // Deskripsi produk (diperbaiki menjadi text untuk mendukung data panjang)
            $table->string('slug')->unique(); // URL-friendly identifier
            $table->string('image'); // Path atau nama file gambar produk
            $table->unsignedInteger('price'); // Harga produk, unsigned untuk mencegah nilai negatif
            $table->unsignedInteger('stock'); // Stok produk, unsigned untuk mencegah nilai negatif
            $table->foreignId('category_id') // Relasi ke tabel categories
                  ->constrained('categories')
                  ->onDelete('cascade'); // Hapus produk jika kategori terkait dihapus
            $table->timestamps(); // Kolom created_at dan updated_at
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
