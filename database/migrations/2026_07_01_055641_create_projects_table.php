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
        Schema::create('projects', function (Blueprint $table) {
            $table->id();
            $table->foreignId('service_id')->constrained('services')->onDelete('restrict'); // -Sakanca
            $table->jsonb('name');                        // nama proyek
            $table->jsonb('description');                  // deskripsi panjang
            $table->string('thumbnail', 255);              // gambar thumbnail
            $table->string('url', 255)->nullable();         // link proyek (untuk dev)
            $table->integer('order')->default(0);           // urutan tampil
            $table->boolean('is_active')->default(true);     // status aktif
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('projects');
    }
};
