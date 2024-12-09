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
    <section class="bg-white dark:bg-gray-900">
        <!-- Section de Paramètres -->
       
        <form class="space-y-4 md:max-h-auto overflow-y-auto p-4" id="multi-step-form">
            <ol id="stepper" class="hidden lg:flex items-center w-full mb-4 sm:mb-5 p-3">
                <!-- Étape 1 : Informations sur le Client -->
                <li class="flex flex-col items-center w-full text-blue-600 dark:text-blue-500  dark:after:border-blue-800">
                    <div class="flex items-center justify-center w-10 h-10 bg-blue-100 rounded-full lg:h-12 lg:w-12 dark:bg-blue-800 shrink-0">
                        <svg class="w-4 h-4 text-blue-600 lg:w-6 lg:h-6 dark:text-blue-300" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 20 16">
                            <path d="M18 0H2a2 2 0 0 0-2 2v12a2 2 0 0 0 2 2h16a2 2 0 0 0 2-2V2a2 2 0 0 0-2-2ZM6.5 3a2.5 2.5 0 1 1 0 5 2.5 2.5 0 0 1 0-5ZM3.014 13.021l.157-.625A3.427 3.427 0 0 1 6.5 9.571a3.426 3.426 0 0 1 3.322 2.805l.159.622-6.967.023ZM16 12h-3a1 1 0 0 1 0-2h3a1 1 0 0 1 0 2Zm0-3h-3a1 1 0 1 1 0-2h3a1 1 0 1 1 0 2Zm0-3h-3a1 1 0 1 1 0-2h3a1 1 0 1 1 0 2Z" />
                        </svg>
                    </div>
                    <span class="mt-2 text-sm font-medium sm:text-base">Informations sur le Client</span>
                </li>
        
                <!-- Étape 2 : Nature du Risque -->
                <li class="step flex flex-col items-center w-full  dark:after:border-gray-700">
                    <div class="flex items-center justify-center w-10 h-10 bg-gray-100 rounded-full lg:h-12 lg:w-12 dark:bg-gray-700 shrink-0">
                        <svg class="w-4 h-4 text-blue-600 lg:w-6 lg:h-6 dark:text-blue-300" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 20 14">
                            <path d="M18 0H2a2 2 0 0 0-2 2v10a2 2 0 0 0 2 2h16a2 2 0 0 0 2-2V2a2 2 0 0 0-2-2ZM2 12V6h16v6H2Z" />
                            <path d="M6 8H4a1 1 0 0 0 0 2h2a1 1 0 0 0 0-2Zm8 0H9a1 1 0 0 0 0 2h5a1 1 0 1 0 0-2Z" />
                        </svg>
                    </div>
                    <span class="mt-2 text-sm font-medium sm:text-base text-white">Nature du Risque</span>
                </li>
        
                <!-- Étape 3 : Informations spécifiques -->
                <li class="step flex flex-col items-center w-full  dark:after:border-gray-700">
                    <div class="flex items-center justify-center w-10 h-10 bg-gray-100 rounded-full lg:h-12 lg:w-12 dark:bg-gray-700 shrink-0">
                        <svg class="w-4 h-4 text-blue-600 lg:w-6 lg:h-6 dark:text-blue-300" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 18 20">
                            <path d="M16 1h-3.278A1.992 1.992 0 0 0 11 0H7a1.993 1.993 0 0 0-1.722 1H2a2 2 0 0 0-2 2v15a2 2 0 0 0 2 2h14a2 2 0 0 0 2-2V3a2 2 0 0 0-2-2ZM7 2h4v3H7V2Zm5.7 8.289-3.975 3.857a1 1 0 0 1-1.393 0L5.3 12.182a1.002 1.002 0 1 1 1.4-1.436l1.328 1.289 3.28-3.181a1 1 0 1 1 1.392 1.435Z" />
                        </svg>
                    </div>
                    <span class="mt-2 text-sm font-medium sm:text-base text-white">Informations spécifiques</span>
                </li>
        
                <!-- Étape 4 : Historique des Sinistres -->
                <li class="step flex flex-col items-center w-full  dark:after:border-gray-700">
                    <div class="flex items-center justify-center w-10 h-10 bg-gray-100 rounded-full lg:h-12 lg:w-12 dark:bg-gray-700 shrink-0">
                        <svg class="w-4 h-4 text-blue-600 lg:w-6 lg:h-6 dark:text-blue-300" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 20 20">
                            <path d="M5 9a3 3 0 1 1 6 0 3 3 0 0 1-6 0ZM2 9a5 5 0 1 1 10 0 5 5 0 0 1-10 0ZM5.5 17a5.978 5.978 0 0 0 4.7-2.329A6.978 6.978 0 0 1 3 10.5H1a8 8 0 0 0 4.5 6.5Z" />
                        </svg>
                    </div>
                    <span class="mt-2 text-sm font-medium sm:text-base text-white">Historique des Sinistres</span>
                </li>
        
                <!-- Étape 5 : Documents à Joindre -->
                <li class="step flex flex-col items-center w-full">
                    <div class="flex items-center justify-center w-10 h-10 bg-gray-100 rounded-full lg:h-12 lg:w-12 dark:bg-gray-700 shrink-0">
                        <svg class="w-4 h-4 text-blue-600 lg:w-6 lg:h-6 dark:text-blue-300" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 20 20">
                            <path d="M10 0a2 2 0 0 1 2 2v14a2 2 0 0 1-4 0V2a2 2 0 0 1 2-2Zm7 4a1 1 0 0 1 1 1v10a3 3 0 0 1-6 0V7a1 1 0 1 1 2 0v8a1 1 0 1 0 2 0V5a1 1 0 0 1 1-1Z" />
                        </svg>
                    </div>
                    <span class="mt-2 text-sm font-medium sm:text-base text-white">Documents à Joindre</span>
                </li>
            </ol>

            <!-- Étape 1 : Informations sur le Client -->
            <div class="step-content">
                <h4 class="text-xl mb-6 font-semibold text-blue-900 dark:text-white">Informations sur le Client</h4>

                <div class="grid gap-6 mb-6 md:grid-cols-2">
                    <!-- Raison sociale ou Nom complet -->
                    <div>
                        <div class="relative">
                            <input type="text" id="raison_sociale"
                                class="block px-2.5 pb-2.5 pt-4 w-full text-md text-gray-950 bg-white appearance-none shadow-gray-900 focus:outline focus:ring-2 focus:ring-teal-500 peer shadow-lg rounded-md"
                                placeholder=" " />
                            <label for="raison_sociale"
                                class="cursor-pointer absolute dark:text-gray-600 rounded-md duration-300 transform -translate-y-4 scale-75 top-2 z-10 origin-[0] bg-white  px-2 peer-focus:px-2 peer-placeholder-shown:scale-100 peer-placeholder-shown:-translate-y-1/2 peer-placeholder-shown:top-1/2 peer-focus:top-2 peer-focus:scale-75 peer-focus:-translate-y-4 start-1 rtl:peer-focus:translate-x-1/4 rtl:peer-focus:left-auto">Raison
                                sociale ou Nom complet</label>
                        </div>
                    </div>

                    <!-- Adresse complète -->
                    <div>
                        <div class="relative">
                            <input type="text" id="adresse"
                                class="block px-2.5 pb-2.5 pt-4 w-full text-md text-gray-950 bg-white appearance-none shadow-gray-900 focus:outline focus:ring-2 focus:ring-teal-500 peer shadow-lg rounded-md"
                                placeholder=" " />
                            <label for="adresse"
                                class="cursor-pointer absolute dark:text-gray-600 rounded-md duration-300 transform -translate-y-4 scale-75 top-2 z-10 origin-[0] bg-white  px-2 peer-focus:px-2 peer-placeholder-shown:scale-100 peer-placeholder-shown:-translate-y-1/2 peer-placeholder-shown:top-1/2 peer-focus:top-2 peer-focus:scale-75 peer-focus:-translate-y-4 start-1 rtl:peer-focus:translate-x-1/4 rtl:peer-focus:left-auto">Adresse
                                complète</label>
                        </div>
                    </div>

                    <!-- Contact principal : Nom -->
                    <div>
                        <div class="relative">
                            <input type="text" id="contact_nom"
                                class="block px-2.5 pb-2.5 pt-4 w-full text-md text-gray-950 bg-white appearance-none shadow-gray-900 focus:outline focus:ring-2 focus:ring-teal-500 peer shadow-lg rounded-md"
                                placeholder=" " />
                            <label for="contact_nom"
                                class="cursor-pointer absolute dark:text-gray-600 rounded-md duration-300 transform -translate-y-4 scale-75 top-2 z-10 origin-[0] bg-white  px-2 peer-focus:px-2 peer-placeholder-shown:scale-100 peer-placeholder-shown:-translate-y-1/2 peer-placeholder-shown:top-1/2 peer-focus:top-2 peer-focus:scale-75 peer-focus:-translate-y-4 start-1 rtl:peer-focus:translate-x-1/4 rtl:peer-focus:left-auto">Nom
                                du contact principal</label>
                        </div>
                    </div>

                    <!-- Contact principal : Téléphone -->
                    <div>
                        <div class="relative">
                            <input type="number" id="contact_tel"
                                class="block px-2.5 pb-2.5 pt-4 w-full text-md text-gray-950 bg-white appearance-none shadow-gray-900 focus:outline focus:ring-2 focus:ring-teal-500 peer shadow-lg rounded-md"
                                placeholder=" " />
                            <label for="contact_tel"
                                class="cursor-pointer absolute dark:text-gray-600 rounded-md duration-300 transform -translate-y-4 scale-75 top-2 z-10 origin-[0] bg-white  px-2 peer-focus:px-2 peer-placeholder-shown:scale-100 peer-placeholder-shown:-translate-y-1/2 peer-placeholder-shown:top-1/2 peer-focus:top-2 peer-focus:scale-75 peer-focus:-translate-y-4 start-1 rtl:peer-focus:translate-x-1/4 rtl:peer-focus:left-auto">Téléphone</label>
                        </div>
                    </div>

                    <!-- Contact principal : Email -->
                    <div>
                        <div class="relative">
                            <input type="email" id="contact_email"
                                class="block px-2.5 pb-2.5 pt-4 w-full text-md text-gray-950 bg-white appearance-none shadow-gray-900 focus:outline focus:ring-2 focus:ring-teal-500 peer shadow-lg rounded-md"
                                placeholder=" " />
                            <label for="contact_email"
                                class="cursor-pointer absolute dark:text-gray-600 rounded-md duration-300 transform -translate-y-4 scale-75 top-2 z-10 origin-[0] bg-white  px-2 peer-focus:px-2 peer-placeholder-shown:scale-100 peer-placeholder-shown:-translate-y-1/2 peer-placeholder-shown:top-1/2 peer-focus:top-2 peer-focus:scale-75 peer-focus:-translate-y-4 start-1 rtl:peer-focus:translate-x-1/4 rtl:peer-focus:left-auto">Email</label>
                        </div>
                    </div>

                    <!-- Secteur d'activité -->
                    <div>
                        <div class="relative">
                            <select id="secteur_activite"
                                class="block px-2.5 pb-2.5 pt-4 w-full text-md text-gray-950 bg-white appearance-none shadow-gray-900 focus:outline focus:ring-2 focus:ring-teal-500 peer shadow-lg rounded-md">
                                <option value="">Sélectionnez un secteur</option>
                                <option value="industrie">Industrie</option>
                                <option value="commerce">Commerce</option>
                                <option value="services">Services</option>
                            </select>
                            <label for="secteur_activite"
                                class="cursor-pointer absolute dark:text-gray-600 rounded-md duration-300 transform -translate-y-4 scale-75 top-2 z-10 origin-[0] bg-white  px-2 peer-focus:px-2 peer-placeholder-shown:scale-100 peer-placeholder-shown:-translate-y-1/2 peer-placeholder-shown:top-1/2 peer-focus:top-2 peer-focus:scale-75 peer-focus:-translate-y-4 start-1 rtl:peer-focus:translate-x-1/4 rtl:peer-focus:left-auto">Secteur
                                d'activité</label>
                        </div>
                    </div>

                    <!-- Chiffre d'affaires annuel -->
                    <div>
                        <div class="relative">
                            <input type="number" id="chiffre_affaires"
                                class="block px-2.5 pb-2.5 pt-4 w-full text-md text-gray-950 bg-white appearance-none shadow-gray-900 focus:outline focus:ring-2 focus:ring-teal-500 peer shadow-lg rounded-md"
                                placeholder=" " />
                            <label for="chiffre_affaires"
                                class="cursor-pointer absolute dark:text-gray-600 rounded-md duration-300 transform -translate-y-4 scale-75 top-2 z-10 origin-[0] bg-white  px-2 peer-focus:px-2 peer-placeholder-shown:scale-100 peer-placeholder-shown:-translate-y-1/2 peer-placeholder-shown:top-1/2 peer-focus:top-2 peer-focus:scale-75 peer-focus:-translate-y-4 start-1 rtl:peer-focus:translate-x-1/4 rtl:peer-focus:left-auto">Chiffre
                                d'affaires annuel</label>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Étape 2 : Nature du Risque -->
            <div class="step-content hidden">
                <h4 class="text-xl font-semibold mb-4 text-blue-900 dark:text-white">Nature du Risque</h4>
                <div class="grid gap-6 mb-6 md:grid-cols-2">
                    <!-- Type de couverture souhaitée -->
                    <button id="dropdownHelperRadioButton" data-dropdown-toggle="dropdownHelperRadio" class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-4 py-2.5 text-center inline-flex items-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800" type="button">Type de couverture souhaitée <svg class="w-2.5 h-2.5 ms-2.5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 10 6">
                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 1 4 4 4-4"/>
                      </svg></button>
                    <div>
                        <div id="dropdownHelperRadio" class="z-10 hidden bg-white divide-y divide-gray-100 rounded-lg shadow w-60 dark:bg-gray-700 dark:divide-gray-600" data-popper-reference-hidden="" data-popper-escaped="" data-popper-placement="top" style="position: absolute; inset: auto auto 0px 0px; margin: 0px; transform: translate3d(522.5px, 6119.5px, 0px);">
                            <ul class="p-3 space-y-1 text-sm text-gray-700 dark:text-gray-200" aria-labelledby="dropdownHelperRadioButton">
                              <li>
                                <div class="flex p-2 rounded hover:bg-gray-100 dark:hover:bg-gray-600">
                                  <div class="flex items-center h-5">
                                      <input id="helper-radio-1" name="helper-radio" type="radio" value="rc_pro" class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-700 dark:focus:ring-offset-gray-700 focus:ring-2 dark:bg-gray-600 dark:border-gray-500">
                                  </div>
                                  <div class="ms-2 text-sm">
                                      <label for="helper-radio-1" class="font-medium text-gray-900 dark:text-gray-300">
                                        <div>Responsabilité Civile Professionnelle</div>
                                      </label>
                                  </div>
                                </div>
                              </li>
                              <li>
                                <div class="flex p-2 rounded hover:bg-gray-100 dark:hover:bg-gray-600">
                                  <div class="flex items-center h-5">
                                      <input id="helper-radio-2" name="helper-radio" type="radio" value="biens" class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-700 dark:focus:ring-offset-gray-700 focus:ring-2 dark:bg-gray-600 dark:border-gray-500">
                                  </div>
                                  <div class="ms-2 text-sm">
                                      <label for="helper-radio-2" class="font-medium text-gray-900 dark:text-gray-300">
                                        <div>Dommages aux biens</div>
                                      </label>
                                  </div>
                                </div>
                              </li>
                              <li>
                                <div class="flex p-2 rounded hover:bg-gray-100 dark:hover:bg-gray-600">
                                  <div class="flex items-center h-5">
                                      <input id="helper-radio-3" name="helper-radio" type="radio" value="flotte" class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-700 dark:focus:ring-offset-gray-700 focus:ring-2 dark:bg-gray-600 dark:border-gray-500">
                                  </div>
                                  <div class="ms-2 text-sm">
                                      <label for="helper-radio-3" class="font-medium text-gray-900 dark:text-gray-300">
                                        <div>Flotte automobile</div>
                                      </label>
                                  </div>
                                </div>
                              </li>
                              <li>
                                <div class="flex p-2 rounded hover:bg-gray-100 dark:hover:bg-gray-600">
                                  <div class="flex items-center h-5">
                                      <input id="helper-radio-4" name="helper-radio" type="radio" value="cyber" class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-700 dark:focus:ring-offset-gray-700 focus:ring-2 dark:bg-gray-600 dark:border-gray-500">
                                  </div>
                                  <div class="ms-2 text-sm">
                                      <label for="helper-radio-4" class="font-medium text-gray-900 dark:text-gray-300">
                                        <div>Cyber-risques</div>
                                      </label>
                                  </div>
                                </div>
                              </li>
                              <li>
                                <div class="flex p-2 rounded hover:bg-gray-100 dark:hover:bg-gray-600">
                                  <div class="flex items-center h-5">
                                      <input id="helper-radio-5" name="helper-radio" type="radio" value="sante" class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-700 dark:focus:ring-offset-gray-700 focus:ring-2 dark:bg-gray-600 dark:border-gray-500">
                                  </div>
                                  <div class="ms-2 text-sm">
                                      <label for="helper-radio-5" class="font-medium text-gray-900 dark:text-gray-300">
                                        <div>Santé collective</div>
                                      </label>
                                  </div>
                                </div>
                              </li>
                              <li>
                                <div class="flex p-2 rounded hover:bg-gray-100 dark:hover:bg-gray-600">
                                  <div class="flex items-center h-5">
                                      <input id="helper-radio-6" name="helper-radio" type="radio" value="prevoyance" class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-700 dark:focus:ring-offset-gray-700 focus:ring-2 dark:bg-gray-600 dark:border-gray-500">
                                  </div>
                                  <div class="ms-2 text-sm">
                                      <label for="helper-radio-6" class="font-medium text-gray-900 dark:text-gray-300">
                                        <div>Prévoyance</div>
                                      </label>
                                  </div>
                                </div>
                              </li>
                            </ul>
                        </div>
                        
                    </div>

                    <!-- Montant de garantie souhaité -->
                    <div>
                        <div class="relative">
                            <input type="text" id="montant_garantie"
                                class="block px-2.5 pb-2.5 pt-4 w-full text-md text-gray-950 bg-white appearance-none shadow-gray-900 focus:outline focus:ring-2 focus:ring-teal-500 peer shadow-lg rounded-md"
                                placeholder=" " />
                            <label for="montant_garantie"
                                class="cursor-pointer absolute dark:text-gray-600 rounded-md duration-300 transform -translate-y-4 scale-75 top-2 z-10 origin-[0] bg-white  px-2 peer-focus:px-2 peer-placeholder-shown:scale-100 peer-placeholder-shown:-translate-y-1/2 peer-placeholder-shown:top-1/2 peer-focus:top-2 peer-focus:scale-75 peer-focus:-translate-y-4 start-1 rtl:peer-focus:translate-x-1/4 rtl:peer-focus:left-auto">Montant
                                de garantie souhaité</label>
                        </div>
                    </div>

                    <!-- Date d'effet souhaitée -->
                    <div>
                        <div class="relative">
                            <input type="date" id="date_effet"
                                class="block px-2.5 pb-2.5 pt-4 w-full text-md text-gray-950 bg-white appearance-none shadow-gray-900 focus:outline focus:ring-2 focus:ring-teal-500 peer shadow-lg rounded-md"
                                placeholder=" " />
                            <label for="date_effet"
                                class="cursor-pointer absolute dark:text-gray-600 rounded-md duration-300 transform -translate-y-4 scale-75 top-2 z-10 origin-[0] bg-white  px-2 peer-focus:px-2 peer-placeholder-shown:scale-100 peer-placeholder-shown:-translate-y-1/2 peer-placeholder-shown:top-1/2 peer-focus:top-2 peer-focus:scale-75 peer-focus:-translate-y-4 start-1 rtl:peer-focus:translate-x-1/4 rtl:peer-focus:left-auto">Date
                                d'effet souhaitée</label>
                        </div>
                    </div>

                    <!-- Description des besoins spécifiques -->
                    <div class="col-span-2">
                        <textarea id="besoins_specifiques"
                            class="block w-full px-2.5 pb-2.5 pt-4 text-md text-gray-950 bg-white shadow-gray-900 peer shadow-lg rounded-md"
                            placeholder=" "></textarea>
                        <label for="besoins_specifiques"
                            class="cursor-pointer absolute dark:text-gray-600 rounded-md duration-300 transform -translate-y-4 scale-75 top-2 z-10 origin-[0] bg-white  px-2 peer-focus:px-2 peer-placeholder-shown:scale-100 peer-placeholder-shown:-translate-y-1/2 peer-placeholder-shown:top-1/2 peer-focus:top-2 peer-focus:scale-75 peer-focus:-translate-y-4 start-1 rtl:peer-focus:translate-x-1/4 rtl:peer-focus:left-auto">Description
                            des besoins spécifiques</label>
                    </div>
                </div>
            </div>

            <!-- Étape 3 : Assurance Automobile -->
            <div id="step-3" class="step-content hidden">
                <h4 class="text-xl mb-6 font-semibold text-blue-900 dark:text-white">3. Assurance Automobile</h4>
                <div class="grid gap-6 mb-6 md:grid-cols-2">
                    <div>
                        <label for="nb_vehicules" class="cursor-pointer absolute dark:text-gray-600 rounded-md duration-300 transform -translate-y-4 scale-75 top-2 z-10 origin-[0] bg-white  px-2 peer-focus:px-2 peer-placeholder-shown:scale-100 peer-placeholder-shown:-translate-y-1/2 peer-placeholder-shown:top-1/2 peer-focus:top-2 peer-focus:scale-75 peer-focus:-translate-y-4 start-1 rtl:peer-focus:translate-x-1/4 rtl:peer-focus:left-auto">Nombre
                            de véhicules dans la flotte</label>
                        <input type="number" id="nb_vehicules"
                            class="block px-2.5 pb-2.5 pt-4 w-full text-md text-gray-950 bg-white appearance-none shadow-gray-900 focus:outline focus:ring-2 focus:ring-teal-500 peer shadow-lg rounded-md"
                            placeholder="Ex: 10">
                    </div>
                    <div>
                        <label for="type_vehicules" class="cursor-pointer absolute dark:text-gray-600 rounded-md duration-300 transform -translate-y-4 scale-75 top-2 z-10 origin-[0] bg-white  px-2 peer-focus:px-2 peer-placeholder-shown:scale-100 peer-placeholder-shown:-translate-y-1/2 peer-placeholder-shown:top-1/2 peer-focus:top-2 peer-focus:scale-75 peer-focus:-translate-y-4 start-1 rtl:peer-focus:translate-x-1/4 rtl:peer-focus:left-auto">Type
                            de véhicules</label>
                        <select id="type_vehicules"
                            class="block px-2.5 pb-2.5 pt-4 w-full text-md text-gray-950 bg-white appearance-none shadow-gray-900 focus:outline focus:ring-2 focus:ring-teal-500 peer shadow-lg rounded-md">
                            <option value="legers">Légers</option>
                            <option value="poids_lourds">Poids lourds</option>
                            <option value="utilitaires">Utilitaires</option>
                        </select>
                    </div>
                </div>
            </div>

            <!-- Étape 4 : Dommages aux Biens -->
            <div id="step-4" class="step-content hidden">
                <h4 class="text-xl mb-6 font-semibold text-blue-900 dark:text-white">4. Dommages aux Biens</h4>
                <div class="grid gap-6 mb-6 md:grid-cols-2">
                    <div>
                        <label for="type_biens" class="cursor-pointer absolute dark:text-gray-600 rounded-md duration-300 transform -translate-y-4 scale-75 top-2 z-10 origin-[0] bg-white  px-2 peer-focus:px-2 peer-placeholder-shown:scale-100 peer-placeholder-shown:-translate-y-1/2 peer-placeholder-shown:top-1/2 peer-focus:top-2 peer-focus:scale-75 peer-focus:-translate-y-4 start-1 rtl:peer-focus:translate-x-1/4 rtl:peer-focus:left-auto">Type de
                            bien à assurer</label>
                        <select id="type_biens"
                            class="block px-2.5 pb-2.5 pt-4 w-full text-md text-gray-950 bg-white appearance-none shadow-gray-900 focus:outline focus:ring-2 focus:ring-teal-500 peer shadow-lg rounded-md">
                            <option value="immeuble">Immeuble</option>
                            <option value="equipements">Équipements</option>
                            <option value="marchandises">Marchandises</option>
                        </select>
                    </div>
                    <div>
                        <label for="valeur_biens" class="cursor-pointer absolute dark:text-gray-600 rounded-md duration-300 transform -translate-y-4 scale-75 top-2 z-10 origin-[0] bg-white  px-2 peer-focus:px-2 peer-placeholder-shown:scale-100 peer-placeholder-shown:-translate-y-1/2 peer-placeholder-shown:top-1/2 peer-focus:top-2 peer-focus:scale-75 peer-focus:-translate-y-4 start-1 rtl:peer-focus:translate-x-1/4 rtl:peer-focus:left-auto">Valeur
                            totale des biens</label>
                        <input type="number" id="valeur_biens"
                            class="block px-2.5 pb-2.5 pt-4 w-full text-md text-gray-950 bg-white appearance-none shadow-gray-900 focus:outline focus:ring-2 focus:ring-teal-500 peer shadow-lg rounded-md"
                            placeholder="Ex: 500,000€">
                    </div>
                </div>
            </div>

            <!-- Étape 5 : Historique des Sinistres -->
            <div id="step-5" class="step-content hidden">
                <h4 class="text-xl mb-6 font-semibold text-blue-900 dark:text-white">5. Historique des Sinistres</h4>
                <div class="grid gap-6 mb-6 md:grid-cols-2">
                    <div>
                        <label for="nb_sinistres" class="cursor-pointer absolute dark:text-gray-600 rounded-md duration-300 transform -translate-y-4 scale-75 top-2 z-10 origin-[0] bg-white  px-2 peer-focus:px-2 peer-placeholder-shown:scale-100 peer-placeholder-shown:-translate-y-1/2 peer-placeholder-shown:top-1/2 peer-focus:top-2 peer-focus:scale-75 peer-focus:-translate-y-4 start-1 rtl:peer-focus:translate-x-1/4 rtl:peer-focus:left-auto">Nombre
                            de sinistres déclarés (3 dernières années)</label>
                        <input type="number" id="nb_sinistres"
                            class="block px-2.5 pb-2.5 pt-4 w-full text-md text-gray-950 bg-white appearance-none shadow-gray-900 focus:outline focus:ring-2 focus:ring-teal-500 peer shadow-lg rounded-md">
                    </div>
                </div>
            </div>

            <!-- Boutons de navigation -->
            <!-- Boutons de navigation -->
            <div class="flex justify-between mt-6">
                <button type="button"
                    class="previous-step relative group inline-flex items-center w-full sm:w-auto  px-8 py-2.5 overflow-hidden text-lg font-medium text-white border-2 border-white rounded-lg hover:text-white group hover:bg-gray-50">
                    <span
                        class="absolute left-0 block w-full h-0 transition-all bg-blue-800 opacity-100 group-hover:h-full top-1/2 group-hover:top-0 duration-400 ease"></span>
                    <span
                        class="absolute left-0 flex items-center justify-end w-10 h-7 duration-300 transform -translate-x-full group-hover:translate-x-0 ease mr-2">
                        <svg class="w-5 h-5 mr-3" fill="none" stroke="currentColor" viewBox="0 0 24 24"
                            xmlns="http://www.w3.org/2000/svg">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M10 19l-7-7m0 0l7-7m-7 7h18"></path>
                        </svg>
                    </span>
                    <span
                        class="relative text-base font-semibold transition-all duration-300 group-hover:translate-x-3">Précédent</span>
                </button>

                <button type="button"
                    class="next-step relative group inline-flex items-center w-full sm:w-auto px-8 py-2.5 overflow-hidden text-lg font-medium text-white border-2 border-white rounded-lg hover:text-white group hover:bg-gray-50">
                    <span
                        class="absolute left-0 block w-full h-0 transition-all bg-blue-800 opacity-100 group-hover:h-full top-1/2 group-hover:top-0 duration-400 ease"></span>
                    <span
                        class="absolute right-0 flex items-center justify-start w-10 h-7 duration-300 transform translate-x-full group-hover:translate-x-0 ease ml-2">
                        <svg class="w-5 h-5 ml-3" fill="none" stroke="currentColor" viewBox="0 0 24 24"
                            xmlns="http://www.w3.org/2000/svg">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M14 5l7 7m0 0l-7 7m7-7H3"></path>
                        </svg>
                    </span>
                    <span
                        class="relative text-base font-semibold transition-all duration-300 group-hover:-translate-x-4">Suivant</span>
                </button>

                <button type="submit"
                    class="submit-step hidden relative w-full sm:w-auto inline-flex items-center justify-start px-6 py-3 overflow-hidden font-medium transition-all bg-indigo-100 rounded-lg hover:bg-white group">
                    <span
                        class="w-48 h-48 rounded rotate-[-40deg] bg-green-500 absolute bottom-0 left-0 -translate-x-full ease-out duration-500 transition-all translate-y-full mb-9 ml-9 group-hover:ml-0 group-hover:mb-32 group-hover:translate-x-0"></span>
                    <span
                        class="relative w-full text-base font-semibold text-left text-blue-900 transition-colors duration-300 ease-in-out group-hover:text-white">Soumettre</span>
                </button>


            </div>
        </form>
    </section>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
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
        step.classList.toggle("text-blue-600", i <= index);
        stepIndicator.classList.toggle("bg-blue-100", i <= index);
        stepIndicator.classList.toggle("dark:bg-blue-800", i <= index);
        stepIndicator.classList.toggle("bg-gray-100", i > index);
        stepIndicator.classList.toggle("dark:bg-gray-700", i > index);

        // Ajouter une barre sous le texte actif
        if (i === index) {
            stepText.classList.add("border-b-4", "border-blue-600", "dark:border-blue-300");
        } else {
            stepText.classList.remove("border-b-4", "border-blue-600", "dark:border-blue-300");
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
