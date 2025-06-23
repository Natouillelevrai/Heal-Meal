@php
    $title = 'Register';
@endphp

<x-app-layout :title="$title">
    <div class="w-full min-h-screen overflow-y-auto flex justify-center items-center py-12 px-4 sm:px-6 lg:px-8">
        <form
            class="flex flex-col gap-y-4 w-full max-w-[400px] py-16 px-6 sm:px-12 bg-[#B7E7EB] rounded-2xl ring-2 ring-white shadow-lg">
            @csrf

            <h2 class="text-center text-xl uppercase tracking-widest font-bold">Inscription</h2>

            <div class="relative w-full max-w-[150px] flex justify-between items-center self-center ">
                <div class="absolute z-1 left-1 h-2 w-[95%] bg-[#FFF7EB] transition-all ease-in duration-500"></div>
                <div class="absolute z-1 left-1 h-2 w-1 bg-[#0E2F46] transition-all ease-in duration-500"
                    id="stepProgress"></div>
                <div
                    class="number-progress relative z-5 flex justify-center items-center h-8 w-8 rounded-full bg-[#FFF7EB] text-[#0E2F46] font-bold text-lg transition-all ease-in-out duration-500">
                    1</div>
                <div
                    class="number-progress relative z-5 flex justify-center items-center h-8 w-8 rounded-full bg-[#FFF7EB] text-[#0E2F46] font-bold text-lg transition-all ease-in-out duration-500">
                    2</div>
                <div
                    class="number-progress relative z-5 flex justify-center items-center h-8 w-8 rounded-full bg-[#FFF7EB] text-[#0E2F46] font-bold text-lg transition-all ease-in-out duration-500">
                    3</div>
            </div>

            <strong class="text-center text-md uppercase tracking-widest font-bold" id="stepTitle">Loading...</strong>

            <div class="relative w-full">
                <div class="flex w-full h-auto transition-transform duration-500 ease-in-out overflow-x-hidden">
                    <!-- Slide 1 -->
                    <div class="w-full shrink-0 px-4 flex flex-col gap-y-3 justify-center" data-step="1">
                        <!-- Nom -->
                        <div>
                            <x-input-label for="lastname" :value="__('Nom')" />
                            <x-text-input id="lastname" class="block mt-1 w-full" type="text" name="lastname"
                                :value="old('lastname')" autofocus autocomplete="lastname"
                                placeholder="Entrez votre nom" data-step="1" />
                            <x-input-error :messages="$errors->get('lastname')" class="mt-2" />
                        </div>

                        <!-- Prénom -->
                        <div>
                            <x-input-label for="firstname" :value="__('Prénom')" />
                            <x-text-input id="firstname" class="block mt-1 w-full" type="text" name="firstname"
                                :value="old('firstname')" autocomplete="firstname" placeholder="Entrez votre prénom" data-step="1"/>
                            <x-input-error :messages="$errors->get('firstname')" class="mt-2" />
                        </div>

                        <!-- Date de naissance -->
                        <div>
                            <x-input-label for="birth" :value="__('Date de naissance')" />
                            <x-text-input id="birth" class="block mt-1 w-full" type="date" name="birth"
                                autocomplete="birth" placeholder="JJ/MM/AAAA" data-step="1"/>
                            <x-input-error :messages="$errors->get('birth')" class="mt-2" />
                        </div>
                    </div>

                    <!-- Slide 2 -->
                    <div class="w-full shrink-0 px-4 flex flex-col gap-y-3 justify-center" data-step="2">
                        <!-- Email -->
                        <div>
                            <x-input-label for="email" :value="__('Email')" />
                            <x-text-input id="email" class="block mt-1 w-full" type="email" name="email"
                                :value="old('email')" autofocus autocomplete="email" placeholder="exemple@mail.com" data-step="2"/>
                            <x-input-error :messages="$errors->get('email')" class="mt-2" />
                        </div>

                        <!-- Pseudo -->
                        <div>
                            <x-input-label for="username" :value="__('Nom d\'utilisateur')" />
                            <x-text-input id="username" class="block mt-1 w-full" type="text" name="username"
                                :value="old('username')" autocomplete="username" placeholder="Choisissez votre nom d'utilisateur" data-step="2"/>
                            <x-input-error :messages="$errors->get('username')" class="mt-2" />
                        </div>

                        <!-- Mot de passe -->
                        <div>
                            <x-input-label for="password" :value="__('Mot de passe')" />
                            <x-text-input id="password" class="block mt-1 w-full" type="text" name="password"
                                autocomplete="password" placeholder="Entrez un mot de passe sécurisé" data-step="2"/>
                            <x-input-error :messages="$errors->get('password')" class="mt-2" />
                        </div>

                        <!-- Vérification mot de passe -->
                        <div>
                            <x-input-label for="verify-password" :value="__('Vérification mot de passe')" />
                            <x-text-input id="verify-password" class="block mt-1 w-full" type="text"
                                name="verify-password" autocomplete="verify-password"
                                placeholder="Confirmez le mot de passe" data-step="2" />
                            <x-input-error :messages="$errors->get('verify-password')" class="mt-2" />
                        </div>
                    </div>

                    <!-- Slide 3 -->
                    <div class="w-full shrink-0 px-4 flex flex-col gap-y-3 justify-center" data-step="3">
                        <!-- Régime -->
                        <div>
                            <x-input-label for="regime" :value="__('Régime')" />
                            <select id="regime" name="regime"
                                class="text-[#6E7173] bg-white px-4 py-2 ring-0 focus:ring-1 focus:ring-[#B7E7EB] rounded-lg shadow-sm block mt-1 w-full" data-step="3">
                                <option value="">Aucun régime</option>
                                <option value="omnivore">Omnivore</option>
                                <option value="vegetarien">Végétarien</option>
                                <option value="vegan">Végan</option>
                                <option value="sans-gluten">Sans gluten</option>
                            </select>
                            <x-input-error :messages="$errors->get('regime')" class="mt-2" />
                        </div>

                        <!-- Allergènes -->
                        <div class="mt-4">
                            <x-input-label for="allergenes" :value="__('Allergène(s)')" />
                            <div>
                            <x-text-input id="allergenes" type="search" name="allergenes" placeholder="Ajouter..." class="block w-full mt-1" autocomplete="off" :value="old('allergenes')" />
                                <div class="w-full bg-white rounded-lg contain-search-result">

                                </div>
                            </div>
                            <x-input-error :messages="$errors->get('allergenes')" class="mt-2" />

                            <!-- Tags affichés -->
                            <div class="flex mt-2 flex-wrap gap-2 contain-tag-allergene">

                            </div>
                        </div>

                        <!-- Objectif -->
                        <div class="mt-4">
                            <x-input-label for="objectif" :value="__('Objectif')" />
                            <select id="objectif" name="objectif"
                                class="text-[#6E7173] bg-white px-4 py-2 ring-0 focus:ring-1 focus:ring-[#B7E7EB] rounded-lg shadow-sm block mt-1 w-full" data-step="3">
                                <option value="">Aucun objectif</option>
                                <option value="perte-poids">Perte de poids</option>
                                <option value="prise-masse">Prise de masse</option>
                                <option value="maintien">Maintien</option>
                            </select>
                            <x-input-error :messages="$errors->get('objectif')" class="mt-2" />
                        </div>
                    </div>
                </div>

                <div class="flex flex-col gap-y-2 items-center justify-end mt-4">
                    <x-primary-button :disabled="true" id="validate-form">
                        {{ __('Créer mon compte') }}
                    </x-primary-button>

                    <button id="nextStep" type="button" role="form"
                        class="w-full inline-flex justify-center items-center px-4 py-2 bg-[#0E2F46] border border-transparent rounded-md font-semibold text-xs text-white uppercase tracking-widest hover:bg-gray-800 focus:bg-gray-700 active:bg-gray-900 focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:ring-offset-2 transition ease-in-out duration-150">
                        Prochaine étape
                    </button>

                    <a class="underline text-sm text-gray-600 hover:text-gray-900 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500"
                        href="{{ route('login') }}">
                        {{ __('Vous avez déjà un compte?') }}
                    </a>
                </div>
        </form>
    </div>

    @vite('resources/js/register.js')

</x-app-layout>
