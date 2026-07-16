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
        Schema::create('about_sections', function (Blueprint $table) {
            $table->id();
            $table->string('title1', 100);          // S A K A N C A
            $table->string('title2', 100);          // A L L I A N C E

            $table->jsonb('description');           // Sakanca Alliance berasal dari kata..

            $table->string('logo', 255);            // Logo Sakanca Alliance
            $table->string('background_image', 255); // Background Image

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('about_sections');
    }
};
