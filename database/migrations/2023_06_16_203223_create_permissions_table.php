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
        Schema::create('permissions', function (Blueprint $table) {
            $table->bigIncrements('ID_perm');
            $table->date('debut_permission');
            $table->string('motf_perm', 50);
            $table->date('fin_permission');
            $table->string('Matricule_S_D', 50);
            $table->string('matricule_agn', 50);
            $table->foreign('Matricule_S_D')->references('Matricule_S_D')->on('sous_directeurs');
            $table->foreign('matricule_agn')->references('matricule_agn')->on('agents');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('permissions');
    }
};
