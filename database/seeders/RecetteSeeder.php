<?php
namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class RecetteSeeder extends Seeder
{
    public function run()
    {
        DB::table('recettes')->insert([
            ['id_recette' => 1, 'name' => 'Salade de tomates', 'desc' => 'Une délicieuse salade fraîche.', 'id_user' => 2, 'image' => 'https://picsum.photos/seed/1/600/400', 'id_origine' => 7],
            ['id_recette' => 2, 'name' => 'Poulet au beurre', 'desc' => 'Recette traditionnelle indienne.', 'id_user' => 1, 'image' => 'https://picsum.photos/seed/2/600/400', 'id_origine' => 22],
            ['id_recette' => 3, 'name' => 'Pizza maison', 'desc' => 'Une pizza garnie de légumes et viande.', 'id_user' => 1, 'image' => 'https://picsum.photos/seed/3/600/400', 'id_origine' => 40],
            ['id_recette' => 4, 'name' => 'Tarte salée', 'desc' => 'Une tarte rustique à base de pâte maison.', 'id_user' => 2, 'image' => 'https://picsum.photos/seed/4/600/400', 'id_origine' => 12],
            ['id_recette' => 5, 'name' => 'Crêpes aux fruits', 'desc' => 'Des crêpes sucrées garnies de fruits frais.', 'id_user' => 1, 'image' => 'https://picsum.photos/seed/5/600/400', 'id_origine' => 49], // 147 - 98 = 49 hors borne
            ['id_recette' => 6, 'name' => 'Curry de légumes', 'desc' => 'Un curry doux et parfumé aux épices indiennes.', 'id_user' => 2, 'image' => 'https://picsum.photos/seed/6/600/400', 'id_origine' => 1],
            ['id_recette' => 7, 'name' => 'Lasagnes végétariennes', 'desc' => 'Des lasagnes sans viande mais pleines de goûts.', 'id_user' => 1, 'image' => 'https://picsum.photos/seed/7/600/400', 'id_origine' => 27],
            ['id_recette' => 8, 'name' => 'Soupe à l\'oignon', 'desc' => 'Soupe traditionnelle française.', 'id_user' => 2, 'image' => 'https://picsum.photos/seed/8/600/400', 'id_origine' => 17],
            ['id_recette' => 9, 'name' => 'Riz cantonais', 'desc' => 'Plat chinois de riz sauté aux légumes.', 'id_user' => 1, 'image' => 'https://picsum.photos/seed/9/600/400', 'id_origine' => 32],
            ['id_recette' => 10, 'name' => 'Quiche lorraine', 'desc' => 'Tarte salée aux lardons et fromage.', 'id_user' => 2, 'image' => 'https://picsum.photos/seed/10/600/400', 'id_origine' => 4],
            ['id_recette' => 11, 'name' => 'Pâtes carbonara', 'desc' => 'Pâtes à la sauce crémeuse au bacon.', 'id_user' => 1, 'image' => 'https://picsum.photos/seed/11/600/400', 'id_origine' => 23],
            ['id_recette' => 12, 'name' => 'Boeuf bourguignon', 'desc' => 'Ragoût de boeuf mijoté au vin rouge.', 'id_user' => 2, 'image' => 'https://picsum.photos/seed/12/600/400', 'id_origine' => 42],
            ['id_recette' => 13, 'name' => 'Tacos mexicain', 'desc' => 'Tacos garnis de viande et légumes.', 'id_user' => 1, 'image' => 'https://picsum.photos/seed/13/600/400', 'id_origine' => 10],
            ['id_recette' => 14, 'name' => 'Chili con carne', 'desc' => 'Plat épicé à base de viande et haricots.', 'id_user' => 2, 'image' => 'https://picsum.photos/seed/14/600/400', 'id_origine' => 38],
            ['id_recette' => 15, 'name' => 'Paella', 'desc' => 'Plat espagnol à base de riz et fruits de mer.', 'id_user' => 1, 'image' => 'https://picsum.photos/seed/15/600/400', 'id_origine' => 15],
            ['id_recette' => 16, 'name' => 'Gaufres', 'desc' => 'Dessert croustillant et moelleux.', 'id_user' => 2, 'image' => 'https://picsum.photos/seed/16/600/400', 'id_origine' => 2],
            ['id_recette' => 17, 'name' => 'Boulettes de viande', 'desc' => 'Boulettes savoureuses avec sauce tomate.', 'id_user' => 1, 'image' => 'https://picsum.photos/seed/17/600/400', 'id_origine' => 46],
            ['id_recette' => 18, 'name' => 'Ratatouille', 'desc' => 'Mélange de légumes mijotés.', 'id_user' => 2, 'image' => 'https://picsum.photos/seed/18/600/400', 'id_origine' => 3],
            ['id_recette' => 19, 'name' => 'Clafoutis aux cerises', 'desc' => 'Dessert à base de cerises et pâte légère.', 'id_user' => 1, 'image' => 'https://picsum.photos/seed/19/600/400', 'id_origine' => 39],
            ['id_recette' => 20, 'name' => 'Mousse au chocolat', 'desc' => 'Dessert léger au chocolat.', 'id_user' => 2, 'image' => 'https://picsum.photos/seed/20/600/400', 'id_origine' => 25],
            ['id_recette' => 21, 'name' => 'Fondue savoyarde', 'desc' => 'Fromage fondu avec pain.', 'id_user' => 1, 'image' => 'https://picsum.photos/seed/21/600/400', 'id_origine' => 18],
            ['id_recette' => 22, 'name' => 'Salade César', 'desc' => 'Salade verte avec poulet et parmesan.', 'id_user' => 2, 'image' => 'https://picsum.photos/seed/22/600/400', 'id_origine' => 13],
            ['id_recette' => 23, 'name' => 'Brownies', 'desc' => 'Gâteau au chocolat fondant.', 'id_user' => 1, 'image' => 'https://picsum.photos/seed/23/600/400', 'id_origine' => 29],
            ['id_recette' => 24, 'name' => 'Poulet rôti', 'desc' => 'Poulet croustillant au four.', 'id_user' => 2, 'image' => 'https://picsum.photos/seed/24/600/400', 'id_origine' => 11],
            ['id_recette' => 25, 'name' => 'Soufflé au fromage', 'desc' => 'Plat aérien au fromage.', 'id_user' => 1, 'image' => 'https://picsum.photos/seed/25/600/400', 'id_origine' => 36],
            ['id_recette' => 26, 'name' => 'Baguette tradition', 'desc' => 'Pain français croustillant.', 'id_user' => 2, 'image' => 'https://picsum.photos/seed/26/600/400', 'id_origine' => 6],
            ['id_recette' => 27, 'name' => 'Falafel', 'desc' => 'Boulettes de pois chiches frites.', 'id_user' => 1, 'image' => 'https://picsum.photos/seed/27/600/400', 'id_origine' => 20],
            ['id_recette' => 28, 'name' => 'Tiramisu', 'desc' => 'Dessert italien au café.', 'id_user' => 2, 'image' => 'https://picsum.photos/seed/28/600/400', 'id_origine' => 43],
            ['id_recette' => 29, 'name' => 'Gnocchis', 'desc' => 'Pâtes italiennes à base de pommes de terre.', 'id_user' => 1, 'image' => 'https://picsum.photos/seed/29/600/400', 'id_origine' => 21],
            ['id_recette' => 30, 'name' => 'Soupe miso', 'desc' => 'Soupe japonaise traditionnelle.', 'id_user' => 2, 'image' => 'https://picsum.photos/seed/30/600/400', 'id_origine' => 14],
            ['id_recette' => 31, 'name' => 'Bagels', 'desc' => 'Pains en anneau moelleux.', 'id_user' => 1, 'image' => 'https://picsum.photos/seed/31/600/400', 'id_origine' => 24],
            ['id_recette' => 32, 'name' => 'Gratin dauphinois', 'desc' => 'Pommes de terre gratinées à la crème.', 'id_user' => 2, 'image' => 'https://picsum.photos/seed/32/600/400', 'id_origine' => 30],
            ['id_recette' => 33, 'name' => 'Salade niçoise', 'desc' => 'Salade provençale avec thon.', 'id_user' => 1, 'image' => 'https://picsum.photos/seed/33/600/400', 'id_origine' => 19],
            ['id_recette' => 34, 'name' => 'Pain au chocolat', 'desc' => 'Pâtisserie feuilletée au chocolat.', 'id_user' => 2, 'image' => 'https://picsum.photos/seed/34/600/400', 'id_origine' => 34],
            ['id_recette' => 35, 'name' => 'Omelette', 'desc' => 'Oeufs battus cuits en poêle.', 'id_user' => 1, 'image' => 'https://picsum.photos/seed/35/600/400', 'id_origine' => 31],
            ['id_recette' => 36, 'name' => 'Quinoa aux légumes', 'desc' => 'Plat sain et équilibré.', 'id_user' => 2, 'image' => 'https://picsum.photos/seed/36/600/400', 'id_origine' => 9],
            ['id_recette' => 37, 'name' => 'Poulet tikka masala', 'desc' => 'Plat indien épicé.', 'id_user' => 1, 'image' => 'https://picsum.photos/seed/37/600/400', 'id_origine' => 16],
            ['id_recette' => 38, 'name' => 'Crème brûlée', 'desc' => 'Dessert à la crème caramélisée.', 'id_user' => 2, 'image' => 'https://picsum.photos/seed/38/600/400', 'id_origine' => 8],
            ['id_recette' => 39, 'name' => 'Salade de quinoa', 'desc' => 'Salade fraîche et saine.', 'id_user' => 1, 'image' => 'https://picsum.photos/seed/39/600/400', 'id_origine' => 28],
            ['id_recette' => 40, 'name' => 'Tarte aux pommes', 'desc' => 'Tarte sucrée aux pommes.', 'id_user' => 2, 'image' => 'https://picsum.photos/seed/40/600/400', 'id_origine' => 5],
        ]);
    }
}
