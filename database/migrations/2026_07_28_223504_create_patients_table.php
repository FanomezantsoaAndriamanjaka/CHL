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
        Schema::create('patients', function (Blueprint $table) {
    
            $table->id();
    
            $table->string('nom');
    
            $table->string('prenom');
    
            $table->enum('sexe',['H','F'])
                  ->nullable();
    
            $table->date('date_naissance')
                  ->nullable();
    
            $table->string('lieu_naissance')
                  ->nullable();
    
            $table->string('nationalite')
                  ->nullable();
    
            $table->string('cin')
                  ->nullable();
    
            $table->string('passeport')
                  ->nullable();
    
            $table->string('photo_profil')
                  ->nullable();
    
            $table->text('adresse')
                  ->nullable();
    
            $table->string('ville')
                  ->nullable();
    
            $table->string('pays')
                  ->nullable();
    
            $table->string('telephone')
                  ->nullable();
    
            $table->string('email')
                  ->unique();
    
            $table->string('password');
    
            $table->string('profession')
                  ->nullable();
    
            $table->string('langue')
                  ->nullable();
    
    
            $table->string('photo_cin')
                  ->nullable();
    
    
            $table->string('photo_passeport')
                  ->nullable();
    
    
            $table->timestamps();
    
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('patients');
    }
};
