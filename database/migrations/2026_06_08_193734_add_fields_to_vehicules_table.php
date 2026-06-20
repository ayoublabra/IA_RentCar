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
        Schema::table('vehicules', function (Blueprint $table) {
            $table->unsignedBigInteger('marque_id')->nullable()->after('id');

            $table->foreign('marque_id')
                  ->references('id')
                  ->on('marques')
                  ->onDelete('cascade');
             $table->unsignedBigInteger('modelle_id')->nullable()->after('id');

            $table->foreign('modelle_id')
                  ->references('id')
                  ->on('modelles')
                  ->onDelete('cascade');
             $table->unsignedBigInteger('version_id')->nullable()->after('id');

            $table->foreign('version_id')
                  ->references('id')
                  ->on('versions')
                  ->onDelete('cascade');


            // Infos véhicule
            $table->string('couleur')->nullable();
            $table->string('immatriculation')->unique();

            $table->decimal('prix_journalier', 10, 2);
            $table->decimal('prix_achat', 10, 2)->nullable();

            $table->string('statut')->default('disponible');

            $table->year('annee')->nullable();
            $table->integer('kilometrage')->default(0);

            $table->string('carburant')->nullable();
            $table->string('transmission')->nullable();

            $table->integer('nombre_places')->default(5);

            $table->boolean('disponible')->default(true);

            $table->text('description')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('vehicules', function (Blueprint $table) {
            //
        });
    }
};
