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

    public function user()
    {
        return $this->belongsTo(User::class, 'id_user');
    }

    public function steps()
    {
        return $this->hasMany(Step::class, 'id_recette');
    }

    public function ingredients()
    {
        return $this->belongsToMany(Ingredient::class, 'fk_recettes_ingredients', 'id_recette', 'id_ingredient')
            ->withPivot('quantity', 'id_unit');

    }

    public function favorite()
    {
        return $this->hasMany(Favorite::class, 'id_recette');
    }
}
