<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Favorite extends Model
{
    protected $primaryKey = 'id_favorites';
    protected $fillable = ['id_user', 'id_recette'];
    
    public function recette()
    {
        return $this->belongsTo(Recette::class);
    }
}
