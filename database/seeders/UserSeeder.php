<?php
namespace Database\Seeders;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    public function run()
    {
        DB::table('users')->insert([
            ['username' => 'alice', 'password' => Hash::make('password1'), 'id_roles' => 1],
            ['username' => 'bob', 'password' => Hash::make('password2'), 'id_roles' => 2],
            ['username' => 'charlie', 'password' => Hash::make('password3'), 'id_roles' => 3],
        ]);
    }
}
