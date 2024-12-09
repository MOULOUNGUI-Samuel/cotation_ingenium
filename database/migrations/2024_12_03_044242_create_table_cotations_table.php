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
        Schema::create('table_cotations', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('client_id');
            $table->foreign('client_id')->references('id')->on('clients')->onDelete('cascade');
            $table->string('commercial_id');
            $table->string('nom_assurance');
            $table->text('montant_garantie')->nullable();
            $table->date('date_effet');
            $table->text('besoins_specifiques')->nullable();
            $table->integer('nombre_vehicules')->nullable();
            $table->enum('type_vehicules', ['Légers', 'Poids lourds', 'Utilitaires'])->nullable();
            $table->enum('usage', ['Privé', 'Professionnel'])->nullable();
            $table->decimal('puissance_fiscale', 5, 2)->nullable();
            $table->enum('type_bien', ['Immeuble', 'Equipements', 'Marchandises'])->nullable();
            $table->decimal('valeur_total', 15, 2)->nullable();
            $table->set('mesures_securite', ['Alarme', 'Surveillance 24h', 'Extincteurs'])->nullable();
            $table->integer('taille_entreprise')->nullable();
            $table->decimal('budget_it_annuel', 15, 2)->nullable();
            $table->text('description_systemes')->nullable();
            $table->year('annee');
            $table->text('nature_sinistre');
            $table->decimal('montant_pertes', 15, 2);
            $table->text('description_sinistres');
            $table->text('contenu_commentaire');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('table_cotations');
    }
};
