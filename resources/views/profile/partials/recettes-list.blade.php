
@foreach ($recettes as $recette)
    <x-recipes-card :recette="$recette" />
@endforeach
