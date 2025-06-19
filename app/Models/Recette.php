<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Recette extends Model
{
    public function origine()
    {
        return $this->belongsTo(Origins::class, 'id_origine');
    }
}
