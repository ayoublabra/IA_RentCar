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
        Schema::create('paiement_credits', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('credit_vehicule_id');
            $table->foreign('credit_vehicule_id')->references('id')->on('credit_vehicules')->onDelete('cascade');
             $table->decimal('montant', 12, 2);

            $table->date('date_paiement');

            $table->enum('mode_paiement', [
                'especes',
                'virement',
                'cheque',
                'carte_bancaire',
                'mobile_money'
            ])->nullable();
            // Exemple : Espèces, Virement, Chèque, Carte bancaire

            $table->string('reference')->nullable();

            $table->text('commentaire')->nullable();

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('paiement_credits');
    }
};
