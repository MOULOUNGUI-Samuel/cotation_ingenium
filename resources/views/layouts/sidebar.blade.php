<!-- Sidebar -->



@include('layouts.habitu_sidebar')

    <!-- Deuxième bloc -->
    {{-- <div class="fixed z-50 md:w-full lg:w-auto md:bottom-0 py-1.5 -translate-x-1/2 bg-white border border-gray-200 rounded-md lg:bottom-4 left-1/2 bg-blue-950/80 dark:bg-blue-950/90">
        <div class="grid grid-flow-col auto-cols-fr gap-2 items-center justify-center">
           
            <a href="{{route('dashboard')}}" 
                type="button" 
                class="inline-flex flex-col items-center justify-center px-5 py-2 rounded-s-md hover:bg-gray-50 dark:hover:bg-blue-950 group active:bg-blue-100 dark:active:bg-blue-800">
                <svg 
                    class="w-6 h-6 mb-1 text-gray-500 dark:text-gray-400 group-hover:text-blue-200 dark:group-hover:text-blue-200" 
                    fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                    <path
                        d="M4 3a2 2 0 00-2 2v3a2 2 0 002 2h3a2 2 0 002-2V5a2 2 0 00-2-2H4zM4 12a2 2 0 00-2 2v3a2 2 0 002 2h3a2 2 0 002-2v-3a2 2 0 00-2-2H4zM13 3a2 2 0 00-2 2v3a2 2 0 002 2h3a2 2 0 002-2V5a2 2 0 00-2-2h-3zM13 12a2 2 0 00-2 2v3a2 2 0 002 2h3a2 2 0 002-2v-3a2 2 0 00-2-2h-3z">
                    </path>
                </svg>
                <span class="text-sm font-medium leading-tight text-center text-gray-500 dark:text-gray-400 group-hover:text-blue-200 dark:group-hover:text-blue-100">
                    Tableau de bord
                </span>
            </a>

            <button 
                id="dropdownTopButton" data-dropdown-toggle="caisse" data-dropdown-placement="top"
                type="button" 
                class="inline-flex flex-col items-center justify-center px-5 py-2 hover:bg-gray-50 dark:hover:bg-blue-950 group hover:rounded-md active:bg-blue-100 dark:active:bg-blue-800">
                <div class="flex items-center justify-center ">
                    <svg 
                        class="w-6 h-6 mb-1 text-gray-400 dark:text-gray-400 group-hover:text-blue-200 dark:group-hover:text-blue-200" 
                        fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                        <path
                            d="M4 5a2 2 0 012-2h8a2 2 0 012 2h1a1 1 0 010 2h-1v7a2 2 0 01-2 2H6a2 2 0 01-2-2V7H3a1 1 0 110-2h1zm2 2v7h8V7H6zm3 2a1 1 0 000 2h2a1 1 0 100-2H9z">
                        </path>
                    </svg>
                    <svg aria-hidden="true" class="w-6 h-6 text-gray-400 group-hover:text-blue-200 dark:group-hover:text-blue-200" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                        <path fill-rule="evenodd" d="M10 5a1 1 0 011 1v3h3a1 1 0 110 2h-3v3a1 1 0 11-2 0v-3H6a1 1 0 110-2h3V6a1 1 0 011-1z" clip-rule="evenodd"></path>
                    </svg>
                </div>
                <span class="text-sm font-medium leading-tight text-center text-gray-500 dark:text-gray-400 group-hover:text-blue-200 dark:group-hover:text-blue-100">
                    Gestion de caisse
                </span>
            </button>
            <div id="caisse" class="z-10 hidden bg-white divide-y divide-gray-100 rounded-md shadow w-44 dark:bg-blue-950/50 p-2 border border-gray-200 border-opacity-35">
                <ul class="py-2 text-sm text-gray-700 dark:text-gray-200" aria-labelledby="dropdownTopButton">
                  <li>
                    <div class="bg-gray-500/30 shadow shadow-gray-900 rounded-md mb-2">
                        <a href="#"
                            class="flex items-center justify-left gap-2 p-1.5 text-sm font-medium text-white rounded-md transition duration-75 group hover:bg-blue-700/30 dark:text-white dark:hover:bg-blue-700/30">
                            <svg aria-hidden="true"
                                class="w-6 h-6 text-gray-500 transition duration-75 dark:text-white group-hover:text-white dark:group-hover:text-white"
                                fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                <path
                                    d="M4 5a2 2 0 012-2h8a2 2 0 012 2h1a1 1 0 010 2h-1v7a2 2 0 01-2 2H6a2 2 0 01-2-2V7H3a1 1 0 110-2h1zm2 2v7h8V7H6zm3 2a1 1 0 000 2h2a1 1 0 100-2H9z">
                                </path>
                            </svg>
                            <span>Caisse</span>
                        </a>
                    </div>
                  </li>
                  <li>
                    <div class="bg-gray-500/30 shadow shadow-gray-900 rounded-md mb-2">
                        <a href="#"
                            class="flex items-center  justify-left gap-2 p-1.5 text-sm font-medium text-white rounded-md transition duration-75 group hover:bg-blue-700/30 dark:text-white dark:hover:bg-blue-700/30">
                            <svg aria-hidden="true"
                                class="w-6 h-6 text-gray-500 transition duration-75 dark:text-white group-hover:text-white dark:group-hover:text-white"
                                fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                <path
                                    d="M4 3h12a1 1 0 011 1v12a1 1 0 01-1 1H4a1 1 0 01-1-1V4a1 1 0 011-1zm1 2v2h10V5H5zm0 4v6h10V9H5z">
                                </path>
                            </svg>
                            <span>Registre caisse</span>
                        </a>
                    </div>
                  </li>
                  <li>
                    <div class="bg-gray-500/30 shadow shadow-gray-950 rounded-md">
                        <a href="#"
                            class="flex items-center justify-lef gap-2 p-1.5 text-sm font-medium text-white rounded-md transition duration-75 group hover:bg-blue-700/30 dark:text-white dark:hover:bg-blue-700/30">
                            <svg aria-hidden="true"
                                class="w-6 h-6 text-gray-500 transition duration-75 dark:text-white group-hover:text-white dark:group-hover:text-white"
                                fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                <path
                                    d="M3 3a1 1 0 011-1h12a1 1 0 011 1v3H3V3zm0 6h14v8a1 1 0 01-1 1H4a1 1 0 01-1-1V9z">
                                </path>
                            </svg>
                            <span>Registre ventes</span>
                        </a>
                    </div>
                  </li>
                </ul>
            </div>
            <button
                type="button" 
                class="inline-flex flex-col items-center justify-center px-5 py-2 rounded-md hover:bg-gray-50 dark:hover:bg-blue-950 group active:bg-blue-100 dark:active:bg-blue-800">
                <svg aria-hidden="true"
                        class="w-6 h-6 mb-1 text-gray-400 dark:text-gray-400 group-hover:text-blue-200 dark:group-hover:text-blue-200"
                        fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                        <path
                            d="M7 3a1 1 0 000 2h6a1 1 0 100-2H7zM4 7a1 1 0 011-1h10a1 1 0 110 2H5a1 1 0 01-1-1zM2 11a2 2 0 012-2h12a2 2 0 012 2v4a2 2 0 01-2 2H4a2 2 0 01-2-2v-4z">
                        </path>
                    </svg>
                <span class="text-sm font-medium leading-tight text-center text-gray-500 dark:text-gray-400 group-hover:text-blue-200 dark:group-hover:text-blue-100">
                    Articles
                </span>
            </button>
            <button 
                id="dropdownTopButtonStock" data-dropdown-toggle="Stock" data-dropdown-placement="top"
                type="button" 
                class="inline-flex flex-col items-center justify-center px-5 py-2 hover:bg-gray-50 dark:hover:bg-blue-950 group hover:rounded-md active:bg-blue-100 dark:active:bg-blue-800">
                <div class="flex items-center justify-center ">
                    <svg 
                        class="w-6 h-6 mb-1 text-gray-400 dark:text-gray-400 group-hover:text-blue-200 dark:group-hover:text-blue-200" 
                        fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                        <path d="M4 3a2 2 0 00-2 2v10a2 2 0 002 2h12a2 2 0 002-2V5a2 2 0 00-2-2H4zm1 3h10v8H5V6z">
                        </path>
                    </svg>
                    <svg aria-hidden="true" class="w-6 h-6 text-gray-400 group-hover:text-blue-200 dark:group-hover:text-blue-200" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                        <path fill-rule="evenodd" d="M10 5a1 1 0 011 1v3h3a1 1 0 110 2h-3v3a1 1 0 11-2 0v-3H6a1 1 0 110-2h3V6a1 1 0 011-1z" clip-rule="evenodd"></path>
                    </svg>
                </div>
                <span class="text-sm font-medium leading-tight text-center text-gray-500 dark:text-gray-400 group-hover:text-blue-200 dark:group-hover:text-blue-100">
                    Stock
                </span>
            </button>
            <div id="Stock" class="z-10 hidden bg-white divide-y divide-gray-100 rounded-md shadow w-44 dark:bg-blue-950/50 p-2 border border-gray-200 border-opacity-35">
                <ul class="py-2 text-sm text-gray-700 dark:text-gray-200" aria-labelledby="dropdownTopButton">
                  <li>
                    <div class="bg-gray-500/30 shadow shadow-gray-900 rounded-md mb-2">
                        <a href="#"
                            class="flex items-center justify-left gap-0.5 p-2 text-sm font-medium text-white rounded-md transition duration-75 group hover:bg-blue-700/30 dark:text-white dark:hover:bg-blue-700/30">
                            
                            <svg aria-hidden="true"
                                class="w-5 h-5 text-gray-500 transition duration-75 dark:text-white group-hover:text-white dark:group-hover:text-white mr-3"
                                fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                <path
                                    d="M4 3a1 1 0 011-1h10a1 1 0 011 1v14a1 1 0 01-1 1H5a1 1 0 01-1-1V3zm3 2a1 1 0 100 2h6a1 1 0 100-2H7zm0 4a1 1 0 100 2h6a1 1 0 100-2H7z">
                                </path>
                            </svg>
                            <span>Stock article</span>
                        </a>
                    </div>
                  </li>
                  <li>
                    <div class="bg-gray-500/30 shadow shadow-gray-950 rounded-md mb-2">
                        <a href="#"
                            class="flex items-center justify-left gap-0.5 p-2 text-sm font-medium text-white rounded-md transition duration-75 group hover:bg-blue-700/30 dark:text-white dark:hover:bg-blue-700/30">
                           
                            <svg aria-hidden="true"
                                class="w-5 h-5 text-gray-500 transition duration-75 dark:text-white group-hover:text-white dark:group-hover:text-white mr-3"
                                fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                <path
                                    d="M2.5 2a1 1 0 011-1h13a1 1 0 011 1v6a1 1 0 01-1 1h-13a1 1 0 01-1-1V2zm0 8a1 1 0 011-1h13a1 1 0 011 1v6a1 1 0 01-1 1h-13a1 1 0 01-1-1v-6z">
                                </path>
                            </svg>
                            
                            <span>Régularisation</span>
                        </a>
                    </div>
                  </li>
                  <li>
                    <div class="bg-gray-500/30 shadow shadow-gray-950 rounded-md">
                        <a href="#"
                            class="flex items-center justify-left gap-0.5 px-1 py-2 text-sm font-medium text-white rounded-md transition duration-75 group hover:bg-blue-700/30 dark:text-white dark:hover:bg-blue-700/30">
                      
                            <svg aria-hidden="true"
                                class="w-5 h-5 text-gray-500 transition duration-75 dark:text-white group-hover:text-white dark:group-hover:text-white mr-3"
                                fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                <path
                                    d="M3 5a1 1 0 000 2h14a1 1 0 100-2H3zm2 4a1 1 0 000 2h10a1 1 0 100-2H5zm-2 4a1 1 0 100 2h14a1 1 0 100-2H3z">
                                </path>
                            </svg>
                            
                            <span>Mouvement stock</span>
                        </a>
                    </div>
                  </li>
                </ul>
            </div>
            <button 
                id="dropdownTopButtonStock" data-dropdown-toggle="client_fournisseur" data-dropdown-placement="top"
                type="button" 
                class="inline-flex flex-col items-center justify-center px-5 py-2 hover:bg-gray-50 dark:hover:bg-blue-950 group hover:rounded-md active:bg-blue-100 dark:active:bg-blue-800">
                <div class="flex items-center justify-center ">
                    <svg 
                        class="w-6 h-6 mb-1 text-gray-400 dark:text-gray-400 group-hover:text-blue-200 dark:group-hover:text-blue-200" 
                        fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                        <path fill-rule="evenodd"
                            d="M10 3a4 4 0 100 8 4 4 0 000-8zm-7 9a7 7 0 0114 0v2a1 1 0 01-1 1H4a1 1 0 01-1-1v-2z"
                            clip-rule="evenodd"></path>
                    </svg>
                    <svg aria-hidden="true" class="w-6 h-6 text-gray-400 group-hover:text-blue-200 dark:group-hover:text-blue-200" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                        <path fill-rule="evenodd" d="M10 5a1 1 0 011 1v3h3a1 1 0 110 2h-3v3a1 1 0 11-2 0v-3H6a1 1 0 110-2h3V6a1 1 0 011-1z" clip-rule="evenodd"></path>
                    </svg>
                </div>
                <span class="text-sm font-medium leading-tight text-center text-gray-500 dark:text-gray-400 group-hover:text-blue-200 dark:group-hover:text-blue-100">
                    Clients et Fournisseurs
                </span>
            </button>
            <div id="client_fournisseur" class="z-10 hidden bg-white divide-y divide-gray-100 rounded-md shadow w-44 dark:bg-blue-950/50 p-2 border border-gray-200 border-opacity-35">
                <ul class="py-2 text-sm text-gray-700 dark:text-gray-200" aria-labelledby="dropdownTopButton">
                  <li>
                    <div class="bg-gray-500/30 shadow shadow-gray-900 rounded-md mb-2">
                        <a href="#"
                            class="flex items-center justify-left gap-0.5 p-2 text-sm font-medium text-white rounded-md transition duration-75 group hover:bg-blue-700/30 dark:text-white dark:hover:bg-blue-700/30">
                           
                            <svg aria-hidden="true"
                                class="w-5 h-5 text-gray-500 transition duration-75 dark:text-white group-hover:text-white dark:group-hover:text-white mr-3"
                                fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                <path fill-rule="evenodd"
                                    d="M8.5 4.5a2 2 0 100-4 2 2 0 000 4zM2 11a5.5 5.5 0 0111 0v3a1 1 0 01-1 1H3a1 1 0 01-1-1v-3z"
                                    clip-rule="evenodd"></path>
                            </svg>
                            <span>Clients</span>
                        </a>
                    </div>
                  </li>
                  <li>
                    <div class="bg-gray-500/30 shadow shadow-gray-950 rounded-md">
                        <a href="#"
                            class="flex items-center justify-left gap-0.5 p-2 text-sm font-medium text-white rounded-md transition duration-75 group hover:bg-blue-700/30 dark:text-white dark:hover:bg-blue-700/30">
                           
                            <svg aria-hidden="true"
                                class="w-5 h-5 text-gray-500 transition duration-75 dark:text-white group-hover:text-white dark:group-hover:text-white mr-3"
                                fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                <path
                                    d="M5 3a1 1 0 00-1 1v10a1 1 0 001 1h10a1 1 0 001-1V4a1 1 0 00-1-1H5zm1 2h8v8H6V5zM3 13a1 1 0 000 2h12a1 1 0 100-2H3z">
                                </path>
                            </svg>
                            <span>Fournisseurs</span>
                        </a>
                    </div>
                  </li>
                </ul>
            </div>
            <button 
                id="dropdownTopButtonStock" data-dropdown-toggle="Fournisseurs" data-dropdown-placement="top"
                type="button" 
                class="inline-flex flex-col items-center justify-center px-5 py-2 hover:bg-gray-50 dark:hover:bg-blue-950 group hover:rounded-md active:bg-blue-100 dark:active:bg-blue-800">
                <div class="flex items-center justify-center ">
                    <svg 
                        class="w-6 h-6 mb-1 text-gray-400 dark:text-gray-400 group-hover:text-blue-200 dark:group-hover:text-blue-200" 
                        fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                        <path
                            d="M5 3a1 1 0 00-1 1v10a1 1 0 001 1h10a1 1 0 001-1V4a1 1 0 00-1-1H5zm1 2h8v8H6V5zM3 13a1 1 0 000 2h12a1 1 0 100-2H3z">
                        </path>
                    </svg>
                    <svg aria-hidden="true" class="w-6 h-6 text-gray-400 group-hover:text-blue-200 dark:group-hover:text-blue-200" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                        <path fill-rule="evenodd" d="M10 5a1 1 0 011 1v3h3a1 1 0 110 2h-3v3a1 1 0 11-2 0v-3H6a1 1 0 110-2h3V6a1 1 0 011-1z" clip-rule="evenodd"></path>
                    </svg>
                </div>
                <span class="text-sm font-medium leading-tight text-center text-gray-500 dark:text-gray-400 group-hover:text-blue-200 dark:group-hover:text-blue-100">
                    Achat Fournisseurs
                </span>
            </button>
            <div id="Fournisseurs" class="z-10 hidden bg-white divide-y divide-gray-100 rounded-md shadow w-44 dark:bg-blue-950/50 p-2 border border-gray-200 border-opacity-35">
                <ul class="py-2 text-sm text-gray-700 dark:text-gray-200" aria-labelledby="dropdownTopButton">
                  <li>
                    <div class="bg-gray-500/30 shadow shadow-gray-900 rounded-md mb-2">
                        <a href="#"
                            class="flex items-center justify-left gap-0.5 p-2 text-sm font-medium text-white rounded-md transition duration-75 group hover:bg-blue-700/30 dark:text-white dark:hover:bg-blue-700/30">
                           
                            <svg aria-hidden="true"
                                class="w-5 h-5 text-gray-500 transition duration-75 dark:text-white group-hover:text-white dark:group-hover:text-white mr-3"
                                fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                <path fill-rule="evenodd"
                                    d="M6 2a2 2 0 012-2h4a2 2 0 012 2v4h2a2 2 0 012 2v6a2 2 0 01-2 2H4a2 2 0 01-2-2V8a2 2 0 012-2h2V2zm4 0v4H6V2h4z"
                                    clip-rule="evenodd"></path>
                            </svg>
                            <span>Commandes</span>
                        </a>
                    </div>
                  </li>
                  <li>
                    <div class="bg-gray-500/30 shadow shadow-gray-950 rounded-md mb-2">
                        <a href="#"
                            class="flex items-center justify-left gap-0.5 p-2 text-sm font-medium text-white rounded-md transition duration-75 group hover:bg-blue-700/30 dark:text-white dark:hover:bg-blue-700/30">
                          
                            <svg aria-hidden="true"
                                class="w-5 h-5 text-gray-500 transition duration-75 dark:text-white group-hover:text-white dark:group-hover:text-white mr-3"
                                fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                <path fill-rule="evenodd"
                                    d="M3 3a2 2 0 012-2h10a2 2 0 012 2v14a2 2 0 01-2 2H5a2 2 0 01-2-2V3zm4 3h6v2H7V6zm0 4h6v2H7v-2z"
                                    clip-rule="evenodd"></path>
                            </svg>
                            <span>Réceptions</span>
                        </a>
                    </div>
                  </li>
                  <li>
                    <div class="bg-gray-500/30 shadow shadow-gray-950 rounded-md mb-2">
                        <a href="#"
                            class="flex items-center justify-left gap-0.5 p-2 text-sm font-medium text-white rounded-md transition duration-75 group hover:bg-blue-700/30 dark:text-white dark:hover:bg-blue-700/30">
                           
                            <svg aria-hidden="true"
                                class="w-5 h-5 text-gray-500 transition duration-75 dark:text-white group-hover:text-white dark:group-hover:text-white mr-3"
                                fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                <path fill-rule="evenodd"
                                    d="M7 2a1 1 0 00-1 1v14a1 1 0 001 1h6a1 1 0 001-1V3a1 1 0 00-1-1H7zm1 2h4v1H8V4zm0 3h4v1H8V7zm0 3h4v1H8v-1z"
                                    clip-rule="evenodd"></path>
                            </svg>
                            <span>Factures</span>
                        </a>
                    </div>
                  </li>
                  <li>
                    <div class="bg-gray-500/30 shadow shadow-gray-950 rounded-md">
                        <a href="#"
                            class="flex items-center justify-left gap-0.5 py-2 px-0.5 text-sm font-medium text-white rounded-md transition duration-75 group hover:bg-blue-700/30 dark:text-white dark:hover:bg-blue-700/30">
                            
                            <svg aria-hidden="true"
                                class="w-5 h-5 text-gray-500 transition duration-75 dark:text-white group-hover:text-white dark:group-hover:text-white mr-3"
                                fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                <path
                                d="M4 2a2 2 0 00-2 2v12a2 2 0 002 2h12a2 2 0 002-2V4a2 2 0 00-2-2H4zm6 11a2 2 0 100-4 2 2 0 000 4zm-4-7h8v1H6V6zm0 2h8v1H6V8z" />
                            </svg>
                            <span>Recouvrement clients</span>
                        </a>
                    </div>
                  </li>
                </ul>
            </div>
            
            <button 
                data-tooltip-target="tooltip-profile" 
                type="button" 
                class="inline-flex flex-col items-center justify-center px-5 rounded-e-lg hover:bg-gray-50 dark:hover:bg-blue-950 group active:bg-blue-100 dark:active:bg-blue-800">
                <svg class="w-5 h-5 mb-1 text-gray-500 dark:text-gray-400 group-hover:text-blue-600 dark:group-hover:text-blue-500" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 20 20">
                    <path d="M10 0a10 10 0 1 0 10 10A10.011 10.011 0 0 0 10 0Zm0 5a3 3 0 1 1 0 6 3 3 0 0 1 0-6Zm0 13a8.949 8.949 0 0 1-4.951-1.488A3.987 3.987 0 0 1 9 13h2a3.987 3.987 0 0 1 3.951 3.512A8.949 8.949 0 0 1 10 18Z"/>
                </svg>
            </button>
        </div>
    </div> --}}

