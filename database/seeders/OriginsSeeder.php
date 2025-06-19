<?php
namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class OriginsSeeder extends Seeder
{
    public function run()
    {
        DB::table('origins')->insert([
            ['name' => 'Française', 'image' => 'france.jpg'],
            ['name' => 'Italienne', 'image' => 'italie.jpg'],
            ['name' => 'Japonaise', 'image' => 'japon.jpg'],
            ['name' => 'Mexicaine', 'image' => 'mexique.jpg'],
            ['name' => 'Indienne', 'image' => 'inde.jpg'],
            ['name' => 'Chinoise', 'image' => 'chine.jpg'],
            ['name' => 'Marocaine', 'image' => 'maroc.jpg'],
            ['name' => 'Libanaise', 'image' => 'liban.jpg'],
            ['name' => 'Thaïlandaise', 'image' => null],
            ['name' => 'Espagnole', 'image' => 'espagne.jpg'],
            ['name' => 'Vietnamienne', 'image' => null],
            ['name' => 'Grecque', 'image' => 'grece.jpg'],
            ['name' => 'Turque', 'image' => null],
            ['name' => 'Brésilienne', 'image' => 'bresil.jpg'],
            ['name' => 'Coréenne', 'image' => 'coree.jpg'],
            ['name' => 'Russe', 'image' => null],
            ['name' => 'Allemande', 'image' => 'allemagne.jpg'],
            ['name' => 'Portugaise', 'image' => null],
            ['name' => 'Argentine', 'image' => 'argentine.jpg'],
            ['name' => 'Éthiopienne', 'image' => null],
            ['name' => 'Cubaine', 'image' => 'cuba.jpg'],
            ['name' => 'Égyptienne', 'image' => null],
            ['name' => 'Iranienne', 'image' => 'iran.jpg'],
            ['name' => 'Peruvienne', 'image' => null],
            ['name' => 'Tunisienne', 'image' => 'tunisie.jpg'],
            ['name' => 'Canadienne', 'image' => null],
            ['name' => 'Américaine', 'image' => 'usa.jpg'],
            ['name' => 'Nigériane', 'image' => null],
            ['name' => 'Sénégalaise', 'image' => 'senegal.jpg'],
            ['name' => 'Malaisienne', 'image' => null],
            ['name' => 'Indonésienne', 'image' => null],
            ['name' => 'Anglaise', 'image' => 'angleterre.jpg'],
            ['name' => 'Écossaise', 'image' => null],
            ['name' => 'Irlandaise', 'image' => null],
            ['name' => 'Suédoise', 'image' => 'suede.jpg'],
            ['name' => 'Norvégienne', 'image' => null],
            ['name' => 'Finlandaise', 'image' => null],
            ['name' => 'Polonaise', 'image' => 'pologne.jpg'],
            ['name' => 'Hongroise', 'image' => null],
            ['name' => 'Autrichienne', 'image' => 'autriche.jpg'],
            ['name' => 'Belge', 'image' => null],
            ['name' => 'Hollandaise', 'image' => null],
            ['name' => 'Tchèque', 'image' => 'tchequie.jpg'],
            ['name' => 'Slovaque', 'image' => null],
            ['name' => 'Croate', 'image' => null],
            ['name' => 'Serbe', 'image' => 'serbie.jpg'],
            ['name' => 'Roumaine', 'image' => null],
            ['name' => 'Ukrainienne', 'image' => 'ukraine.jpg'],
            ['name' => 'Sud-africaine', 'image' => null],
        ]);
    }
}
