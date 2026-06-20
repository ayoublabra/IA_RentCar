<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use App\Models\Vehicule;
use App\Models\PaiementCredit;
class CreditVehicule extends Model
{
    use HasFactory;

    protected $table = 'credit_vehicules';

    protected $fillable = [
        'vehicule_id',
        'montant_total',
        'apport',
        'montant_finance',
        'mensualite',
        'taux_interet',
        'nombre_mois',
        'date_debut',
        'date_fin',
        'reste_a_payer',
        'statut',
    ];

    protected $casts = [
        'date_debut' => 'date',
        'date_fin' => 'date',
    ];

    public function vehicule()
    {
        return $this->belongsTo(Vehicule::class);
    }

    public function paiements()
    {
        return $this->hasMany(PaiementCredit::class);
    }
}
