<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cotation</title>
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css">
    <link href="https://afeld.github.io/emoji-css/emoji.css" rel="stylesheet"> <!--Totally optional :) -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.8.0/Chart.bundle.min.js"
        integrity="sha256-xKeoJ50pzbUGkpQxDYHD7o7hxe0LaOGeguUidbq6vis=" crossorigin="anonymous"></script>

    @vite(['resources/css/app.css', 'resources/js/app.js'])

</head>

<<<<<<< HEAD
<body class="bg-cover  font-serif  bg-center h-screen overflow-auto"
    style="background-image: url('images/login.webp');background-attachment: fixed;">
    <div class="flex flex-col h-full">
        <nav class="bg-[#102147]/80 border-gray-200">
=======
<body class="bg-cover  font-serif  bg-center bg-gray-900 bg-blend-multiply h-screen overflow-auto"
    style="background-image: url('images/login.webp');background-attachment: fixed;">
    <div class="flex flex-col h-full">
        <nav class="bg-[#763c26]/90 border-gray-200">
>>>>>>> 149ce15 (revu du travail)
            <div class="max-w-screen-xl flex items-center justify-between mx-auto p-4">
                <a href="#" class="flex items-center space-x-3 rtl:space-x-reverse">
                    <img src="images/logo-ingenium-assu.png" class="h-16 w-auto shadow-lg p-2 shadow-gray-100 rounded-lg bg-white/20" alt="Flowbite Logo" />
                    <span class="self-center text-2xl font-semibold whitespace-nowrap text-white">Ingenium</span>
                </a>
            </div>
        </nav>
        <div class="flex-grow flex items-center justify-center px-4 sm:px-0">
<<<<<<< HEAD
          <div class="bg-[#102147]/80 rounded-lg shadow-lg p-8 w-full max-w-md sm:max-w-md lg:max-w-lg shadow-slate-900">
              <h2 class="text-2xl font-bold text-center text-white md:py-5">Connexion</h2>
              <p class="text-center text-gray-200 mb-6">Accédez à votre espace de travail</p>
              <form action="#" method="POST" class="space-y-6">
                  <div>
                      <div class="relative mb-10">
                          <input type="email" id="email_utilisateur"
                              aria-describedby="outlined_success_hel_utilisateur"
                              class="block px-2.5 pb-2.5 pt-4 w-full text-sm text-gray-950 bg-white appearance-none shadow-gray-900 focus:outline focus:ring-2 focus:ring-teal-500 peer shadow-lg rounded-md"
                              placeholder=" " />
                          <label for="email_utilisateur"
                              class="cursor-pointer absolute duration-300 transform -translate-y-4 scale-75 top-2 z-10 origin-[0] bg-white rounded px-2 peer-focus:px-2 peer-placeholder-shown:scale-100 peer-placeholder-shown:-translate-y-1/2 peer-placeholder-shown:top-1/2 peer-focus:top-2 peer-focus:scale-75 peer-focus:-translate-y-4 start-1 rtl:peer-focus:translate-x-1/4 rtl:peer-focus:left-auto">
                              Adresse email
                          </label>
                      </div>
                  </div>
                  <div>
                      <div class="relative mb-8">
                          <input type="password" id="password_utilisateur"
                              aria-describedby="outlined_success_helpassword"
                              class="block px-2.5 pb-2.5 pt-4 w-full text-sm text-gray-950 bg-white appearance-none shadow-gray-900 focus:outline focus:ring-2 focus:ring-teal-500 peer shadow-lg rounded-md"
                              placeholder=" " />
                          <label for="password_utilisateur"
                              class="cursor-pointer absolute duration-300 transform -translate-y-4 scale-75 top-2 z-10 origin-[0] bg-white rounded px-2 peer-focus:px-2 peer-placeholder-shown:scale-100 peer-placeholder-shown:-translate-y-1/2 peer-placeholder-shown:top-1/2 peer-focus:top-2 peer-focus:scale-75 peer-focus:-translate-y-4 start-1 rtl:peer-focus:translate-x-1/4 rtl:peer-focus:left-auto">
                              Mot de passe
                          </label>
                      </div>
                  </div>
                  <div class="flex items-center justify-between">
                      <label class="inline-flex items-center mb-5 cursor-pointer">
                          <input type="checkbox" value="" class="sr-only peer">
                          <div class="relative w-11 h-6 bg-gray-200 peer-focus:outline-none peer-focus:ring-4 peer-focus:ring-blue-300/50 dark:peer-focus:ring-blue-800/50 rounded-full peer dark:bg-gray-700 peer-checked:after:translate-x-full rtl:peer-checked:after:-translate-x-full peer-checked:after:border-white after:content-[''] after:absolute after:top-[2px] after:start-[2px] after:bg-white after:border-gray-300 after:border after:rounded-full after:h-5 after:w-5 after:transition-all dark:border-gray-600 peer-checked:bg-blue-600/50"></div>
                          <span class="ml-3 text-sm font-medium text-gray-300">Se souvenir de moi</span>
                      </label>
                      <a href="#" class="text-sm text-teal-100 hover:underline">Mot de passe oublié ?</a>
                  </div>
                  <button type="submit"
                      class="w-full p-4 text-2xl py-2 text-white bg-blue-900 shadow-2xl shadow-gray-900 rounded-md hover:bg-blue-800/80 focus:outline-none focus:ring-2 focus:ring-teal-500 focus:ring-opacity-50">
                      Se connecter
                  </button>
                  <p class="text-center text-gray-300 mt-6">Vous n'avez pas de compte ? <a href="{{route('dashboard')}}"
                          class="text-teal-300 hover:underline">Inscrivez-vous</a></p>
              </form>
