<aside
    class="fixed top-0 left-0 z-40 w-64 h-screen pt-16 transition-transform -translate-x-full border-r border-white md:translate-x-0  dark:border-gray-700"
    aria-label="Sidenav" id="drawer-navigation">
<<<<<<< HEAD
    <div class="overflow-y-auto py-5 px-3 h-full bg-[#763c26]/70 dark:bg-[#763c26]/70">
=======
    <div class="overflow-y-auto py-5 px-3 h-full bg-white dark:bg-white">
>>>>>>> 149ce15 (revu du travail)
        <form action="#" method="GET" class="md:hidden mb-2">
            <label for="sidebar-search" class="sr-only">Recherche</label>
            <div class="relative">
                <div class="flex absolute inset-y-0 left-0 items-center pl-3 pointer-events-none">
                    <svg class="w-5 h-5 text-gray-500 dark:text-gray-900" fill="currentColor" viewBox="0 0 20 20"
                        xmlns="http://www.w3.org/2000/svg">
                        <path fill-rule="evenodd" clip-rule="evenodd"
                            d="M8 4a4 4 0 100 8 4 4 0 000-8zM2 8a6 6 0 1110.89 3.476l4.817 4.817a1 1 0 01-1.414 1.414l-4.816-4.816A6 6 0 012 8z">
                        </path>
                    </svg>
                </div>
                <input type="text" name="search" id="sidebar-search"
                    class="bg-white border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-500 focus:border-primary-500 block w-full pl-10 p-2 dark:bg-white dark:border-gray-600 dark:placeholder-gray-700  dark:text-gray-900 dark:focus:ring-primary-500 shadow-gray-900 dark:focus:border-primary-500"
                    placeholder="Tapez la recherche..." />
            </div>
        </form>
        <ul class="space-y-2">
            <li>
                <a href="{{route('dashboard')}}"
<<<<<<< HEAD
                    class="flex items-center p-2 text-base font-medium text-white rounded-lg dark:text-white hover:bg-blue-700/30  dark:hover:bg-blue-700/30 group">
=======
                    class="flex items-center p-2 text-base font-medium text-white rounded-lg dark:text-white bg-[#763c26] hover:bg-[#562816] group">
>>>>>>> 149ce15 (revu du travail)
                    <svg aria-hidden="true"
                        class="w-6 h-6 text-white transition duration-75 dark:text-white group-hover:text-white dark:group-hover:text-white"
                        fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                        <path
                            d="M4 3a2 2 0 00-2 2v3a2 2 0 002 2h3a2 2 0 002-2V5a2 2 0 00-2-2H4zM4 12a2 2 0 00-2 2v3a2 2 0 002 2h3a2 2 0 002-2v-3a2 2 0 00-2-2H4zM13 3a2 2 0 00-2 2v3a2 2 0 002 2h3a2 2 0 002-2V5a2 2 0 00-2-2h-3zM13 12a2 2 0 00-2 2v3a2 2 0 002 2h3a2 2 0 002-2v-3a2 2 0 00-2-2h-3z">
                        </path>
                    </svg>

                    <span class="ml-3">Tableau de bord</span>
                </a>
            </li>
            <li>
                <button type="button"
<<<<<<< HEAD
                    class="flex items-center p-2 w-full text-base font-medium text-white rounded-lg transition duration-75 group hover:bg-blue-700/30  dark:text-white dark:hover:bg-blue-700/30 "
=======
                    class="flex items-center p-2 w-full text-base font-medium text-white rounded-lg transition duration-75 group   dark:text-white bg-[#763c26] hover:bg-[#562816] "
>>>>>>> 149ce15 (revu du travail)
                    aria-controls="dropdown-pages" data-collapse-toggle="dropdown-pages">
                    <svg aria-hidden="true"
                        class="w-6 h-6 text-white transition duration-75 dark:text-white group-hover:text-white dark:group-hover:text-white"
                        fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                        <path
                            d="M4 5a2 2 0 012-2h8a2 2 0 012 2h1a1 1 0 010 2h-1v7a2 2 0 01-2 2H6a2 2 0 01-2-2V7H3a1 1 0 110-2h1zm2 2v7h8V7H6zm3 2a1 1 0 000 2h2a1 1 0 100-2H9z">
                        </path>
                    </svg>
                    <span class="flex-1 ml-3 text-left whitespace-nowrap">Gestion de cotations</span>
                    <svg aria-hidden="true" class="w-6 h-6" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                        <path fill-rule="evenodd" d="M10 5a1 1 0 011 1v3h3a1 1 0 110 2h-3v3a1 1 0 11-2 0v-3H6a1 1 0 110-2h3V6a1 1 0 011-1z" clip-rule="evenodd"></path>
                    </svg>
                    
                </button>
                <ul id="dropdown-pages" class="hidden py-2 space-y-2 pl-4 gap-2">
