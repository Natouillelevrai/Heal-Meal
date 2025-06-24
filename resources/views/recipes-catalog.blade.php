<x-app-layout :title="$title">
    <section>
        @foreach($recettes as $recette)
            <x-recipes-card :recette="$recette" />
        @endforeach
        <div class="mt-6 w-full flex justify-center h-5 py-10">
            {{ $recettes->links('pagination::tailwind') }}
        </div>
    </section>
</x-app-layout>