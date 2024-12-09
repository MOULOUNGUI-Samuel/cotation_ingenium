<aside
    class="fixed top-0 left-0 z-40 w-64 h-screen pt-16 transition-transform -translate-x-full border-r border-white md:translate-x-0  dark:border-gray-700"
    aria-label="Sidenav" id="drawer-navigation">
    <div class="overflow-y-auto py-5 px-3 h-full bg-white dark:bg-white">
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
                    class="flex items-center p-2 text-base font-medium text-white rounded-lg dark:text-white bg-[#763c26] hover:bg-[#562816] group">
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
                    class="flex items-center p-2 w-full text-base font-medium text-white rounded-lg transition duration-75 group   dark:text-white bg-[#763c26] hover:bg-[#562816] "
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
                                fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                <path
                                    d="M4 3h12a1 1 0 011 1v12a1 1 0 01-1 1H4a1 1 0 01-1-1V4a1 1 0 011-1zm1 2v2h10V5H5zm0 4v6h10V9H5z">
                                </path>
                            </svg>
                            Ajouter une cotation
                        </a>
                    </li>
                    
                    

                </ul>
            </li>
            <li>
                <a href="#"
                    class="flex items-center p-2 text-base font-medium text-white rounded-lg transition duration-75 bg-[#763c26] hover:bg-[#562816]  dark:text-white group">
                    <svg aria-hidden="true"
                        class="flex-shrink-0 w-6 h-6 text-white transition duration-75 dark:text-white group-hover:text-white dark:group-hover:text-white"
                        fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                        <path
                            d="M7 3a1 1 0 000 2h6a1 1 0 100-2H7zM4 7a1 1 0 011-1h10a1 1 0 110 2H5a1 1 0 01-1-1zM2 11a2 2 0 012-2h12a2 2 0 012 2v4a2 2 0 01-2 2H4a2 2 0 01-2-2v-4z">
                        </path>
                    </svg>
                    <span class="ml-3">Publipostages</span>
                </a>
            </li>
        </ul>
    </div>
    
</aside>
