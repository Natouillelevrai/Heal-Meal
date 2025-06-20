<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Allergene extends Model
{
    public function ingredients()
{
    return $this->belongsToMany(Ingredient::class, 'allergene_ingredient', 'id_allergene', 'id_ingredient');
}

}
