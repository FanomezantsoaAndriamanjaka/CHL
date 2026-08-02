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

        $table->string('nom');

        $table->string('slug')->unique();

        $table->string('categorie');

        $table->longText('description');

        $table->string('image')->nullable();

        $table->decimal('prix', 12, 2)->default(0);

        $table->boolean('reservation_disponible')
              ->default(true);

        $table->boolean('publie')
              ->default(true);

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