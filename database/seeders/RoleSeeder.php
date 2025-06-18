<?php
namespace Database\Seeders;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class RoleSeeder extends Seeder
{
    public function run()
    {
        DB::table('roles')->insert([
            ['id_role' => 1, 'name' => 'Admin'],
            ['id_role' => 2, 'name' => 'User'],
            ['id_role' => 3, 'name' => 'Moderator'],
        ]);
    }
}
