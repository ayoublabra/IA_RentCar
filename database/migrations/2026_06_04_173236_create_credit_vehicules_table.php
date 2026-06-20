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
        Schema::create('credit_vehicules', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('vehicule_id');
            $table->foreign('vehicule_id')->references('id')->on('vehicules')->onDelete('cascade');

            $table->decimal('montant_total', 12, 2);

            $table->decimal('apport', 12, 2)
                ->default(0);

            $table->decimal('montant_finance', 12, 2);

            $table->decimal('mensualite', 12, 2);

            $table->decimal('taux_interet', 5, 2)
                ->default(0);

            $table->integer('nombre_mois');

            $table->date('date_debut');

            $table->date('date_fin')
                ->nullable();

            $table->decimal('reste_a_payer', 12, 2);

            $table->enum('statut', [
                'en_cours',
                'terminé',
                'en_retard',
                'annulé'
            ])->default('en_cours');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('credit_vehicules');
    }
};
