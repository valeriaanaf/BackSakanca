<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Redesain dari pola key-value jadi singleton bernama,
     * konsisten dengan hero_sections/about_sections/gallery_items.
     */
    public function up(): void
    {
        Schema::dropIfExists('site_settings');

        Schema::create('site_settings', function (Blueprint $table) {
            $table->id();
            $table->string('site_name', 100);
            $table->string('site_logo', 255);
            $table->string('footer_copyright', 255)->nullable();

            $table->string('social_instagram', 255)->nullable();
            $table->string('social_tiktok', 255)->nullable();
            $table->string('social_linkedin', 255)->nullable();
            $table->string('contact_email', 255)->nullable();
            $table->string('contact_phone', 20)->nullable();

            $table->string('services_section_bg', 255)->nullable();
            $table->string('projects_section_bg', 255)->nullable();
            $table->string('testimonials_section_bg', 255)->nullable();

            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('site_settings');
    }
};