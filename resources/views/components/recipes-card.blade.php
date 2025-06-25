@props(['recette', 'favorites' => collect()])

<div class="relative">
    <div class="w-full h-36 my-5 flex bg-white rounded-xl shadow-md overflow-hidden">

        <a href="{{ route('recette.show', $recette->references) }}"
            class="flex flex-col justify-around w-6/12 h-full pl-3 pr-2 z-10 bg-white">
            <div class="flex flex-col">
                <h3 class="text-base font-semibold">{{ $recette->name }}</h3>
                <p class="text-sm text-gray-700 italic">{{ $recette->user_name }}</p>
            </div>

            <div class="flex flex-col">
                <p class="text-sm text-gray-600 underline">{{ $recette->origin_name }}</p>
                <p class="text-xs text-gray-500 font-semibold">{{ $recette->regimes }}</p>
            </div>
        </a>

        <div class="flex flex-col justify-between items-end w-6/12 h-full rounded-r-xl p-2 text-yellow-400" style="background-image:
                    linear-gradient(to right, rgba(255, 255, 255, 1), rgba(255, 255, 255, 0)),
                    url('{{ $recette->image }}');
                    background-size: cover;
                    background-position: center;">


            @auth
                <form class="favForm bg-[#0E2F46] w-8 h-8 rounded text flex justify-center items-center text-xl text-green-700">
                    <input type="hidden" value="{{ $recette->id_recette }}" name="id_recette">
                    <input type="hidden" value="{{ auth()->id() }}" name="id_user">

                    <input type="hidden" name="action" value="{{ 
                        $favorites->contains('id_recette', $recette->id_recette) ? '1' : '0'
                    }}">

                    <button class="w-full h-full cursor-pointer" type="submit">
                        <i class="{{ $favorites->contains('id_recette', $recette->id_recette) ? 'ri-bookmark-fill' : 'ri-bookmark-line' }} icon"></i>
                    </button>
                </form>
            @endauth

            @guest
                <div class="bg-[#0E2F46] w-8 h-8 rounded text flex justify-center items-center text-xl text-white">
                    <button class="w-full h-full cursor-pointer">
                        <i class="ri-bookmark-line icon"></i>
                    </button>
                </div>
            @endguest

            <x-star-counter :rate="$recette->rate"></x-star-counter>

        </div>
    </div>
</div>