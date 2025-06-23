<header class="fixed top-5 left-1/2 transform -translate-x-1/2 w-full max-w-screen-xl px-5 z-50 h-12">
    <nav class="bg-[#B7E7EB] pl-3 px-2 h-14 flex justify-around items-center rounded-lg ring-3 ring-white shadow-md shadow-black nav-container transition-all duration-150">
        <div class="h-12">
            <img class="h-full w-full rounded-full" src="{{ asset('images/logo.png') }}" alt="">
        </div>
        <form class="w-1/2">
            <label class="bg-white px-3 w-full py-1 rounded-lg flex" for="search">
                <i class="ri-search-line text-[#6E7173]"></i>
                <input class="pl-3 w-full focus:outline-none placeholder:text-sm" id="search" name="search" type="text"
                       placeholder="Recherchez">
            </label>
        </form>
        <div class="h-8 w-8 bg-white rounded-md flex items-center justify-center button-burger">
            <i class="ri-menu-3-line text-[#84DFD0] text-xl burger-menu-icon"></i>
        </div>
    </nav>
    <div class="bg-white ring-3 ring-white rounded-b-xl contain-expend-burger-menu transition-all origin-top scale-y-0 opacity-0 ease-in duration-200 shadow-md shadow-black overflow-y-auto max-h-[calc(100vh-8rem)] -z-10">
        <ul class="flex flex-col gap-5 py-5 text-xl text-center">
            <li><a href="/">Accueil</a></li>
            <li><a href="/recettes">Recettes</a></li>
            <li><a href="/categorie">Categorie</a></li>
            <li><a href="/profil">Profil</a></li>
            <li><a href="/login">Login</a></li>
            <li><a href="/log-out">Log out</a></li>
            <li><a href="/contact">Contact</a></li>
            <li><a href="/recettes/add">Créer une recette</a></li>
            <li><a href="/admin">Admin</a></li>
        </ul>
    </div>
    @vite('resources/js/burger-menu-header.js')
</header>
