<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use App\Models\Modelle;
use App\Models\Vehicule;

class Version extends Model
{
    use HasFactory;

    protected $fillable = [
        'modelle_id',
        'nom',
    ];

    public function modelle()
    {
        return $this->belongsTo(Modelle::class);
    }

    public function vehicules()
    {
        return $this->hasMany(Vehicule::class);
    }
}
