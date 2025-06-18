<?php
namespace Database\Seeders;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class RegimeSeeder extends Seeder
{
    public function run()
    {
        DB::table('Regime')->insert([
            [
                'name' => 'Vegan',
                'description' => 'Excludes all animal products, focusing on plants only.',
                'image' => 'vegan.png',
            ],
            [
                'name' => 'Vegetarian',
                'description' => 'Excludes meat but may include dairy and eggs.',
                'image' => 'vegetarian.png',
            ],
            [
                'name' => 'Gluten-Free',
                'description' => 'Avoids gluten-containing grains like wheat, barley, and rye.',
                'image' => 'gluten_free.png',
            ],
            [
                'name' => 'Keto',
                'description' => 'High-fat, low-carb diet to induce ketosis.',
                'image' => 'keto.png',
            ],
            [
                'name' => 'Paleo',
                'description' => 'Based on foods presumed to be eaten by early humans.',
                'image' => 'paleo.png',
            ],
        ]);
    }
}
