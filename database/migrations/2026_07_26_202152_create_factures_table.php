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
        Schema::create('factures', function (Blueprint $table) {

            $table->id();

            /*
            |--------------------------------------------------------------------------
            | Relation
            |--------------------------------------------------------------------------
            */

            $table->foreignId('reservation_id')
                  ->constrained('reservations')
                  ->cascadeOnDelete();

            /*
            |--------------------------------------------------------------------------
            | Informations facture
            |--------------------------------------------------------------------------
            */

            $table->string('numero_facture')->unique();

            $table->decimal('montant', 10, 2);

            /*
            |--------------------------------------------------------------------------
            | Paiement
            |--------------------------------------------------------------------------
            */

            $table->enum('mode_paiement', [
                'Espèces',
                'MVola',
                'Orange Money',
                'Airtel Money',
                'Carte Bancaire',
                'Virement Bancaire'
            ])->nullable();

            $table->string('reference_paiement')->nullable();

            $table->dateTime('date_paiement')->nullable();

            /*
            |--------------------------------------------------------------------------
            | Statut
            |--------------------------------------------------------------------------
            */

            $table->enum('statut', [
                'En attente',
                'Payée',
                'Annulée'
            ])->default('En attente');

            /*
            |--------------------------------------------------------------------------
            | PDF
            |--------------------------------------------------------------------------
            */

            $table->string('pdf')->nullable();

            /*
            |--------------------------------------------------------------------------
            | Remarques
            |--------------------------------------------------------------------------
            */

            $table->text('commentaire')->nullable();

            $table->timestamps();

        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('factures');
    }
};