<<<<<<< HEAD
                    <li class="bg-gray-500/30 shadow shadow-gray-900 rounded-md">
                        <a href="#"
                            class="flex items-center p-2 pl-3 w-full  text-sm font-medium text-white rounded-lg transition duration-75 group hover:bg-blue-700/30  dark:text-white dark:hover:bg-blue-700/30 ">
                            <!-- Icône pour "Caisse" -->
                            <svg aria-hidden="true"
                                class="w-5 h-5 text-gray-500 transition duration-75 dark:text-white group-hover:text-white dark:group-hover:text-white mr-3"
                                fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                <path
                                    d="M4 5a2 2 0 012-2h8a2 2 0 012 2h1a1 1 0 010 2h-1v7a2 2 0 01-2 2H6a2 2 0 01-2-2V7H3a1 1 0 110-2h1zm2 2v7h8V7H6zm3 2a1 1 0 000 2h2a1 1 0 100-2H9z">
                                </path>
                            </svg>
                            Cotations réçu
                        </a>
                    </li>
                    <li class="bg-gray-500/30 shadow shadow-gray-900 rounded-md">
                        <a href="#"
                            class="flex items-center p-2 pl-3 w-full  text-sm font-medium text-white rounded-lg transition duration-75 group hover:bg-blue-700/30  dark:text-white dark:hover:bg-blue-700/30 ">
                            <!-- Icône pour "Registre caisse" -->
                            <svg aria-hidden="true"
                                class="w-5 h-5 text-gray-500 transition duration-75 dark:text-white group-hover:text-white dark:group-hover:text-white mr-3"
=======
                    <li class=" shadow shadow-gray-900 rounded-md">
                        <a href="{{route('liste_cotation')}}"
                        class="flex items-center p-2 pl-3 w-full text-sm font-medium  border-2 border-[#893b1c] rounded-lg transition duration-75 group hover:bg-[#893b1c] hover:text-white dark:text-[#893b1c] dark:border-white dark:hover:bg-[#893b1c] dark:hover:text-white">
                        <!-- Icône pour "Caisse" -->
                        <svg aria-hidden="true"
                             class="w-5 h-5 text-[#893b1c] transition duration-75 dark:text-[#893b1c] group-hover:text-white dark:group-hover:text-white mr-3"
                             fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                             <path
                                 d="M7 4a1 1 0 100 2h6a1 1 0 100-2H7zM4 8a1 1 0 000 2h12a1 1 0 100-2H4zm0 4a1 1 0 000 2h12a1 1 0 100-2H4zm0 4a1 1 0 000 2h6a1 1 0 100-2H4z">
                             </path>
                        </svg>
                        Cotations réçu
                     </a>
                     
                    </li>
                    <li class=" shadow shadow-gray-900 rounded-md">
                        <a href="{{route('ajouter_cotation')}}"
                            class="flex items-center p-2 pl-3 w-full text-sm font-medium  border-2 border-[#893b1c] rounded-lg transition duration-75 group hover:bg-[#893b1c] hover:text-white dark:text-[#893b1c] dark:border-white dark:hover:bg-[#893b1c] dark:hover:text-white">
                            <!-- Icône pour "Registre caisse" -->
                            <svg aria-hidden="true"
                                class="w-5 h-5 text-[#893b1c] transition duration-75 dark:text-[#893b1c] group-hover:text-white dark:group-hover:text-white mr-3"
>>>>>>> 149ce15 (revu du travail)
                                fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                <path
                                    d="M4 3h12a1 1 0 011 1v12a1 1 0 01-1 1H4a1 1 0 01-1-1V4a1 1 0 011-1zm1 2v2h10V5H5zm0 4v6h10V9H5z">
                                </path>
                            </svg>
                            Ajouter une cotation
                        </a>
                    </li>
<<<<<<< HEAD
                    <li class="bg-gray-500/30 shadow shadow-gray-900 rounded-md">
                        <a href="#"
                            class="flex items-center p-2 pl-3 w-full  text-sm font-medium text-white rounded-lg transition duration-75 group hover:bg-blue-700/30  dark:text-white dark:hover:bg-blue-700/30 ">
                            <!-- Icône pour "Registre ventes" -->
                            <svg aria-hidden="true"
                                class="w-5 h-5 text-gray-500 transition duration-75 dark:text-white group-hover:text-white dark:group-hover:text-white mr-3"
                                fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                <path
                                    d="M3 3a1 1 0 011-1h12a1 1 0 011 1v3H3V3zm0 6h14v8a1 1 0 01-1 1H4a1 1 0 01-1-1V9z">
                                </path>
                            </svg>
                            Registre ventes
                        </a>
                    </li>
                    <li class="bg-gray-500/30 shadow shadow-gray-900 rounded-md">
                        <a href="#"
                            class="flex items-center p-2 pl-3 w-full  text-sm font-medium text-white rounded-lg transition duration-75 group hover:bg-blue-700/30  dark:text-white dark:hover:bg-blue-700/30 ">
                            <!-- Icône pour "Registre vente suspendues" -->
                            <svg aria-hidden="true"
                                class="w-5 h-5 text-gray-500 transition duration-75 dark:text-white group-hover:text-white dark:group-hover:text-white mr-3"
                                fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                
                                <path
                                    d="M5 3a1 1 0 00-1 1v10a1 1 0 001 1h10a1 1 0 001-1V4a1 1 0 00-1-1H5zm1 2h8v8H6V5zm2 2a1 1 0 100 2h4a1 1 0 100-2H8z">
                                </path>
                            </svg>
                            Registre vente suspendues
                        </a>
                    </li>
                    <li class="bg-gray-500/30 shadow shadow-gray-900 rounded-md">
                        <a href="#"
                            class="flex items-center p-2 pl-3 w-full  text-sm font-medium text-white rounded-lg transition duration-75 group hover:bg-blue-700/30  dark:text-white dark:hover:bg-blue-700/30 ">
                            <!-- Icône pour "Registre dépenses" -->
                            <svg aria-hidden="true"
                                class="w-5 h-5 text-gray-500 transition duration-75 dark:text-white group-hover:text-white dark:group-hover:text-white mr-3"
                                fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                <path
                                    d="M7 4a1 1 0 100 2h6a1 1 0 100-2H7zM4 8a1 1 0 000 2h12a1 1 0 100-2H4zm0 4a1 1 0 000 2h12a1 1 0 100-2H4zm0 4a1 1 0 000 2h6a1 1 0 100-2H4z">
                                </path>
                            </svg>
                            Registre dépenses
                        </a>
                    </li>
