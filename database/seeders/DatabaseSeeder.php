<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

class DatabaseSeeder extends Seeder
{
    public function run()
    {
        // Roles
        DB::table('roles')->insert([
            ['id_role' => 1, 'name' => 'admin'],
            ['id_role' => 2, 'name' => 'user'],
            ['id_role' => 3, 'name' => 'moderator'],
        ]);

        // Users
        DB::table('users')->insert([
            [
                'id_user' => 1,
                'username' => 'alice',
                'password' => bcrypt('password123'),
                'id_roles' => 1,
            ],
            [
                'id_user' => 2,
                'username' => 'bob',
                'password' => bcrypt('password123'),
                'id_roles' => 2,
            ],
            [
                'id_user' => 3,
                'username' => 'carol',
                'password' => bcrypt('password123'),
                'id_roles' => 3,
            ],
        ]);

        // Units
        DB::table('units')->insert([
            ['id_unit' => 1, 'unit' => 'g'],
            ['id_unit' => 2, 'unit' => 'L'],
            ['id_unit' => 3, 'unit' => 'càs'], // cuillère à soupe
        ]);

        // Ingredients
        DB::table('ingredients')->insert([
            ['id_ingredient' => 1, 'name' => 'Farine', 'type' => 'Féculent', 'Cal' => 364, 'Lip' => 1, 'Prot' => 10, 'Glu' => 76, 'Mac_nut' => 0, 'Mic_nut' => 0],
            ['id_ingredient' => 2, 'name' => 'Sucre', 'type' => 'Produit sucrée', 'Cal' => 387, 'Lip' => 0, 'Prot' => 0, 'Glu' => 100, 'Mac_nut' => 0, 'Mic_nut' => 0],
            ['id_ingredient' => 3, 'name' => 'Beurre', 'type' => 'Matiere grasse', 'Cal' => 717, 'Lip' => 81, 'Prot' => 1, 'Glu' => 0, 'Mac_nut' => 0, 'Mic_nut' => 0],
            ['id_ingredient' => 4, 'name' => 'Oeufs', 'type' => 'Oeuf', 'Cal' => 155, 'Lip' => 11, 'Prot' => 13, 'Glu' => 1, 'Mac_nut' => 0, 'Mic_nut' => 0],
        ]);

        // Recettes
        DB::table('recettes')->insert([
            [
                'id_recette' => 1,
                'name' => 'Gâteau au beurre',
                'desc' => 'Un gâteau simple et délicieux.',
                'id_user' => 1,
            ],
            [
                'id_recette' => 2,
                'name' => 'Pancakes',
                'desc' => 'Pancakes moelleux pour le petit déjeuner.',
                'id_user' => 2,
            ],
        ]);

        // fk_recettes_ingredients (pivot)
        DB::table('fk_recettes_ingredients')->insert([
            ['id' => 1, 'id_recette' => 1, 'id_ingredient' => 1, 'quantity' => 200, 'id_unit' => 1],
            ['id' => 2, 'id_recette' => 1, 'id_ingredient' => 3, 'quantity' => 100, 'id_unit' => 1],
            ['id' => 3, 'id_recette' => 1, 'id_ingredient' => 4, 'quantity' => 3, 'id_unit' => null],
            ['id' => 4, 'id_recette' => 2, 'id_ingredient' => 1, 'quantity' => 150, 'id_unit' => 1],
            ['id' => 5, 'id_recette' => 2, 'id_ingredient' => 2, 'quantity' => 50, 'id_unit' => 1],
            ['id' => 6, 'id_recette' => 2, 'id_ingredient' => 4, 'quantity' => 2, 'id_unit' => null],
        ]);

        // Steps
        DB::table('steps')->insert([
            ['id_step' => 1, 'name' => 'Préparation du gâteau', 'content' => 'Mélanger la farine et le beurre.', 'id_recette' => 1],
            ['id_step' => 2, 'name' => 'Ajout des oeufs', 'content' => 'Ajouter les oeufs et bien mélanger.', 'id_recette' => 1],
            ['id_step' => 3, 'name' => 'Préparation des pancakes', 'content' => 'Mélanger tous les ingrédients.', 'id_recette' => 2],
            ['id_step' => 4, 'name' => 'Cuisson', 'content' => 'Cuire à la poêle jusqu’à dorure.', 'id_recette' => 2],
        ]);

        // Tags
        DB::table('tags')->insert([
            ['id_tag' => 1, 'name' => 'Végétarien'],
            ['id_tag' => 2, 'name' => 'Rapide'],
            ['id_tag' => 3, 'name' => 'Facile'],
        ]);

        // Regime
        DB::table('Regime')->insert([
            ['id_regime' => 1, 'name' => 'Vegan'],
            ['id_regime' => 2, 'name' => 'Sans gluten'],
        ]);

        // fk_recettes_tags (pivot)
        DB::table('fk_recettes_tags')->insert([
            ['id' => 1, 'id_recette' => 1, 'id_tag' => 3],
            ['id' => 2, 'id_recette' => 2, 'id_tag' => 2],
            ['id' => 3, 'id_recette' => 2, 'id_tag' => 3],
        ]);

        // fk_ingredient_regime (pivot)
        DB::table('fk_ingredient_regime')->insert([
            ['id' => 1, 'id_ingredient' => 1, 'id_regime' => 2], // farine sans gluten ? (exemple)
            ['id' => 2, 'id_ingredient' => 2, 'id_regime' => 1], // sucre vegan
        ]);

        // Comments
        DB::table('comment')->insert([
            ['id_comment' => 1, 'content' => 'Très bon gâteau, merci !', 'id_recettes' => 1, 'id_user' => 2],
            ['id_comment' => 2, 'content' => 'J’adore les pancakes !', 'id_recettes' => 2, 'id_user' => 1],
        ]);

        // Ratings
        DB::table('rating')->insert([
            ['id_rate' => 1, 'id_user' => 2, 'id_recette' => 1, 'rate' => 5],
            ['id_rate' => 2, 'id_user' => 1, 'id_recette' => 2, 'rate' => 4],
        ]);

        // Favorites
        DB::table('favorites')->insert([
            ['id_favorites' => 1, 'id_user' => 1, 'id_recette' => 2],
            ['id_favorites' => 2, 'id_user' => 2, 'id_recette' => 1],
        ]);
    }
}
