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
        Schema::create('detailed_services', function (Blueprint $table) {
            $table->id();
            $table->foreignId('service_id')->unique()->constrained('services')->onDelete('cascade');  // logo sakanca

            $table->string('title_line1', 100);             // S A K A N C A
            $table->string('title_line2', 100);             // contoh: [V I S U A L, D E V, T E C H, dll]

            // untuk logo FK dengan service
            $table->string('background_image', 255);        // background images per service
            $table->jsonb('description');                   // deskripsi panjang

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
        Schema::dropIfExists('detailed_services');
    }
};
