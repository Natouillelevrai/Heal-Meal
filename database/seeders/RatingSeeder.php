<?php
namespace Database\Seeders;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class RatingSeeder extends Seeder
{
    public function run()
    {
        DB::table('rating')->insert([
            ['id_user' => 2, 'id_recette' => 1, 'rate' => 5],
            ['id_user' => 3, 'id_recette' => 2, 'rate' => 4],
        ]);
    }
}
