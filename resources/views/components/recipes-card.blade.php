@props(['recette'])

<div class="relative">
    <a href="#">
        <div class="h-36 my-5 pl-4 flex flex-row justify-between bg-white rounded-xl shadow-sm shadow-gray-500">
            <div class="flex flex-col justify-around h-full">
                <h3 class="text-md font-bold py-2">{{$recette->name}}</h3>
                <p class="text-sm italic">{{$recette->user_name}}</p>
                <div class="h-18 flex flex-col justify-around text-sm">
                    <p class="underline">{{$recette->origin_name}}</p>
                    <p class="font-semibold ">{{$recette->regimes}}</p>
                </div>
            </div>

            <div class="flex flex-row items-end w-7/12 h-full bg-amber-200 rounded-r-xl">
                <div class="absolute h-36 w-1/5 bg-gradient bg-gradient-to-r from-white to-transparent">
                </div>

                <div class="absolute flex my-3 ml-[12%] justify-center text-[1.7ej] leading-none">
                    <div class="relative flex space-x-1 text-yellow-400">
                        @for ($i = 0; $i < 5; $i++)
                            <i class="block ri-star-line text-xs md:text-sm lg:text-md"></i>
                        @endfor

                        <div class="absolute top-0 left-0 flex space-x-1 text-yellow-400 overflow-hidden"
                            style="width: calc({{ $recette->rate }} * 20%)">
                            @for ($i = 0; $i < 5; $i++)
                                <i class="block ri-star-fill text-xs md:text-sm lg:text-md"></i>
                            @endfor
                        </div>
                    </div>

                </div>

                <div
                    class="absolute rounded-lg flex text-xl lg:text-2xl justify-center items-center top-3 right-3 h-7 w-7 lg:h-8 lg:w-8 bg-[#0E2C46]">
                    <i class="ri-bookmark-line text-white"></i>
                </div>

                <img class="w-full h-36 rounded-r-2xl object-cover" src="/images/rice-fried-pork.png"
                    alt="{{ $recette->name  }}">
            </div>
        </div>
    </a>
</div>