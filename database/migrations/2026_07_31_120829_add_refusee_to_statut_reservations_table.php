<?php
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\Facades\DB;

return new class extends Migration
{
    public function up(): void
    {
        DB::statement("
            ALTER TABLE reservations 
            DROP CONSTRAINT IF EXISTS reservations_statut_check
        ");

        DB::statement("
            ALTER TABLE reservations
            ADD CONSTRAINT reservations_statut_check
            CHECK (statut IN (
                'En attente',
                'Confirmée',
                'En cours',
                'Terminée',
                'Refusée'
            ))
        ");
    }


    public function down(): void
    {
        DB::statement("
            ALTER TABLE reservations 
            DROP CONSTRAINT IF EXISTS reservations_statut_check
        ");
    }
};