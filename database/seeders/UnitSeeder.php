<?php
namespace Database\Seeders;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class UnitSeeder extends Seeder
{
    public function run()
    {
        DB::table('units')->insert([
            ['unit' => 'g'],
            ['unit' => 'ml'],
            ['unit' => 'pcs'],
            ['unit' => 'tbsp'],
            ['unit' => 'tsp'],
        ]);
    }
}
