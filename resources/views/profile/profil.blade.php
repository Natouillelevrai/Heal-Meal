<x-app-layout :title="$title">
    <section class="flex justify-center items-center w-full min-w-[280px] max-w-[1000px]">
        <div
            class="flex flex-col items-center relative w-9/10 bg-[#B7E7EB] py-3 px-10 rounded-xl border border-2 border-white shadow shadow-gray-500">
            <div class="absolute top-0 right-1 text-2xl p-1">
                <i class="ri-edit-box-fill"></i>
            </div>
            <div class="flex flex-row justify-center">
                <div class="h-20 w-20 bg-amber-500 rounded-full">

                </div>
                <div>
                </div>
            </div>
            <strong>{{$user->username}}</strong>
            <p class="text-gray-600">{{$user->email}}</p>
            <div class="py-5 flex flex-row items-start justify-between bg-red-5OO w-full">
                <div class="h-24 font-bold flex flex-col justify-around items-center w-1/2">
                    <p class="underline text-center"> Note moyenne: </p>
                    <i class="ri-star-line"></i>
                    <p>4.8</p>
                </div>
                <div class="h-24 font-bold flex flex-col justify-around items-center text-center w-1/2">
                    <p class="underline">Recipes Validate :</p>
                    <i class="ri-list-check"></i>
                    <p>8</p>
                </div>
            </div>
        </div>
    </section>

    <section class="flex justify-center items-center py-5 w-full flex-col">

        <div id="buttonsList" class="w-full h-10 bg-[#B7E7EB] rounded-lg flex flex-row justify-around items-center">
            <button class="bg-white border-[#B7E7EB] border-2xl p-1 rounded">Publiques</button>
            <button class="bg-white border-[#B7E7EB] border-2xl p-1 rounded">Privées</button>
            <button class="bg-white border-[#B7E7EB] border-2xl p-1 rounded">Noté</button>
            <button class="bg-white border-[#B7E7EB] border-2xl p-1 rounded">Enregistrées</button>
        </div>

        <div id="recipesContainer" class="recipes w-full pt-3">
            <div id="recipesPublic" class="block">
                @foreach ($publicRecipes as $plu)
                    <x-recipes-card :favorites="$favorites" :recette="$plu"></x-recipes-card>
                @endforeach
            </div>

            <div id="recipesPrivate" class="hidden">
                @foreach ($privateRecipes as $priv)
                    <x-recipes-card :favorites="$favorites" :recette="$priv"></x-recipes-card>
                @endforeach
            </div>

            <div id="recipesRate" class="hidden">
                @foreach ($ratedRecipes as $rate)
                    <x-recipes-card :favorites="$favorites" :recette="$rate"></x-recipes-card>
                @endforeach
            </div>

            <div id="recipesFav" class="hidden">
                @foreach ($favoriteRecipes as $fav)
                    <x-recipes-card :favorites="$favorites" :recette="$fav"></x-recipes-card>
                @endforeach
            </div>
        </div>
    </section>

    @vite(["resources/js/profile.js", "resources/js/favorites.js"])

</x-app-layout>