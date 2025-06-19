<x-app-layout :title="$title">

    <div class="flex flex-col items-center inter py-20 mt-20">
        <h1 class="text-3xl">Welcome</h1>
        <a href="#" class="relative inline-block text-xl group">
            This is Heal Meal
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

    <div class="categoriesContainer flex flex-col my-10">
        <div class="regimeContainer my-5">
            <h2 class="text-2xl mb-4 py-2 underline text-center">Regimes</h2>
            @foreach($regimes as $regime)
                <a class="w-full h-25 bg-white my-2 flex flex-row items-center rounded-[12px]" href="#">
                    <div class="w-50/100">
                        <p class="pl-5">{{ $regime["name"] }}</p>
                    </div>

                    <div class="w-50/100 h-full bg-cover bg-center rounded-r-[12px] overflow-hidden"
                        style="background-image: url('{{ $regime["image"] }}');">
                        <div class="h-25 rotate-45 w-25 bg-white relative -left-15 rounded-xl shadow"></div>
                    </div>
                </a>
            @endforeach
        </div>

        <div class="originsContainer my-5">
            <h2 class="text-2xl mb-4 py-2 underline text-center">Origines</h2>
            @foreach($origins as $origin)
                <a class="w-full h-25 bg-white my-2 flex flex-row items-center rounded-[12px]" href="#">
                    <div class="w-50/100">
                        <p class="pl-5">{{ $origin["name"] }}</p>
                    </div>

                    <div class="w-50/100 h-full bg-cover bg-center rounded-r-[12px] overflow-hidden"
                        style="background-image: url('{{ $origin["image"] }}');">
                        <div class="h-25 rotate-45 w-25 bg-white relative -left-15 rounded-xl shadow"></div>
                    </div>
                </a>
            @endforeach
        </div>
    </div>

    @vite(['resources/js/slider.js'])

</x-app-layout>