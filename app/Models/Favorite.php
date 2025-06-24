<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Favorite extends Model
{
    public function recette()
    {
        return $this->belongsTo(Recette::class);
    }
}
