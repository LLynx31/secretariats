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
        Schema::create('fiche_presences', function (Blueprint $table) {
            $table->bigIncrements('ID_fic_pre');
            $table->date('date_fic_pre');
            $table->time('h_arrive');
            $table->time('h_depart');
            $table->string('matricule_agn', 50);
            $table->foreign('matricule_agn')->references('matricule_agn')->on('agents');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('fiche_presences');
    }
};