=======
                    
                    
>>>>>>> 149ce15 (revu du travail)

                </ul>
            </li>
            <li>
                <a href="#"
<<<<<<< HEAD
                    class="flex items-center p-2 text-base font-medium text-white rounded-lg transition duration-75 hover:bg-blue-700/30  dark:hover:bg-blue-700/30  dark:text-white group">
=======
                    class="flex items-center p-2 text-base font-medium text-white rounded-lg transition duration-75 bg-[#763c26] hover:bg-[#562816]  dark:text-white group">
>>>>>>> 149ce15 (revu du travail)
                    <svg aria-hidden="true"
                        class="flex-shrink-0 w-6 h-6 text-white transition duration-75 dark:text-white group-hover:text-white dark:group-hover:text-white"
                        fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                        <path
                            d="M7 3a1 1 0 000 2h6a1 1 0 100-2H7zM4 7a1 1 0 011-1h10a1 1 0 110 2H5a1 1 0 01-1-1zM2 11a2 2 0 012-2h12a2 2 0 012 2v4a2 2 0 01-2 2H4a2 2 0 01-2-2v-4z">
                        </path>
                    </svg>
<<<<<<< HEAD
                    <span class="ml-3">Articles</span>
                </a>
            </li>
            <li>
                <button type="button"
                    class="flex items-center p-2 w-full text-base font-medium text-white rounded-lg transition duration-75 group hover:bg-blue-700/30  dark:text-white dark:hover:bg-blue-700/30 "
                    aria-controls="dropdown-sales" data-collapse-toggle="dropdown-sales">
                    <svg aria-hidden="true"
                        class="flex-shrink-0 w-6 h-6 text-gray-500 transition duration-75 group-hover:text-white dark:text-white dark:group-hover:text-white"
                        fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                        <path d="M4 3a2 2 0 00-2 2v10a2 2 0 002 2h12a2 2 0 002-2V5a2 2 0 00-2-2H4zm1 3h10v8H5V6z">
                        </path>
                    </svg>
                    <span class="flex-1 ml-3 text-left whitespace-nowrap">Stock</span>
                    <svg aria-hidden="true" class="w-6 h-6" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                        <path fill-rule="evenodd" d="M10 5a1 1 0 011 1v3h3a1 1 0 110 2h-3v3a1 1 0 11-2 0v-3H6a1 1 0 110-2h3V6a1 1 0 011-1z" clip-rule="evenodd"></path>
                    </svg>
                </button>
                <ul id="dropdown-sales" class="hidden py-2 space-y-2 gap-2 pl-4">
                    <li class="bg-gray-500/30 shadow shadow-gray-900 rounded-md">
                        <a href="#"
                            class="flex items-center p-2 pl-3 w-full   text-sm font-medium text-white rounded-lg transition duration-75 group hover:bg-blue-700/30  dark:text-white dark:hover:bg-blue-700/30 ">
                            <!-- Icône pour "Stock article" -->
                            <svg aria-hidden="true"
                                class="w-5 h-5 text-gray-500 transition duration-75 dark:text-white group-hover:text-white dark:group-hover:text-white mr-3"
                                fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                <path
                                    d="M4 3a1 1 0 011-1h10a1 1 0 011 1v14a1 1 0 01-1 1H5a1 1 0 01-1-1V3zm3 2a1 1 0 100 2h6a1 1 0 100-2H7zm0 4a1 1 0 100 2h6a1 1 0 100-2H7z">
                                </path>
                            </svg>
                            Stock article
                        </a>
                    </li>

                    <li class="bg-gray-500/30 shadow shadow-gray-900 rounded-md">
                        <a href="#"
                            class="flex items-center p-2 pl-3  w-full text-sm font-medium text-white rounded-lg transition duration-75 group hover:bg-blue-700/30  dark:text-white dark:hover:bg-blue-700/30 ">
                            <!-- Icône pour "Régularisation" -->
                            <svg aria-hidden="true"
                                class="w-5 h-5 text-gray-500 transition duration-75 dark:text-white group-hover:text-white dark:group-hover:text-white mr-3"
                                fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                <path
                                    d="M2.5 2a1 1 0 011-1h13a1 1 0 011 1v6a1 1 0 01-1 1h-13a1 1 0 01-1-1V2zm0 8a1 1 0 011-1h13a1 1 0 011 1v6a1 1 0 01-1 1h-13a1 1 0 01-1-1v-6z">
                                </path>
                            </svg>
                            Régularisation
                        </a>
                    </li>

                    <li class="bg-gray-500/30 shadow shadow-gray-900 rounded-md">
                        <a href="#"
                            class="flex items-center p-2 pl-3 w-full  text-sm font-medium text-white rounded-lg transition duration-75 group hover:bg-blue-700/30  dark:text-white dark:hover:bg-blue-700/30 ">
                            <!-- Icône pour "Mouvement stock" -->
                            <svg aria-hidden="true"
                                class="w-5 h-5 text-gray-500 transition duration-75 dark:text-white group-hover:text-white dark:group-hover:text-white mr-3"
                                fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                <path
                                    d="M3 5a1 1 0 000 2h14a1 1 0 100-2H3zm2 4a1 1 0 000 2h10a1 1 0 100-2H5zm-2 4a1 1 0 100 2h14a1 1 0 100-2H3z">
                                </path>
                            </svg>
                            Mouvement stock
                        </a>
                    </li>

                </ul>
            </li>

            <li>
                <button type="button"
                    class="flex items-center p-2 w-full text-base font-medium text-white rounded-lg transition duration-75 group hover:bg-blue-700/30  dark:text-white dark:hover:bg-blue-700/30 "
                    aria-controls="dropdown-authentication" data-collapse-toggle="dropdown-authentication">
                    <svg aria-hidden="true"
                        class="flex-shrink-0 w-6 h-6 text-gray-500 transition duration-75 group-hover:text-white dark:text-white dark:group-hover:text-white"
                        fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                        <path fill-rule="evenodd"
                            d="M10 3a4 4 0 100 8 4 4 0 000-8zm-7 9a7 7 0 0114 0v2a1 1 0 01-1 1H4a1 1 0 01-1-1v-2z"
                            clip-rule="evenodd"></path>
                    </svg>
                    <span class="flex-1 ml-3 text-left whitespace-nowrap">Clients et Fournisseurs</span>
                    <svg aria-hidden="true" class="w-6 h-6" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                        <path fill-rule="evenodd" d="M10 5a1 1 0 011 1v3h3a1 1 0 110 2h-3v3a1 1 0 11-2 0v-3H6a1 1 0 110-2h3V6a1 1 0 011-1z" clip-rule="evenodd"></path>
                    </svg>
                </button>
                <ul id="dropdown-authentication" class="hidden py-2 space-y-2 pl-4">
                    <li class="bg-gray-500/30 shadow shadow-gray-900 rounded-md">
                        <a href="#"
                            class="flex items-center p-2 pl-3 w-full text-sm font-medium text-white rounded-lg transition duration-75 group hover:bg-blue-700/30  dark:text-white dark:hover:bg-blue-700/30 ">
                            <!-- Icône pour "Clients" -->
                            <svg aria-hidden="true"
                                class="w-5 h-5 text-gray-500 transition duration-75 dark:text-white group-hover:text-white dark:group-hover:text-white mr-3"
                                fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                <path fill-rule="evenodd"
                                    d="M8.5 4.5a2 2 0 100-4 2 2 0 000 4zM2 11a5.5 5.5 0 0111 0v3a1 1 0 01-1 1H3a1 1 0 01-1-1v-3z"
                                    clip-rule="evenodd"></path>
                            </svg>
                            Clients
                        </a>
                    </li>

                    <li class="bg-gray-500/30 shadow shadow-gray-900 rounded-md">
                        <a href="#"
                            class="flex items-center p-2 pl-3 w-full text-sm font-medium text-white rounded-lg transition duration-75 group hover:bg-blue-700/30  dark:text-white dark:hover:bg-blue-700/30 ">
                            <!-- Icône pour "Fournisseurs" -->
                            <svg aria-hidden="true"
                                class="w-5 h-5 text-gray-500 transition duration-75 dark:text-white group-hover:text-white dark:group-hover:text-white mr-3"
                                fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                <path
                                    d="M5 3a1 1 0 00-1 1v10a1 1 0 001 1h10a1 1 0 001-1V4a1 1 0 00-1-1H5zm1 2h8v8H6V5zM3 13a1 1 0 000 2h12a1 1 0 100-2H3z">
                                </path>
                            </svg>
                            Fournisseurs
                        </a>
                    </li>
                </ul>
            </li>
            <li>
                <button type="button"
                    class="flex items-center p-2 w-full text-base font-medium text-white rounded-lg transition duration-75 group hover:bg-blue-700/30  dark:text-white dark:hover:bg-blue-700/30 "
                    aria-controls="dropdown-Fournisseurs" data-collapse-toggle="dropdown-Fournisseurs">
                    <svg aria-hidden="true"
                        class="w-5 h-5 text-gray-500 transition duration-75 dark:text-white group-hover:text-white dark:group-hover:text-white mr-3"
                        fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                        <path
                            d="M5 3a1 1 0 00-1 1v10a1 1 0 001 1h10a1 1 0 001-1V4a1 1 0 00-1-1H5zm1 2h8v8H6V5zM3 13a1 1 0 000 2h12a1 1 0 100-2H3z">
                        </path>
                    </svg>
                    <span class="flex-1 ml-1 text-left whitespace-nowrap">Achat Fournisseurs</span>
                    <svg aria-hidden="true" class="w-6 h-6" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                        <path fill-rule="evenodd" d="M10 5a1 1 0 011 1v3h3a1 1 0 110 2h-3v3a1 1 0 11-2 0v-3H6a1 1 0 110-2h3V6a1 1 0 011-1z" clip-rule="evenodd"></path>
                    </svg>
                </button>
                <ul id="dropdown-Fournisseurs" class="hidden py-2 space-y-2 pl-4">
                    <li class="bg-gray-500/30 shadow shadow-gray-900 rounded-md">
                        <a href="#"
                            class="flex items-center p-2 pl-3 w-full text-sm font-medium text-white rounded-lg transition duration-75 group hover:bg-blue-700/30  dark:text-white dark:hover:bg-blue-700/30 ">
                            <!-- Icône pour "Commandes" -->
                            <svg aria-hidden="true"
                                class="w-5 h-5 text-gray-500 transition duration-75 dark:text-white group-hover:text-white dark:group-hover:text-white mr-3"
                                fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                <path fill-rule="evenodd"
                                    d="M6 2a2 2 0 012-2h4a2 2 0 012 2v4h2a2 2 0 012 2v6a2 2 0 01-2 2H4a2 2 0 01-2-2V8a2 2 0 012-2h2V2zm4 0v4H6V2h4z"
                                    clip-rule="evenodd"></path>
                            </svg>
                            Commandes
                        </a>
                    </li>

                    <li class="bg-gray-500/30 shadow shadow-gray-900 rounded-md">
                        <a href="#"
                            class="flex items-center p-2 pl-3 w-full text-sm font-medium text-white rounded-lg transition duration-75 group hover:bg-blue-700/30  dark:text-white dark:hover:bg-blue-700/30 ">
                            <!-- Icône pour "Réceptions" -->
                            <svg aria-hidden="true"
                                class="w-5 h-5 text-gray-500 transition duration-75 dark:text-white group-hover:text-white dark:group-hover:text-white mr-3"
                                fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                <path fill-rule="evenodd"
                                    d="M3 3a2 2 0 012-2h10a2 2 0 012 2v14a2 2 0 01-2 2H5a2 2 0 01-2-2V3zm4 3h6v2H7V6zm0 4h6v2H7v-2z"
                                    clip-rule="evenodd"></path>
                            </svg>
                            Réceptions
                        </a>
                    </li>

                    <li class="bg-gray-500/30 shadow shadow-gray-900 rounded-md">
                        <a href="#"
                            class="flex items-center p-2 pl-3 w-full text-sm font-medium text-white rounded-lg transition duration-75 group hover:bg-blue-700/30  dark:text-white dark:hover:bg-blue-700/30 ">
                            <!-- Icône pour "Factures" -->
                            <svg aria-hidden="true"
                                class="w-5 h-5 text-gray-500 transition duration-75 dark:text-white group-hover:text-white dark:group-hover:text-white mr-3"
                                fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                <path fill-rule="evenodd"
                                    d="M7 2a1 1 0 00-1 1v14a1 1 0 001 1h6a1 1 0 001-1V3a1 1 0 00-1-1H7zm1 2h4v1H8V4zm0 3h4v1H8V7zm0 3h4v1H8v-1z"
                                    clip-rule="evenodd"></path>
                            </svg>
                            Factures
                        </a>
                    </li>
                    <li class="bg-gray-500/30 shadow shadow-gray-900 rounded-md hidden md:flex">
                        <a href="#" id="dropdownRecouvrementfournisseur"
                            data-dropdown-toggle="dropdownRightfournisseur1" data-dropdown-placement="right"
                            class="flex items-center p-2 pl-3 w-full text-sm font-medium text-white rounded-lg transition duration-75 group hover:bg-blue-700/30  dark:text-white dark:hover:bg-blue-700/30 ">
                            <!-- Icône pour "Recouvrement clients" -->
                            <svg class="w-5 h-5 mr-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
                                fill="currentColor" viewBox="0 0 20 20">
                                <path
                                    d="M4 2a2 2 0 00-2 2v12a2 2 0 002 2h12a2 2 0 002-2V4a2 2 0 00-2-2H4zm6 11a2 2 0 100-4 2 2 0 000 4zm-4-7h8v1H6V6zm0 2h8v1H6V8z" />
                            </svg>
                            Recouvrement clients
                        </a>
                    </li>


                    <!-- Masquer sur les écrans md et plus, afficher uniquement sur mobile -->
                    <li class="bg-gray-500/30 shadow shadow-gray-900 rounded-md md:hidden">
                        <a href="#" id="dropdownRecouvrementfournisseurMobile"
                            data-dropdown-toggle="dropdownRightfournisseur2" data-dropdown-placement="top"
                            class="flex items-center p-2 pl-3 w-full text-sm font-medium text-white rounded-lg transition duration-75 group hover:bg-blue-700/30  dark:text-white dark:hover:bg-blue-700/30 ">

                            <!-- Icône pour "Recouvrement clients" -->
                            <svg class="w-5 h-5 mr-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
                                fill="currentColor" viewBox="0 0 20 20">
                                <path
                                    d="M4 2a2 2 0 00-2 2v12a2 2 0 002 2h12a2 2 0 002-2V4a2 2 0 00-2-2H4zm6 11a2 2 0 100-4 2 2 0 000 4zm-4-7h8v1H6V6zm0 2h8v1H6V8z" />
                            </svg>
                            Recouvrement fournisseur
                        </a>
                    </li>
                    @for ($i = 1; $i <= 2; $i++)
                        <!-- Dropdown menu desktop -->
                        <div id="dropdownRightfournisseur{{ $i }}"
                            class="z-10 hidden bg-white divide-y divide-gray-100 rounded-lg shadow w-55 dark:bg-gray-700">
                            <ul class="py-2 text-sm text-gray-700 dark:text-gray-200"
                                aria-labelledby="dropdownRecouvrementfournisseur">
                                <li>
                                    <a href="#"
                                        class="flex items-center px-4 py-2 hover:bg-blue-700/30  dark:hover:bg-gray-600 dark:hover:text-white">
                                        <!-- Icône pour "Etat de client" -->
                                        <svg aria-hidden="true" class="w-5 h-5 text-gray-500 mr-2 dark:text-white"
                                            fill="currentColor" viewBox="0 0 20 20"
                                            xmlns="http://www.w3.org/2000/svg">
                                            <path
                                                d="M10 2a4 4 0 100 8 4 4 0 000-8zm-7 9a7 7 0 0114 0v3a1 1 0 01-1 1H4a1 1 0 01-1-1v-3z" />
                                        </svg>
                                        Etat de fournisseur
                                    </a>
                                </li>
                                <li>
                                    <a href="#"
                                        class="flex items-center px-4 py-2 hover:bg-blue-700/30  dark:hover:bg-gray-600 dark:hover:text-white">
                                        <!-- Icône pour "Facture client" -->
                                        <svg aria-hidden="true" class="w-5 h-5 text-gray-500 mr-2 dark:text-white"
                                            fill="currentColor" viewBox="0 0 20 20"
                                            xmlns="http://www.w3.org/2000/svg">
                                            <path
                                                d="M3 3a2 2 0 012-2h10a2 2 0 012 2v14a2 2 0 01-2 2H5a2 2 0 01-2-2V3zm5 0v2h4V3H8zm0 4h4v2H8V7z" />
                                        </svg>
                                        Facture fournisseur
                                    </a>
                                </li>
                                <li>
                                    <a href="#"
                                        class="flex items-center px-4 py-2 hover:bg-blue-700/30  dark:hover:bg-gray-600 dark:hover:text-white">
                                        <!-- Icône pour "Paiement client" -->
                                        <svg aria-hidden="true" class="w-5 h-5 text-gray-500 mr-2 dark:text-white"
                                            fill="currentColor" viewBox="0 0 20 20"
                                            xmlns="http://www.w3.org/2000/svg">
                                            <path fill-rule="evenodd"
                                                d="M10 2a8 8 0 100 16 8 8 0 000-16zM4 10a6 6 0 1112 0A6 6 0 014 10zm7-3a1 1 0 10-2 0v1H8a1 1 0 100 2h1v1a1 1 0 102 0v-1h1a1 1 0 100-2h-1V7z"
                                                clip-rule="evenodd" />
                                        </svg>
                                        Paiement fournisseur
                                    </a>
                                </li>
                            </ul>
                        </div>
                    @endfor
                </ul>
            </li>
            <li>
                <button type="button"
                    class="flex items-center p-2 w-full text-base font-medium text-white rounded-lg transition duration-75 group hover:bg-blue-700/30  dark:text-white dark:hover:bg-blue-700/30 "
                    aria-controls="dropdown-Clients" data-collapse-toggle="dropdown-Clients">
                    <svg aria-hidden="true"
                        class="flex-shrink-0 w-6 h-6 text-gray-500 transition duration-75 group-hover:text-white dark:text-white dark:group-hover:text-white"
                        fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                        <path fill-rule="evenodd"
                            d="M10 3a4 4 0 100 8 4 4 0 000-8zm-7 9a7 7 0 0114 0v2a1 1 0 01-1 1H4a1 1 0 01-1-1v-2z"
                            clip-rule="evenodd"></path>
                    </svg>
                    <span class="flex-1 ml-1 text-left whitespace-nowrap">Ventes clients</span>
                    <svg aria-hidden="true" class="w-6 h-6" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                        <path fill-rule="evenodd" d="M10 5a1 1 0 011 1v3h3a1 1 0 110 2h-3v3a1 1 0 11-2 0v-3H6a1 1 0 110-2h3V6a1 1 0 011-1z" clip-rule="evenodd"></path>
                    </svg>
                </button>
                <ul id="dropdown-Clients" class="hidden py-2 space-y-2 pl-4">
                    <li class="bg-gray-500/30 shadow shadow-gray-900 rounded-md">
                        <a href="#"
                            class="flex items-center p-2 pl-3 w-full text-sm font-medium text-white rounded-lg transition duration-75 group hover:bg-blue-700/30  dark:text-white dark:hover:bg-blue-700/30 ">
                            <!-- Icône pour "Devis" -->
                            <svg aria-hidden="true"
                                class="w-5 h-5 text-gray-500 transition duration-75 dark:text-white group-hover:text-white dark:group-hover:text-white mr-3"
                                fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                <path fill-rule="evenodd"
                                    d="M4 2a2 2 0 00-2 2v12a2 2 0 002 2h12a2 2 0 002-2V4a2 2 0 00-2-2H4zm1 4h10v10H5V6zm2 2h6v2H7V8zm0 4h4v2H7v-2z"
                                    clip-rule="evenodd"></path>
                            </svg>
                            Devis
                        </a>
                    </li>

                    <li class="bg-gray-500/30 shadow shadow-gray-900 rounded-md">
                        <a href="#"
                            class="flex items-center p-2 pl-3 w-full text-sm font-medium text-white rounded-lg transition duration-75 group hover:bg-blue-700/30  dark:text-white dark:hover:bg-blue-700/30 ">
                            <!-- Icône pour "Commandes" -->
                            <svg aria-hidden="true"
                                class="w-5 h-5 text-gray-500 transition duration-75 dark:text-white group-hover:text-white dark:group-hover:text-white mr-3"
                                fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                <path fill-rule="evenodd"
                                    d="M6 2a2 2 0 012-2h4a2 2 0 012 2v4h2a2 2 0 012 2v6a2 2 0 01-2 2H4a2 2 0 01-2-2V8a2 2 0 012-2h2V2zm4 0v4H6V2h4z"
                                    clip-rule="evenodd"></path>
                            </svg>
                            Commandes
                        </a>
                    </li>
                    <li class="bg-gray-500/30 shadow shadow-gray-900 rounded-md">
                        <a href="#"
                            class="flex items-center p-2 pl-3 w-full text-sm font-medium text-white rounded-lg transition duration-75 group hover:bg-blue-700/30  dark:text-white dark:hover:bg-blue-700/30 ">
                            <!-- Icône pour "Livraisons" -->
                            <svg aria-hidden="true"
                                class="w-5 h-5 text-gray-500 transition duration-75 dark:text-white group-hover:text-white dark:group-hover:text-white mr-3"
                                fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                <path fill-rule="evenodd"
                                    d="M2 3a1 1 0 011-1h14a1 1 0 011 1v11a1 1 0 01-1 1H3a1 1 0 01-1-1V3zm4 2v7h8V5H6zM3 15h14a1 1 0 100-2H3a1 1 0 100 2z"
                                    clip-rule="evenodd"></path>
                            </svg>
                            Livraisons
                        </a>
                    </li>

                    <li class="bg-gray-500/30 shadow shadow-gray-900 rounded-md">
                        <a href="#"
                            class="flex items-center p-2 pl-3 w-full text-sm font-medium text-white rounded-lg transition duration-75 group hover:bg-blue-700/30  dark:text-white dark:hover:bg-blue-700/30 ">
                            <!-- Icône pour "Factures" -->
                            <svg aria-hidden="true"
                                class="w-5 h-5 text-gray-500 transition duration-75 dark:text-white group-hover:text-white dark:group-hover:text-white mr-3"
                                fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                <path fill-rule="evenodd"
                                    d="M7 2a1 1 0 00-1 1v14a1 1 0 001 1h6a1 1 0 001-1V3a1 1 0 00-1-1H7zm1 2h4v1H8V4zm0 3h4v1H8V7zm0 3h4v1H8v-1z"
                                    clip-rule="evenodd"></path>
                            </svg>
                            Factures
                        </a>
                    </li>

                    {{-- desktop --}}


                    <li class="bg-gray-500/30 shadow shadow-gray-900 rounded-md hidden md:flex">
                        <a href="#" id="dropdownRecouvrementclient" data-dropdown-toggle="dropdownRight1"
                            data-dropdown-placement="right"
                            class="flex items-center p-2 pl-3 w-full text-sm font-medium text-white rounded-lg transition duration-75 group hover:bg-blue-700/30  dark:text-white dark:hover:bg-blue-700/30 ">
                            <!-- Icône pour "Recouvrement clients" -->
                            <svg class="w-5 h-5 mr-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
                                fill="currentColor" viewBox="0 0 20 20">
                                <path
                                    d="M4 2a2 2 0 00-2 2v12a2 2 0 002 2h12a2 2 0 002-2V4a2 2 0 00-2-2H4zm6 11a2 2 0 100-4 2 2 0 000 4zm-4-7h8v1H6V6zm0 2h8v1H6V8z" />
                            </svg>
                            Recouvrement clients
                        </a>
                    </li>


                    <!-- Masquer sur les écrans md et plus, afficher uniquement sur mobile -->
                    <li class="bg-gray-500/30 shadow shadow-gray-900 rounded-md md:hidden">
                        <a href="#" id="dropdownRecouvrementclientMobile" data-dropdown-toggle="dropdownRight2"
                            data-dropdown-placement="top"
                            class="flex items-center p-2 pl-3 w-full text-sm font-medium text-white rounded-lg transition duration-75 group hover:bg-blue-700/30  dark:text-white dark:hover:bg-blue-700/30 ">

                            <!-- Icône pour "Recouvrement clients" -->
                            <svg class="w-5 h-5 mr-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
                                fill="currentColor" viewBox="0 0 20 20">
                                <path
                                    d="M4 2a2 2 0 00-2 2v12a2 2 0 002 2h12a2 2 0 002-2V4a2 2 0 00-2-2H4zm6 11a2 2 0 100-4 2 2 0 000 4zm-4-7h8v1H6V6zm0 2h8v1H6V8z" />
                            </svg>
                            Recouvrement clients
                        </a>
                    </li>
                    @for ($i = 1; $i <= 2; $i++)
                        <!-- Dropdown menu desktop -->
                        <div id="dropdownRight{{ $i }}"
                            class="z-10 hidden bg-white divide-y divide-gray-100 rounded-lg shadow w-44 dark:bg-gray-700">
                            <ul class="py-2 text-sm text-gray-700 dark:text-gray-200"
                                aria-labelledby="dropdownRecouvrement">
                                <li>
                                    <a href="#"
                                        class="flex items-center px-4 py-2 hover:bg-blue-700/30  dark:hover:bg-gray-600 dark:hover:text-white">
                                        <!-- Icône pour "Etat de client" -->
                                        <svg aria-hidden="true" class="w-5 h-5 text-gray-500 mr-2 dark:text-white"
                                            fill="currentColor" viewBox="0 0 20 20"
                                            xmlns="http://www.w3.org/2000/svg">
                                            <path
                                                d="M10 2a4 4 0 100 8 4 4 0 000-8zm-7 9a7 7 0 0114 0v3a1 1 0 01-1 1H4a1 1 0 01-1-1v-3z" />
                                        </svg>
                                        Etat de client
                                    </a>
                                </li>
                                <li>
                                    <a href="#"
                                        class="flex items-center px-4 py-2 hover:bg-blue-700/30  dark:hover:bg-gray-600 dark:hover:text-white">
                                        <!-- Icône pour "Facture client" -->
                                        <svg aria-hidden="true" class="w-5 h-5 text-gray-500 mr-2 dark:text-white"
                                            fill="currentColor" viewBox="0 0 20 20"
                                            xmlns="http://www.w3.org/2000/svg">
                                            <path
                                                d="M3 3a2 2 0 012-2h10a2 2 0 012 2v14a2 2 0 01-2 2H5a2 2 0 01-2-2V3zm5 0v2h4V3H8zm0 4h4v2H8V7z" />
                                        </svg>
                                        Facture client
                                    </a>
                                </li>
                                <li>
                                    <a href="#"
                                        class="flex items-center px-4 py-2 hover:bg-blue-700/30  dark:hover:bg-gray-600 dark:hover:text-white">
                                        <!-- Icône pour "Paiement client" -->
                                        <svg aria-hidden="true" class="w-5 h-5 text-gray-500 mr-2 dark:text-white"
                                            fill="currentColor" viewBox="0 0 20 20"
                                            xmlns="http://www.w3.org/2000/svg">
                                            <path fill-rule="evenodd"
                                                d="M10 2a8 8 0 100 16 8 8 0 000-16zM4 10a6 6 0 1112 0A6 6 0 014 10zm7-3a1 1 0 10-2 0v1H8a1 1 0 100 2h1v1a1 1 0 102 0v-1h1a1 1 0 100-2h-1V7z"
                                                clip-rule="evenodd" />
                                        </svg>
                                        Paiement client
                                    </a>
                                </li>
                            </ul>
                        </div>
                    @endfor

                </ul>
            </li>
        </ul>
        <ul class="pt-5 mt-5 space-y-2 border-t border-gray-200 dark:border-gray-700">
            <li>
                <a href="{{route('configuration')}}"
                    class="flex items-center p-2 text-base font-medium text-white rounded-lg transition duration-75 hover:bg-blue-700/30  dark:hover:bg-blue-700/30  dark:text-white group">
                    <!-- Icône pour "Configuration" -->
                    <svg aria-hidden="true"
                        class="flex-shrink-0 w-6 h-6 text-white transition duration-75 dark:text-white group-hover:text-white dark:group-hover:text-white"
                        fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                        <path fill-rule="evenodd"
                            d="M10 2a1 1 0 011 1v2.03a6.06 6.06 0 012.48 1.03l1.43-1.42a1 1 0 111.41 1.42l-1.42 1.42a6.06 6.06 0 011.03 2.48H17a1 1 0 110 2h-2.03a6.06 6.06 0 01-1.03 2.48l1.42 1.43a1 1 0 01-1.42 1.41l-1.42-1.42a6.06 6.06 0 01-2.48 1.03V17a1 1 0 11-2 0v-2.03a6.06 6.06 0 01-2.48-1.03l-1.43 1.42a1 1 0 11-1.41-1.42l1.42-1.43a6.06 6.06 0 01-1.03-2.48H3a1 1 0 110-2h2.03a6.06 6.06 0 011.03-2.48L5.62 6.97a1 1 0 111.42-1.42l1.42 1.42A6.06 6.06 0 0110 5.03V3a1 1 0 011-1zm1 8a3 3 0 11-6 0 3 3 0 016 0z"
                            clip-rule="evenodd"></path>
                    </svg>
                    <span class="ml-3">Configuration</span>
                </a>
            </li>

            <li>
                <a href="#"
                    class="flex items-center p-2 my-5 text-base font-medium text-white rounded-lg transition duration-75 hover:bg-blue-700/30  dark:hover:bg-blue-700/30  dark:text-white group">
                    <!-- Icône pour "Besoin d'aide ?" -->
                    <svg aria-hidden="true"
                        class="flex-shrink-0 w-6 h-6 text-white transition duration-75 dark:text-white group-hover:text-white dark:group-hover:text-white"
                        fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                        <path fill-rule="evenodd"
                            d="M18 10a8 8 0 11-16 0 8 8 0 0116 0zm-6.25 4.75a.75.75 0 111.5 0 .75.75 0 01-1.5 0zm.25-2.5a1 1 0 10-2 0 .75.75 0 01-1.5 0 2.5 2.5 0 115 0 1.5 1.5 0 11-3 0 1 1 0 012 0z"
                            clip-rule="evenodd"></path>
                    </svg>
                    <span class="ml-3">Besoin d'aide ?</span>
                </a>
            </li>

=======
                    <span class="ml-3">Publipostages</span>
                </a>
            </li>
>>>>>>> 149ce15 (revu du travail)
        </ul>
    </div>
    
</aside>
