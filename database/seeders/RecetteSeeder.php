<?php
namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class RecetteSeeder extends Seeder
{
    public function run()
    {
        DB::table('recettes')->insert([
            [
                'id_recette' => 1,
                'name' => 'Salade de tomates',
                'desc' => 'Une délicieuse salade fraîche.',
                'id_user' => 2,
                'image' => 'salade_tomates.jpg',
            ],
            [
                'id_recette' => 2,
                'name' => 'Poulet au beurre',
                'desc' => 'Recette traditionnelle indienne.',
                'id_user' => 1,
                'image' => 'poulet_beurre.jpg',
            ],
            [
                'id_recette' => 3,
                'name' => 'Pizza maison',
                'desc' => 'Une pizza garnie de légumes et viande.',
                'id_user' => 1,
                'image' => 'pizza.jpg',
            ],
            [
                'id_recette' => 4,
                'name' => 'Tarte salée',
                'desc' => 'Une tarte rustique à base de pâte maison.',
                'id_user' => 2,
                'image' => 'tarte.jpg',
            ],
            [
                'id_recette' => 5,
                'name' => 'Crêpes aux fruits',
                'desc' => 'Des crêpes sucrées garnies de fruits frais.',
                'id_user' => 1,
                'image' => 'crepes.jpg',
            ],
        ]);
    }
}
