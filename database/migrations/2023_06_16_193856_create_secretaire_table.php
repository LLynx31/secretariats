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
        Schema::create('secretaires', function (Blueprint $table) {
            $table->string('Matricule_scrt', 50)->primary();
            $table->string('Nom_scrt', 50);
            $table->string('Prenom', 50);
            $table->string('Prenom_1', 50);
            $table->string('email', 50);
            $table->string('Service_scrt', 50);
            $table->string('login_scrt', 50);
            $table->string('password', 100);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('secretaires');
    }
};
