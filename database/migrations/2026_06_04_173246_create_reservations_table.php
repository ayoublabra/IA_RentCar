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
              // Client (user)
            $table->unsignedBigInteger('user_id');
            $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');

             // Vehicule
            $table->unsignedBigInteger('vehicule_id');
            $table->foreign('vehicule_id')->references('id')->on('vehicules')->onDelete('cascade');

            // Dates de réservation
            $table->dateTime('date_debut');
            $table->dateTime('date_fin');

            // Prix
            $table->decimal('prix_total', 12, 2)->default(0);

            // Statut de la réservation
            $table->enum('statut', [
                'en_attente',
                'confirmee',
                'en_cours',
                'terminee',
                'annulee'
            ])->default('en_attente');

            // Optionnel
            $table->text('notes')->nullable();
            $table->string('lieu_depart')->nullable();
            $table->string('lieu_retour')->nullable();
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
