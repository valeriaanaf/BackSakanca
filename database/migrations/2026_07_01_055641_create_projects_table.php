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
        Schema::create('projects', function (Blueprint $table) {
            $table->id();
            // FK yang mengarah ke service id dengan pengaman RESTRICT
            $table->foreignId('service_id')->constrained('services')->onDelete('restrict');
            $table->string('title', 200);
            $table->jsonb('description');
            $table->string('thumbnail', 255);
            $table->string('url', 255)->nullable();
            $table->integer('year');
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
        Schema::dropIfExists('projects');
    }
};
