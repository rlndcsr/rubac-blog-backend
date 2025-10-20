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
        Schema::create('access_functions', function (Blueprint $table) {
            $table->id();
            $table->foreignId('access_level_id')->constrained('access_levels')->onDelete('cascade');
            $table->foreignId('function_id')->constrained('functions')->onDelete('cascade');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('access_functions');
    }
};
