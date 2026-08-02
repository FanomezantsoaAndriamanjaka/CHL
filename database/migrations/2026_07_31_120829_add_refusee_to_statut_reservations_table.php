<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{

    public function up(): void
    {
        Schema::table('reservations', function (Blueprint $table) {

            $table->enum('statut', [
                'En attente',
                'Confirmée',
                'En cours',
                'Terminée',
                'Refusée'
            ])
            ->default('En attente')
            ->change();

        });
    }



    public function down(): void
    {
        Schema::table('reservations', function (Blueprint $table) {

            $table->enum('statut', [
                'En attente',
                'Confirmée',
                'En cours',
                'Terminée'
            ])
            ->default('En attente')
            ->change();

        });
    }

};