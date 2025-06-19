<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Origins extends Model
{
    public function recettes()
    {
        return $this->hasMany(Recette::class, 'id_origine');
    }
}
