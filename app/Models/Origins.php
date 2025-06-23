<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Origins extends Model
{
    protected $primaryKey = 'id_origine';

    public function recettes()
    {
        return $this->hasMany(Recette::class, 'id_origine');
    }
}
