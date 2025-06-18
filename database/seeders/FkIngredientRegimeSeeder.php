<?php
namespace Database\Seeders;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class FkIngredientRegimeSeeder extends Seeder
{
    public function run()
    {
        DB::table('fk_ingredient_regime')->insert([
            ['id_ingredient' => 1, 'id_regime' => 1],
            ['id_ingredient' => 1, 'id_regime' => 2],
            ['id_ingredient' => 2, 'id_regime' => 4],
            ['id_ingredient' => 3, 'id_regime' => 3],
            ['id_ingredient' => 5, 'id_regime' => 2],
        ]);
    }
}
