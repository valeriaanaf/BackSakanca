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
        Schema::create('gallery_items', function (Blueprint $table) {
            $table->id();
            $table->jsonb('title');                     // Galeri Sakanca
            $table->jsonb('subtitle');                  // Koleksi momen terbaik dan perjalanan visual yang penuh inspitasi
            $table->jsonb('text_kicker')->nullable();   // Visual Journey

            $table->jsonb('images');                    // ["image1.jpg", "image2.jpg", "image3.jpg"]

            $table->integer('order')->default(0);       // urutan tampil
            $table->boolean('is_active')->default(true);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('gallery_items');
    }
};
