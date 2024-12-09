<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Client extends Model
{
    use HasFactory;
    protected $primaryKey = 'id';

    protected $fillable = [
        'raison_sociale',
        'adresse_complete',
        'contact_nom',
        'contact_telephone',
        'contact_email',
        'secteur_activite',
        'chiffre_affaires',
    ];

    // Relation avec le modèle User
    public function users()
    {
        return $this->hasMany(User::class, 'client_id');
    }

    // Relation avec le modèle Table_cotations
    public function tableCotations()
    {
        return $this->hasMany(TableCotation::class, 'client_id', 'id');
    }
}
