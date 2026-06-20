<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class VehiculePhoto extends Model
{
    protected $fillable = [
        'vehicule_id',
        'is_profile',
        'filename',
        'path',
    ];
}
