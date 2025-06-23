<?php
namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class StepSeeder extends Seeder
{
    public function run()
    {
        $steps = [
            ['name' => 'Préparation des tomates', 'content' => 'Laver les tomates soigneusement et couper en tranches fines.', 'id_recette' => 1, 'image' => 'prep_tomates.jpg', 'video' => null],
            ['name' => 'Assaisonnement', 'content' => 'Ajouter du sel, du poivre et un filet d\'huile d\'olive.', 'id_recette' => 1, 'image' => null, 'video' => 'https://videos.example.com/assaisonnement.mp4'],
            ['name' => 'Repos', 'content' => 'Laisser reposer la salade au frais pendant 10 minutes.', 'id_recette' => 1, 'image' => 'repos_salade.jpg', 'video' => null],
            ['name' => 'Préparation du poulet', 'content' => 'Découper le poulet en morceaux moyens.', 'id_recette' => 2, 'image' => 'prep_poulet.jpg', 'video' => 'https://videos.example.com/prep_poulet.mp4'],
            ['name' => 'Marinade', 'content' => 'Faire mariner le poulet avec des épices pendant 30 minutes.', 'id_recette' => 2, 'image' => 'marinade_poulet.jpg', 'video' => null],
            ['name' => 'Cuisson du poulet', 'content' => 'Faire cuire le poulet dans une poêle chaude avec un peu de beurre.', 'id_recette' => 2, 'image' => 'cuisson_poulet.jpg', 'video' => 'https://videos.example.com/cuisson_poulet.mp4'],
            ['name' => 'Préparation du beurre', 'content' => 'Faire fondre le beurre doucement dans une casserole.', 'id_recette' => 2, 'image' => null, 'video' => null],
            ['name' => 'Assemblage', 'content' => 'Mélanger le poulet cuit avec le beurre fondu.', 'id_recette' => 2, 'image' => 'assemblage.jpg', 'video' => 'https://videos.example.com/assemblage.mp4'],
            ['name' => 'Cuisson des légumes', 'content' => 'Faire revenir les légumes dans une poêle.', 'id_recette' => 3, 'image' => 'cuisson_legumes.jpg', 'video' => null],
            ['name' => 'Assaisonnement des légumes', 'content' => 'Ajouter sel, poivre et herbes aromatiques.', 'id_recette' => 3, 'image' => null, 'video' => 'https://videos.example.com/assaisonnement_legumes.mp4'],
            ['name' => 'Préparation de la sauce', 'content' => 'Mélanger la crème fraîche avec des épices.', 'id_recette' => 3, 'image' => 'sauce.jpg', 'video' => null],
            ['name' => 'Mélange final', 'content' => 'Ajouter la sauce aux légumes et bien mélanger.', 'id_recette' => 3, 'image' => null, 'video' => null],
            ['name' => 'Préparation de la pâte', 'content' => 'Préparer la pâte à tarte selon la recette.', 'id_recette' => 4, 'image' => 'pate.jpg', 'video' => 'https://videos.example.com/prep_pate.mp4'],
            ['name' => 'Cuisson de la pâte', 'content' => 'Faire cuire la pâte à blanc au four pendant 10 minutes.', 'id_recette' => 4, 'image' => null, 'video' => null],
            ['name' => 'Préparation de la garniture', 'content' => 'Couper les ingrédients de la garniture en morceaux.', 'id_recette' => 4, 'image' => 'garniture.jpg', 'video' => 'https://videos.example.com/prep_garniture.mp4'],
            ['name' => 'Assemblage tarte', 'content' => 'Étaler la garniture sur la pâte précuite.', 'id_recette' => 4, 'image' => null, 'video' => null],
            ['name' => 'Cuisson finale', 'content' => 'Cuire la tarte au four pendant 30 minutes.', 'id_recette' => 4, 'image' => 'cuisson_tarte.jpg', 'video' => 'https://videos.example.com/cuisson_tarte.mp4'],
            ['name' => 'Préparation de la pâte à crêpe', 'content' => 'Mélanger la farine, les œufs et le lait.', 'id_recette' => 5, 'image' => 'pate_crepe.jpg', 'video' => null],
            ['name' => 'Repos de la pâte', 'content' => 'Laisser reposer la pâte 30 minutes au frais.', 'id_recette' => 5, 'image' => null, 'video' => null],
            ['name' => 'Cuisson des crêpes', 'content' => 'Faire cuire les crêpes dans une poêle chaude.', 'id_recette' => 5, 'image' => 'cuisson_crepes.jpg', 'video' => 'https://videos.example.com/cuisson_crepes.mp4'],
            ['name' => 'Préparation de la garniture', 'content' => 'Couper les fruits frais pour la garniture.', 'id_recette' => 5, 'image' => 'fruits.jpg', 'video' => null],
            ['name' => 'Montage des crêpes', 'content' => 'Garnir les crêpes avec les fruits et la crème.', 'id_recette' => 5, 'image' => null, 'video' => null],
            ['name' => 'Décoration', 'content' => 'Ajouter un peu de sucre glace et servir.', 'id_recette' => 5, 'image' => 'decoration.jpg', 'video' => 'https://videos.example.com/decoration.mp4'],
            ['name' => 'Cuisson du riz', 'content' => 'Faire cuire le riz selon les instructions.', 'id_recette' => 2, 'image' => 'cuisson_riz.jpg', 'video' => null],
            ['name' => 'Préparation des légumes', 'content' => 'Couper les légumes en petits morceaux.', 'id_recette' => 2, 'image' => null, 'video' => null],
            ['name' => 'Faire sauter les légumes', 'content' => 'Faire revenir les légumes dans de l\'huile chaude.', 'id_recette' => 2, 'image' => 'sauter_legumes.jpg', 'video' => 'https://videos.example.com/sauter_legumes.mp4'],
            ['name' => 'Ajouter le riz', 'content' => 'Incorporer le riz aux légumes sautés.', 'id_recette' => 2, 'image' => null, 'video' => null],
            ['name' => 'Assaisonner', 'content' => 'Ajouter sel, poivre et sauce soja.', 'id_recette' => 2, 'image' => 'assaisonnement.jpg', 'video' => null],
            ['name' => 'Repos', 'content' => 'Laisser reposer quelques minutes avant de servir.', 'id_recette' => 2, 'image' => null, 'video' => null],
            ['name' => 'Préparation de la pâte à pizza', 'content' => 'Mélanger la farine, levure et eau tiède.', 'id_recette' => 3, 'image' => 'pate_pizza.jpg', 'video' => 'https://videos.example.com/pate_pizza.mp4'],
            ['name' => 'Laisser lever', 'content' => 'Laisser la pâte lever pendant 1 heure.', 'id_recette' => 3, 'image' => null, 'video' => null],
            ['name' => 'Étaler la pâte', 'content' => 'Étaler la pâte sur une plaque de cuisson.', 'id_recette' => 3, 'image' => 'etaler_pate.jpg', 'video' => null],
            ['name' => 'Ajouter la sauce tomate', 'content' => 'Étaler la sauce tomate sur la pâte.', 'id_recette' => 3, 'image' => null, 'video' => null],
            ['name' => 'Ajouter les garnitures', 'content' => 'Disposer les légumes et la viande sur la pizza.', 'id_recette' => 3, 'image' => 'garniture_pizza.jpg', 'video' => 'https://videos.example.com/garniture_pizza.mp4'],
            ['name' => 'Cuisson de la pizza', 'content' => 'Cuire la pizza dans un four préchauffé.', 'id_recette' => 3, 'image' => 'cuisson_pizza.jpg', 'video' => null],
            ['name' => 'Préparation du dessert', 'content' => 'Préparer la pâte pour le dessert.', 'id_recette' => 4, 'image' => null, 'video' => null],
            ['name' => 'Cuisson du dessert', 'content' => 'Cuire le dessert selon la recette.', 'id_recette' => 4, 'image' => 'cuisson_dessert.jpg', 'video' => 'https://videos.example.com/cuisson_dessert.mp4'],
            ['name' => 'Dressage', 'content' => 'Dresser le plat avant de servir.', 'id_recette' => 4, 'image' => null, 'video' => null],
        ];

        DB::table('steps')->insert($steps);
    }
}
