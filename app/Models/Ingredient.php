<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Ingredient extends Model
{

        protected $primaryKey = 'id_ingredient';

    public function allergenes()
{
    return $this->belongsToMany(Allergene::class, 'allergene_ingredient', 'id_ingredient', 'id_allergene');
}

}
