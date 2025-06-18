<?php
namespace Database\Seeders;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CommentSeeder extends Seeder
{
    public function run()
    {
        DB::table('comment')->insert([
            ['content' => 'Très bon!', 'id_recettes' => 1, 'id_user' => 2],
            ['content' => 'Recette un peu salée.', 'id_recettes' => 2, 'id_user' => 3],
        ]);
    }
}
