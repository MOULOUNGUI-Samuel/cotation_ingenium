@extends('welcome')
@section('content')
    <style>
        .content-div {
            display: none;
        }

        /* Affiche la div1 par défaut */
        #div1 {
            display: block;
        }
        
    </style>
    <section class="rounded-sm">
        <!-- Section de Paramètres -->
       
        <form action="{{route('enregistrer_cotation')}}" method="POST" class="space-y-4 md:max-h-auto overflow-y-auto p-4 bg-white/90 rounded-lg" id="multi-step-form" enctype="multipart/form-data">
            @csrf

            <!-- Étape 1 : Informations sur le Client -->
            
                <h4 class="text-xl mb-6 font-semibold  dark:text-[#763c26]/95">Veuillez remplir le formulaire de cotation</h4>
                @if ($errors->any())
                @foreach ($errors->all() as $error)
                    <div id="alert-{{ $loop->index }}" class="flex items-center p-4 mb-4 text-red-800 border-t-4 border-red-300 bg-red-50 dark:text-red-800 shadow-gray-900 dark:bg-white dark:border-red-800 w-full" role="alert">
                        <svg class="flex-shrink-0 w-4 h-4" class="text-white" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 20 20">
                          <path d="M10 .5a9.5 9.5 0 1 0 9.5 9.5A9.51 9.51 0 0 0 10 .5ZM9.5 4a1.5 1.5 0 1 1 0 3 1.5 1.5 0 0 1 0-3ZM12 15H8a1 1 0 0 1 0-2h1v-3H8a1 1 0 0 1 0-2h2a1 1 0 0 1 1 1v4h1a1 1 0 0 1 0 2Z"/>
                        </svg>
                        <div class="ms-3 text-md font-medium">
                            {{ $error }}
                        </div>
                        <button type="button" class="ms-auto -mx-1.5 -my-1.5 bg-red-50 text-white rounded-lg focus:ring-2 focus:ring-white p-1.5 hover:bg-red-200 inline-flex items-center justify-center h-8 w-8 dark:bg-[#763c26] dark:text-red-800 dark:hover:bg-[#763c26]/90" onclick="closeAlert('alert-{{ $loop->index }}')" aria-label="Close">
                          <span class="sr-only">Dismiss</span>
                          <svg class="w-3 h-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 14">
                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 1 6 6m0 0 6 6M7 7l6-6M7 7l-6 6"/>
                          </svg>
                        </button>
                    </div>
                @endforeach
            @endif
            <h4 class="text-lg mb-6 font-semibold  dark:text-[#763c26]/95">Informations sur le Client</h4>
                <div class="grid gap-6 mb-6 md:grid-cols-2">
                    <!-- Raison sociale ou Nom complet -->
                    <div>
                        <div class="relative">
                            <input type="text" id="raison_sociale"
                                class="block px-2.5 pb-2.5 pt-4 w-full text-md text[#763c26] bg-white appearance-none shadow-gray-900 focus:outline focus:ring-1 focus:border-none focus:ring-[#763c26] peer shadow-lg rounded-md"
                                placeholder=" " name="raison_sociale" value="{{old('raison_sociale')}}"/>
                            <label for="raison_sociale"
                                class="cursor-pointer absolute dark:text-[#763c26]/95 rounded-md duration-300 transform -translate-y-4 scale-75 top-2 z-10 origin-[0] bg-white  px-2 peer-focus:px-2 peer-placeholder-shown:scale-100 peer-placeholder-shown:-translate-y-1/2 peer-placeholder-shown:top-1/2 peer-focus:top-2 peer-focus:scale-75 peer-focus:-translate-y-4 start-1 rtl:peer-focus:translate-x-1/4 rtl:peer-focus:left-auto">Raison
                                sociale ou Nom complet</label>
                        </div>
                    </div>
                    <!-- Adresse complète -->
                    <div>
                        <div class="relative">
                            <input type="text" id="adresse"
                                class="block px-2.5 pb-2.5 pt-4 w-full text-md text[#763c26] bg-white appearance-none shadow-gray-900 focus:outline focus:ring-1 focus:border-none focus:ring-[#763c26] peer shadow-lg rounded-md"
                                placeholder=" " name="adresse"  value="{{old('adresse')}}"/>
                            <label for="adresse"
                                class="cursor-pointer absolute dark:text-[#763c26]/95 rounded-md duration-300 transform -translate-y-4 scale-75 top-2 z-10 origin-[0] bg-white  px-2 peer-focus:px-2 peer-placeholder-shown:scale-100 peer-placeholder-shown:-translate-y-1/2 peer-placeholder-shown:top-1/2 peer-focus:top-2 peer-focus:scale-75 peer-focus:-translate-y-4 start-1 rtl:peer-focus:translate-x-1/4 rtl:peer-focus:left-auto">Adresse
                                complète</label>
                        </div>
                    </div>

                    <!-- Contact principal : Nom -->
                    <div>
                        <div class="relative">
                            <input type="text" id="contact_nom"
                                class="block px-2.5 pb-2.5 pt-4 w-full text-md text[#763c26] bg-white appearance-none shadow-gray-900 focus:outline focus:ring-1 focus:border-none focus:ring-[#763c26] peer shadow-lg rounded-md"
                                placeholder=" " name="contact_nom" value="{{old('contact_nom')}}" required/>
                            <label for="contact_nom"
                                class="cursor-pointer absolute dark:text-[#763c26]/95 rounded-md duration-300 transform -translate-y-4 scale-75 top-2 z-10 origin-[0] bg-white  px-2 peer-focus:px-2 peer-placeholder-shown:scale-100 peer-placeholder-shown:-translate-y-1/2 peer-placeholder-shown:top-1/2 peer-focus:top-2 peer-focus:scale-75 peer-focus:-translate-y-4 start-1 rtl:peer-focus:translate-x-1/4 rtl:peer-focus:left-auto">Nom
                                du client</label>
                        </div>
                    </div>

                    <!-- Contact principal : Téléphone -->
                    <div>
                        <div class="relative">
                            <input type="number" id="contact_tel"
                                class="block px-2.5 pb-2.5 pt-4 w-full text-md text[#763c26] bg-white appearance-none shadow-gray-900 focus:outline focus:ring-1 focus:border-none focus:ring-[#763c26] peer shadow-lg rounded-md"
                                placeholder=" " name="contact_tel" value="{{old('contact_tel')}}"/>
                            <label for="contact_tel"
                                class="cursor-pointer absolute dark:text-[#763c26]/95 rounded-md duration-300 transform -translate-y-4 scale-75 top-2 z-10 origin-[0] bg-white  px-2 peer-focus:px-2 peer-placeholder-shown:scale-100 peer-placeholder-shown:-translate-y-1/2 peer-placeholder-shown:top-1/2 peer-focus:top-2 peer-focus:scale-75 peer-focus:-translate-y-4 start-1 rtl:peer-focus:translate-x-1/4 rtl:peer-focus:left-auto">Téléphone</label>
                        </div>
                    </div>

                    <!-- Contact principal : Email -->
                    <div>
                        <div class="relative">
                            <input type="email" id="contact_email"
                                class="block px-2.5 pb-2.5 pt-4 w-full text-md text[#763c26] bg-white appearance-none shadow-gray-900 focus:outline focus:ring-1 focus:border-none focus:ring-[#763c26] peer shadow-lg rounded-md"
                                placeholder=" " name="contact_email" value="{{old('contact_email')}}"/>
                            <label for="contact_email"
                                class="cursor-pointer absolute dark:text-[#763c26]/95 rounded-md duration-300 transform -translate-y-4 scale-75 top-2 z-10 origin-[0] bg-white  px-2 peer-focus:px-2 peer-placeholder-shown:scale-100 peer-placeholder-shown:-translate-y-1/2 peer-placeholder-shown:top-1/2 peer-focus:top-2 peer-focus:scale-75 peer-focus:-translate-y-4 start-1 rtl:peer-focus:translate-x-1/4 rtl:peer-focus:left-auto">Email</label>
                        </div>
                    </div>

                    <!-- Secteur d'activité -->
                    <div>
                        <div class="relative">
                            <select id="secteur_activite" name="secteur_activite"
                                class="block px-2.5 pb-2.5 pt-4 w-full text-md text[#763c26] bg-white appearance-none shadow-gray-900 focus:outline focus:ring-1 focus:border-none focus:ring-[#763c26] peer shadow-lg rounded-md" required>
                                <option value="" class="text-[#763c26]">Sélectionnez un secteur</option>
                                <option value="Industrie" class="text-[#763c26]">Industrie</option>
                                <option value="Commerce" class="text-[#763c26]">Commerce</option>
                                <option value="Services" class="text-[#763c26]">Services</option>
                            </select>
                            <label for="secteur_activite"
                                class="cursor-pointer absolute dark:text-[#763c26]/95 rounded-md duration-300 transform -translate-y-4 scale-75 top-2 z-10 origin-[0] bg-white  px-2 peer-focus:px-2 peer-placeholder-shown:scale-100 peer-placeholder-shown:-translate-y-1/2 peer-placeholder-shown:top-1/2 peer-focus:top-2 peer-focus:scale-75 peer-focus:-translate-y-4 start-1 rtl:peer-focus:translate-x-1/4 rtl:peer-focus:left-auto">Secteur
                                d'activité</label>
                        </div>
                    </div>

                    <!-- Chiffre d'affaires annuel -->
                    <div>
                        <div class="relative">
                            <input type="number" id="chiffre_affaires" name="chiffre_affaires"
                                class="block px-2.5 pb-2.5 pt-4 w-full text-md text[#763c26] bg-white appearance-none shadow-gray-900 focus:outline focus:ring-1 focus:border-none focus:ring-[#763c26] peer shadow-lg rounded-md"
                                placeholder=" " value="{{old('chiffre_affaires')}}"/>
                            <label for="chiffre_affaires"
                                class="cursor-pointer absolute dark:text-[#763c26]/95 rounded-md duration-300 transform -translate-y-4 scale-75 top-2 z-10 origin-[0] bg-white  px-2 peer-focus:px-2 peer-placeholder-shown:scale-100 peer-placeholder-shown:-translate-y-1/2 peer-placeholder-shown:top-1/2 peer-focus:top-2 peer-focus:scale-75 peer-focus:-translate-y-4 start-1 rtl:peer-focus:translate-x-1/4 rtl:peer-focus:left-auto">Chiffre
                                d'affaires annuel</label>
                        </div>
                    </div>
                </div>
                <h4 class="text-lg mb-6 font-semibold  dark:text-[#763c26]/95">Nature du Risque</h4>
                <div class="grid gap-6 mb-6 md:grid-cols-2">
                    <div>
                        <div class="relative">
                            <select id="secteur_couverture" name="secteur_couverture"  onchange="toggleFields()"
                            class="block px-2.5 pb-2.5 pt-4 w-full text-md text[#763c26] bg-white appearance-none shadow-gray-900 focus:outline focus:ring-1 focus:border-none focus:ring-[#763c26] peer shadow-lg rounded-md" required>
                            <option value="" class="text-[#763c26]">Sélectionnez un secteur</option>
                            <option value="Responsabilité Civile Professionnelle" class="text-[#763c26]">Responsabilité Civile Professionnelle</option>
                            <option value="Dommages aux biens" class="text-[#763c26]">Dommages aux biens</option>
                            <option value="Flotte automobile" class="text-[#763c26]">Flotte automobile</option>
                            <option value="Cyber-risques" class="text-[#763c26]">Cyber-risques</option>
                            <option value="Santé collective" class="text-[#763c26]">Santé collective</option>
                            <option value="Prévoyance" class="text-[#763c26]">Prévoyance</option>
                        </select>
                        <label for="secteur_couverture"
                            class="cursor-pointer absolute dark:text-[#763c26]/95 rounded-md duration-300 transform -translate-y-4 scale-75 top-2 z-10 origin-[0] bg-white  px-2 peer-focus:px-2 peer-placeholder-shown:scale-100 peer-placeholder-shown:-translate-y-1/2 peer-placeholder-shown:top-1/2 peer-focus:top-2 peer-focus:scale-75 peer-focus:-translate-y-4 start-1 rtl:peer-focus:translate-x-1/4 rtl:peer-focus:left-auto">Type de couverture souhaitée</label>
                        </div>
                    </div>
                   {{-- Flotte automobile --}}
                            <div class="relative hidden" id="nbr_vehicule">
                                <input type="number" value="{{old('nb_vehicules')}}" id="nb_vehicules" name="nb_vehicules" placeholder=" "
                                    class="block px-2.5 pb-2.5 pt-4 w-full text-md text[#763c26] bg-white appearance-none shadow-gray-900 focus:outline focus:ring-1 focus:border-none focus:ring-[#763c26] peer shadow-lg rounded-md">
                                <label for="nb_vehicules"
                                    class="cursor-pointer absolute dark:text-[#763c26]/95 rounded-md duration-300 transform -translate-y-4 scale-75 top-2 z-10 origin-[0] bg-white px-2 peer-focus:px-2 peer-placeholder-shown:scale-100 peer-placeholder-shown:-translate-y-1/2 peer-placeholder-shown:top-1/2 peer-focus:top-2 peer-focus:scale-75 peer-focus:-translate-y-4 start-1">Nombre
                                    de véhicules dans la flotte</label>
                            </div>
                            <div class="relative hidden" id="type_voiture">
                                <select id="type_vehicules" name="type_vehicules"
                                    class="block px-2.5 pb-2.5 pt-4 w-full text-md text[#763c26] bg-white appearance-none shadow-gray-900 focus:outline focus:ring-1 focus:border-none focus:ring-[#763c26] peer shadow-lg rounded-md">
                                    <option value="" class="text-[#763c26]">Sélectionnez un type de véhicule</option>
                                    <option value="Légers" class="text-[#763c26]">Légers</option>
                                    <option value="Poids lourds" class="text-[#763c26]">Poids lourds</option>
                                    <option value="Utilitaires" class="text-[#763c26]">Utilitaires</option>
                                </select>
                                <label for="type_vehicules"
                                    class="cursor-pointer absolute dark:text-[#763c26]/95 rounded-md duration-300 transform -translate-y-4 scale-75 top-2 z-10 origin-[0] bg-white px-2 peer-focus:px-2 peer-placeholder-shown:scale-100 peer-placeholder-shown:-translate-y-1/2 peer-placeholder-shown:top-1/2 peer-focus:top-2 peer-focus:scale-75 peer-focus:-translate-y-4 start-1">Type
                                    de véhicules</label>
                            </div>
                            <div class="relative hidden" id="usage_">
                                <select id="Usage" name="Usage"
                                    class="block px-2.5 pb-2.5 pt-4 w-full text-md text[#763c26] bg-white appearance-none shadow-gray-900 focus:outline focus:ring-1 focus:border-none focus:ring-[#763c26] peer shadow-lg rounded-md">
                                    <option value="">Usage</option>
                                    <option value="Privé">Privé</option>
                                    <option value="Professionnel">Professionnel</option>
                                </select>
                                <label for="Usage"
                                    class="cursor-pointer absolute dark:text-[#763c26]/95 rounded-md duration-300 transform -translate-y-4 scale-75 top-2 z-10 origin-[0] bg-white px-2 peer-focus:px-2 peer-placeholder-shown:scale-100 peer-placeholder-shown:-translate-y-1/2 peer-placeholder-shown:top-1/2 peer-focus:top-2 peer-focus:scale-75 peer-focus:-translate-y-4 start-1">Type d'usage</label>
                            </div>
                            <div class="relative hidden" id="puissance_voiture">
                                <input type="number" id="puissance" value="{{old('puissance')}}" name="puissance" placeholder=" "
                                    class="block px-2.5 pb-2.5 pt-4 w-full text-md text[#763c26] bg-white appearance-none shadow-gray-900 focus:outline focus:ring-1 focus:border-none focus:ring-[#763c26] peer shadow-lg rounded-md">
                                <label for="puissance"
                                    class="cursor-pointer absolute dark:text-[#763c26]/95 rounded-md duration-300 transform -translate-y-4 scale-75 top-2 z-10 origin-[0] bg-white px-2 peer-focus:px-2 peer-placeholder-shown:scale-100 peer-placeholder-shown:-translate-y-1/2 peer-placeholder-shown:top-1/2 peer-focus:top-2 peer-focus:scale-75 peer-focus:-translate-y-4 start-1">Puissance fiscale moyenne</label>
                            </div>
                   
    
                        <!-- Assurance Dommages aux biens -->
                            <div class="relative hidden" id="typeBien">
                                <select id="type_biens" name="type_biens"
                                    class="block px-2.5 pb-2.5 pt-4 w-full text-md text[#763c26] bg-white appearance-none shadow-gray-900 focus:outline focus:ring-1 focus:border-none focus:ring-[#763c26] peer shadow-lg rounded-md">
                                    <option value="" class="text-[#763c26]">Sélectionnez un type de bien</option>
                                    <option value="Immeuble" class="text-[#763c26]">Immeuble</option>
                                    <option value="Equipements" class="text-[#763c26]">Équipements</option>
                                    <option value="Marchandises" class="text-[#763c26]">Marchandises</option>
                                </select>
                                <label for="type_biens"
                                    class="cursor-pointer absolute dark:text-[#763c26]/95 rounded-md duration-300 transform -translate-y-4 scale-75 top-2 z-10 origin-[0] bg-white px-2 peer-focus:px-2 peer-placeholder-shown:scale-100 peer-placeholder-shown:-translate-y-1/2 peer-placeholder-shown:top-1/2 peer-focus:top-2 peer-focus:scale-75 peer-focus:-translate-y-4 start-1">Type
                                    de bien à assurer</label>
                            </div>
                            <div class="relative hidden" id="valeurBiens">
                                <input type="number" id="valeur_biens" value="{{old('valeur_biens')}}" name="valeur_biens" placeholder=" "
                                    class="block px-2.5 pb-2.5 pt-4 w-full text-md text[#763c26] bg-white appearance-none shadow-gray-900 focus:outline focus:ring-1 focus:border-none focus:ring-[#763c26] peer shadow-lg rounded-md">
                                <label for="valeur_biens"
                                    class="cursor-pointer absolute dark:text-[#763c26]/95 rounded-md duration-300 transform -translate-y-4 scale-75 top-2 z-10 origin-[0] bg-white px-2 peer-focus:px-2 peer-placeholder-shown:scale-100 peer-placeholder-shown:-translate-y-1/2 peer-placeholder-shown:top-1/2 peer-focus:top-2 peer-focus:scale-75 peer-focus:-translate-y-4 start-1">Valeur
                                    totale des biens (FCFA)</label>
                            </div>
                            <div class="hidden" id="choix_ul">
                            <ul class="items-center w-full text-sm font-medium text-gray-900  shadow-lg bg-white shadow-gray-900 border border-gray-200 rounded-md sm:flex dark:bg-white dark:border-gray-600 dark:text-white ">
                                <li class="w-full border-b border-gray-200 sm:border-b-0 sm:border-r dark:border-gray-600">
                                    <div class="flex items-center ps-3">
                                        <input id="horizontal-list-radio-license" type="radio" value="{{old('list-radio','Alarme')}}" name="list-radio" class="w-4 h-4 text-[#102147] bg-gray-100 border-gray-300 focus:ring-white dark:focus:ring-[#102147] dark:ring-offset-gray-700 dark:focus:ring-offset-gray-700 focus:ring-1 focus:border-none  dark:border-gray-500">
                                        <label for="horizontal-list-radio-license" class="w-full py-3 ms-2 text-sm font-medium text-[#102147]">Alarme </label>
                                    </div>
                                </li>
                                <li class="w-full border-b border-gray-200 sm:border-b-0 sm:border-r dark:border-gray-600">
                                    <div class="flex items-center ps-3">
                                        <input id="horizontal-list-radio-id" type="radio" value="{{old('list-radio','Surveillance 24h')}}" name="list-radio" class="w-4 h-4 text-[#102147] bg-gray-100 border-gray-300 focus:ring-white dark:focus:ring-[#102147] dark:ring-offset-gray-700 dark:focus:ring-offset-gray-700 focus:ring-1 focus:border-none  dark:border-gray-500">
                                        <label for="horizontal-list-radio-id" class="w-full py-3 ms-2 text-sm font-medium text-[#102147]">Surveillance 24h</label>
                                    </div>
                                </li>
                                <li class="w-full border-b border-gray-200 sm:border-b-0 sm:border-r dark:border-gray-600">
                                    <div class="flex items-center ps-3">
                                        <input id="horizontal-list-radio-military" type="radio" value="{{old('list-radio','Extincteurs')}}" name="list-radio" class="w-4 h-4 text-[#102147] bg-gray-100 border-gray-300 focus:ring-white dark:focus:ring-[#102147] dark:ring-offset-gray-700 dark:focus:ring-offset-gray-700 focus:ring-1 focus:border-none  dark:border-gray-500">
                                        <label for="horizontal-list-radio-military" class="w-full py-3 ms-2 text-sm font-medium text-[#102147]">Extincteurs</label>
                                    </div>
                                </li>
                                <li class="w-full dark:border-gray-600">
                                    <div class="flex items-center ps-3">
                                        <input id="horizontal-list-radio-passport" type="radio" value="{{old('list-radio','Autres')}}" name="list-radio" class="w-4 h-4 text-[#102147] bg-gray-100 border-gray-300 focus:ring-white dark:focus:ring-[#102147] dark:ring-offset-gray-700 dark:focus:ring-offset-gray-700 focus:ring-1 focus:border-none  dark:border-gray-500">
                                        <label for="horizontal-list-radio-passport" class="w-full py-3 ms-2 text-sm font-medium text-[#102147]">Autres</label>
                                    </div>
                                </li>
                            </ul>
                        </div>
                        <!-- cyber_risques -->
                                <div class="relative hidden" id="taillEntreprise">
                                    <input type="number" id="taille_entreprise" name="taille_entreprise" value="{{old('taille_entreprise')}}" placeholder=" "
                                        class="block px-2.5 pb-2.5 pt-4 w-full text-md text[#763c26] bg-white appearance-none shadow-gray-900 focus:outline focus:ring-1 focus:border-none focus:ring-[#763c26] peer shadow-lg rounded-md">
                                    <label for="taille_entreprise"
                                        class="cursor-pointer absolute dark:text-[#763c26]/95 rounded-md duration-300 transform -translate-y-4 scale-75 top-2 z-10 origin-[0] bg-white px-2 peer-focus:px-2 peer-placeholder-shown:scale-100 peer-placeholder-shown:-translate-y-1/2 peer-placeholder-shown:top-1/2 peer-focus:top-2 peer-focus:scale-75 peer-focus:-translate-y-4 start-1">Nombre
                                        d'employés</label>
                                </div>
                                <div class="relative hidden" id="budgetIt">
                                    <input type="number" id="budget_it" name="budget_it" value="{{old('budget_it')}}" placeholder=" "
                                        class="block px-2.5 pb-2.5 pt-4 w-full text-md text[#763c26] bg-white appearance-none shadow-gray-900 focus:outline focus:ring-1 focus:border-none focus:ring-[#763c26] peer shadow-lg rounded-md">
                                    <label for="budget_it"
                                        class="cursor-pointer absolute dark:text-[#763c26]/95 rounded-md duration-300 transform -translate-y-4 scale-75 top-2 z-10 origin-[0] bg-white px-2 peer-focus:px-2 peer-placeholder-shown:scale-100 peer-placeholder-shown:-translate-y-1/2 peer-placeholder-shown:top-1/2 peer-focus:top-2 peer-focus:scale-75 peer-focus:-translate-y-4 start-1">Budget
                                        IT annuel (€)</label>
                                    </div>
                                    
                                <textarea id="descrption_specifiques" name="description_systemes" 
                                class="block w-full px-2.5 pb-2.5 pt-4 text-md text[#763c26] bg-white focus:ring-1 focus:border-none focus:ring-[#763c26] shadow-gray-900 peer shadow-lg rounded-md hidden"
                                placeholder="Description des systèmes à protéger">{{old('description_systemes')}}</textarea>
                                
                
           
                    
                    <!-- Contact principal : Nom -->
                    <div>
                        <div class="relative">
                            <input type="text" id="montant_garantie" name="montant_garantie" value="{{old('montant_garantie')}}"
                                class="block px-2.5 pb-2.5 pt-4 w-full text-md text[#763c26] bg-white appearance-none shadow-gray-900 focus:outline focus:ring-1 focus:border-none focus:ring-[#763c26] peer shadow-lg rounded-md"
                                placeholder=" " />
                            <label for="montant_garantie"
                                class="cursor-pointer absolute dark:text-[#763c26]/95 rounded-md duration-300 transform -translate-y-4 scale-75 top-2 z-10 origin-[0] bg-white  px-2 peer-focus:px-2 peer-placeholder-shown:scale-100 peer-placeholder-shown:-translate-y-1/2 peer-placeholder-shown:top-1/2 peer-focus:top-2 peer-focus:scale-75 peer-focus:-translate-y-4 start-1 rtl:peer-focus:translate-x-1/4 rtl:peer-focus:left-auto">Montant
                                de garantie souhaité</label>
                        </div>
                    </div>

                    <!-- Contact principal : Téléphone -->
                    <div>
                        <div class="relative">
                            <input type="date" id="date_effet" name="date_effet" value="{{old('date_effet')}}"
                                class="block px-2.5 pb-2.5 pt-4 w-full text-md text[#763c26] bg-white appearance-none shadow-gray-900 focus:outline focus:ring-1 focus:border-none focus:ring-[#763c26] peer shadow-lg rounded-md"
                                placeholder=" " />
                            <label for="date_effet"
                                class="cursor-pointer absolute dark:text-[#763c26]/95 rounded-md duration-300 transform -translate-y-4 scale-75 top-2 z-10 origin-[0] bg-white  px-2 peer-focus:px-2 peer-placeholder-shown:scale-100 peer-placeholder-shown:-translate-y-1/2 peer-placeholder-shown:top-1/2 peer-focus:top-2 peer-focus:scale-75 peer-focus:-translate-y-4 start-1 rtl:peer-focus:translate-x-1/4 rtl:peer-focus:left-auto">Date
                                d'effet souhaitée</label>
                        </div>
                    </div>

                    <!-- Contact principal : Email -->
                    <div>
                        <div class="relative">
                            <textarea id="besoins_specifiques" name="besoins_specifiques"
                            class="block w-full px-2.5 pb-2.5 pt-4 text-md text[#763c26] focus:ring-1 focus:border-none bg-white focus:ring-[#763c26] shadow-gray-900 peer shadow-lg rounded-md"
                            placeholder="Description des besoins spécifiques">{{old('besoins_specifiques')}}</textarea>
                        </div>
                    </div>
                </div>
                    <h4 class="text-lg mb-6 font-semibold  dark:text-[#763c26]/95">Historique des Sinistres</h4>
                    <div class="grid gap-6 mb-6 md:grid-cols-2">
                        <table class="w-full shadow-lg shadow-gray-900  text-sm text-left 0">
                            <thead class="text-xs uppercase bg-[#763c26]  text-white">
                                <tr>
                                    <th scope="col" class="px-6 py-3">Année</th>
                                    <th scope="col" class="px-6 py-3">Nature du sinistre</th>
                                    <th scope="col" class="px-6 py-3">Montant des pertes (en devise)</th>
                                </tr>
                            </thead>
                            <tbody>
                                <!-- First row -->
                                <tr class="bg-white border-b border-gray-700">
                                    <th scope="row" class="px-6 py-4 font-medium text-[#763c26] whitespace-nowrap">2024
                                    </th>
                                    <td class="px-6 py-4 text-[#763c26]">Sinistre </td>
                                    <td class="px-6 py-4 text-[#763c26]">2999 FCFA</td>
                                </tr>
                            </tbody>
                        </table>
                        <div class="relative">
                            <input type="number" id="annee" name="annee" value="{{ old('annee') }}" placeholder=" "
                            class="block px-2.5 pb-2.5 pt-4 w-full text-md text[#763c26] bg-white appearance-none shadow-gray-900 focus:outline focus:ring-1 focus:border-none focus:ring-[#763c26] peer shadow-lg rounded-md"
                            min="1000" max="9999" oninput="if(this.value.length > 4) this.value = this.value.slice(0, 4);">

                            <label for="annee"
                                class="cursor-pointer absolute dark:text-[#763c26]/95 rounded-md duration-300 transform -translate-y-4 scale-75 top-2 z-10 origin-[0] bg-white px-2 peer-focus:px-2 peer-placeholder-shown:scale-100 peer-placeholder-shown:-translate-y-1/2 peer-placeholder-shown:top-1/2 peer-focus:top-2 peer-focus:scale-75 peer-focus:-translate-y-4 start-1">Année</label>
                        </div>
                        <div class="relative">
                            <!-- Montant de pertes -->
                            <input type="number" id="montant_pertes" name="montant_pertes" value="{{ old('montant_pertes') }}" placeholder=" "
                                class="block px-2.5 pb-2.5 pt-4 w-full text-md text[#763c26] bg-white appearance-none shadow-gray-900 focus:outline focus:ring-1 focus:border-none focus:ring-[#763c26] peer shadow-lg rounded-md">
                            <label for="montant_pertes"
                                class="cursor-pointer absolute dark:text-[#763c26]/95 rounded-md duration-300 transform -translate-y-4 scale-75 top-2 z-10 origin-[0] bg-white px-2 peer-focus:px-2 peer-placeholder-shown:scale-100 peer-placeholder-shown:-translate-y-1/2 peer-placeholder-shown:top-1/2 peer-focus:top-2 peer-focus:scale-75 peer-focus:-translate-y-4 start-1">Montant de pertes</label>
                        </div>
                        
                        <div class="relative">
                            <!-- Nature du sinistre -->
                            <input type="text" id="nature_sinistre" name="nature_sinistre" value="{{ old('nature_sinistre') }}" placeholder=" "
                                class="block px-2.5 pb-2.5 pt-4 w-full text-md text[#763c26] bg-white appearance-none shadow-gray-900 focus:outline focus:ring-1 focus:border-none focus:ring-[#763c26] peer shadow-lg rounded-md">
                            <label for="nature_sinistre"
                                class="cursor-pointer absolute dark:text-[#763c26]/95 rounded-md duration-300 transform -translate-y-4 scale-75 top-1 z-10 origin-[0] bg-white px-2 peer-focus:px-2 peer-placeholder-shown:scale-100 peer-placeholder-shown:-translate-y-1/2 peer-placeholder-shown:top-1/2 peer-focus:top-2 peer-focus:scale-75 peer-focus:-translate-y-4 start-1">Nature du sinistre</label>
                        </div>
                        
                        
                        <div>
                            <textarea id="descrption_sinistre" name="description_sinistres"
                                class="block w-full px-2.5 pb-2.5 pt-4 text-md text[#763c26] bg-white focus:ring-1 focus:border-none focus:ring-[#763c26] shadow-gray-900 peer shadow-lg rounded-md"
                                placeholder="Description des sinistres majeurs">{{ old('description_sinistres') }}</textarea>
                        
                            @error('description_sinistres')
                                <p class="text-red-500 text-sm mt-1">{{ $message }}</p>
                            @enderror
                        </div>
                        <div class="relative">
                            <ul class="items-center w-full text-sm font-medium text-gray-900  shadow-lg bg-white shadow-gray-900 border border-gray-200 rounded-md sm:flex dark:bg-white dark:border-gray-600 dark:text-white">
                                <li class="w-full border-b border-gray-200 sm:border-b-0 sm:border-r dark:border-gray-600">
                                    <div class="flex items-center ps-3">
                                        <input id="horizontal-list-radio-license2" type="radio" value="{{old('descrption_specifiques','Sinistres')}}" name="list-radio2" class="w-4 h-4 text-[#763c26] bg-gray-100 border-gray-300 focus:ring-white dark:focus:ring-[#763c26] dark:ring-offset-[#763c26] dark:focus:ring-offset-[#763c26] focus:ring-1 focus:border-none  dark:border-gray-500">
                                        <label for="horizontal-list-radio-license2" class="w-full py-3 ms-2 text-sm font-medium text-[#763c26]">Sinistres</label>
                                    </div>
                                </li>
                                <li class="w-full border-b border-gray-200 sm:border-b-0 sm:border-r dark:border-gray-600">
                                    <div class="flex items-center ps-3">
                                        <input id="horizontal-list-radio-id2" type="radio" value="{{old('descrption_specifiques','Primes')}}" name="list-radio2" class="w-4 h-4 text-[#763c26] bg-gray-100 border-gray-300 focus:ring-white dark:focus:ring-[#763c26] dark:ring-offset-[#763c26] dark:focus:ring-offset-[#763c26]focus:ring-1 focus:border-none  dark:border-gray-500">
                                        <label for="horizontal-list-radio-id2" class="w-full py-3 ms-2 text-sm font-medium text-[#763c26]">Primes</label>
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <h4 class="text-lg mb-6 font-semibold  dark:text-[#763c26]/95">Documents à Joindre</h4>
                    <div class="grid gap-6 mb-6 md:grid-cols-2">
                        <div>
                            <textarea id="contenu_commentaire" name="contenu_commentaire"
                                class="block w-full px-2.5 pb-2.5 pt-4 text-md text[#763c26] bg-white focus:ring-1 focus:border-none focus:ring-[#763c26] shadow-gray-900 peer shadow-lg rounded-md"
                                placeholder="Commentaires additionnels">{{ old('contenu_commentaire') }}</textarea>
                        
                            @error('contenu_commentaire')
                                <p class="text-red-500 text-sm mt-1">{{ $message }}</p>
                            @enderror
                        </div>
                    
                        <div class="relative overflow-x-auto mb-3 ">
                            <div class="flex items-center justify-center w-full">
                                <label for="dropzone-file" class="flex flex-col items-center justify-center w-full h-32 border-2 border-gray-300 border-dashed rounded-lg hover:text-white cursor-pointer bg-gray-50 dark:hover:bg-white/80 dark:bg-white hover:bg-gray-100 dark:border-gray-600 dark:hover:border-gray-500 ">
                                    <div class="flex flex-col items-center justify-center pt-2 pb-3">
                                        <svg class="w-8 h-8 mb-4 text-[#763c26] hover:text-white" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 20 16">
                                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 13h3a3 3 0 0 0 0-6h-.025A5.56 5.56 0 0 0 16 6.5 5.5 5.5 0 0 0 5.207 5.021C5.137 5.017 5.071 5 5 5a4 4 0 0 0 0 8h2.167M10 15V6m0 0L8 8m2-2 2 2"/>
                                        </svg>
                                        <p class="mb-2 text-sm  text-[#763c26] hover:text-white"><span class="font-semibold">Click to upload</span> or drag and drop</p>
                                        <p class="text-xs  text-[#763c26] hover:text-white">SVG, PNG, JPG or GIF (MAX. 800x400px)</p>
                                    </div>
                                    <input id="dropzone-file" type="file" name="file" class="hidden"/>
                                </label>
                            </div> 
                            @error('file')
                                <p class="text-red-500 text-sm mt-1">{{ $message }}</p>
                            @enderror
                        </div>
                    
                    
                </div>
           
            <!-- Boutons de navigation -->
            <!-- Boutons de navigation -->
            <div class="flex flex-col sm:flex-row justify-between mt-6 md:mx-80">

                <button type="reset"
                    class="relative group inline-flex items-center w-full sm:w-auto px-8 py-2.5 my-1 overflow-hidden text-lg font-medium text-[#763c26] border-2 border-[#763c26] rounded-lg hover:text-white group hover:bg-gray-50">
                    <span
                        class="absolute left-0 block w-full h-0 transition-all bg-[#763c26] opacity-100 group-hover:h-full top-1/2 group-hover:top-0 duration-400 ease"></span>
                    
                    <span
                        class="relative text-base font-semibold transition-all duration-300 group-hover:-translate-x-4">Annuler</span>
                </button>

                <button type="submit"
                    class=" relative w-full sm:w-auto inline-flex items-center justify-start px-6 py-3 overflow-hidden font-medium transition-all bg-indigo-100 rounded-lg hover:bg-white group">
                    <span
                        class="h-48 w-60 rounded rotate-[-40deg] bg-green-500 absolute bottom-0 left-0 -translate-x-full ease-out duration-500 transition-all translate-y-full mb-9 ml-9 group-hover:ml-0 group-hover:mb-32 group-hover:translate-x-0"></span>
                    <span
                        class="relative w-full text-base font-semibold text-left text-[#763c26] transition-colors duration-300 ease-in-out group-hover:text-white">Enrégistrer la cotation</span>
                </button>


            </div>
        </form>
    </section>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script>
        // Fonction pour masquer une alerte
        function closeAlert(alertId) {
            const alertElement = document.getElementById(alertId);
            if (alertElement) {
                alertElement.style.display = 'none';
            }
        }
    </script>
    <script>
        function toggleFields() {
            const selection = document.getElementById("secteur_couverture").value;
            // Flotte automobile
            document.getElementById("nbr_vehicule").classList.add("hidden");
            document.getElementById("type_voiture").classList.add("hidden");
            document.getElementById("usage_").classList.add("hidden");
            document.getElementById("puissance_voiture").classList.add("hidden");

            // Assurance Dommages aux biens
            document.getElementById("typeBien").classList.add("hidden");
            document.getElementById("valeurBiens").classList.add("hidden");
            document.getElementById("choix_ul").classList.add("hidden");
            // cyber_risques
            document.getElementById("taillEntreprise").classList.add("hidden");
            document.getElementById("budgetIt").classList.add("hidden");
    
            if (selection === "Flotte automobile") {
                document.getElementById("nbr_vehicule").classList.remove("hidden");
                document.getElementById("type_voiture").classList.remove("hidden");
                document.getElementById("usage_").classList.remove("hidden");
                document.getElementById("puissance_voiture").classList.remove("hidden");
            } else if (selection === "Dommages aux biens") {
                document.getElementById("typeBien").classList.remove("hidden");
                document.getElementById("valeurBiens").classList.remove("hidden");
                document.getElementById("choix_ul").classList.remove("hidden");
            } else if (selection === "Cyber-risques") {
                document.getElementById("taillEntreprise").classList.remove("hidden");
                document.getElementById("budgetIt").classList.remove("hidden");
                document.getElementById("descrption_specifiques").classList.remove("hidden");
            }
        }
    </script>
    <script>
      document.addEventListener("DOMContentLoaded", function () {
    const form = document.getElementById("multi-step-form");
    const steps = Array.from(document.querySelectorAll(".step-content"));
    const stepper = Array.from(document.querySelectorAll("#stepper li"));
    const nextBtn = document.querySelector(".next-step");
    const prevBtn = document.querySelector(".previous-step");
    const submitBtn = document.querySelector(".submit-step");

    let currentStep = 0;

    // Afficher l'étape actuelle
    function showStep(index) {
    steps.forEach((step, i) => {
        step.classList.toggle("hidden", i !== index);
    });

    stepper.forEach((step, i) => {
        const stepText = step.querySelector("span");
        const stepIndicator = step.querySelector("div");

        // Activer ou désactiver les styles de l'étape
        step.classList.toggle("text-[#102147]", i <= index);
        stepIndicator.classList.toggle("bg-[#102147]", i <= index);
        stepIndicator.classList.toggle("bg-gray-100", i > index);
        stepIndicator.classList.toggle("dark:bg-gray-700", i > index);

        // Ajouter une barre sous le texte actif
        if (i === index) {
            stepText.classList.add("border-b-4", "border-[#102147]");
        } else {
            stepText.classList.remove("border-b-4", "border-[#102147]");
        }
    });

    // Gérer la visibilité des boutons
    prevBtn.classList.toggle("hidden", index === 0);
    nextBtn.classList.toggle("hidden", index === steps.length - 1);
    submitBtn.classList.toggle("hidden", index !== steps.length - 1);
}


    // Passer à l'étape suivante
    nextBtn.addEventListener("click", () => {
        if (currentStep < steps.length - 1) {
            currentStep++;
            showStep(currentStep);
        }
    });

    // Revenir à l'étape précédente
    prevBtn.addEventListener("click", () => {
        if (currentStep > 0) {
            currentStep--;
            showStep(currentStep);
        }
    });

    // Soumission finale
    form.addEventListener("submit", (e) => {
        e.preventDefault();
        alert("Formulaire soumis avec succès !");
        // Traitez la soumission ici
    });

    // Initialiser avec l'étape 1
    showStep(currentStep);
});


    </script>
@endsection
