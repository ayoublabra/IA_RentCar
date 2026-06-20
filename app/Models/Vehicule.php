<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use App\Models\Marque;
use App\Models\Modelle;
use App\Models\CreditVehicule;
use App\Models\Reservation;
use App\Models\Entretien;
use App\Models\Version;


class Vehicule extends Model
{
    use HasFactory;

    protected $fillable = [
        'marque_id',
        'modelle_id',
        'version_id',
        'couleur',
        'immatriculation',
        'prix_journalier',
        'prix_achat',
        'statut',
        'annee',
        'kilometrage',
        'carburant',
        'transmission',
        'nombre_places',
        'disponible',
        'description',
    ];

    public function marque()
    {
        return $this->belongsTo(Marque::class);
    }

    public function modelle()
    {
        return $this->belongsTo(Modelle::class);
    }

    public function credit()
    {
        return $this->hasOne(CreditVehicule::class);
    }

    public function reservations()
    {
        return $this->hasMany(Reservation::class);
    }

    public function entretiens()
    {
        return $this->hasMany(Entretien::class);
    }
    public function version()
    {
        return $this->belongsTo(Version::class);
    }
}
