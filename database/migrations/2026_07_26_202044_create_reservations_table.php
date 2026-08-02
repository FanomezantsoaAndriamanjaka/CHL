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
        Schema::create('reservations', function (Blueprint $table) {

            $table->id();

            /*
            |--------------------------------------------------------------------------
            | Relations
            |--------------------------------------------------------------------------
            */

            // Patient
            $table->foreignId('user_id')
                  ->constrained('users')
                  ->cascadeOnDelete();

            // Publication / Service réservé
            $table->foreignId('publication_id')
            ->nullable()
            ->constrained()
            ->cascadeOnDelete();

            /*
            |--------------------------------------------------------------------------
            | Informations de réservation
            |--------------------------------------------------------------------------
            */

            $table->string('consultation');

            $table->date('date_reception');

            $table->date('date_sortie')->nullable();

            $table->time('heure');

            $table->string('contact_urgence');

            /*
            |--------------------------------------------------------------------------
            | Hospitalisation
            |--------------------------------------------------------------------------
            */

            $table->string('type_chambre')->nullable();

            $table->unsignedTinyInteger('nombre_chambre')->default(1);

            /*
            |--------------------------------------------------------------------------
            | Informations médicales
            |--------------------------------------------------------------------------
            */

            $table->longText('description_maladie')->nullable();

            /*
            |--------------------------------------------------------------------------
            | Finance
            |--------------------------------------------------------------------------
            */

            $table->decimal('montant',10,2)->default(0);

            /*
            |--------------------------------------------------------------------------
            | Statut
            |--------------------------------------------------------------------------
            */

            $table->enum('statut',[
                'En attente',
                'Confirmée',
                'En cours',
                'Terminée',
                'Annulée'
            ])->default('En attente');

            /*
            |--------------------------------------------------------------------------
            | Commentaire Admin
            |--------------------------------------------------------------------------
            */

            $table->text('commentaire_admin')->nullable();

            $table->timestamps();

        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('reservations');
    }
};