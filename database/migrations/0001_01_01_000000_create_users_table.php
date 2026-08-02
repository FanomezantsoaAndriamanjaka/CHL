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
        Schema::create('users', function (Blueprint $table) {

            $table->id();

            /*
            |--------------------------------------------------------------------------
            | Informations personnelles
            |--------------------------------------------------------------------------
            */

            $table->string('nom');
            $table->string('prenom');

            $table->enum('sexe', [
                'Homme',
                'Femme'
            ])->nullable();

            $table->date('date_naissance')->nullable();

            $table->string('lieu_naissance')->nullable();

            $table->string('nationalite')->nullable();

            /*
            |--------------------------------------------------------------------------
            | Contact
            |--------------------------------------------------------------------------
            */

            $table->string('telephone')->nullable();

            $table->string('email')->unique();

            $table->timestamp('email_verified_at')->nullable();

            $table->string('adresse')->nullable();

            $table->string('ville')->nullable();

            $table->string('pays')->default('Madagascar');

            /*
            |--------------------------------------------------------------------------
            | Documents
            |--------------------------------------------------------------------------
            */

            $table->string('photo_profil')->nullable();

            $table->string('cin')->nullable();

            $table->string('photo_cin')->nullable();

            $table->string('passeport')->nullable();

            $table->string('photo_passeport')->nullable();

            /*
            |--------------------------------------------------------------------------
            | Informations complémentaires
            |--------------------------------------------------------------------------
            */

            $table->string('profession')->nullable();

            $table->string('langue')->default('Français');

            /*
            |--------------------------------------------------------------------------
            | Authentification
            |--------------------------------------------------------------------------
            */

            $table->string('password');

            $table->rememberToken();

            /*
            |--------------------------------------------------------------------------
            | Gestion des rôles
            |--------------------------------------------------------------------------
            */

            $table->enum('role', [
                'admin',
                'patient',
                'medecin',
                'secretaire'
            ])->default('patient');

            /*
            |--------------------------------------------------------------------------
            | Statut
            |--------------------------------------------------------------------------
            */

            $table->boolean('actif')->default(true);

            $table->timestamps();

        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('users');
    }
};