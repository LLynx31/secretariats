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
        Schema::create('commandes', function (Blueprint $table) {
            $table->bigIncrements('ID_cmd');
            $table->integer('quantite_dmd');
            $table->integer('quantite_servic_cmd');
            $table->unsignedBigInteger('ID_Bon_Cmd');
            $table->unsignedBigInteger('ID_art');
            $table->string('Matricule_scrt', 50);
            $table->foreign('ID_Bon_Cmd')->references('ID_Bon_Cmd')->on('bon_de_commandes');
            $table->foreign('ID_art')->references('ID_art')->on('articles');
            $table->foreign('Matricule_scrt')->references('Matricule_scrt')->on('secretaires');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('commandes');
    }
};
