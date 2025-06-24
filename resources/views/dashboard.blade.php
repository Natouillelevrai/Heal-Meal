<x-app-layout>
    <div class="py-12 w-full">
        <div class="w-full max-w-7xl mx-auto h-auto sm:px-6 lg:px-8">
            <x-filter-component />

            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">
                    {{ __("You're logged in!") }}

                    @foreach($recettes as $recette)
                        <x-recipes-card :recette="$recette" />
                    @endforeach
                </div>

                <div class="mt-3 w-full flex justify-center h-5 py-7">
                    {{ $recettes->links('pagination::tailwind') }}
                </div>
            </div>
        </div>
    </div>
</x-app-layout>