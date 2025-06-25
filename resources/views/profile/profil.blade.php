<x-app-layout :title="$title">
    <section class="flex justify-center items-center w-full min-w-[280px] max-w-[1000px]">
        <div
            class="flex flex-col items-center relative w-9/10 bg-[#B7E7EB] py-3 px-10 rounded-xl border border-2 border-white shadow shadow-gray-500">
            <div class="absolute top-0 right-1 text-2xl p-1">
                <i class="ri-edit-box-fill"></i>
            </div>
            <div class="flex flex-row justify-center">
                <div class="h-20 w-20 bg-amber-500 rounded-full">

                </div>
                <div>
                </div>
            </div>
            <strong>{{$user->username}}</strong>
            <p class="text-gray-600">{{$user->email}}</p>
            <div class="py-5 flex flex-row items-start justify-between bg-red-5OO w-full">
                <div class="h-24 font-bold flex flex-col justify-around items-center w-1/2">
                    <p class="underline text-center"> Note moyenne: </p>
                    <i class="ri-star-line"></i>
                    <p>4.8</p>
                </div>
                <div class="h-24 font-bold flex flex-col justify-around items-center text-center w-1/2">
                    <p class="underline">Recipes Validate :</p>
                    <i class="ri-list-check"></i>
                    <p>8</p>
                </div>
            </div>
        </div>
    </section>
    <section class="flex justify-center items-center py-5 w-full flex-col">
        <div class="w-9/10 h-10 bg-[#B7E7EB] rounded-lg flex flex-row justify-around items-center search-contain-form">
            <form class="px-5 rounded-l-lg h-full text-white flex justify-center items-center">
                <input type="hidden" name="id_user" value="{{$user->id_user}}">
                <input type="hidden" name="type" value="public">
                <button type="submit" class="clickable">Public</button>
            </form>
            <form
                class="bg-white px-2 rounded-l-lg h-full text-[#B7E7EB] flex justify-center items-center border border-2 border-[#B7E7EB]">
                <input type="hidden" name="id_user" value="{{$user->id_user}}">
                <input type="hidden" name="type" value="private">
                <button type="submit" class="clickable">Private</button>
            </form>
            <form
                class="bg-white px-2 rounded-l-lg h-full text-[#B7E7EB] flex justify-center items-center border border-2 border-[#B7E7EB]">
                <input type="hidden" name="id_user" value="{{$user->id_user}}">
                <input type="hidden" name="type" value="commenter">
                <button type="submit" class="clickable">Noté</button>
            </form>
            <form
                class="bg-white px-2 rounded-lg h-full text-[#B7E7EB] flex justify-center items-center border border-2 border-[#B7E7EB]">
                <input type="hidden" name="id_user" value="{{$user->id_user}}">
                <input type="hidden" name="type" value="enregistrer">
                <button type="submit" class="clickable">Enregistrer</button>
            </form>
        </div>
        <div class="recipes w-full px-5">

        </div>
    </section>
    @vite("resources/js/profile.js")
</x-app-layout>
