<nav class="bg-[#763c26] border-b border-gray-200 px-4 py-2.5 dark:border-gray-400 fixed left-0 right-0 top-0 z-50">
    <div class="flex flex-wrap justify-between items-center">
      <div class="flex justify-start items-center">
        <button
          data-drawer-target="drawer-navigation"
          data-drawer-toggle="drawer-navigation"
          aria-controls="drawer-navigation"
          class="p-2 mr-2 text-white rounded-lg cursor-pointer md:hidden hover:text-gray-900 hover:bg-gray-100 focus:bg-gray-100 dark:focus:bg-gray-700 focus:ring-2 focus:ring-gray-100 dark:focus:ring-gray-700 dark:text-gray-400 dark:hover:bg-gray-700 dark:hover:text-white"
        >
          <svg
            aria-hidden="true"
            class="w-6 h-6"
            fill="currentColor"
            viewBox="0 0 20 20"
            xmlns="http://www.w3.org/2000/svg"
          >
            <path
              fill-rule="evenodd"
              d="M3 5a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1zM3 10a1 1 0 011-1h6a1 1 0 110 2H4a1 1 0 01-1-1zM3 15a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1z"
              clip-rule="evenodd"
            ></path>
          </svg>
          <svg
            aria-hidden="true"
            class="hidden w-6 h-6"
            fill="currentColor"
            viewBox="0 0 20 20"
            xmlns="http://www.w3.org/2000/svg"
          >
            <path
              fill-rule="evenodd"
              d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z"
              clip-rule="evenodd"
            ></path>
          </svg>
          <span class="sr-only">Toggle sidebar</span>
        </button>
        <a href="#" class="flex items-center justify-between mr-4">
          <img
            src="images/logo-ingenium-assu.png" class="h-12 me-2 shadow-lg p-2 shadow-gray-100/10 rounded-lg bg-white"
            alt="ingenium logo"
          />
          {{-- <span class="self-center text-2xl font-semibold whitespace-nowrap dark:text-white">Flowbite</span> --}}
        </a>
        <form action="#" method="GET" class="hidden md:block md:pl-2">
          <label for="topbar-search" class="sr-only">Recherche</label>
          <div class="relative md:w-64">
            <div
              class="flex absolute inset-y-0 left-0 items-center pl-3 pointer-events-none"
            >
              <svg
                class="w-5 h-5 text-gray-500 dark:text-gray-400"
                fill="currentColor"
                viewBox="0 0 20 20"
                xmlns="http://www.w3.org/2000/svg"
              >
                <path
                  fill-rule="evenodd"
                  clip-rule="evenodd"
                  d="M8 4a4 4 0 100 8 4 4 0 000-8zM2 8a6 6 0 1110.89 3.476l4.817 4.817a1 1 0 01-1.414 1.414l-4.816-4.816A6 6 0 012 8z"
                ></path>
              </svg>
            </div>
            <input
              type="text"
              name="email"
              id="topbar-search"
              class="bg-white border border-gray-300 text-gray-950 text-sm rounded-md shadow shadow-gray-900 focus:ring-primary-500 focus:border-primary-500 block w-full pl-10 p-2.5 dark:bg-white dark:border-gray-600 dark:placeholder-gray-400 dark:focus:ring-primary-500 dark:focus:border-primary-500"
              placeholder="Tapez votre recherche..."
            />
          </div>
        </form>
      </div>
      <div class="flex items-center lg:order-2">
        <button
          type="button"
          data-drawer-toggle="drawer-navigation"
          aria-controls="drawer-navigation"
          class="p-2 mr-1 text-gray-500 rounded-lg md:hidden hover:text-gray-900 hover:bg-gray-100 dark:text-gray-400 dark:hover:text-white dark:hover:bg-gray-700 focus:ring-4 focus:ring-gray-300 dark:focus:ring-gray-600"
        >
          <span class="sr-only">Toggle search</span>
          <svg aria-hidden="true" class="w-6 h-6" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg" aria-hidden="true">
            <path clip-rule="evenodd" fill-rule="evenodd" d="M8 4a4 4 0 100 8 4 4 0 000-8zM2 8a6 6 0 1110.89 3.476l4.817 4.817a1 1 0 01-1.414 1.414l-4.816-4.816A6 6 0 012 8z"></path>
          </svg>
        </button>
        <!-- Notifications -->
        <button
          type="button"
          data-dropdown-toggle="notification-dropdown"
          class="p-2 mr-1 text-white rounded-lg hover:text-[#763c26]/10 hover:bg-gray-100  dark:hover:text-white dark:hover:bg-[#763c26] focus:ring-4 focus:ring-white/50 dark:focus:ring-white"
        >
          <span class="sr-only">Plus de notifications</span>
          <!-- Bell icon -->
          <svg
            aria-hidden="true"
            class="w-6 h-6"
            fill="currentColor"
            viewBox="0 0 20 20"
            xmlns="http://www.w3.org/2000/svg"
          >
            <path
              d="M10 2a6 6 0 00-6 6v3.586l-.707.707A1 1 0 004 14h12a1 1 0 00.707-1.707L16 11.586V8a6 6 0 00-6-6zM10 18a3 3 0 01-3-3h6a3 3 0 01-3 3z"
            ></path>
          </svg>
        </button>
        <!-- Dropdown menu -->
        <div
          class="hidden overflow-hidden z-50 my-4 max-w-sm text-base list-none bg-white divide-y divide-gray-100 shadow-lg rounded-xl"
          id="notification-dropdown"
        >
          <div
            class="block py-2 px-4 text-base font-medium text-center  bg-[#763c26] text-white"
          >
            Notifications
          </div>
          <div>
            <a
              href="#"
              class="flex py-3 px-4 border-b bg-white hover:bg-[#763c26]/10  dark:hover:bg-[#763c26]/10 "
            >
              <div class="flex-shrink-0">
                <img
                  class="w-11 h-11 rounded-full"
                  src="https://flowbite.s3.amazonaws.com/blocks/marketing-ui/avatars/bonnie-green.png"
                  alt="Bonnie Green avatar"
                />
                <div
                  class="flex absolute justify-center items-center ml-6 -mt-5 w-5 h-5 rounded-full border border-white bg-primary-700 dark:border-gray-700"
                >
                  <svg
                    aria-hidden="true"
                    class="w-3 h-3 text-white"
                    fill="currentColor"
                    viewBox="0 0 20 20"
                    xmlns="http://www.w3.org/2000/svg"
                  >
                    <path
                      d="M8.707 7.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l2-2a1 1 0 00-1.414-1.414L11 7.586V3a1 1 0 10-2 0v4.586l-.293-.293z"
                    ></path>
                    <path
                      d="M3 5a2 2 0 012-2h1a1 1 0 010 2H5v7h2l1 2h4l1-2h2V5h-1a1 1 0 110-2h1a2 2 0 012 2v10a2 2 0 01-2 2H5a2 2 0 01-2-2V5z"
                    ></path>
                  </svg>
                </div>
              </div>
              <div class="pl-3 w-full">
                <div
                  class="text-gray-500 font-normal text-sm mb-1.5 dark:text-gray-400"
                >
                  New message from
                  <span class="font-semibold text-gray-900 dark:text-white"
                    >Bonnie Green</span
                  >: "Hey, what's up? All set for the presentation?"
                </div>
                <div
                  class="text-xs font-medium text-primary-600 dark:text-primary-500"
                >
                  a few moments ago
                </div>
              </div>
            </a>
            <a
              href="#"
              class="flex py-3 px-4 border-b bg-white hover:bg-[#763c26]/10  dark:hover:bg-[#763c26]/10"
            >
              <div class="flex-shrink-0">
                <img
                  class="w-11 h-11 rounded-full"
                  src="https://flowbite.s3.amazonaws.com/blocks/marketing-ui/avatars/jese-leos.png"
                  alt="Jese Leos avatar"
                />
                <div
                  class="flex absolute justify-center items-center ml-6 -mt-5 w-5 h-5 bg-gray-900 rounded-full border border-white dark:border-gray-700"
                >
                  <svg
                    aria-hidden="true"
                    class="w-3 h-3 text-white"
                    fill="currentColor"
                    viewBox="0 0 20 20"
                    xmlns="http://www.w3.org/2000/svg"
                  >
                    <path
                      d="M8 9a3 3 0 100-6 3 3 0 000 6zM8 11a6 6 0 016 6H2a6 6 0 016-6zM16 7a1 1 0 10-2 0v1h-1a1 1 0 100 2h1v1a1 1 0 102 0v-1h1a1 1 0 100-2h-1V7z"
                    ></path>
                  </svg>
                </div>
              </div>
              <div class="pl-3 w-full">
                <div
                  class="text-gray-500 font-normal text-sm mb-1.5 dark:text-gray-400"
                >
                  <span class="font-semibold text-gray-900 dark:text-white"
                    >Jese leos</span
                  >
                  and
                  <span class="font-medium text-gray-900 dark:text-white"
                    >5 others</span
                  >
                  started following you.
                </div>
                <div
                  class="text-xs font-medium text-primary-600 dark:text-primary-500"
                >
                  10 minutes ago
                </div>
              </div>
            </a>
            <a
              href="#"
              class="flex py-3 px-4 border-b bg-white hover:bg-[#763c26]/10  dark:hover:bg-[#763c26]/10"
            >
              <div class="flex-shrink-0">
                <img
                  class="w-11 h-11 rounded-full"
                  src="https://flowbite.s3.amazonaws.com/blocks/marketing-ui/avatars/joseph-mcfall.png"
                  alt="Joseph McFall avatar"
                />
                <div
                  class="flex absolute justify-center items-center ml-6 -mt-5 w-5 h-5 bg-red-600 rounded-full border border-white dark:border-gray-700"
                >
                  <svg
                    aria-hidden="true"
                    class="w-3 h-3 text-white"
                    fill="currentColor"
                    viewBox="0 0 20 20"
                    xmlns="http://www.w3.org/2000/svg"
                  >
                    <path
                      fill-rule="evenodd"
                      d="M3.172 5.172a4 4 0 015.656 0L10 6.343l1.172-1.171a4 4 0 115.656 5.656L10 17.657l-6.828-6.829a4 4 0 010-5.656z"
                      clip-rule="evenodd"
                    ></path>
                  </svg>
                </div>
              </div>
              <div class="pl-3 w-full">
                <div
                  class="text-gray-500 font-normal text-sm mb-1.5 dark:text-gray-400"
                >
                  <span class="font-semibold text-gray-900 dark:text-white"
                    >Joseph Mcfall</span
                  >
                  and
                  <span class="font-medium text-gray-900 dark:text-white"
                    >141 others</span
                  >
                  love your story. See it and view more stories.
                </div>
                <div
                  class="text-xs font-medium text-primary-600 dark:text-primary-500"
                >
                  44 minutes ago
                </div>
              </div>
            </a>
            <a
              href="#"
              class="flex py-3 px-4 border-b bg-white hover:bg-[#763c26]/10  dark:hover:bg-[#763c26]/10"
            >
              <div class="flex-shrink-0">
                <img
                  class="w-11 h-11 rounded-full"
                  src="https://flowbite.s3.amazonaws.com/blocks/marketing-ui/avatars/roberta-casas.png"
                  alt="Roberta Casas image"
                />
                <div
                  class="flex absolute justify-center items-center ml-6 -mt-5 w-5 h-5 bg-green-400 rounded-full border border-white dark:border-gray-700"
                >
                  <svg
                    aria-hidden="true"
                    class="w-3 h-3 text-white"
                    fill="currentColor"
                    viewBox="0 0 20 20"
                    xmlns="http://www.w3.org/2000/svg"
                  >
                    <path
                      fill-rule="evenodd"
                      d="M18 13V5a2 2 0 00-2-2H4a2 2 0 00-2 2v8a2 2 0 002 2h3l3 3 3-3h3a2 2 0 002-2zM5 7a1 1 0 011-1h8a1 1 0 110 2H6a1 1 0 01-1-1zm1 3a1 1 0 100 2h3a1 1 0 100-2H6z"
                      clip-rule="evenodd"
                    ></path>
                  </svg>
                </div>
              </div>
              <div class="pl-3 w-full">
                <div
                  class="text-gray-500 font-normal text-sm mb-1.5 dark:text-gray-400"
                >
                  <span class="font-semibold text-gray-900 dark:text-white"
                    >Leslie Livingston</span
                  >
                  mentioned you in a comment:
                  <span
                    class="font-medium text-primary-600 dark:text-primary-500"
                    >@bonnie.green</span
                  >
                  what do you say?
                </div>
                <div
                  class="text-xs font-medium text-primary-600 dark:text-primary-500"
                >
                  1 hour ago
                </div>
              </div>
            </a>
            
          </div>
          <a
            href="#"
            class="block py-2 text-md font-medium text-center text-gray-900 hover:bg-[#622e1a] bg-[#763c26] dark:text-white dark:hover:underline"
          >
            <div class="inline-flex items-center">
              <svg
                aria-hidden="true"
                class="mr-2 w-4 h-4 text-white"
                fill="currentColor"
                viewBox="0 0 20 20"
                xmlns="http://www.w3.org/2000/svg"
              >
                <path d="M10 12a2 2 0 100-4 2 2 0 000 4z"></path>
                <path
                  fill-rule="evenodd"
                  d="M.458 10C1.732 5.943 5.522 3 10 3s8.268 2.943 9.542 7c-1.274 4.057-5.064 7-9.542 7S1.732 14.057.458 10zM14 10a4 4 0 11-8 0 4 4 0 018 0z"
                  clip-rule="evenodd"
                ></path>
              </svg>
              Voir plus
            </div>
          </a>
        </div>
        
        
        <button
          type="button"
          class="flex mx-3 text-sm bg-[#622e1a] rounded-full md:mr-0 focus:ring-4 focus:ring-gray-300 dark:focus:ring-white"
          id="user-menu-button"
          aria-expanded="false"
          data-dropdown-toggle="dropdown"
        >
          <span class="sr-only">Open user menu</span>
          <img
            class="w-8 h-8 rounded-full"
            src="https://flowbite.s3.amazonaws.com/blocks/marketing-ui/avatars/michael-gough.png"
            alt="user photo"
          />
        </button>
        <!-- Dropdown menu -->
        <div
          class="hidden z-50 my-4 w-56 text-base list-none divide-y divide-gray-100 border-l border-gray-300 shadow bg-[#622e1a] dark:divide-gray-600 rounded-xl"
          id="dropdown"
        >
          <div class="py-3 px-4">
            <span
              class="block text-sm font-semibold text-white"
              >Neil Sims</span
            >
            <span
              class="block text-sm text-gray-900 truncate dark:text-white"
              >name@flowbite.com</span
            >
          </div>
          <ul
            class="py-1 text-[#622e1a] bg-white"
            aria-labelledby="dropdown"
          >
            <li>
              <a
                href="#"
                class="flex items-center py-2 px-4 text-sm hover:bg-[#622e1a]/60 dark:hover:text-white"
                ><svg
                  class="mr-2 w-5 h-5 text-[#622e1a]"
                  fill="currentColor"
                  viewBox="0 0 20 20"
                  xmlns="http://www.w3.org/2000/svg"
                >
                <path d="M12.1601 11.4032L12.0846 12.1996C12.1181 12.2028 12.1519 12.2038 12.1855 12.2028L12.1601 11.4032ZM11.8301 11.4032L11.8046 12.2028C11.836 12.2038 11.8674 12.2029 11.8987 12.2002L11.8301 11.4032ZM16.4401 7.20632L17.2401 7.20983V7.20632H16.4401ZM12.2355 10.6067C12.0831 10.5923 11.9147 10.5929 11.7614 10.6061L11.8987 12.2002C11.9654 12.1945 12.037 12.1951 12.0846 12.1996L12.2355 10.6067ZM11.8555 10.6036C9.86902 10.5403 8.36006 9.01086 8.36006 7.20632H6.76006C6.76006 9.94914 9.0311 12.1144 11.8046 12.2028L11.8555 10.6036ZM8.36006 7.20632C8.36006 5.36615 9.94178 3.8 12.0001 3.8V2.2C9.13833 2.2 6.76006 4.40437 6.76006 7.20632H8.36006ZM12.0001 3.8C14.0495 3.8 15.6401 5.3673 15.6401 7.20632H17.2401C17.2401 4.40323 14.8506 2.2 12.0001 2.2V3.8ZM15.6401 7.2028C15.6321 9.01079 14.1203 10.5403 12.1346 10.6036L12.1855 12.2028C14.9598 12.1144 17.228 9.94921 17.2401 7.20983L15.6401 7.2028ZM8.5 15.1684H15.5V13.5684H8.5V15.1684ZM15.5 20.2H8.5V21.8H15.5V20.2ZM8.5 20.2C6.96753 20.2 5.8 19.0334 5.8 17.6842H4.2C4.2 19.9975 6.16648 21.8 8.5 21.8V20.2ZM18.2 17.6842C18.2 19.0334 17.0325 20.2 15.5 20.2V21.8C17.8335 21.8 19.8 19.9975 19.8 17.6842H18.2ZM15.5 15.1684C17.0325 15.1684 18.2 16.335 18.2 17.6842H19.8C19.8 15.3709 17.8335 13.5684 15.5 13.5684V15.1684ZM8.5 13.5684C6.16648 13.5684 4.2 15.3709 4.2 17.6842H5.8C5.8 16.335 6.96753 15.1684 8.5 15.1684V13.5684Z" fill="currentColor" stroke-width="1.1"></path>
                </svg>
                Mon profil</a
              >
            </li>
            <li>
              <form action="{{ route('logout') }}" method="POST">
                @csrf
              <button type="submit"
                class="flex items-center py-2 px-4 text-sm hover:bg-[#622e1a]/60 dark:hover:text-white"
                ><svg
                  class="mr-2 w-5 h-5 text-[#622e1a]"
                  fill="currentColor"
                  viewBox="0 0 20 20"
                  xmlns="http://www.w3.org/2000/svg"
                >
                <path d="M9.16667 17.5L5.83333 17.5V17.5C3.98765 17.5 2.5 16.0123 2.5 14.1667V14.1667L2.5 5.83333V5.83333C2.5 3.98765 3.98765 2.5 5.83333 2.5V2.5L9.16667 2.5M8.22814 10L17.117 10M14.3393 6.66667L17.0833 9.41074C17.3611 9.68852 17.5 9.82741 17.5 10C17.5 10.1726 17.3611 10.3115 17.0833 10.5893L14.3393 13.3333" stroke="#622e1a" stroke-width="1.6" stroke-linecap="round" stroke-linejoin="round"></path>
                </svg>
                Déconnexion</button
              >
              </form>
            </li>
          </ul>
        </div>
      </div>
    </div>
  </nav>