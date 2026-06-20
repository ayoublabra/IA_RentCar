<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Modelle extends Model
{
    protected $fillable = [
        'nom_modelle',
        'marque_id'
    ];

    public function marque()
    {
        return $this->belongsTo(Marque::class);
    }
}
