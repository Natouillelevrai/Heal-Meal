<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;

class AllergeneIngredientSeeder extends Seeder
{
    public function run(): void
    {
        DB::table('allergene_ingredient')->insert([
            ['id_allergene' => 1, 'id_ingredient' => 3, 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
            ['id_allergene' => 2, 'id_ingredient' => 4, 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
            ['id_allergene' => 3, 'id_ingredient' => 5, 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
            ['id_allergene' => 4, 'id_ingredient' => 1, 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
            ['id_allergene' => 5, 'id_ingredient' => 2, 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
            ['id_allergene' => 6, 'id_ingredient' => 1, 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
            ['id_allergene' => 7, 'id_ingredient' => 2, 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
            ['id_allergene' => 8, 'id_ingredient' => 3, 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
            ['id_allergene' => 9, 'id_ingredient' => 4, 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
            ['id_allergene' => 10, 'id_ingredient' => 5, 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
            ['id_allergene' => 11, 'id_ingredient' => 1, 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
            ['id_allergene' => 12, 'id_ingredient' => 2, 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
            ['id_allergene' => 13, 'id_ingredient' => 3, 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
            ['id_allergene' => 14, 'id_ingredient' => 4, 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
            ['id_allergene' => 15, 'id_ingredient' => 5, 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
            ['id_allergene' => 16, 'id_ingredient' => 1, 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
            ['id_allergene' => 17, 'id_ingredient' => 2, 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
            ['id_allergene' => 18, 'id_ingredient' => 3, 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
            ['id_allergene' => 19, 'id_ingredient' => 4, 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
            ['id_allergene' => 20, 'id_ingredient' => 5, 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
        ]);
    }
}
