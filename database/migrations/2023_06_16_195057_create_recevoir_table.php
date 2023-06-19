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
        Schema::create('recevoirs', function (Blueprint $table) {
            $table->string('Matricule_S_D', 50);
            $table->unsignedBigInteger('ID_courrier');
            $table->foreign('Matricule_S_D')->references('Matricule_S_D')->on('sous_directeurs');
            $table->foreign('ID_courrier')->references('ID_courrier')->on('courriers');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('recevoirs');
    }
};
