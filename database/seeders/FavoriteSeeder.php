<?php
namespace Database\Seeders;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class FavoriteSeeder extends Seeder
{
    public function run()
    {
        DB::table('favorites')->insert([
            ['id_user' => 2, 'id_recette' => 1],
            ['id_user' => 3, 'id_recette' => 2],
        ]);
    }
}
