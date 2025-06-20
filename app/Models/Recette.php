<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Recette extends Model
{
    protected $table = 'recettes';
    protected $primaryKey = 'id_recette';


    public function origin()
    {
        return $this->belongsTo(Origins::class, 'id_origine');
    }



    public function user() {
        return $this->belongsTo(User::class, 'id_user', 'id_user');
    }

    public function ratings() {
        return $this->hasMany(Rating::class, 'id_recette', 'id_recette');
    }

    public function ingredients() {
        return $this->belongsToMany(Ingredient::class, 'fk_recettes_ingredients', 'id_recette', 'id_ingredient');
    }
}
