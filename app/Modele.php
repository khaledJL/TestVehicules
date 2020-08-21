<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Modele extends Model
{
    protected  $guarded = [];
    protected $fillable = [
        'nom'
    ];

    public function vehicules()
    {
        return $this->hasMany(Vehicule::class);
    }
}
