<?php
namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class RecetteSeeder extends Seeder
{
    public function run()
    {
        DB::table('recettes')->insert([
            ['id_recette' => 1, 'name' => 'Salade de tomates', 'desc' => 'Une délicieuse salade fraîche.', 'id_user' => 2, 'image' => 'https://picsum.photos/seed/1/600/400', 'id_origine' => 7, 'season' => 3],
            ['id_recette' => 2, 'name' => 'Poulet au beurre', 'desc' => 'Recette traditionnelle indienne.', 'id_user' => 1, 'image' => 'https://picsum.photos/seed/2/600/400', 'id_origine' => 22, 'season' => 4],
            ['id_recette' => 3, 'name' => 'Pizza maison', 'desc' => 'Une pizza garnie de légumes et viande.', 'id_user' => 1, 'image' => 'https://picsum.photos/seed/3/600/400', 'id_origine' => 40, 'season' => 2],
            ['id_recette' => 4, 'name' => 'Tarte salée', 'desc' => 'Une tarte rustique à base de pâte maison.', 'id_user' => 2, 'image' => 'https://picsum.photos/seed/4/600/400', 'id_origine' => 12, 'season' => 1],
            ['id_recette' => 5, 'name' => 'Crêpes aux fruits', 'desc' => 'Des crêpes sucrées garnies de fruits frais.', 'id_user' => 1, 'image' => 'https://picsum.photos/seed/5/600/400', 'id_origine' => 49, 'season' => 3],
            ['id_recette' => 6, 'name' => 'Curry de légumes', 'desc' => 'Un curry doux et parfumé aux épices indiennes.', 'id_user' => 2, 'image' => 'https://picsum.photos/seed/6/600/400', 'id_origine' => 1, 'season' => 4],
            ['id_recette' => 7, 'name' => 'Lasagnes végétariennes', 'desc' => 'Des lasagnes sans viande mais pleines de goûts.', 'id_user' => 1, 'image' => 'https://picsum.photos/seed/7/600/400', 'id_origine' => 27, 'season' => 2],
            ['id_recette' => 8, 'name' => 'Soupe à l\'oignon', 'desc' => 'Soupe traditionnelle française.', 'id_user' => 2, 'image' => 'https://picsum.photos/seed/8/600/400', 'id_origine' => 17, 'season' => 1],
            ['id_recette' => 9, 'name' => "Le pudding a l'arcenic", 'desc' => "Demain sur les bord du nil, que mangerons les crocodilles ? DES GAULOIS !!!", 'id_user' => 1, 'image' => 'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQSpK_2MB1KO5nxUFUEw6K3rzenD9zDI-gZeQ&s', 'id_origine' => 32, 'season' => 3],
            ['id_recette' => 10, 'name' => 'Quiche lorraine', 'desc' => 'Tarte salée aux lardons et fromage.', 'id_user' => 2, 'image' => 'https://picsum.photos/seed/10/600/400', 'id_origine' => 4, 'season' => 2],
            ['id_recette' => 11, 'name' => 'Pâtes carbonara', 'desc' => 'Pâtes à la sauce crémeuse au bacon.', 'id_user' => 1, 'image' => 'https://picsum.photos/seed/11/600/400', 'id_origine' => 23, 'season' => 4],
            ['id_recette' => 12, 'name' => 'Boeuf bourguignon', 'desc' => 'Ragoût de boeuf mijoté au vin rouge.', 'id_user' => 2, 'image' => 'https://picsum.photos/seed/12/600/400', 'id_origine' => 42, 'season' => 1],
            ['id_recette' => 13, 'name' => 'Tacos mexicain', 'desc' => 'Tacos garnis de viande et légumes.', 'id_user' => 1, 'image' => 'https://picsum.photos/seed/13/600/400', 'id_origine' => 10, 'season' => 2],
            ['id_recette' => 14, 'name' => 'Chili con carne', 'desc' => 'Plat épicé à base de viande et haricots.', 'id_user' => 2, 'image' => 'https://picsum.photos/seed/14/600/400', 'id_origine' => 38, 'season' => 4],
            ['id_recette' => 15, 'name' => 'Paella', 'desc' => 'Plat espagnol à base de riz et fruits de mer.', 'id_user' => 1, 'image' => 'https://picsum.photos/seed/15/600/400', 'id_origine' => 15, 'season' => 3],
            ['id_recette' => 16, 'name' => 'Gaufres', 'desc' => 'Dessert croustillant et moelleux.', 'id_user' => 2, 'image' => 'https://picsum.photos/seed/16/600/400', 'id_origine' => 2, 'season' => 2],
            ['id_recette' => 17, 'name' => 'Boulettes de viande', 'desc' => 'Boulettes savoureuses avec sauce tomate.', 'id_user' => 1, 'image' => 'https://picsum.photos/seed/17/600/400', 'id_origine' => 46, 'season' => 4],
            ['id_recette' => 18, 'name' => 'Ratatouille', 'desc' => 'Mélange de légumes mijotés.', 'id_user' => 2, 'image' => 'https://picsum.photos/seed/18/600/400', 'id_origine' => 3, 'season' => 3],
            ['id_recette' => 19, 'name' => 'Clafoutis aux cerises', 'desc' => 'Dessert à base de cerises et pâte légère.', 'id_user' => 1, 'image' => 'https://picsum.photos/seed/19/600/400', 'id_origine' => 39, 'season' => 3],
            ['id_recette' => 20, 'name' => 'Mousse au chocolat', 'desc' => 'Dessert léger au chocolat.', 'id_user' => 2, 'image' => 'https://picsum.photos/seed/20/600/400', 'id_origine' => 25, 'season' => 1],
            ['id_recette' => 21, 'name' => 'Gratin dauphinois', 'desc' => 'Pommes de terre gratinées à la crème.', 'id_user' => 1, 'image' => 'https://picsum.photos/seed/21/600/400', 'id_origine' => 8, 'season' => 4],
            ['id_recette' => 22, 'name' => 'Soupe miso', 'desc' => 'Soupe japonaise au tofu et algues.', 'id_user' => 2, 'image' => 'https://picsum.photos/seed/22/600/400', 'id_origine' => 13, 'season' => 1],
            ['id_recette' => 23, 'name' => 'Tiramisu', 'desc' => 'Dessert italien au café et mascarpone.', 'id_user' => 1, 'image' => 'https://picsum.photos/seed/23/600/400', 'id_origine' => 5, 'season' => 2],
            ['id_recette' => 24, 'name' => 'Biryani', 'desc' => 'Riz indien aux épices et viande.', 'id_user' => 2, 'image' => 'https://picsum.photos/seed/24/600/400', 'id_origine' => 21, 'season' => 4],
            ['id_recette' => 25, 'name' => 'Tarte tatin', 'desc' => 'Tarte aux pommes caramélisées à l\'envers.', 'id_user' => 1, 'image' => 'https://picsum.photos/seed/25/600/400', 'id_origine' => 9, 'season' => 3],
            ['id_recette' => 26, 'name' => 'Hamburger maison', 'desc' => 'Burger avec pain et steak faits maison.', 'id_user' => 2, 'image' => 'https://picsum.photos/seed/26/600/400', 'id_origine' => 31, 'season' => 2],
            ['id_recette' => 27, 'name' => 'Sushi', 'desc' => 'Rouleaux de riz et poisson cru japonais.', 'id_user' => 1, 'image' => 'https://picsum.photos/seed/27/600/400', 'id_origine' => 19, 'season' => 4],
            ['id_recette' => 28, 'name' => 'Falafel', 'desc' => 'Boulettes végétariennes de pois chiches.', 'id_user' => 2, 'image' => 'https://picsum.photos/seed/28/600/400', 'id_origine' => 16, 'season' => 3],
            ['id_recette' => 29, 'name' => 'Couscous', 'desc' => 'Semoule aux légumes et viande.', 'id_user' => 1, 'image' => 'https://picsum.photos/seed/29/600/400', 'id_origine' => 11, 'season' => 2],
            ['id_recette' => 30, 'name' => 'Gaspacho', 'desc' => 'Soupe froide de légumes d\'été.', 'id_user' => 2, 'image' => 'https://picsum.photos/seed/30/600/400', 'id_origine' => 35, 'season' => 3],
            ['id_recette' => 31, 'name' => 'Œufs cocotte', 'desc' => 'Œufs cuits au four en ramequin.', 'id_user' => 1, 'image' => 'https://picsum.photos/seed/31/600/400', 'id_origine' => 6, 'season' => 1],
            ['id_recette' => 32, 'name' => 'Soupe de potiron', 'desc' => 'Velouté doux de potiron.', 'id_user' => 2, 'image' => 'https://picsum.photos/seed/32/600/400', 'id_origine' => 18, 'season' => 1],
            ['id_recette' => 33, 'name' => 'Côte de boeuf grillée', 'desc' => 'Viande grillée servie saignante.', 'id_user' => 1, 'image' => 'https://picsum.photos/seed/33/600/400', 'id_origine' => 24, 'season' => 4],
            ['id_recette' => 34, 'name' => 'Fondue savoyarde', 'desc' => 'Fromage fondu à partager.', 'id_user' => 2, 'image' => 'https://picsum.photos/seed/34/600/400', 'id_origine' => 26, 'season' => 1],
            ['id_recette' => 35, 'name' => 'Fajitas', 'desc' => 'Galettes mexicaines garnies.', 'id_user' => 1, 'image' => 'https://picsum.photos/seed/35/600/400', 'id_origine' => 29, 'season' => 2],
            ['id_recette' => 36, 'name' => 'Poisson grillé', 'desc' => 'Filet de poisson grillé aux herbes.', 'id_user' => 2, 'image' => 'https://picsum.photos/seed/36/600/400', 'id_origine' => 33, 'season' => 3],
            ['id_recette' => 37, 'name' => 'Tajine', 'desc' => 'Plat marocain mijoté.', 'id_user' => 1, 'image' => 'https://picsum.photos/seed/37/600/400', 'id_origine' => 20, 'season' => 4],
            ['id_recette' => 38, 'name' => 'Spaghetti bolognaise', 'desc' => 'Pâtes à la sauce tomate et viande.', 'id_user' => 2, 'image' => 'https://picsum.photos/seed/38/600/400', 'id_origine' => 28, 'season' => 2],
            ['id_recette' => 39, 'name' => 'Salade de pâtes', 'desc' => 'Pâtes froides avec légumes et vinaigrette.', 'id_user' => 1, 'image' => 'https://picsum.photos/seed/39/600/400', 'id_origine' => 30, 'season' => 3],
            ['id_recette' => 40, 'name' => 'Glace maison', 'desc' => 'Crème glacée faite à la main.', 'id_user' => 2, 'image' => 'https://picsum.photos/seed/40/600/400', 'id_origine' => 14, 'season' => 3],
        ]);
    }
}
