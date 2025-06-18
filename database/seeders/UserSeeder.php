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
            ['username' => 'david', 'password' => Hash::make('password4'), 'id_roles' => 2],
            ['username' => 'emily', 'password' => Hash::make('password5'), 'id_roles' => 1],
            ['username' => 'frank', 'password' => Hash::make('password6'), 'id_roles' => 3],
            ['username' => 'grace', 'password' => Hash::make('password7'), 'id_roles' => 1],
            ['username' => 'henry', 'password' => Hash::make('password8'), 'id_roles' => 2],
            ['username' => 'isabel', 'password' => Hash::make('password9'), 'id_roles' => 3],
            ['username' => 'jack', 'password' => Hash::make('password10'), 'id_roles' => 1],

            ['username' => 'kate', 'password' => Hash::make('password11'), 'id_roles' => 2],
            ['username' => 'leo', 'password' => Hash::make('password12'), 'id_roles' => 3],
            ['username' => 'mia', 'password' => Hash::make('password13'), 'id_roles' => 1],
            ['username' => 'nick', 'password' => Hash::make('password14'), 'id_roles' => 2],
            ['username' => 'olivia', 'password' => Hash::make('password15'), 'id_roles' => 3],
            ['username' => 'paul', 'password' => Hash::make('password16'), 'id_roles' => 1],
            ['username' => 'quinn', 'password' => Hash::make('password17'), 'id_roles' => 2],
            ['username' => 'rachel', 'password' => Hash::make('password18'), 'id_roles' => 3],
            ['username' => 'steve', 'password' => Hash::make('password19'), 'id_roles' => 1],
            ['username' => 'tina', 'password' => Hash::make('password20'), 'id_roles' => 2],

            ['username' => 'ursula', 'password' => Hash::make('password21'), 'id_roles' => 3],
            ['username' => 'victor', 'password' => Hash::make('password22'), 'id_roles' => 1],
            ['username' => 'wendy', 'password' => Hash::make('password23'), 'id_roles' => 2],
            ['username' => 'xander', 'password' => Hash::make('password24'), 'id_roles' => 3],
            ['username' => 'yara', 'password' => Hash::make('password25'), 'id_roles' => 1],
            ['username' => 'zack', 'password' => Hash::make('password26'), 'id_roles' => 2],
            ['username' => 'amy', 'password' => Hash::make('password27'), 'id_roles' => 3],
            ['username' => 'brian', 'password' => Hash::make('password28'), 'id_roles' => 1],
            ['username' => 'cara', 'password' => Hash::make('password29'), 'id_roles' => 2],
            ['username' => 'dan', 'password' => Hash::make('password30'), 'id_roles' => 3],

            ['username' => 'ella', 'password' => Hash::make('password31'), 'id_roles' => 1],
            ['username' => 'fred', 'password' => Hash::make('password32'), 'id_roles' => 2],
            ['username' => 'gina', 'password' => Hash::make('password33'), 'id_roles' => 3],
            ['username' => 'harry', 'password' => Hash::make('password34'), 'id_roles' => 1],
            ['username' => 'ivy', 'password' => Hash::make('password35'), 'id_roles' => 2],
            ['username' => 'jon', 'password' => Hash::make('password36'), 'id_roles' => 3],
            ['username' => 'kelly', 'password' => Hash::make('password37'), 'id_roles' => 1],
            ['username' => 'luke', 'password' => Hash::make('password38'), 'id_roles' => 2],
            ['username' => 'maya', 'password' => Hash::make('password39'), 'id_roles' => 3],
            ['username' => 'nate', 'password' => Hash::make('password40'), 'id_roles' => 1],

            ['username' => 'olga', 'password' => Hash::make('password41'), 'id_roles' => 2],
            ['username' => 'peter', 'password' => Hash::make('password42'), 'id_roles' => 3],
            ['username' => 'queen', 'password' => Hash::make('password43'), 'id_roles' => 1],
            ['username' => 'ryan', 'password' => Hash::make('password44'), 'id_roles' => 2],
            ['username' => 'sara', 'password' => Hash::make('password45'), 'id_roles' => 3],
            ['username' => 'tom', 'password' => Hash::make('password46'), 'id_roles' => 1],
            ['username' => 'uma', 'password' => Hash::make('password47'), 'id_roles' => 2],
            ['username' => 'vince', 'password' => Hash::make('password48'), 'id_roles' => 3],
            ['username' => 'will', 'password' => Hash::make('password49'), 'id_roles' => 1],
            ['username' => 'xena', 'password' => Hash::make('password50'), 'id_roles' => 2],
        ]);
    }
}
