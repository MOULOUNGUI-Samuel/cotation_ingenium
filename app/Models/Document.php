<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Document extends Model
{
    use HasFactory;

    protected $primaryKey = 'document_id';

    protected $fillable = [
        'cotation_id',
        'nom_document',
        'type_document',
        'chemin_document',
    ];

    // Relation avec le modèle Table_cotations
    public function cotation()
    {
        return $this->belongsTo(TableCotation::class, 'cotation_id');
    }
}
