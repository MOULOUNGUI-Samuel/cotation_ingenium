<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TableCotation extends Model
{
    use HasFactory;

    protected $fillable = [
        'client_id',
        'commercial_id',
        'nom_assurance',
        'montant_garantie',
        'date_effet',
        'besoins_specifiques',
        'nombre_vehicules',
        'type_vehicules',
        'usage',
        'puissance_fiscale',
        'type_bien',
        'valeur_total',
        'mesures_securite',
        'taille_entreprise',
        'budget_it_annuel',
        'description_systemes',
        'annee',
        'nature_sinistre',
        'montant_pertes',
        'description_sinistres',
        'contenu_commentaire',
    ];

     // Relation avec le modèle Client
     public function client()
     {
         return $this->belongsTo(Client::class, 'client_id', 'id');
     }
 
     // Relation avec le modèle User (commercial)
     public function commercial()
     {
         return $this->belongsTo(User::class, 'commercial_id');
     }
 
     // Relation avec le modèle Documents
     public function documents()
     {
         return $this->hasMany(Document::class, 'cotation_id');
     }
}
