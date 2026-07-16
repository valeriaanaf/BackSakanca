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
            $table->string('name', 100);     // TAZAR
            $table->string('surname', 100); // Al Ghaffar

            // Lokalisasi Multi-Bahasa (JSONB)
            $table->jsonb('focus');         // Creative Developer & Visual Storyteller
            $table->jsonb('description1');  // Kreator kreatif yang memadukan..
            $table->jsonb('description2');  // Front-end developer yang..

            // Array Data Teknis (JSONB)
            $table->jsonb('skills');        // ["After Effects","Capcut Pro","Canva", dll]

            // Aset Media Gambar
            $table->string('photo', 255);            // profile foto
            $table->string('background_image', 255); // background foto

            // Tautan Sosial Media & Kontak
            $table->string('instagram_url', 255)->nullable();   // link ig
            $table->string('email', 255)->nullable();           // link email
            $table->string('github_url', 255)->nullable();      // link github
            $table->string('linkedin_url', 255)->nullable();    // link linkedin (nullable)

            $table->integer('order')->default(0);               // urutan tampil
            $table->boolean('is_active')->default(true);        // status aktif
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
