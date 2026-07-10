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
        Schema::dropIfExists('team_members');

        Schema::create('team_members', function (Blueprint $table) {
            $table->id();
            $table->string('name', 100);
            $table->string('username', 100)->nullable();
            $table->string('surname', 100)->nullable();

            // Lokalisasi Multi-Bahasa (JSONB)
            $table->jsonb('role');
            $table->jsonb('description1')->nullable();
            $table->jsonb('description2')->nullable();

            // Array Data Teknis (JSONB)
            $table->jsonb('skills')->nullable();
            $table->jsonb('focus')->nullable();
            $table->string('tools', 100)->nullable();
            $table->jsonb('style')->nullable();

            // Aset Media Gambar
            $table->string('photo', 255)->nullable();
            $table->string('background_image', 255)->nullable();

            // Tautan Sosial Media & Kontak
            $table->string('instagram_url', 255)->nullable();
            $table->string('email', 255)->nullable();
            $table->string('github_url', 255)->nullable();
            $table->string('linkedin_url', 255)->nullable();

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
        Schema::dropIfExists('team_members');
    }
};
