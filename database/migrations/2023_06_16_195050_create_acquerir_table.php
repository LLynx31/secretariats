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
        Schema::create('acquerirs', function (Blueprint $table) {
            $table->unsignedBigInteger('ID_art');
            $table->string('matricule_agn',50);
            $table->foreign('ID_art')->references('ID_art')->on('articles');
            $table->foreign('matricule_agn')->references('matricule_agn')->on('agents');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('acquerirs');
    }
};
