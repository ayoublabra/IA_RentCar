<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use App\Models\CreditVehicule;

class PaiementCredit extends Model
{
    use HasFactory;

    protected $table = 'paiement_credits';

    protected $fillable = [
        'credit_vehicule_id',
        'montant',
        'date_paiement',
        'mode_paiement',
        'reference',
        'commentaire',
    ];

    protected $casts = [
        'date_paiement' => 'date',
    ];

    public function credit()
    {
        return $this->belongsTo(CreditVehicule::class, 'credit_vehicule_id');
    }
}
