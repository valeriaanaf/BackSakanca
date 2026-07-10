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
        Schema::dropIfExists('hero_sections');

        Schema::create('hero_sections', function (Blueprint $table) {
            $table->id();
            $table->string('title1', 100);
            $table->string('title2', 100);
            $table->jsonb('subtitle');
            $table->jsonb('cta_primary');
            $table->jsonb('background_images');
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
