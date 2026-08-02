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
        Schema::create('publications', function (Blueprint $table) {

            $table->id();

            /*
            |--------------------------------------------------------------------------
            | Informations principales
            |--------------------------------------------------------------------------
            */

            $table->string('nom');

            $table->string('slug')->unique();

            $table->string('categorie');

            $table->longText('description');

            /*
            |--------------------------------------------------------------------------
            | Médias
            |--------------------------------------------------------------------------
            */

            $table->string('image')->nullable();

            /*
            |--------------------------------------------------------------------------
            | Réservation
            |--------------------------------------------------------------------------
            */

            $table->decimal('prix', 12, 2)->default(0);

            $table->boolean('reservation_disponible')->default(true);

            /*
            |--------------------------------------------------------------------------
            | Publication
            |--------------------------------------------------------------------------
            */

            $table->boolean('publie')->default(true);

            $table->timestamps();


            // Statut

            $table->enum('statut',[
                'Actif',
                'Inactif'
            ])
            ->default('Actif');


            $table->timestamps();

        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('publications');
    }
};