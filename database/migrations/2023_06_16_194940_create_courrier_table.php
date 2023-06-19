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
        Schema::create('courriers', function (Blueprint $table) {
            $table->bigIncrements('ID_courrier');
            $table->string('adr_recp', 50);
            $table->date('date_cour');
            $table->string('corps_cour', 50);
            $table->string('type_cour', 50);
            $table->time('heur_cour');
            $table->string('Matricule_S_D', 50);
            $table->unsignedBigInteger('ID_crspd');
            $table->foreign('Matricule_S_D')->references('Matricule_S_D')->on('sous_directeurs');
            $table->foreign('ID_crspd')->references('ID_crspd')->on('correspondants');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('courriers');
    }
};
