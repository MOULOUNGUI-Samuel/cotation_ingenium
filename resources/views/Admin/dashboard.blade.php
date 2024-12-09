@extends('welcome')
@section('content')
    {{-- 
<div id="default-carousel" class="relative w-50" data-carousel="slide" data-carousel-interval="200">
    <!-- Carousel wrapper -->
    <div class="relative h-56 overflow-hidden rounded-lg md:h-96">
        <!-- Item 1 -->
        <div class="carousel-item p-4 w-64 mb-4 text-[#763c26] border border-blue-300 rounded-lg bg-blue-50 dark:bg-gray-800 dark:text-blue-400 dark:border-[#763c26]" role="alert">
            <div class="flex items-center">
              <svg class="flex-shrink-0 w-4 h-4 me-2" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 20 20">
                <path d="M10 .5a9.5 9.5 0 1 0 9.5 9.5A9.51 9.51 0 0 0 10 .5ZM9.5 4a1.5 1.5 0 1 1 0 3 1.5 1.5 0 0 1 0-3ZM12 15H8a1 1 0 0 1 0-2h1v-3H8a1 1 0 0 1 0-2h2a1 1 0 1 1 1 1v4h1a1 1 0 0 1 0 2Z"/>
              </svg>
              <h3 class="text-lg font-medium">Livraison non facturés</h3>
            </div>
            <div class="flex">
              <button type="button" class="text-white bg-[#763c26] hover:bg-blue-900 focus:ring-4 focus:outline-none focus:ring-blue-200 font-medium rounded-lg text-xs px-3 py-1.5 me-2 text-center inline-flex items-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-[#763c26]">
                <svg class="me-2 h-3 w-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 20 14">
                  <path d="M10 0C4.612 0 0 5.336 0 7c0 1.742 3.546 7 10 7 6.454 0 10-5.258 10-7 0-1.664-4.612-7-10-7Zm0 10a3 3 0 1 1 0-6 3 3 0 0 1 0 6Z"/>
                </svg>
                Détails
              </button>
              <button type="button" class="text-[#763c26] bg-transparent border border-[#763c26] hover:bg-blue-900 hover:text-white focus:ring-4 focus:outline-none focus:ring-blue-200 font-medium rounded-lg text-xs px-3 py-1.5 text-center dark:hover:bg-blue-600 dark:border-blue-600 dark:text-blue-400 dark:hover:text-white dark:focus:ring-[#763c26]" data-dismiss-target="#alert-additional-content-1" aria-label="Close">
                fermer l'alerte
              </button>
            </div>
        </div>
        <!-- Item 2 -->
        <div class="carousel-item p-4 mb-4 text-[#763c26] border border-blue-300 rounded-lg bg-blue-50 dark:bg-gray-800 dark:text-blue-400 dark:border-[#763c26]" role="alert">
            <div class="flex items-center">
              <svg class="flex-shrink-0 w-4 h-4 me-2" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 20 20">
                <path d="M10 .5a9.5 9.5 0 1 0 9.5 9.5A9.51 9.51 0 0 0 10 .5ZM9.5 4a1.5 1.5 0 1 1 0 3 1.5 1.5 0 0 1 0-3ZM12 15H8a1 1 0 0 1 0-2h1v-3H8a1 1 0 0 1 0-2h2a1 1 0 1 1 1 1v4h1a1 1 0 0 1 0 2Z"/>
              </svg>
              <h3 class="text-lg font-medium">Facture clients impayés</h3>
            </div>
            <div class="flex">
                <button type="button" class="text-white bg-[#763c26] hover:bg-blue-900 focus:ring-4 focus:outline-none focus:ring-blue-200 font-medium rounded-lg text-xs px-3 py-1.5 me-2 text-center inline-flex items-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-[#763c26]">
                    <svg class="me-2 h-3 w-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 20 14">
                      <path d="M10 0C4.612 0 0 5.336 0 7c0 1.742 3.546 7 10 7 6.454 0 10-5.258 10-7 0-1.664-4.612-7-10-7Zm0 10a3 3 0 1 1 0-6 3 3 0 0 1 0 6Z"/>
                    </svg>
                    Détails
                </button>
                <button type="button" class="text-[#763c26] bg-transparent border border-[#763c26] hover:bg-blue-900 hover:text-white focus:ring-4 focus:outline-none focus:ring-blue-200 font-medium rounded-lg text-xs px-3 py-1.5 text-center dark:hover:bg-blue-600 dark:border-blue-600 dark:text-blue-400 dark:hover:text-white dark:focus:ring-[#763c26]" data-dismiss-target="#alert-additional-content-2" aria-label="Close">
                    fermer l'alerte
                </button>
            </div>
        </div>
    </div>
    <!-- Slider indicators -->
    <div class="absolute z-30 flex -translate-x-1/2 bottom-5 left-1/2 space-x-3 rtl:space-x-reverse">
        <button type="button" class="w-3 h-3 rounded-full" aria-current="true" aria-label="Slide 1" data-carousel-slide-to="0"></button>
        <button type="button" class="w-3 h-3 rounded-full" aria-current="false" aria-label="Slide 2" data-carousel-slide-to="1"></button>
    </div>
    <!-- Slider controls -->
    <button type="button" class="absolute top-0 start-0 z-30 flex items-center justify-center h-full px-4 cursor-pointer group focus:outline-none" data-carousel-prev>
        <span class="inline-flex items-center justify-center w-10 h-10 rounded-full bg-white/30 dark:bg-gray-800/30 group-hover:bg-white/50 dark:group-hover:bg-gray-800/60 group-focus:ring-4 group-focus:ring-white dark:group-focus:ring-gray-800/70 group-focus:outline-none">
            <svg class="w-4 h-4 text-white dark:text-gray-800 rtl:rotate-180" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 6 10">
                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 1 1 5l4 4"/>
            </svg>
            <span class="sr-only">Previous</span>
        </span>
    </button>
    <button type="button" class="absolute top-0 end-0 z-30 flex items-center justify-center h-full px-4 cursor-pointer group focus:outline-none" data-carousel-next>
        <span class="inline-flex items-center justify-center w-10 h-10 rounded-full bg-white/30 dark:bg-gray-800/30 group-hover:bg-white/50 dark:group-hover:bg-gray-800/60 group-focus:ring-4 group-focus:ring-white dark:group-focus:ring-gray-800/70 group-focus:outline-none">
            <svg class="w-4 h-4 text-white dark:text-gray-800 rtl:rotate-180" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 6 10">
                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 9 4-4-4-4"/>
            </svg>
            <span class="sr-only">Next</span>
        </span>
    </button>
</div>

 --}}
    <!-- Conteneur pop-up caché par défaut -->
    <div id="popupContainer" onclick="closeOnClickOutside(event)"
        class="fixed inset-0 hidden bg-black bg-opacity-50 backdrop-blur-sm flex items-start justify-center z-50 pt-10">
        <div class="mx-6" onclick="event.stopPropagation()">
            <div
                class="bg-transparent rounded-lg px-4 sm:px-6 shadow-lg shadow-blue-500/50 flex items-center space-x-4 max-w-full sm:max-w-xl relative">
                <!-- Bordures personnalisées -->
                <div class="absolute top-0 left-0 h-4 w-4 border-t-4 border-l-4 border-blue-600"></div>
                <div class="absolute bottom-0 right-0 h-4 w-4 border-b-4 border-r-4 border-blue-600"></div>

                <!-- Avatar responsive -->
                <img src="images/avatard.png" alt="Avatar"
                    class="w-20 h-20 sm:w-28 sm:h-28 md:w-36 md:h-48 lg:w-44 lg:h-64 shadow-md shadow-white sm:shadow-none md:rounded-none rounded-full">

                <!-- Bouton de fermeture -->
                <button onclick="toggleDialog()"
                    class="absolute top-1 left-1 sm:top-0.5 sm:left-0.5 px-4 py-2 border-2 border-white text-white rounded-full hover:bg-blue-900 hover:text-white transition duration-200 ease-in-out hidden md:inline">
                    &times;
                </button>


                <!-- Contenu de la boîte de dialogue -->
                <div class="bg-white py-3 px-3 rounded-tl-3xl rounded-br-3xl sm:px-4 md:py-4 md:px-6 w-full">
                    <div class="flex items-center mb-2 text-[#763c26]">
                        <svg class="flex-shrink-0 w-4 h-4 me-2" aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
                            fill="currentColor" viewBox="0 0 20 20">
                            <path
                                d="M10 .5a9.5 9.5 0 1 0 9.5 9.5A9.51 9.51 0 0 0 10 .5ZM9.5 4a1.5 1.5 0 1 1 0 3 1.5 1.5 0 0 1 0-3ZM12 15H8a1 1 0 0 1 0-2h1v-3H8a1 1 0 0 1 0-2h2a1 1 0 0 1 1 1v4h1a1 1 0 0 1 0 2Z" />
                        </svg>
                        <span class="sr-only">Info</span>
                        <h3 class="text-lg font-medium">Bonjour Samuel</h3>
                    </div>
                    <p id="dialogText" class="text-xs sm:text-sm md:text-base text-gray-800 mb-5 text-justify">
                        Je suis ChatBiz, votre assistant dédié pour vous informer des alertes importantes sur la plateforme
                        ManagerBiz
                    </p>
                    <div class="flex justify-end">
                        <button type="button"
                            class="relative group inline-flex items-center w-full sm:w-auto px-4 py-2 sm:px-4 sm:py-3 overflow-hidden text-xs sm:text-sm font-medium text-[#763c26] border-2 border-[#763c26] hover:border-white rounded-md hover:text-white group hover:bg-gray-50">
                            <span
                                class="absolute left-0 block w-full h-0 transition-all bg-[#763c26] opacity-100 group-hover:h-full top-1/2 group-hover:top-0 duration-400 ease"></span>
                            <span
                                class="absolute right-0 flex items-center justify-start w-10 h-7 duration-300 transform translate-x-full group-hover:translate-x-0 ease ml-2">
                                <svg class="w-4 h-4 sm:w-5 sm:h-5 ml-4" fill="none" stroke="currentColor"
                                    viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M14 5l7 7m0 0l-7 7m7-7H3"></path>
                                </svg>
                            </span>
                            <span
                                class="relative text-xs sm:text-sm font-semibold transition-all duration-300 group-hover:-translate-x-2">Ajouter
                                les articles en stock</span>
                        </button>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="flex justify-end items-start mb-4">
        <!-- Bouton -->
        <button id="dropdownToggleButton" data-dropdown-toggle="dropdownToggle"
            class="text-white border-2 border-white px-8 bg-transparent hover:bg-blue-900/50 inline-flex font-medium rounded-md text-base py-2.5 text-center dark:bg-transparent dark:hover:bg-blue-900/50 dark:border-white"
            type="button">
            Periode d'affichage
            <svg class="w-3 h-6 ms-2" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none"
                viewBox="0 0 10 6">
                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                    d="m1 1 4 4 4-4" />
            </svg>
        </button>




        <!-- Menu déroulant -->
        <div id="dropdownToggle"
            class="z-10 hidden bg-white divide-y divide-gray-100 rounded-lg shadow w-72 dark:bg-gray-800 border border-white-900 dark:divide-gray-600 mt-2">
            <ul class="p-3 space-y-1 text-sm text-gray-700 dark:text-gray-200" aria-labelledby="dropdownToggleButton">
                <li>
                    <div class="flex p-2 rounded hover:bg-gray-100 dark:hover:bg-gray-600">
                        <label class="inline-flex items-center w-full cursor-pointer">
                            <input type="checkbox" value="" class="sr-only peer">
                            <div
                                class="relative w-9 h-5 bg-gray-200 peer-focus:outline-none peer-focus:ring-4 peer-focus:ring-blue-300 dark:peer-focus:ring-[#763c26] rounded-full peer dark:bg-gray-600 peer-checked:after:translate-x-full rtl:peer-checked:after:translate-x-[-100%] peer-checked:after:border-white after:content-[''] after:absolute after:top-[2px] after:start-[2px] after:bg-white after:border-gray-300 after:border after:rounded-full after:h-4 after:w-4 after:transition-all dark:border-gray-500 peer-checked:bg-blue-600">
                            </div>
                            <span class="ms-3 text-sm font-medium text-gray-900 dark:text-gray-300">Enable
                                notifications</span>
                        </label>
                    </div>
                </li>
                <li>
                    <div class="flex p-2 rounded hover:bg-gray-100 dark:hover:bg-gray-600">
                        <label class="inline-flex items-center w-full cursor-pointer">
                            <input type="checkbox" value="" class="sr-only peer">
                            <div
                                class="relative w-9 h-5 bg-gray-200 peer-focus:outline-none peer-focus:ring-4 peer-focus:ring-blue-300 dark:peer-focus:ring-[#763c26] rounded-full peer dark:bg-gray-600 peer-checked:after:translate-x-full rtl:peer-checked:after:translate-x-[-100%] peer-checked:after:border-white after:content-[''] after:absolute after:top-[2px] after:start-[2px] after:bg-white after:border-gray-300 after:border after:rounded-full after:h-4 after:w-4 after:transition-all dark:border-gray-500 peer-checked:bg-blue-600">
                            </div>
                            <span class="ms-3 text-sm font-medium text-gray-900 dark:text-gray-300">Enable 2FA
                                authentication</span>
                        </label>
                    </div>
                </li>
                <li>
                    <div class="flex p-2 rounded hover:bg-gray-100 dark:hover:bg-gray-600">
                        <label class="inline-flex items-center w-full cursor-pointer">
                            <input type="checkbox" value="" class="sr-only peer">
                            <div
                                class="relative w-9 h-5 bg-gray-200 peer-focus:outline-none peer-focus:ring-4 peer-focus:ring-blue-300 dark:peer-focus:ring-[#763c26] rounded-full peer dark:bg-gray-600 peer-checked:after:translate-x-full rtl:peer-checked:after:translate-x-[-100%] peer-checked:after:border-white after:content-[''] after:absolute after:top-[2px] after:start-[2px] after:bg-white after:border-gray-300 after:border after:rounded-full after:h-4 after:w-4 after:transition-all dark:border-gray-500 peer-checked:bg-blue-600">
                            </div>
                            <span class="ms-3 text-sm font-medium text-gray-900 dark:text-gray-300">Subscribe to
                                newsletter</span>
                        </label>
                    </div>
                </li>
            </ul>
        </div>
    </div>


    {{-- card --}}
    <div class="flex flex-col md:flex-row mb-4 gap-6">
        <div class="flex flex-row flex-wrap shadow-lg shadow-slate-700 items-center rounded-lg flex-1   bg-white/90">
            <!-- Icône à gauche -->
            <div class="flex justify-center items-center w-1/3">
                <img class="px-4 dark:bg-light-800" src="images/recu.png" alt="product image" width="160" />
            </div>

            <!-- Contenu de la carte -->
            <div class="flex flex-col justify-between p-4 bg-danger-50 w-2/3 text-center">
                <h5 class="mb-2 text-md font-bold tracking-tight text-[#763c26]">
                    Nombre de cotations reçu
                </h5>
                <h5 class="mb-2 text-2xl font-bold tracking-tight text-center  text-[#763c26]">
                    45
                </h5>
                <a href="#"
                    class="text-[#763c26] bg-white shadow-lg shadow-gray-900 hover:bg-blue-50 focus:ring-4 focus:outline-none font-medium rounded-md text-sm px-5 py-2.5 text-center dark:hover:bg-blue-100/90">
                    Voir les détails
                </a>
            </div>
        </div>


        <div class="flex flex-row flex-wrap shadow-lg shadow-slate-700 items-center rounded-lg flex-1   bg-white/90">
            <!-- Icône à gauche -->
            <div class="flex justify-center items-center w-1/3">
                <img class="px-4 dark:bg-light-800" src="images/envoyer.png" alt="product image" width="150" />
            </div>

            <!-- Contenu de la carte -->
            <div class="flex flex-col justify-between p-4 bg-danger-50 w-2/3">
                <p class="mb-2 text-md font-bold tracking-tight text-[#763c26]">
                    Nombre de cotations envoyées
                </p>
                <h5 class="mb-2 text-2xl font-bold tracking-tight text-center  text-[#763c26]">
                    45
                </h5>
                <a href="#"
                    class="text-[#763c26] bg-white shadow-lg shadow-gray-900 hover:bg-blue-50 focus:ring-4 focus:outline-none font-medium rounded-md text-sm px-5 py-2.5 text-center dark:hover:bg-blue-100/90">
                    Voir les détails
                </a>
            </div>
        </div>

        <div class="flex flex-row flex-wrap shadow-lg shadow-slate-700 items-center rounded-lg flex-1   bg-white/90">
            <!-- Icône à gauche -->
            <div class="flex justify-center items-center w-1/3">
                <img class="px-4 dark:bg-light-800" src="images/valider.png" alt="product image" width="150" />
            </div>

            <!-- Contenu de la carte -->
            <div class="flex flex-col justify-between p-4 bg-danger-50 w-2/3">
                <h6 class="mb-2 text-md font-bold tracking-tight text-[#763c26]">
                    Nombre de cotations validées
                </h6>
                <h5 class="mb-2 text-2xl font-bold tracking-tight text-center  text-[#763c26]">
                    45
                </h5>
                <a href="#"
                    class="text-[#763c26] bg-white shadow-lg shadow-gray-900 hover:bg-blue-50 focus:ring-4 focus:outline-none font-medium rounded-md text-sm px-5 py-2.5 text-center dark:hover:bg-blue-100/90">
                    Voir les détails
                </a>
            </div>
        </div>


    </div>

    <div class="flex flex-col md:flex-row mb-4 gap-6">
        <div class="flex flex-row flex-wrap shadow-lg shadow-slate-700 items-center rounded-lg flex-1   bg-white/90">
            <!-- Icône à gauche -->
            <div class="flex justify-center items-center w-1/3">
                <img class="px-4 rounded-t-sm dark:bg-light-800 rounded-2xl" src="images/refuser.png"
                    alt="product image" width="150" />
            </div>
            
            <!-- Contenu de la carte -->
            <div class="flex flex-col justify-between p-4 bg-danger-50 w-2/3">
                <h6 class="mb-2 text-md font-bold tracking-tight text-[#763c26]">
                    Nombre de cotations réfusées
                </h6>
                <h5 class="mb-2 text-2xl font-bold tracking-tight text-center  text-[#763c26]">
                    45
                </h5>
                <a href="#"
                    class="text-[#763c26] bg-white shadow-lg shadow-gray-900 hover:bg-blue-50 focus:ring-4 focus:outline-none font-medium rounded-md text-sm px-5 py-2.5 text-center dark:hover:bg-blue-100/90">
                    Voir les détails
                </a>
            </div>
        </div>

        <div class="flex flex-row flex-wrap shadow-lg shadow-slate-700 items-center rounded-lg flex-1   bg-white/90">
            <!-- Icône à gauche -->
            <div class="flex justify-center items-center w-1/3">
                <img class="px-4 rounded-t-sm dark:bg-light-800 rounded-2xl" src="images/publi.png"
                    alt="product image" width="150" />
            </div>

            <!-- Contenu de la carte -->
            <div class="flex flex-col justify-between p-4 bg-danger-50 w-2/3">
                <p class="mb-2 text-md font-bold tracking-tight text-[#763c26]">
                    Publipostage envoyés
                </p>
                <h5 class="mb-2 text-2xl font-bold tracking-tight text-center  text-[#763c26]">
                    45
                </h5>
                <a href="#"
                    class="text-[#763c26] bg-white shadow-lg shadow-gray-900 hover:bg-blue-50 focus:ring-4 focus:outline-none font-medium rounded-md text-sm px-5 py-2.5 text-center dark:hover:bg-blue-100/90">
                    Voir les détails
                </a>
            </div>
        </div>

        <div class="flex flex-row flex-wrap shadow-lg shadow-slate-700 items-center rounded-lg flex-1   bg-white/90">
            <!-- Icône à gauche -->
            <div class="flex justify-center items-center w-1/3">
                <img class="px-4 rounded-t-sm dark:bg-light-800 rounded-2xl" src="images/publi_recu.png"
                    alt="product image" width="150" />
            </div>

            <!-- Contenu de la carte -->
            <div class="flex flex-col justify-between p-4 bg-danger-50 w-2/3">
                <h6 class="mb-2 text-md font-bold tracking-tight text-[#763c26]">
                    Reponses reçu
                </h6>
                <h5 class="mb-2 text-2xl font-bold tracking-tight text-center  text-[#763c26]">
                    45
                </h5>
                <a href="#"
                    class="text-[#763c26] bg-white shadow-lg shadow-gray-900 hover:bg-blue-50 focus:ring-4 focus:outline-none font-medium rounded-md text-sm px-5 py-2.5 text-center dark:hover:bg-blue-100/90">
                    Voir les détails
                </a>
            </div>
        </div>

    </div>



    <div data-dial-init class="fixed end-6 bottom-6 group">
        <div id="speed-dial-menu-bottom-right" class="flex-col items-center hidden mb-4 space-y-2">
            <button type="button" data-tooltip-target="tooltip-share" data-tooltip-placement="left"
                class="flex justify-center items-center w-[52px] h-[52px] text-gray-500 hover:text-gray-900 bg-white rounded-full border border-gray-200 dark:border-gray-600 shadow-sm dark:hover:text-white dark:text-gray-400 hover:bg-gray-50 dark:bg-gray-700 dark:hover:bg-gray-600 focus:ring-4 focus:ring-gray-300 focus:outline-none dark:focus:ring-gray-400">
                <svg class="w-5 h-5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor"
                    viewBox="0 0 18 18">
                    <path
                        d="M14.419 10.581a3.564 3.564 0 0 0-2.574 1.1l-4.756-2.49a3.54 3.54 0 0 0 .072-.71 3.55 3.55 0 0 0-.043-.428L11.67 6.1a3.56 3.56 0 1 0-.831-2.265c.006.143.02.286.043.428L6.33 6.218a3.573 3.573 0 1 0-.175 4.743l4.756 2.491a3.58 3.58 0 1 0 3.508-2.871Z" />
                </svg>
                <span class="sr-only">Share</span>
            </button>
            <div id="tooltip-share" role="tooltip"
                class="absolute z-10 invisible inline-block w-auto px-3 py-2 text-sm font-medium text-white transition-opacity duration-300 bg-gray-900 rounded-lg shadow-sm opacity-0 tooltip dark:bg-gray-700">
                Share
                <div class="tooltip-arrow" data-popper-arrow></div>
            </div>
            <button type="button" data-tooltip-target="tooltip-print" data-tooltip-placement="left"
                class="flex justify-center items-center w-[52px] h-[52px] text-gray-500 hover:text-gray-900 bg-white rounded-full border border-gray-200 dark:border-gray-600 shadow-sm dark:hover:text-white dark:text-gray-400 hover:bg-gray-50 dark:bg-gray-700 dark:hover:bg-gray-600 focus:ring-4 focus:ring-gray-300 focus:outline-none dark:focus:ring-gray-400">
                <svg class="w-5 h-5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor"
                    viewBox="0 0 20 20">
                    <path d="M5 20h10a1 1 0 0 0 1-1v-5H4v5a1 1 0 0 0 1 1Z" />
                    <path
                        d="M18 7H2a2 2 0 0 0-2 2v6a2 2 0 0 0 2 2v-3a2 2 0 0 1 2-2h12a2 2 0 0 1 2 2v3a2 2 0 0 0 2-2V9a2 2 0 0 0-2-2Zm-1-2V2a2 2 0 0 0-2-2H5a2 2 0 0 0-2 2v3h14Z" />
                </svg>
                <span class="sr-only">Print</span>
            </button>
            <div id="tooltip-print" role="tooltip"
                class="absolute z-10 invisible inline-block w-auto px-3 py-2 text-sm font-medium text-white transition-opacity duration-300 bg-gray-900 rounded-lg shadow-sm opacity-0 tooltip dark:bg-gray-700">
                Print
                <div class="tooltip-arrow" data-popper-arrow></div>
            </div>
            <button type="button" data-tooltip-target="tooltip-download" data-tooltip-placement="left"
                class="flex justify-center items-center w-[52px] h-[52px] text-gray-500 hover:text-gray-900 bg-white rounded-full border border-gray-200 dark:border-gray-600 shadow-sm dark:hover:text-white dark:text-gray-400 hover:bg-gray-50 dark:bg-gray-700 dark:hover:bg-gray-600 focus:ring-4 focus:ring-gray-300 focus:outline-none dark:focus:ring-gray-400">
                <svg class="w-5 h-5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor"
                    viewBox="0 0 20 20">
                    <path
                        d="M14.707 7.793a1 1 0 0 0-1.414 0L11 10.086V1.5a1 1 0 0 0-2 0v8.586L6.707 7.793a1 1 0 1 0-1.414 1.414l4 4a1 1 0 0 0 1.416 0l4-4a1 1 0 0 0-.002-1.414Z" />
                    <path
                        d="M18 12h-2.55l-2.975 2.975a3.5 3.5 0 0 1-4.95 0L4.55 12H2a2 2 0 0 0-2 2v4a2 2 0 0 0 2 2h16a2 2 0 0 0 2-2v-4a2 2 0 0 0-2-2Zm-3 5a1 1 0 1 1 0-2 1 1 0 0 1 0 2Z" />
                </svg>
                <span class="sr-only">Download</span>
            </button>
            <div id="tooltip-download" role="tooltip"
                class="absolute z-10 invisible inline-block w-auto px-3 py-2 text-sm font-medium text-white transition-opacity duration-300 bg-gray-900 rounded-lg shadow-sm opacity-0 tooltip dark:bg-gray-700">
                Download
                <div class="tooltip-arrow" data-popper-arrow></div>
            </div>
            <button type="button" data-tooltip-target="tooltip-copy" data-tooltip-placement="left"
                class="flex justify-center items-center w-[52px] h-[52px] text-gray-500 hover:text-gray-900 bg-white rounded-full border border-gray-200 dark:border-gray-600 dark:hover:text-white shadow-sm dark:text-gray-400 hover:bg-gray-50 dark:bg-gray-700 dark:hover:bg-gray-600 focus:ring-4 focus:ring-gray-300 focus:outline-none dark:focus:ring-gray-400">
                <svg class="w-5 h-5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor"
                    viewBox="0 0 18 20">
                    <path
                        d="M5 9V4.13a2.96 2.96 0 0 0-1.293.749L.879 7.707A2.96 2.96 0 0 0 .13 9H5Zm11.066-9H9.829a2.98 2.98 0 0 0-2.122.879L7 1.584A.987.987 0 0 0 6.766 2h4.3A3.972 3.972 0 0 1 15 6v10h1.066A1.97 1.97 0 0 0 18 14V2a1.97 1.97 0 0 0-1.934-2Z" />
                    <path
                        d="M11.066 4H7v5a2 2 0 0 1-2 2H0v7a1.969 1.969 0 0 0 1.933 2h9.133A1.97 1.97 0 0 0 13 18V6a1.97 1.97 0 0 0-1.934-2Z" />
                </svg>
                <span class="sr-only">Copy</span>
            </button>
            <div id="tooltip-copy" role="tooltip"
                class="absolute z-10 invisible inline-block w-auto px-3 py-2 text-sm font-medium text-white transition-opacity duration-300 bg-gray-900 rounded-lg shadow-sm opacity-0 tooltip dark:bg-gray-700">
                Copy
                <div class="tooltip-arrow" data-popper-arrow></div>
            </div>
        </div>
        <button type="button" onclick="toggleDialog()" data-dial-toggle="speed-dial-menu-bottom-right"
            aria-controls="speed-dial-menu-bottom-right" aria-expanded="false"
            class="flex items-center justify-center text-white bg-blue-900 border-2 border-white rounded-full w-14 h-14 hover:bg-blue-950 dark:bg-blue-900 dark:hover:bg-blue-950 focus:ring-4 focus:ring-blue-300 focus:outline-none dark:focus:ring-[#763c26]">
            <svg class="w-5 h-5 transition-transform group-hover:rotate-45" aria-hidden="true"
                xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 18 18">
                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                    d="M9 1v16M1 9h16" />
            </svg>
            <span class="sr-only">Open actions menu</span>
        </button>
    </div>
@endsection
