@props(['recette', 'admin' => false])

<div class="relative">
    <a href="{{ route('recette.show', $recette->references) }}" class="block w-full">
        <div class="w-full h-36 my-5 flex bg-white rounded-xl shadow-md overflow-hidden">

            {{-- Partie texte --}}
            <div class="flex flex-col justify-around w-6/12 h-full pl-3 pr-2 z-10 bg-white">
                <div class="flex flex-col">
                    <h3 class="text-base font-semibold">{{ $recette->name }}</h3>
                    <p class="text-sm text-gray-700 italic">{{ $recette->user_name }}</p>
                </div>

                <div class="flex flex-col">
                    <p class="text-sm text-gray-600 underline">{{ $recette->origin_name }}</p>
                    <p class="text-xs text-gray-500 font-semibold">{{ $recette->regimes }}</p>
                </div>
            </div>

            <div class="flex flex-col justify-between items-end w-6/12 h-full rounded-r-xl p-2 text-yellow-400" style="background-image:
                                    linear-gradient(to right, rgba(255, 255, 255, 1), rgba(255, 255, 255, 0)),
                                    url('{{ $recette->image }}');
                                    background-size: cover;
                                    background-position: center;">

                @if ($admin)
                    <div class="bg-[#0E2F46] w-8 h-8 rounded-lg text flex justify-center items-center text-xl text-white">
                        <i class="ri-edit-circle-line"></i>
                    </div>
                    <div class="bg-[#0E2F46] w-8 h-8 rounded-lg text flex justify-center items-center text-xl text-white">
                        <i class="ri-delete-bin-6-line"></i>
                    </div>
                    <div class="bg-[#0E2F46] w-8 h-8 rounded-lg text flex justify-center items-center text-xl text-white">
                        <i class="ri-user-settings-line"></i>
                    </div>
                @else
                    <div class="bg-[#0E2F46] w-8 h-8 rounded text flex justify-center items-center text-xl text-white">
                        <i class="ri-bookmark-line"></i>
                    </div>
                @endif



                @if (!$admin)
                    <x-star-counter :rate="$recette->rate"></x-star-counter>
                @endif
            </div>
        </div>
    </a>
</div>