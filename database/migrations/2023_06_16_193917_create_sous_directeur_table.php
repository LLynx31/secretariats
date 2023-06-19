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
        Schema::create('sous_directeurs', function (Blueprint $table) {
            $table->string('Matricule_S_D', 50)->primary();
            $table->string('adr_mail_S_D', 50);
            $table->string('nom_S_D', 50);
            $table->string('pre_1_S_D', 50);
            $table->string('pre_2_S_D', 50);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('sous_directeurs');
    }
};