=======
          <div class="bg-[#763c26]/80 rounded-lg shadow-lg p-8 w-full max-w-md sm:max-w-md lg:max-w-lg shadow-slate-900">
              <h2 class="text-2xl font-bold text-center text-white md:py-5">Connexion</h2>
              <p class="text-center text-gray-200 mb-6">Accédez à votre espace de travail</p>
              <form action="{{ route('login') }}" method="POST" class="space-y-6">
                @csrf
                <div>
                    <div class="relative mb-10">
                        <input type="email" name="email" id="email_utilisateur" 
                            aria-describedby="outlined_success_hel_utilisateur"
                            class="block px-2.5 pb-2.5 pt-4 w-full text-sm text-gray-950 bg-white appearance-none shadow-gray-900 focus:outline focus:ring-2 focus:ring-teal-500 peer shadow-lg rounded-md"
                            placeholder=" " value="{{ old('email') }}" required autofocus />
                        <label for="email_utilisateur" 
                            class="cursor-pointer absolute duration-300 transform -translate-y-4 scale-75 top-2 z-10 origin-[0] bg-white rounded px-2 peer-focus:px-2 peer-placeholder-shown:scale-100 peer-placeholder-shown:-translate-y-1/2 peer-placeholder-shown:top-1/2 peer-focus:top-2 peer-focus:scale-75 peer-focus:-translate-y-4 start-1 rtl:peer-focus:translate-x-1/4 rtl:peer-focus:left-auto">
                            Adresse email
                        </label>
                    </div>
                </div>
                <div>
                    <div class="relative mb-8">
                        <input type="password" name="password" id="password_utilisateur"
                            aria-describedby="outlined_success_helpassword"
                            class="block px-2.5 pb-2.5 pt-4 w-full text-sm text-gray-950 bg-white appearance-none shadow-gray-900 focus:outline focus:ring-2 focus:ring-teal-500 peer shadow-lg rounded-md"
                            placeholder=" " required />
                        <label for="password_utilisateur"
                            class="cursor-pointer absolute duration-300 transform -translate-y-4 scale-75 top-2 z-10 origin-[0] bg-white rounded px-2 peer-focus:px-2 peer-placeholder-shown:scale-100 peer-placeholder-shown:-translate-y-1/2 peer-placeholder-shown:top-1/2 peer-focus:top-2 peer-focus:scale-75 peer-focus:-translate-y-4 start-1 rtl:peer-focus:translate-x-1/4 rtl:peer-focus:left-auto">
                            Mot de passe
                        </label>
                    </div>
                </div>
                <div class="flex items-center justify-between">
                    <label class="inline-flex items-center mb-5 cursor-pointer">
                        <input type="checkbox" value="" class="sr-only peer" name="remember">
                        <div class="relative w-11 h-6 bg-gray-200 peer-focus:outline-none peer-focus:ring-4 peer-focus:ring-blue-300/50 dark:peer-focus:ring-blue-800/50 rounded-full peer dark:bg-gray-700 peer-checked:after:translate-x-full rtl:peer-checked:after:-translate-x-full peer-checked:after:border-white after:content-[''] after:absolute after:top-[2px] after:start-[2px] after:bg-white after:border-gray-300 after:border after:rounded-full after:h-5 after:w-5 after:transition-all dark:border-gray-600 peer-checked:bg-blue-600/50"></div>
                        <span class="ml-3 text-sm font-medium text-gray-300">Se souvenir de moi</span>
                    </label>
                    <a href="" class="text-sm text-teal-100 hover:underline">Mot de passe oublié ?</a>
                </div>
                <button type="submit" 
                    class="w-full p-4 text-2xl py-2 text-white bg-blue-900 shadow-2xl shadow-gray-900 rounded-md hover:bg-blue-800/80 focus:outline-none focus:ring-2 focus:ring-teal-500 focus:ring-opacity-50">
                    Se connecter
                </button>
                <p class="text-center text-gray-300 mt-6">Vous n'avez pas de compte ? <a href="" class="text-teal-300 hover:underline">Inscrivez-vous</a></p>
            </form>
            
>>>>>>> 149ce15 (revu du travail)
          </div>
      </div>
      
    </div>
</body>

</html>
