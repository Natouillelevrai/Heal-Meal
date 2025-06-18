<?php
namespace Database\Seeders;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class IngredientSeeder extends Seeder
{
    public function run()
    {
        DB::table('ingredients')->insert([
            ['name' => 'Tomate', 'type' => 'Fruit et legume', 'Cal' => 18, 'Lip' => 0, 'Prot' => 1, 'Glu' => 3, 'Mac_nut' => 5, 'Mic_nut' => 2],
            ['name' => 'Poulet', 'type' => 'Viande', 'Cal' => 239, 'Lip' => 14, 'Prot' => 27, 'Glu' => 0, 'Mac_nut' => 10, 'Mic_nut' => 8],
            ['name' => 'Riz', 'type' => 'Féculent', 'Cal' => 130, 'Lip' => 0, 'Prot' => 2, 'Glu' => 28, 'Mac_nut' => 7, 'Mic_nut' => 4],
            ['name' => 'Beurre', 'type' => 'Matiere grasse', 'Cal' => 717, 'Lip' => 81, 'Prot' => 1, 'Glu' => 0, 'Mac_nut' => 0, 'Mic_nut' => 1],
            ['name' => 'Oeuf', 'type' => 'Oeuf', 'Cal' => 155, 'Lip' => 11, 'Prot' => 13, 'Glu' => 1, 'Mac_nut' => 5, 'Mic_nut' => 6],
        ]);
    }
}
