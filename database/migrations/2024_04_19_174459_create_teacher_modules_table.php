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
        Schema::create('teacher_modules', function (Blueprint $table) {
            $table->id();
            
            $table->foreignId('professor_id')->references('id')->on('professors');
            $table->foreignId('module_id')->references('id')->on('modules');
            
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('teacher_modules');
    }
};