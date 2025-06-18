<?php
namespace Database\Seeders;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class FkRecetteIngredientSeeder extends Seeder
{
    public function run()
    {
        DB::table('fk_recettes_ingredients')->insert([
            ['id_recette' => 1, 'id_ingredient' => 1, 'quantity' => 150, 'id_unit' => 1],
            ['id_recette' => 2, 'id_ingredient' => 2, 'quantity' => 200, 'id_unit' => 1],
            ['id_recette' => 2, 'id_ingredient' => 4, 'quantity' => 50, 'id_unit' => 1],
        ]);
    }
}
