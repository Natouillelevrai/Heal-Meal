<?php

namespace App\View\Components;

use App\Models\Recette;
use Closure;
use Illuminate\View\Component;
use Illuminate\Contracts\View\View;

class RecipesCard extends Component
{
    public $recette;
    public function __construct($recette)
    {
        $this->recette = $recette;
    }


    public function render(): View|Closure|string
    {
        return view('components.recipes-card');
    }
}
