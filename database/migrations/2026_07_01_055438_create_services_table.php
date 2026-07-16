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
            $table->string('slug', 50)->unique();      // slug for URL routing

            $table->string('name', 100)->unique();      // [Sakanca Visual, Sakanca Dev, dll]

            $table->string('logo', 255);                // Logo per Sakanca
            $table->enum('col', ['left', 'right'])->default('left');    // posisi kolom di halaman depan

            $table->integer('order')->default(0);       // urutan tampil di halaman depan
            $table->boolean('is_active')->default(true); // status aktif
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
