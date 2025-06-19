<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    public function run()
    {
        $this->call([
            RoleSeeder::class,  
            OriginsSeeder::class,
            UserSeeder::class,
            UnitSeeder::class,
            IngredientSeeder::class,
            RegimeSeeder::class,
            RecetteSeeder::class,
            StepSeeder::class,
            CommentSeeder::class,
            RatingSeeder::class,
            FavoriteSeeder::class,
            TagSeeder::class,
            FkRecetteTagSeeder::class,
            FkIngredientRegimeSeeder::class,
            FkRecetteIngredientSeeder::class,
        ]);
    }
}
