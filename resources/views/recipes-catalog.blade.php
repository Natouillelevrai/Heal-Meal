<x-app-layout :title="$title">
    <section class="w-full">
        @foreach($recettes as $recette)
            <x-recipes-card :recette="$recette" :favorites="$favorites" />
        @endforeach
        <div class="mt-3 w-full flex justify-center h-5 py-7">
            {{ $recettes->links('pagination::tailwind') }}
        </div>
    </section>

    @vite(['resources/js/favorites.js'])
</x-app-layout>