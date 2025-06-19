<x-app-layout :title="$title">
<section>
    @foreach($recettes as $recette)
    <div class="my-5 py-1 pl-4 flex flex-row justify-between bg-white h-30 rounded-xl shadow-sm  shadow-gray-500">

        <div class="flex flex-col  justify-around h-full">
           <h3 class="text-md font-semibold py-2">{{$recette->name}}</h3>
            <p>{{$recette->user_name}}</p>
            <div class="h-18 flex flex-col justify-around">
            <p>{{$recette->origin_name}}</p>
                <p class="text-sm">{{$recette->regimes}}</p>
            </div>
        </div>

        <div class="w-7/12 h-full bg-amber-200 rounded-r-xl">
            <div class="absolute h-28 w-14 bg-gradient bg-gradient-to-r from-white to-transparent">
            </div>
            <img class="w-full h-full rounded-r-2xl object-cover" src="/images/rice-fried-pork.png" alt="">
        </div>
    </div>
        @endforeach
</section>
</x-app-layout>
