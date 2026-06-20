<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use App\Models\User;
use App\Models\Vehicule;

class Reservation extends Model
{
    use HasFactory;

    protected $fillable = [
        'user_id',
        'vehicule_id',
        'date_debut',
        'date_fin',
        'prix_total',
        'statut',
        'notes',
        'lieu_depart',
        'lieu_retour',
    ];

    protected $casts = [
        'date_debut' => 'datetime',
        'date_fin' => 'datetime',
    ];

    /**
     * Client qui a fait la réservation
     */
    public function user()
    {
        return $this->belongsTo(User::class);
    }

    /**
     * Véhicule réservé
     */
    public function vehicule()
    {
        return $this->belongsTo(Vehicule::class);
    }

    /**
     * Constantes pour les statuts
     */
    public const STATUTS = [
        'en_attente',
        'confirmee',
        'en_cours',
        'terminee',
        'annulee',
    ];
}
