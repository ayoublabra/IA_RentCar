<?php

namespace App\Models;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\Voiture;

use Illuminate\Database\Eloquent\Model;

class Marque extends Model
{
    protected $fillable = [
        'nom_marque',
        'filename',
        'path',
    ];

    public function voitures()
    {
        return $this->hasMany(Voiture::class);
    }
}
