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
        Schema::disableForeignKeyConstraints();
        Schema::create('etudiants', function (Blueprint $table) {
            $table->id();
            $table->string('nom');
            $table->string('prenom');
            $table->string('classe');
            $table->string('photo');
            $table->unsignedBigInteger('tuteur_id');
             $table->foreign('tuteur_id')->references('id')->on('tuteurs')->oneDelete('cascade');
             // classe ville
             $table->unsignedBigInteger('ville_id');
             $table->foreign('ville_id')->references('id')->on('villes');
           //classe vers nationalité
           $table->unsignedBigInteger('nationalite_id');
           $table->foreign('nationalite_id')->references('id')->on('nationalites');
           //classe vers groupe sanguin
           $table->unsignedBigInteger('groupe_id');
           $table->foreign('groupe_id')->references('id')->on('groupes');
           $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('etudiants');
    }
};
