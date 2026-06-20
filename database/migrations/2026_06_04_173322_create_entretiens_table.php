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
        Schema::create('entretiens', function (Blueprint $table) {
            $table->id();
             $table->enum('type', [
                'vidange',
                'freinage',
                'pneumatique',
                'batterie',
                'climatisation',
                'revision',
                'assurance',
                'controle_technique',
                'autre'
            ]);

            $table->text('description')->nullable();

            $table->date('date_entretien');

            $table->date('prochain_entretien')->nullable();

            $table->integer('kilometrage')->nullable();

            $table->decimal('cout', 10, 2)->default(0);

            $table->string('prestataire')->nullable();

            $table->enum('statut', [
                'planifie',
                'en_cours',
                'termine',
                'annule'
            ])->default('planifie');

             $table->unsignedBigInteger('vehicule_id');
            $table->foreign('vehicule_id')->references('id')->on('vehicules')->onDelete('cascade');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('entretiens');
    }
};
