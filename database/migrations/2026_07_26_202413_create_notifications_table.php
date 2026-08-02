<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('notifications', function (Blueprint $table) {

            $table->id();

            // utilisateur mahazo notification
            $table->foreignId('user_id')
                ->constrained()
                ->cascadeOnDelete();


            // titre notification
            $table->string('titre');


            // contenu
            $table->text('message');


            // efa novakiana sa tsia
            $table->boolean('lu')
                ->default(false);


            $table->timestamps();

        });
    }


    public function down(): void
    {
        Schema::dropIfExists('notifications');
    }
};