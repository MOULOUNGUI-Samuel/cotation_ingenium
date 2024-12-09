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
        Schema::create('clients', function (Blueprint $table) {
            $table->id();
            $table->string('raison_sociale');
            $table->text('adresse_complete');
            $table->string('contact_nom');
            $table->string('contact_telephone', 20);
            $table->string('contact_email')->unique();
            $table->enum('secteur_activite', ['Industrie', 'Commerce', 'Services']);
            $table->decimal('chiffre_affaires', 15, 2);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('clients');
    }
};
