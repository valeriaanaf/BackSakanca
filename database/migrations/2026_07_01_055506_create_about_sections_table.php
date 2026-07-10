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
        Schema::dropIfExists('about_sections'); // Amankan drop untuk menghindari conflict

        Schema::create('about_sections', function (Blueprint $table) {
            $table->id();
            $table->string('title1', 100);
            $table->string('title2', 100);
            $table->jsonb('description');
            $table->string('logo', 255)->nullable();
            $table->string('background_image', 255)->nullable();
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
