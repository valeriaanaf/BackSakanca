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
        Schema::create('hero_sections', function (Blueprint $table) {
            $table->id();
            $table->string('title1', 100);             // SHARED IDEAS
            $table->string('title2', 100);             // ONE ALLIANCE
            $table->jsonb('subtitle');                      // Your Collective Expert Creating Solutions That Matter

            $table->jsonb('cta_primary');                   // Mulai Sekarang/Get Started

            $table->jsonb('background_images');              // Background Images 3 foto

            $table->boolean('is_active')->default(true);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('hero_sections');
    }
};
