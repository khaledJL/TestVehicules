<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Vehicule extends Model
{
    protected  $guarded = [];

    public function modele()
    {
        return $this->belongsTo(Modele::class);
    }

    public function marque()
    {
        return $this->belongsTo(Marque::class);
    }
}
