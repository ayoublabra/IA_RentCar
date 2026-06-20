<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Entretien extends Model
{
    use HasFactory;

    protected $fillable = [
        'vehicule_id',
        'type',
        'description',
        'date_entretien',
        'prochain_entretien',
        'kilometrage',
        'cout',
        'prestataire',
        'statut',
    ];

    protected $casts = [
        'date_entretien' => 'date',
        'prochain_entretien' => 'date',
    ];

    public function vehicule()
    {
        return $this->belongsTo(Vehicule::class);
    }
}
