<header class="fixed top-5 left-1/2 transform -translate-x-1/2 w-full max-w-screen-xl px-5 z-50">
    <nav class="bg-[#B7E7EB] pl-3 px-2 h-14 flex justify-around items-center rounded-lg ring-3 ring-white shadow-md shadow-black nav-container transition-all duration-150">
        <div class="h-12">
            <img class="h-full w-full rounded-full" src="{{ asset('images/logo.png') }}" alt="">
        </div>
        <form class="w-1/2">
            <label class="bg-white pl-5 w-full rounded-lg flex" for="search">
                <i class="ri-search-line text-[#6E7173]"></i>
                <input class="pl-3 w-full focus:outline-none" id="search" name="search" type="text"
                       placeholder="Search">
            </label>
        </form>
        <div class="h-8 w-8 bg-white rounded-md flex items-center justify-center button-burger">
            <i class="ri-menu-3-line text-[#84DFD0] text-xl"></i>
        </div>
    </nav>
    <div class="bg-white ring-3 ring-white rounded-b-xl contain-expend-burger-menu transition-all origin-top scale-y-0 opacity-0 ease-in duration-200 shadow-md shadow-black">
        <ul class="flex flex-col gap-5 py-5 text-xl text-center">
            <li><a>Accueil</a></li>
            <li><a>Recettes</a></li>
            <li><a>Categorie</a></li>
            <li><a>Profil</a></li>
            <li><a>Login</a></li>
            <li><a>Log out</a></li>
            <li><a>Contact</a></li>
            <li><a>Créer une recette</a></li>
            <li><a>Admin</a></li>
        </ul>
    </div>
    <script src="{{ asset('js/burger-menu-header.js') }}"></script>
</header>
