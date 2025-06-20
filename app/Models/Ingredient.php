<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Ingredient extends Model
{
    protected $table = 'ingredients';
    protected $primaryKey = 'id_ingredient';

    public function regimes() {
        return $this->belongsToMany(Regime::class, 'fk_ingredient_regime', 'id_ingredient', 'id_regime');
    }
}
