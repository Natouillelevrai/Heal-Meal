<x-app-layout :title="$title">

    <div class="flex flex-col items-center inter py-20 mt-20">
        <h1 class="text-3xl">Bienvenue</h1>
        <a href="#" class="relative inline-block text-xl group">
            Ceci est Heal Meal
            <i class="ri-arrow-right-line"></i>
            <span
                class="absolute left-0 -bottom-1 w-full h-[2px] bg-black scale-x-0 group-hover:scale-x-100 transition-transform duration-500 origin-left"></span>
        </a>
    </div>

    <div class="carousel relative w-full h-48 overflow-hidden rounded-xl">
        <div class="h-full carousel-track flex transition-transform duration-500">
            @foreach($recettes as $recette)
                <img src="{{ $recette['image'] }}" alt="Recette" class="w-full h-full flex-shrink-0 object-cover" />
            @endforeach
        </div>

        <button id="prev" class="absolute left-2 top-1/2 -translate-y-1/2 px-2 py-1 text-white text-5xl"><i
                class="ri-arrow-left-s-line"></i></button>
        <button id="next" class="absolute right-2 top-1/2 -translate-y-1/2 px-2 py-1 text-white text-5xl"><i
                class="ri-arrow-right-s-line"></i></button>

        <div class="absolute bottom-2 left-1/2 transform -translate-x-1/2 flex gap-2 z-10">
            @foreach($recettes as $recette)
                <button class="dot w-3 h-3 rounded-full bg-white hover:bg-gray transition-all"
                    data-slide="{{ $loop->index }}"></button>
            @endforeach
        </div>
    </div>

    <div class="categoriesContainer w-full flex flex-col my-10">
        <div class="w-full regimeContainer my-5 flex flex-col items-center">
            <h2 class="text-2xl mb-4 py-2 underline text-center">Regimes</h2>
            @foreach($regimes as $regime)
                <x-element-card :element="$regime" />
            @endforeach
            <a href="#" class="py-2 text-xl"><span class="underline">Charger plus</span> <i
                    class="ri-arrow-right-line"></i></a>
        </div>

        <div class="w-full originsContainer my-5 flex flex-col items-center">
            <h2 class="text-2xl mb-4 py-2 underline text-center">Origines</h2>
            @foreach($origins as $origin)
                <x-element-card :element="$origin" />
            @endforeach
            <a href="#" class="py-2 text-xl"><span class="underline">Charger plus</span> <i
                    class="ri-arrow-right-line"></i></a>
        </div>
    </div>

    <div class="w-85/100 bg-[#B7E7EB] my-5 p-5 rounded-xl flex flex-col items-center">
        <h2 class="text-2xl text-center pb-3">Recette de saison :</h2>
        <img src={{ $seasonDish['image'] }} alt="Season Dish" class="w-full h-65 rounded-xl" />
        <p class="text-center pt-10 text-xl">{{ $seasonDish['name'] }}</p>
        <p class="text-center text-gray-600 py-3">{{ $seasonDish["desc"] }}</p>
        <a class="pb-5">Voir plus <i class="ri-arrow-right-line"></i></a>

        <p class="block w-full text-left text-xl my-3">Pourquoi nous ?</p>

        <div class="w-full">
            <p class="block w-90/100 text-left text-gray-600 pb-3">
                Lorem ipsum dolor sit amet consectetur adipisicing elit sendum.
            </p>
        </div>

        <div class="w-full">
            <p class="block w-full text-right text-gray-600 py-3">
                Lorem ipsum dolor sit amet consectetur adipisicing elit.
                Lorem ipsum dolor.
            </p>
        </div>

        <div class="w-full">
            <p class="block w-full text-center text-gray-600 py-3">
                Lorem ipsum dolor sit amet consectetur adipisicing elit. Aliquam
                praesentium.
            </p>
        </div>

        <div class="w-full">
            <p class="block w-full text-center text-gray-600 py-3">
                Lorem ipsum dolor sit amet consectetur adipisicing.
            </p>
        </div>

        <p class="block w-full text-left text-xl my-3">Notre mission</p>
        <div class="w-full flex justify-center">
            <p class="block w-90/100 text-center text-gray-600 pb-3">
                Lorem ipsum dolor sit amet consectetur adipisicing elit. Illo exercitationem eveniet ipsum tempore
                voluptatibus et ad alias atque? Deserunt dolores consequuntur nesciunt ipsam impedit corporis molestias
                quasi officiis nihil! Ut.
            </p>
        </div>
    </div>

    @vite(['resources/js/slider.js'])

</x-app-layout>