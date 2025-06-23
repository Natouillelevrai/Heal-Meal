<?php

namespace Database\Seeders;

use Illuminate\Support\Facades\DB;
use Illuminate\Database\Seeder;
use Carbon\Carbon;

class AllergenesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('allergenes')->insert([
            ['id_allergenes' => 1, 'name' => 'Gluten', 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
            ['id_allergenes' => 2, 'name' => 'Lactose', 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
            ['id_allergenes' => 3, 'name' => 'Oeuf', 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
            ['id_allergenes' => 4, 'name' => 'Arachide', 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
            ['id_allergenes' => 5, 'name' => 'Fruits à coque', 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
            ['id_allergenes' => 6, 'name' => 'Soja', 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
            ['id_allergenes' => 7, 'name' => 'Poisson', 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
            ['id_allergenes' => 8, 'name' => 'Crustacés', 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
            ['id_allergenes' => 9, 'name' => 'Mollusques', 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
            ['id_allergenes' => 10, 'name' => 'Sésame', 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
            ['id_allergenes' => 11, 'name' => 'Moutarde', 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
            ['id_allergenes' => 12, 'name' => 'Céleri', 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
            ['id_allergenes' => 13, 'name' => 'Lupin', 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
            ['id_allergenes' => 14, 'name' => 'Sulfites', 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
            ['id_allergenes' => 15, 'name' => 'Blé', 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
            ['id_allergenes' => 16, 'name' => 'Orge', 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
            ['id_allergenes' => 17, 'name' => 'Seigle', 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
            ['id_allergenes' => 18, 'name' => 'Lait', 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
            ['id_allergenes' => 19, 'name' => 'Œufs de caille', 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
            ['id_allergenes' => 20, 'name' => 'Levure', 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
        ]);
    }
}
