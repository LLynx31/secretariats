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
        Schema::create('bon_de_commandes', function (Blueprint $table) {
            $table->bigIncrements('ID_Bon_Cmd');
            $table->integer('num_bon');
            $table->date('date_bon_cmd');
            $table->string('Matricule_scrt', 50);
            $table->foreign('Matricule_scrt')->references('Matricule_scrt')->on('secretaires');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('bon_de_commandes');
    }
};
