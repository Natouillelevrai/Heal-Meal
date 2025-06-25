@php
    if (!isset($admin)) $admin = false;
@endphp

<div class="relative">
    <div class="w-full h-36 my-5 flex bg-white rounded-xl shadow-md overflow-hidden">

        {{-- Partie texte --}}
        <div class="flex flex-col justify-around w-6/12 h-full pl-3 pr-2 z-10 bg-white relative">
            @if (!$admin)
                <a href="{{ route('recette.show', $recette->references) }}" class="absolute w-full h-full"></a>
            @endif
            <div class="flex flex-col">
                <h3 class="text-base font-semibold">{{ $recette->name }}</h3>

                @if (!$admin)
                    <p class="text-sm text-gray-700 italic">{{ $recette->user_name }}</p>
                @else
                    <a href="/admin/users/{{ $recette->user_name }}"
                        class="text-sm text-gray-700 italic hover:underline">{{ $recette->user_name }}</a>
                @endif
            </div>

            <div class="flex flex-col">
                <p class="text-sm text-gray-600 underline">{{ $recette->origin_name }}</p>
                <p class="text-xs text-gray-500 font-semibold">{{ $recette->regimes }}</p>
            </div>
        </div>

        {{-- Partie image + actions --}}
        <div class="flex flex-col justify-between items-end w-6/12 h-full rounded-r-xl p-2 text-yellow-400" style="background-image:
                linear-gradient(to right, rgba(255, 255, 255, 1), rgba(255, 255, 255, 0)),
                url('{{ $recette->image }}');
                background-size: cover;
                background-position: center;">

            {{-- Actions admin --}}
            @if ($admin)
                <div class="h-full flex flex-col justify-evenly space-y-1">
                    <a href="{{ route('recette.show', $recette->references) }}" target="_blank" title="Voir la recette"
                        class="bg-[#0E2F46] w-8 h-8 rounded-lg flex justify-center items-center text-xl text-white">
                        <i class="ri-external-link-line"></i>
                    </a>
                    <a href="/admin/edit/recipes/{{ $recette->references }}" title="Modifier"
                        class="bg-[#0E2F46] w-8 h-8 rounded-lg flex justify-center items-center text-xl text-white">
                        <i class="ri-edit-circle-line"></i>
                    </a>
                    <a href="/admin/delete/recipes/{{ $recette->references }}" title="Supprimer"
                        class="bg-[#0E2F46] w-8 h-8 rounded-lg flex justify-center items-center text-xl text-white">
                        <i class="ri-delete-bin-6-line"></i>
                    </a>
                </div>
            @else
                <div class="h-full flex flex-col justify-around items-end space-y-2">
                    <a href="{{ route('recette.show', $recette->references) }}"
                        class="bg-[#0E2F46] w-8 h-8 rounded flex justify-center items-center text-xl text-white"
                        title="Voir la recette">
                        <i class="ri-bookmark-line"></i>
                    </a>
                    <x-star-counter :rate="$recette->rate" />
                </div>
            @endif
        </div>

    </div>
</div>
