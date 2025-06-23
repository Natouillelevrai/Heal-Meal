<x-app-layout :title="$title">
<section>
    @foreach($recettes as $recette)
        <a href="#">
    <div class="h-36 my-5 pl-4 flex flex-row justify-between bg-white rounded-xl shadow-sm  shadow-gray-500">

        <div class="flex flex-col  justify-around h-full">
           <h3 class="text-sm font-semibold py-2">{{$recette->name}}</h3>
            <p>{{$recette->user_name}}</p>
            <div class="h-18 flex flex-col justify-around">
            <p>{{$recette->origin_name}}</p>
                <p class="text-sm">{{$recette->regimes}}</p>
            </div>
        </div>

        <div class="flex flex-row items-end w-7/12 h-full bg-amber-200 rounded-r-xl">
            <div class="absolute h-36 w-1/5 bg-gradient bg-gradient-to-r from-white to-transparent">
            </div>

            <div class="absolute flex my-3 ml-[12%] justify-center text-[1.7ej] leading-none">
                <div class="text-yellow-400 flex space-x-1">
                    @for ($i = 0; $i < 5; $i++)
                        <i class="ri-star-line"></i>
                    @endfor
                </div>

                <div class="absolute top-0 left-0 text-yellow-400 flex space-x-1 overflow-hidden" style="width: calc({{ $recette->rate }} * 20%)">
                    @for ($i = 0; $i < 5; $i++)
                        <i class="ri-star-fill"></i>
                    @endfor
                </div>
            </div>

            <div class="absolute font-semibold rounded-lg flex text-2xl justify-center items-center right-5 h-8 w-8 my-25 ml-5 bg-[#0E2C46]">
                <i class="ri-bookmark-line text-[#35A650]"></i>
            </div>

            <img class="w-full h-36 rounded-r-2xl object-cover" src="{{ $recette->image }}" alt="">
        </div>
    </div>
        </a>
        @endforeach
        <div class="mt-6 w-full flex justify-center h-5 w-5 py-10">
            {{ $recettes->links('pagination::tailwind') }}
        </div>
</section>
</x-app-layout>
