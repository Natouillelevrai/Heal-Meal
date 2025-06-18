<?php
namespace Database\Seeders;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class FkRecetteTagSeeder extends Seeder
{
    public function run()
    {
        DB::table('fk_recettes_tags')->insert([
            ['id_recette' => 1, 'id_tag' => 1],
            ['id_recette' => 1, 'id_tag' => 4],
            ['id_recette' => 2, 'id_tag' => 3],
        ]);
    }
}
