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
        Schema::create('services', function (Blueprint $table) {
            $table->id();
            $table->string('name', 100); // Nama divisi tetap (Statis/String murni)
            $table->string('slug', 150)->unique();
            $table->string('logo', 255)->nullable(); // Untuk icon class Next.js
            $table->string('image', 255)->nullable(); // Untuk gambar DetailedServiceSection
            $table->jsonb('description')->nullable(); // Konten penjelasan multi-bahasa
            $table->string('color_theme', 50)->nullable();
            $table->integer('order')->default(0);
            $table->boolean('is_active')->default(true);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('services');
    }
};
