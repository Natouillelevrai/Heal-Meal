<x-app-layout :title="$title">
    <div class="w-full bg-[#B7E7EB] mt-2 p-5 rounded-xl flex flex-col items-center">
        <div class="w-full flex flex-col items-center">
            <div class="w-full flex items-center justify-between">
                <h1 class="text-xl">{{ $recette["name"] }}</h1>
                <i class="ri-restaurant-line"></i>
            </div>

            <h2 class="block w-full text-left">{{ $recette["user"]["username"] }}</h2>
            <img src="{{ $recette['image'] }}" alt="Recette Image" class="w-full h-45 object-cover rounded-lg mt-4">

            <div class="w-70/100 h-7 mt-5 mb-2 flex flex-row justify-between">
                <div class="bg-white h-full w-7 p-2 rounded-lg flex justify-center items-center text-orange-500">
                    <button class="ri-chat-4-line"></button>
                </div>

                <div class="bg-white h-full w-7 p-2 rounded-lg flex justify-center items-center text-yellow-500">
                    <button class="ri-star-line"></button>
                </div>

                @php $isFav = $favorites->contains('id_recette', $recette['id_recette']); @endphp

                <form class="favForm bg-white h-full w-10 p-1 rounded-lg flex items-center text-green-500">
                    @auth
                        <input type="hidden" name="id_recette" value="{{ $recette['id_recette'] }}">
                        <input type="hidden" name="id_user" value="{{ auth()->id() }}">

                        <button type="submit" class="icon {{ $isFav ? 'ri-bookmark-fill' : 'ri-bookmark-line' }}"></button>
                    @endauth

                    @guest
                        <i class="ri-bookmark-line"></i>
                    @endguest

                    <span class="fav-count text-black pl-1">{{ count($recette['favorite']) }}</span>
                </form>

                <div class="bg-white h-full w-7 p-2 rounded-lg flex justify-center items-center text-blue-500">
                    <button class="ri-share-line"></button>
                </div>
            </div>

            <div class="mt-3">
                <p class="text-center">Ingredients :</p>
                <div class="w-full mt-3 flex flew-wrap justify-between">
                    @foreach ($recette["ingredients"] as $ingredient)
                        <span class="bg-white p-2 rounded-lg m-1">{{ $ingredient["name"] }}</span>
                    @endforeach
                </div>
            </div>

            <div class="bg-white w-95/100 h-10 mt-3 rounded-xl flex items-center justify-center">
                <p>Recette <i class="ri-file-paper-2-line"></i></p>
            </div>

            <div class="w-90/100">
                @foreach($recette["steps"] as $step)
                    <div class="w-full h-full bg-white p-3 my-8 rounded-lg">
                        <div class="flex flex-row items-center justify-bewteen mb-3">
                            <div class="w-full bg-black h-[1px]"></div>
                            <p class="block px-3 text-center whitespace-nowrap">{{ $step["name"] }}</p>
                            <div class="w-full bg-black h-[1px]"></div>
                        </div>

                        @if($step["image"] && !$step["video"])
                            <img src="{{ $step['image'] }}" alt="Step Image" class="w-full h-45 object-cover rounded-lg mb-3">
                        @elseif($step["video"])
                            <video class="w-full h-45 object-cover rounded-lg mb-3" controls>
                                <source src="{{ $step['video'] }}" type="video/mp4">
                                Your browser does not support the video tag.
                            </video>
                        @endif

                        <p class='block w-full text-center'>{{ $step['content'] }}</p>
                    </div>
                @endforeach
            </div>
        </div>
    </div>

    @vite(['resources/js/favorites.js'])
</x-app-layout>