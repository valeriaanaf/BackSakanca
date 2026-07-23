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
        Schema::create('team_members', function (Blueprint $table) {
            $table->id();

            // Nama depan dan nama belakang
            $table->string('name', 100);     // VALERIAN
            $table->string('surname', 100); // AHMAD FAUZIAN

            // Lokalisasi Multi-Bahasa (JSONB)
            $table->jsonb('focus');         // Full-Stack Developer & Technical Leader
            $table->jsonb('description1');  // Saya adalah Full-Stack Developer dan...
            $table->jsonb('description2');  // Saya Saya mengintegrasikan keahlian engineering, analisis...

            // Array Data Teknis (JSONB)
            $table->jsonb('skills');        // ["Laravel","Next.js","PostgreSQL", dll]

            // Aset Media Gambar
            $table->string('photo', 255);            // Profile foto
            $table->string('background_image', 255); // Background foto

            // Tautan Sosial Media & Kontak
            $table->string('instagram_url', 255)->nullable();   // Link Instagram (nullable)
            $table->string('email', 255)->nullable();           // Link Email (nullable)
            $table->string('github_url', 255)->nullable();      // Link Github (nullable)
            $table->string('linkedin_url', 255)->nullable();    // Link LinkedIn (nullable)

            $table->integer('order')->default(0);               // Urutan tampil anggota tim
            $table->boolean('is_active')->default(true);        // Status aktif anggota tim (default: true)
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('team_members');
    }
};
