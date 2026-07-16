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
        Schema::create('testimonials', function (Blueprint $table) {
            $table->id();

            $table->string('client_name', 100);             // nama klien
            $table->jsonb('content');                       // ulasan
            $table->integer('rating')->default(5);          // rating

            $table->integer('order')->default(0);           // urutan tampil
            $table->boolean('is_active')->default(true);    // status aktif
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('testimonials');
    }
};
