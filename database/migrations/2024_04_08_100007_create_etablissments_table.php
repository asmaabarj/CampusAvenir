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
        Schema::create('etablissments', function (Blueprint $table) {
            $table->id();
            $table->string('nom');
            $table->text('formation');
            $table->integer('etudiants');
            $table->string('conditions');
            $table->string('filieres');
            $table->enum('concour', ['avec', 'sans']);
            $table->enum('type', ['prive', 'publique']);
            $table->string('photo');
            $table->text('description');
            $table->string('lieu');
            $table->foreignId('domaine_id')->constrained('domaines')->onDelete('cascade')->onUpdate('cascade');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('etablissments');
    }
};
