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
        Schema::create('transmettres', function (Blueprint $table) {
            $table->string('Matricule_scrt', 50);
            $table->unsignedBigInteger('ID_courrier');
            $table->foreign('Matricule_scrt')->references('Matricule_scrt')->on('secretaires');
            $table->foreign('ID_courrier')->references('ID_courrier')->on('courriers');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('transmettres');
    }
};
