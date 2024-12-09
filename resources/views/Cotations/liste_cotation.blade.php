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
    <!-- Start block -->
<section class=" p-3 sm:p-5 antialiased">
    <div class="mx-auto max-w-screen-2xl px-4 lg:px-12">
        <div class="bg-white relative shadow-md sm:rounded-lg overflow-hidden">
            @if (session('success'))
            <div id="alert-border-3" class="flex items-center p-4 mb-4 text-white border-t-4 border-green-300 bg-green-50 dark:text-green-400 dark:bg-green-800/80 dark:border-green-800" role="alert">
                <svg class="flex-shrink-0 w-4 h-4" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 20 20">
                  <path d="M10 .5a9.5 9.5 0 1 0 9.5 9.5A9.51 9.51 0 0 0 10 .5ZM9.5 4a1.5 1.5 0 1 1 0 3 1.5 1.5 0 0 1 0-3ZM12 15H8a1 1 0 0 1 0-2h1v-3H8a1 1 0 0 1 0-2h2a1 1 0 0 1 1 1v4h1a1 1 0 0 1 0 2Z"/>
                </svg>
                <div class="ms-3 text-lg text-white">
                 {{session('success')}}
                </div>
                <button type="button" class="ms-auto -mx-1.5 -my-1.5 bg-green-50 text-green-500 rounded-lg focus:ring-2 focus:ring-green-400 p-1.5 hover:bg-green-200 inline-flex items-center justify-center h-8 w-8 dark:bg-gray-800 dark:text-green-400 dark:hover:bg-gray-700"  data-dismiss-target="#alert-border-3" aria-label="Close">
                  <span class="sr-only">Dismiss</span>
                  <svg class="w-3 h-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 14">
                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 1 6 6m0 0 6 6M7 7l6-6M7 7l-6 6"/>
                  </svg>
                </button>
            </div>
            @endif
            <div class="flex flex-col md:flex-row bg-[#763c26] md:items-center md:justify-between space-y-3 md:space-y-0 md:space-x-4 p-4">
                <div class="flex-1 flex items-center space-x-2">
                    <h5>
                        <strong class="text-white text-lg">Liste des cotations enrégistrées</strong>
                    </h5>
                </div>
            </div>
            <div class="flex flex-col md:flex-row items-stretch md:items-center md:space-x-3 space-y-3 md:space-y-0 justify-between mx-4 py-4 border-t dark:border-gray-700">
                <div class="w-full md:w-1/2">
                    <form class="flex items-center">
                        <label for="simple-search" class="sr-only">Recherche</label>
                        <div class="relative w-full">
                            <div class="absolute inset-y-0 left-0 flex items-center pl-3 pointer-events-none">
                                <svg aria-hidden="true" class="w-5 h-5 text-[#763c26] dark:text-[#763c26]" fill="currentColor" viewbox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                    <path fill-rule="evenodd" clip-rule="evenodd" d="M8 4a4 4 0 100 8 4 4 0 000-8zM2 8a6 6 0 1110.89 3.476l4.817 4.817a1 1 0 01-1.414 1.414l-4.816-4.816A6 6 0 012 8z" />
                                </svg>
                            </div>
                            <input type="text" id="simple-search" placeholder="Tapez une recherche..." required="" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-[#102147]/80 focus:border-[#102147]/80 block w-full pl-10 p-3 dark:bg-white dark:border-[#763c26] dark:placeholder-gray-400 dark:text-[#763c26] dark:focus:ring-[#763c26] dark:focus:border-[#763c26]">
                        </div>
                    </form>
                </div>
                <a href="{{route('ajouter_cotation')}}" id="createProductButton" data-modal-toggle="createProductModal" class="flex items-center justify-center text-white bg-[#763c26] hover:bg-[#763820] focus:ring-4 focus:ring-primary-300 font-medium rounded-md shadow-lg text-md px-4 py-2 dark:bg-[#763c26] dark:hover:bg-[#763c26] focus:outline-none dark:focus:ring-[#763c26]">
                    <svg class="h-3.5 w-3.5 mr-1.5 -ml-1" fill="currentColor" viewbox="0 0 20 20" xmlns="http://www.w3.org/2000/svg" aria-hidden="true">
                        <path clip-rule="evenodd" fill-rule="evenodd" d="M10 3a1 1 0 011 1v5h5a1 1 0 110 2h-5v5a1 1 0 11-2 0v-5H4a1 1 0 110-2h5V4a1 1 0 011-1z" />
                    </svg>
                    Ajouter une cotation
                </a>
            </div>
            <div class="overflow-x-auto">
                <table class="w-full text-sm text-left text-gray-500 dark:text-gray-400">
                    <thead class="text-xs uppercase bg-gray-50 dark:bg-[#763c26] text-white">
                        <tr>
                            <th scope="col" class="px-4 py-3">Raison social</th>
                            <th scope="col" class="px-4 py-3">Nom du Client</th>
                            <th scope="col" class="px-4 py-3">Contact</th>
                            <th scope="col" class="px-4 py-3">Email</th>
                            <th scope="col" class="px-4 py-3">Secteur d'Activité</th>
                            <th scope="col" class="px-4 py-3">Chiffre d'Affaires</th>
                            <th scope="col" class="px-4 py-3">Actions</th>
                        </tr>
                    </thead>
                    <tbody class="font-semibold">
                        @forelse ($clients as $client)
                            <tr class="border-b dark:border-[#102147] hover:bg-gray-100 dark:hover:bg-[#763c26]/30">
                                <td class="px-4 py-3 text-[#102147] whitespace-nowrap">
                                    {{ $client->Client->raison_sociale }}
                                </td>
                                <td class="px-4 py-3 text-[#102147]">
                                    {{ $client->Client->contact_nom }}
                                </td>
                                <td class="px-4 py-3 text-[#102147]">
                                    {{ $client->Client->contact_telephone }}
                                </td>
                                <td class="px-4 py-3 text-[#102147]">
                                    {{ $client->Client->contact_email }}
                                </td>
                                <td class="px-4 py-3 text-[#102147]">
                                    {{ $client->Client->secteur_activite }}
                                </td>
                                <td class="px-4 py-3 text-[#102147]">
                                    {{ number_format($client->Client->chiffre_affaires, 2, ',', ' ') }} FCFA
                                </td>
                                <td class="px-4 py-3 whitespace-nowrap text-[#102147]">
                                    <div class="flex items-center space-x-4">
                                        <!-- Bouton Details -->
                                        <button type="button" data-drawer-target="drawer-read-product-advanced{{ $client->Client->id }}" data-drawer-show="drawer-read-product-advanced{{ $client->Client->id }}" aria-controls="drawer-read-product-advanced{{ $client->Client->id }}" class="py-2 px-3 flex items-center text-sm text-center text-green-700 border border-green-700 rounded-lg hover:text-white hover:bg-green-700 focus:ring-4 focus:outline-none focus:ring-green-300 dark:border-green-500 dark:text-green-500 dark:hover:text-white dark:hover:bg-green-600 dark:focus:ring-green-800">
                                            <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 mr-2 -ml-0.5" viewBox="0 0 24 24" fill="currentColor">
                                                <path d="M12 4.5C7.305 4.5 3.305 7.155 1.318 11.5c-1.05 2.275-1.05 4.725 0 7 1.987 4.345 5.987 7 10.682 7s8.695-2.655 10.682-7c1.05-2.275 1.05-4.725 0-7C20.695 7.155 16.695 4.5 12 4.5zm0 2c4.308 0 7.922 2.52 9.457 6.618.735 1.905.735 4.055 0 5.962C19.922 19.98 16.308 22.5 12 22.5S4.078 19.98 2.543 16.882C1.808 14.977 1.808 12.827 2.543 10.92 4.078 6.82 7.692 4.5 12 4.5zm0 2c-2.761 0-5 2.239-5 5s2.239 5 5 5 5-2.239 5-5-2.239-5-5-5zm0 2a3 3 0 110 6 3 3 0 010-6z"/>
                                            </svg>                                            
                                            Details
                                        </button>

                                        <!-- Bouton Edit -->
                                        <button type="button" data-drawer-target="drawer-update-product" data-drawer-show="drawer-update-product" aria-controls="drawer-update-product" class="py-2 px-3 flex items-center text-sm text-center text-[#763c26] border border-[#763c26] rounded-lg hover:text-white hover:bg-[#763c26] focus:ring-4 focus:outline-none focus:ring-blue-300 dark:border-[#763c26] dark:text-[#763c26] dark:hover:text-white dark:hover:bg-[#763c26] dark:focus:ring-blue-800">
                                            <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 mr-2 -ml-0.5" viewBox="0 0 20 20" fill="currentColor">
                                                <path d="M17.414 2.586a2 2 0 00-2.828 0L7 10.172V13h2.828l7.586-7.586a2 2 0 000-2.828z"/>
                                                <path fill-rule="evenodd" d="M2 6a2 2 0 012-2h4a1 1 0 010 2H4v10h10v-4a1 1 0 112 0v4a2 2 0 01-2 2H4a2 2 0 01-2-2V6z" clip-rule="evenodd"/>
                                            </svg>
                                            Edit
                                        </button>


                                        <!-- Bouton pour Delete -->
                                        
                                            <button type="button" data-modal-target="delete-modal{{ $client->Client->id }}" data-modal-toggle="delete-modal{{ $client->Client->id }}" class="py-2 px-3 flex items-center text-sm text-red-700 hover:text-white border border-red-700 hover:bg-red-800 focus:ring-4 focus:outline-none focus:ring-red-300 rounded-lg dark:border-red-500 dark:text-red-500 dark:hover:text-white dark:hover:bg-red-600 dark:focus:ring-red-900">
                                                <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 mr-2 -ml-0.5" viewBox="0 0 20 20" fill="currentColor">
                                                    <path fill-rule="evenodd" d="M9 2a1 1 0 00-.894.553L7.382 4H4a1 1 0 000 2v10a2 2 0 002 2h8a2 2 0 002-2V6a1 1 0 100-2h-3.382l-.724-1.447A1 1 0 0011 2H9zM7 8a1 1 0 012 0v6a1 1 0 11-2 0V8zm5-1a1 1 0 00-1 1v6a1 1 0 102 0V8a1 1 0 00-1-1z" clip-rule="evenodd"/>
                                                </svg>
                                                Delete
                                            </button>
                                        
                                    </div>
                                </td>
                            </tr>
                        @empty
                            <tr>
                                <td colspan="6" class="px-4 py-3 text-center text-gray-500">
                                    Aucun client trouvé.
                                </td>
                            </tr>
                        @endforelse
                    </tbody>
                    
                </table>
            </div>
            
        </div>
    </div>
</section>
@foreach ($clients as $client)
<!-- End block -->
<div id="createProductModal" tabindex="-1" aria-hidden="true" class="hidden overflow-y-auto overflow-x-hidden fixed top-0 right-0 left-0 z-50 justify-center items-center w-full md:inset-0 h-[calc(100%-1rem)] md:h-full">
    <div class="relative p-4  w-full max-w-3xl h-full md:h-auto">
        <!-- Modal content -->
        <div class="relative p-4 bg-white rounded-lg shadow dark:bg-gray-800 sm:p-5">
            <!-- Modal header -->
            <div class="flex justify-between items-center pb-4 mb-4 rounded-t border-b sm:mb-5 dark:border-gray-600">
                <h3 class="text-lg font-semibold text-gray-900 dark:text-white">Add Product</h3>
                <button type="button" class="text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm p-1.5 ml-auto inline-flex items-center dark:hover:bg-gray-600 dark:hover:text-white" data-modal-toggle="createProductModal">
                    <svg aria-hidden="true" class="w-5 h-5" fill="currentColor" viewbox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                        <path fill-rule="evenodd" d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z" clip-rule="evenodd" />
                    </svg>
                    <span class="sr-only">Close modal</span>
                </button>
            </div>
            <!-- Modal body -->
            <form action="#">
                <div class="grid gap-4 mb-4 sm:grid-cols-2">
                    <div>
                        <label for="name" class="block mb-2 text-sm  text-gray-900 dark:text-white">Product Name</label>
                        <input type="text" name="name" id="name" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-[#102147]/80 dark:focus:border-[#102147]/80" placeholder="Type product name" required="">
                    </div>
                    <div><label for="category" class="block mb-2 text-sm  text-gray-900 dark:text-white">Category</label><select id="category" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-[#102147]/80 focus:border-[#102147]/80 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-[#102147]/80 dark:focus:border-[#102147]/80"><option selected="">Select category</option><option value="TV">TV/Monitors</option><option value="PC">PC</option><option value="GA">Gaming/Console</option><option value="PH">Phones</option></select></div>
                    <div>
                        <label for="brand" class="block mb-2 text-sm  text-gray-900 dark:text-white">Brand</label>
                        <input type="text" name="brand" id="brand" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-[#102147]/80 dark:focus:border-[#102147]/80" placeholder="Product brand" required="">
                    </div>
                    <div>
                        <label for="price" class="block mb-2 text-sm  text-gray-900 dark:text-white">Price</label>
                        <input type="number" name="price" id="price" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-[#102147]/80 dark:focus:border-[#102147]/80" placeholder="$2999" required="">
                    </div>
                    <div class="grid gap-4 sm:col-span-2 md:gap-6 sm:grid-cols-4">
                        <div>
                            <label for="weight" class="block mb-2 text-sm  text-gray-900 dark:text-white">Item weight (kg)</label>
                            <input type="number" name="weight" id="weight" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-[#102147]/80 dark:focus:border-[#102147]/80" placeholder="12" required="">
                        </div>
                        <div>
                            <label for="length" class="block mb-2 text-sm  text-gray-900 dark:text-white">Lenght (cm)</label>
                            <input type="number" name="length" id="length" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-[#102147]/80 dark:focus:border-[#102147]/80" placeholder="105" required="">
                        </div>
                        <div>
                            <label for="breadth" class="block mb-2 text-sm  text-gray-900 dark:text-white">Breadth (cm)</label>
                            <input type="number" name="breadth" id="breadth" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-[#102147]/80 dark:focus:border-[#102147]/80" placeholder="15" required="">
                        </div>
                        <div>
                            <label for="width" class="block mb-2 text-sm  text-gray-900 dark:text-white">Width (cm)</label>
                            <input type="number" name="width" id="width" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-[#102147]/80 dark:focus:border-[#102147]/80" placeholder="23" required="">
                        </div>
                    </div>
                    <div class="sm:col-span-2"><label for="description" class="block mb-2 text-sm  text-gray-900 dark:text-white">Description</label><textarea id="description" rows="4" class="block p-2.5 w-full text-sm text-gray-900 bg-gray-50 rounded-lg border border-gray-300 focus:ring-[#102147]/80 focus:border-[#102147]/80 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-[#102147]/80 dark:focus:border-[#102147]/80" placeholder="Write product description here"></textarea></div>
                </div>
                <div class="mb-4 space-y-4 sm:flex sm:space-y-0">
                    <div class="flex items-center mr-4">
                        <input id="inline-checkbox" type="checkbox" value="" name="sellingType" class="w-4 h-4 bg-gray-100 rounded border-gray-300 text-primary-600 focus:ring-[#102147]/80 dark:focus:ring-primary-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
                        <label for="inline-checkbox" class="ml-2 text-sm  text-gray-900 dark:text-gray-300">In-store only</label>
                    </div>
                    <div class="flex items-center mr-4">
                        <input id="inline-2-checkbox" type="checkbox" value="" name="sellingType" class="w-4 h-4 bg-gray-100 rounded border-gray-300 text-primary-600 focus:ring-[#102147]/80 dark:focus:ring-primary-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
                        <label for="inline-2-checkbox" class="ml-2 text-sm  text-gray-900 dark:text-gray-300">Online selling only</label>
                    </div>
                    <div class="flex items-center mr-4">
                        <input checked="" id="inline-checked-checkbox" type="checkbox" value="" name="sellingType" class="w-4 h-4 bg-gray-100 rounded border-gray-300 text-primary-600 focus:ring-[#102147]/80 dark:focus:ring-primary-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
                        <label for="inline-checked-checkbox" class="ml-2 text-sm  text-gray-900 dark:text-gray-300">Both in-store and online</label>
                    </div>
                </div>
                <div class="mb-4">
                    <span class="block mb-2 text-sm  text-gray-900 dark:text-white">Product Images</span>
                    <div class="flex justify-center items-center w-full">
                        <label for="dropzone-file" class="flex flex-col justify-center items-center w-full h-64 bg-gray-50 rounded-lg border-2 border-gray-300 border-dashed cursor-pointer dark:hover:bg-bray-800 dark:bg-gray-700 hover:bg-gray-100 dark:border-gray-600 dark:hover:border-gray-500 dark:hover:bg-gray-600">
                            <div class="flex flex-col justify-center items-center pt-5 pb-6">
                                <svg aria-hidden="true" class="mb-3 w-10 h-10 text-gray-400" fill="none" stroke="currentColor" viewbox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M7 16a4 4 0 01-.88-7.903A5 5 0 1115.9 6L16 6a5 5 0 011 9.9M15 13l-3-3m0 0l-3 3m3-3v12" />
                                </svg>
                                <p class="mb-2 text-sm text-gray-500 dark:text-gray-400">
                                    <span class="font-semibold">Click to upload</span>
                                    or drag and drop
                                </p>
                                <p class="text-xs text-gray-500 dark:text-gray-400">SVG, PNG, JPG or GIF (MAX. 800x400px)</p>
                            </div>
                            <input id="dropzone-file" type="file" class="hidden">
                        </label>
                    </div>
                </div>
                <div class="items-center space-y-4 sm:flex sm:space-y-0 sm:space-x-4">
                    <button type="submit" class="w-full sm:w-auto justify-center text-white inline-flex bg-primary-700 hover:bg-primary-800 focus:ring-4 focus:outline-none focus:ring-primary-300  rounded-lg text-sm px-5 py-2.5 text-center dark:bg-primary-600 dark:hover:bg-primary-700 dark:focus:ring-primary-800">Add product</button>
                    <button class="w-full sm:w-auto text-white justify-center inline-flex items-center bg-primary-700 hover:bg-primary-800 focus:ring-4 focus:outline-none focus:ring-primary-300  rounded-lg text-sm px-5 py-2.5 text-center dark:bg-primary-600 dark:hover:bg-primary-700 dark:focus:ring-primary-800">
                        <svg class="mr-1 -ml-1 w-5 h-5" fill="currentColor" viewbox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                            <path fill-rule="evenodd" d="M6 2a1 1 0 00-1 1v1H4a2 2 0 00-2 2v10a2 2 0 002 2h12a2 2 0 002-2V6a2 2 0 00-2-2h-1V3a1 1 0 10-2 0v1H7V3a1 1 0 00-1-1zm0 5a1 1 0 000 2h8a1 1 0 100-2H6z" clip-rule="evenodd" />
                        </svg>
                        Schedule
                    </button>
                    <button data-modal-toggle="createProductModal" type="button" class="w-full justify-center sm:w-auto text-gray-500 inline-flex items-center bg-white hover:bg-gray-100 focus:ring-4 focus:outline-none focus:ring-primary-300 rounded-lg border border-gray-200 text-sm  px-5 py-2.5 hover:text-gray-900 focus:z-10 dark:bg-gray-700 dark:text-gray-300 dark:border-gray-500 dark:hover:text-white dark:hover:bg-gray-600 dark:focus:ring-gray-600">
                        <svg class="mr-1 -ml-1 w-5 h-5" fill="currentColor" viewbox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                            <path fill-rule="evenodd" d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z" clip-rule="evenodd" />
                        </svg>
                        Discard
                    </button>
                </div>
            </form>
        </div>
    </div>
</div>
<!-- drawer component -->
<form action="#" id="drawer-update-product" class="fixed top-0 left-0 z-40 w-full h-screen max-w-3xl p-4 overflow-y-auto transition-transform -translate-x-full bg-white dark:bg-gray-800" tabindex="-1" aria-labelledby="drawer-update-product-label" aria-hidden="true">
    <h5 id="drawer-label" class="inline-flex items-center mb-6 text-sm font-semibold text-gray-500 uppercase dark:text-gray-400">New Product</h5>
    <button type="button" data-drawer-dismiss="drawer-update-product" aria-controls="drawer-update-product" class="text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm p-1.5 absolute top-2.5 right-2.5 inline-flex items-center dark:hover:bg-gray-600 dark:hover:text-white">
        <svg aria-hidden="true" class="w-5 h-5" fill="currentColor" viewbox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
            <path fill-rule="evenodd" d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z" clip-rule="evenodd" />
        </svg>
        <span class="sr-only">Close menu</span>
    </button>
    <div class="grid gap-4 sm:grid-cols-3 sm:gap-6 ">
        <div class="space-y-4 sm:col-span-2 sm:space-y-6">
            <div>
                <label for="name" class="block mb-2 text-sm  text-gray-900 dark:text-white">Product Name</label>
                <input type="text" name="name" id="name" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-[#102147]/80 dark:focus:border-[#102147]/80" value="Apple iMac 27&ldquo;" placeholder="Type product name" required="">
            </div>
            <div>
                <label for="description" class="block mb-2 text-sm  text-gray-900 dark:text-white">Description</label>
                <div class="w-full border border-gray-200 rounded-lg bg-gray-50 dark:bg-gray-700 dark:border-gray-600">
                    <div class="flex items-center justify-between px-3 py-2 border-b dark:border-gray-600">
                        <div class="flex flex-wrap items-center divide-gray-200 sm:divide-x dark:divide-gray-600">
                            <div class="flex items-center space-x-1 sm:pr-4">
                                <button type="button" class="p-2 text-gray-500 rounded cursor-pointer hover:text-gray-900 hover:bg-gray-100 dark:text-gray-400 dark:hover:text-white dark:hover:bg-gray-600">
                                    <svg aria-hidden="true" class="w-5 h-5" fill="currentColor" viewbox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                        <path fill-rule="evenodd" d="M8 4a3 3 0 00-3 3v4a5 5 0 0010 0V7a1 1 0 112 0v4a7 7 0 11-14 0V7a5 5 0 0110 0v4a3 3 0 11-6 0V7a1 1 0 012 0v4a1 1 0 102 0V7a3 3 0 00-3-3z" clip-rule="evenodd" />
                                    </svg>
                                    <span class="sr-only">Attach file</span>
                                </button>
                                <button type="button" class="p-2 text-gray-500 rounded cursor-pointer hover:text-gray-900 hover:bg-gray-100 dark:text-gray-400 dark:hover:text-white dark:hover:bg-gray-600">
                                    <svg aria-hidden="true" class="w-5 h-5" fill="currentColor" viewbox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                        <path fill-rule="evenodd" d="M5.05 4.05a7 7 0 119.9 9.9L10 18.9l-4.95-4.95a7 7 0 010-9.9zM10 11a2 2 0 100-4 2 2 0 000 4z" clip-rule="evenodd" />
                                    </svg>
                                    <span class="sr-only">Embed map</span>
                                </button>
                                <button type="button" class="p-2 text-gray-500 rounded cursor-pointer hover:text-gray-900 hover:bg-gray-100 dark:text-gray-400 dark:hover:text-white dark:hover:bg-gray-600">
                                    <svg aria-hidden="true" class="w-5 h-5" fill="currentColor" viewbox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                        <path fill-rule="evenodd" d="M4 3a2 2 0 00-2 2v10a2 2 0 002 2h12a2 2 0 002-2V5a2 2 0 00-2-2H4zm12 12H4l4-8 3 6 2-4 3 6z" clip-rule="evenodd" />
                                    </svg>
                                    <span class="sr-only">Upload image</span>
                                </button>
                                <button type="button" class="p-2 text-gray-500 rounded cursor-pointer hover:text-gray-900 hover:bg-gray-100 dark:text-gray-400 dark:hover:text-white dark:hover:bg-gray-600">
                                    <svg aria-hidden="true" class="w-5 h-5" fill="currentColor" viewbox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                        <path fill-rule="evenodd" d="M12.316 3.051a1 1 0 01.633 1.265l-4 12a1 1 0 11-1.898-.632l4-12a1 1 0 011.265-.633zM5.707 6.293a1 1 0 010 1.414L3.414 10l2.293 2.293a1 1 0 11-1.414 1.414l-3-3a1 1 0 010-1.414l3-3a1 1 0 011.414 0zm8.586 0a1 1 0 011.414 0l3 3a1 1 0 010 1.414l-3 3a1 1 0 11-1.414-1.414L16.586 10l-2.293-2.293a1 1 0 010-1.414z" clip-rule="evenodd" />
                                    </svg>
                                    <span class="sr-only">Format code</span>
                                </button>
                                <button type="button" class="p-2 text-gray-500 rounded cursor-pointer hover:text-gray-900 hover:bg-gray-100 dark:text-gray-400 dark:hover:text-white dark:hover:bg-gray-600">
                                    <svg aria-hidden="true" class="w-5 h-5" fill="currentColor" viewbox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                        <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zM7 9a1 1 0 100-2 1 1 0 000 2zm7-1a1 1 0 11-2 0 1 1 0 012 0zm-.464 5.535a1 1 0 10-1.415-1.414 3 3 0 01-4.242 0 1 1 0 00-1.415 1.414 5 5 0 007.072 0z" clip-rule="evenodd" />
                                    </svg>
                                    <span class="sr-only">Add emoji</span>
                                </button>
                            </div>
                            <div class="flex-wrap items-center hidden space-x-1 sm:flex sm:pl-4">
                                <button type="button" class="p-2 text-gray-500 rounded cursor-pointer hover:text-gray-900 hover:bg-gray-100 dark:text-gray-400 dark:hover:text-white dark:hover:bg-gray-600">
                                    <svg aria-hidden="true" class="w-5 h-5" fill="currentColor" viewbox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                        <path fill-rule="evenodd" d="M3 4a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1zm0 4a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1zm0 4a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1zm0 4a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1z" clip-rule="evenodd" />
                                    </svg>
                                    <span class="sr-only">Add list</span>
                                </button>
                                <button type="button" class="p-2 text-gray-500 rounded cursor-pointer hover:text-gray-900 hover:bg-gray-100 dark:text-gray-400 dark:hover:text-white dark:hover:bg-gray-600">
                                    <svg aria-hidden="true" class="w-5 h-5" fill="currentColor" viewbox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                        <path fill-rule="evenodd" d="M11.49 3.17c-.38-1.56-2.6-1.56-2.98 0a1.532 1.532 0 01-2.286.948c-1.372-.836-2.942.734-2.106 2.106.54.886.061 2.042-.947 2.287-1.561.379-1.561 2.6 0 2.978a1.532 1.532 0 01.947 2.287c-.836 1.372.734 2.942 2.106 2.106a1.532 1.532 0 012.287.947c.379 1.561 2.6 1.561 2.978 0a1.533 1.533 0 012.287-.947c1.372.836 2.942-.734 2.106-2.106a1.533 1.533 0 01.947-2.287c1.561-.379 1.561-2.6 0-2.978a1.532 1.532 0 01-.947-2.287c.836-1.372-.734-2.942-2.106-2.106a1.532 1.532 0 01-2.287-.947zM10 13a3 3 0 100-6 3 3 0 000 6z" clip-rule="evenodd" />
                                    </svg>
                                    <span class="sr-only">Settings</span>
                                </button>
                            </div>
                        </div>
                        <button type="button" data-tooltip-target="tooltip-fullscreen" class="p-2 text-gray-500 rounded cursor-pointer sm:ml-auto hover:text-gray-900 hover:bg-gray-100 dark:text-gray-400 dark:hover:text-white dark:hover:bg-gray-600">
                            <svg aria-hidden="true" class="w-5 h-5" fill="currentColor" viewbox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                <path fill-rule="evenodd" d="M3 4a1 1 0 011-1h4a1 1 0 010 2H6.414l2.293 2.293a1 1 0 11-1.414 1.414L5 6.414V8a1 1 0 01-2 0V4zm9 1a1 1 0 010-2h4a1 1 0 011 1v4a1 1 0 01-2 0V6.414l-2.293 2.293a1 1 0 11-1.414-1.414L13.586 5H12zm-9 7a1 1 0 012 0v1.586l2.293-2.293a1 1 0 111.414 1.414L6.414 15H8a1 1 0 010 2H4a1 1 0 01-1-1v-4zm13-1a1 1 0 011 1v4a1 1 0 01-1 1h-4a1 1 0 010-2h1.586l-2.293-2.293a1 1 0 111.414-1.414L15 13.586V12a1 1 0 011-1z" clip-rule="evenodd" />
                            </svg>
                            <span class="sr-only">Full screen</span>
                        </button>
                        <div id="tooltip-fullscreen" role="tooltip" class="absolute z-10 invisible inline-block px-3 py-2 text-sm  text-white transition-opacity duration-300 bg-gray-900 rounded-lg shadow-sm opacity-0 tooltip dark:bg-gray-700" data-popper-reference-hidden="" data-popper-escaped="" data-popper-placement="bottom" style="position: absolute; inset: 0px auto auto 0px; margin: 0px; transform: translate3d(0px, 335px, 0px);">
                            Show full screen
                            <div class="tooltip-arrow" data-popper-arrow=""></div>
                        </div>
                    </div>
                    <div class="px-4 py-3 bg-white rounded-b-lg dark:bg-gray-800"><textarea id="description" rows="8" class="block w-full px-0 text-sm text-gray-800 bg-white border-0 dark:bg-gray-800 focus:ring-0 dark:text-white dark:placeholder-gray-400" placeholder="Write product description here" required="">Standard glass, 3.8GHz 8-core 10th-generation Intel Core i7 processor, Turbo Boost up to 5.0GHz, 16GB 2666MHz DDR4 memory, Radeon Pro 5500 XT with 8GB of GDDR6 memory, 256GB SSD storage, Gigabit Ethernet, Magic Mouse 2, Magic Keyboard - US</textarea></div>
                </div>
            </div>
            <div class="mb-4">
                <span class="block mb-2 text-sm  text-gray-900 dark:text-white">Product Images</span>
                <div class="grid grid-cols-3 gap-4 mb-4">
                    <div class="relative p-2 bg-gray-100 rounded-lg sm:w-36 sm:h-36 dark:bg-gray-700">
                        <img src="https://flowbite.s3.amazonaws.com/blocks/application-ui/products/imac-side-image.png" alt="imac image">
                        <button type="button" class="absolute text-red-600 dark:text-red-500 hover:text-red-500 dark:hover:text-red-400 bottom-1 left-1">
                            <svg aria-hidden="true" class="w-5 h-5" fill="currentColor" viewbox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                <path fill-rule="evenodd" d="M9 2a1 1 0 00-.894.553L7.382 4H4a1 1 0 000 2v10a2 2 0 002 2h8a2 2 0 002-2V6a1 1 0 100-2h-3.382l-.724-1.447A1 1 0 0011 2H9zM7 8a1 1 0 012 0v6a1 1 0 11-2 0V8zm5-1a1 1 0 00-1 1v6a1 1 0 102 0V8a1 1 0 00-1-1z" clip-rule="evenodd" />
                            </svg>
                            <span class="sr-only">Remove image</span>
                        </button>
                    </div>
                    <div class="relative p-2 bg-gray-100 rounded-lg sm:w-36 sm:h-36 dark:bg-gray-700">
                        <img src="https://flowbite.s3.amazonaws.com/blocks/application-ui/products/imac-front-image.png" alt="imac image">
                        <button type="button" class="absolute text-red-600 dark:text-red-500 hover:text-red-500 dark:hover:text-red-400 bottom-1 left-1">
                            <svg aria-hidden="true" class="w-5 h-5" fill="currentColor" viewbox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                <path fill-rule="evenodd" d="M9 2a1 1 0 00-.894.553L7.382 4H4a1 1 0 000 2v10a2 2 0 002 2h8a2 2 0 002-2V6a1 1 0 100-2h-3.382l-.724-1.447A1 1 0 0011 2H9zM7 8a1 1 0 012 0v6a1 1 0 11-2 0V8zm5-1a1 1 0 00-1 1v6a1 1 0 102 0V8a1 1 0 00-1-1z" clip-rule="evenodd" />
                            </svg>
                            <span class="sr-only">Remove image</span>
                        </button>
                    </div>
                    <div class="relative p-2 bg-gray-100 rounded-lg sm:w-36 sm:h-36 dark:bg-gray-700">
                        <img src="https://flowbite.s3.amazonaws.com/blocks/application-ui/products/imac-back-image.png" alt="imac image">
                        <button type="button" class="absolute text-red-600 dark:text-red-500 hover:text-red-500 dark:hover:text-red-400 bottom-1 left-1">
                            <svg aria-hidden="true" class="w-5 h-5" fill="currentColor" viewbox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                <path fill-rule="evenodd" d="M9 2a1 1 0 00-.894.553L7.382 4H4a1 1 0 000 2v10a2 2 0 002 2h8a2 2 0 002-2V6a1 1 0 100-2h-3.382l-.724-1.447A1 1 0 0011 2H9zM7 8a1 1 0 012 0v6a1 1 0 11-2 0V8zm5-1a1 1 0 00-1 1v6a1 1 0 102 0V8a1 1 0 00-1-1z" clip-rule="evenodd" />
                            </svg>
                            <span class="sr-only">Remove image</span>
                        </button>
                    </div>
                    <div class="relative p-2 bg-gray-100 rounded-lg sm:w-36 sm:h-36 dark:bg-gray-700">
                        <img src="https://flowbite.s3.amazonaws.com/blocks/application-ui/products/imac-side-image.png" alt="imac image">
                        <button type="button" class="absolute text-red-600 dark:text-red-500 hover:text-red-500 dark:hover:text-red-400 bottom-1 left-1">
                            <svg aria-hidden="true" class="w-5 h-5" fill="currentColor" viewbox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                <path fill-rule="evenodd" d="M9 2a1 1 0 00-.894.553L7.382 4H4a1 1 0 000 2v10a2 2 0 002 2h8a2 2 0 002-2V6a1 1 0 100-2h-3.382l-.724-1.447A1 1 0 0011 2H9zM7 8a1 1 0 012 0v6a1 1 0 11-2 0V8zm5-1a1 1 0 00-1 1v6a1 1 0 102 0V8a1 1 0 00-1-1z" clip-rule="evenodd" />
                            </svg>
                            <span class="sr-only">Remove image</span>
                        </button>
                    </div>
                </div>
                <div class="flex items-center justify-center w-full">
                    <label for="dropzone-file" class="flex flex-col items-center justify-center w-full h-64 border-2 border-gray-300 border-dashed rounded-lg cursor-pointer bg-gray-50 dark:hover:bg-bray-800 dark:bg-gray-700 hover:bg-gray-100 dark:border-gray-600 dark:hover:border-gray-500 dark:hover:bg-gray-600">
                        <div class="flex flex-col items-center justify-center pt-5 pb-6">
                            <svg aria-hidden="true" class="w-10 h-10 mb-3 text-gray-400" fill="none" stroke="currentColor" viewbox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M7 16a4 4 0 01-.88-7.903A5 5 0 1115.9 6L16 6a5 5 0 011 9.9M15 13l-3-3m0 0l-3 3m3-3v12" />
                            </svg>
                            <p class="mb-2 text-sm text-gray-500 dark:text-gray-400">
                                <span class="font-semibold">Click to upload</span>
                                or drag and drop
                            </p>
                            <p class="text-xs text-gray-500 dark:text-gray-400">SVG, PNG, JPG or GIF (MAX. 800x400px)</p>
                        </div>
                        <input id="dropzone-file" type="file" class="hidden">
                    </label>
                </div>
            </div>
            <div class="flex items-center mb-4">
                <input id="product-options" type="checkbox" value="" class="w-4 h-4 bg-gray-100 border-gray-300 rounded text-primary-600 focus:ring-[#102147]/80 dark:focus:ring-primary-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
                <label for="product-options" class="ml-2 text-sm text-gray-500 dark:text-gray-300">Product has multiple options, like different colors or sizes</label>
            </div>
            <div class="relative">
                <div class="absolute inset-y-0 left-0 flex items-center pl-3 pointer-events-none">
                    <svg aria-hidden="true" class="w-5 h-5 text-gray-500 dark:text-gray-400" fill="currentColor" viewbox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                        <path fill-rule="evenodd" d="M6 2a1 1 0 00-1 1v1H4a2 2 0 00-2 2v10a2 2 0 002 2h12a2 2 0 002-2V6a2 2 0 00-2-2h-1V3a1 1 0 10-2 0v1H7V3a1 1 0 00-1-1zm0 5a1 1 0 000 2h8a1 1 0 100-2H6z" clip-rule="evenodd" />
                    </svg>
                </div>
                <input datepicker="" id="datepicker" type="text" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-[#102147]/80 focus:border-[#102147]/80 block w-full pl-10 p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-[#102147]/80 dark:focus:border-[#102147]/80 datepicker-input" value="15/08/2022" placeholder="Select date">
            </div>
        </div>
        <div class="space-y-4 sm:space-y-6">
            <div>
                <label for="product-brand" class="block mb-2 text-sm  text-gray-900 dark:text-white">Brand</label>
                <input type="text" id="product-brand" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-[#102147]/80 focus:border-[#102147]/80 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-[#102147]/80 dark:focus:border-[#102147]/80" value="Apple" placeholder="Product Brand" required="">
            </div>
            <div><label for="category" class="block mb-2 text-sm  text-gray-900 dark:text-white">Category</label><select id="category" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-[#102147]/80 focus:border-[#102147]/80 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-[#102147]/80 dark:focus:border-[#102147]/80"><option selected="">Electronics</option><option value="TV">TV/Monitors</option><option value="PC">PC</option><option value="GA">Gaming/Console</option><option value="PH">Phones</option></select></div>
            <div>
                <label for="item-weight" class="block mb-2 text-sm  text-gray-900 dark:text-white">Item Weight (kg)</label>
                <input type="number" name="item-weight" id="item-weight" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-[#102147]/80 dark:focus:border-[#102147]/80" value="12" placeholder="Ex. 12" required="">
            </div>
            <div>
                <label for="length" class="block mb-2 text-sm  text-gray-900 dark:text-white">Length (cm)</label>
                <input type="number" name="length" id="lenght" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-[#102147]/80 dark:focus:border-[#102147]/80" value="105" placeholder="Ex. 105" required="">
            </div>
            <div>
                <label for="breadth" class="block mb-2 text-sm  text-gray-900 dark:text-white">Breadth (cm)</label>
                <input type="number" name="breadth" id="breadth" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-[#102147]/80 dark:focus:border-[#102147]/80" value="15" placeholder="Ex. 15" required="">
            </div>
            <div>
                <label for="width" class="block mb-2 text-sm  text-gray-900 dark:text-white">Width (cm)</label>
                <input type="number" name="width" id="width" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-[#102147]/80 dark:focus:border-[#102147]/80" value="23" placeholder="Ex. 23" required="">
            </div>
        </div>
    </div>
    <div class="grid grid-cols-2 gap-4 mt-6 sm:w-1/2">
        <button type="submit" class="text-white bg-primary-700 hover:bg-primary-800 focus:ring-4 focus:outline-none focus:ring-primary-300  rounded-lg text-sm px-5 py-2.5 text-center dark:bg-primary-600 dark:hover:bg-primary-700 dark:focus:ring-primary-800">Update product</button>
        <button type="button" class="text-red-600 inline-flex justify-center items-center hover:text-white border border-red-600 hover:bg-red-600 focus:ring-4 focus:outline-none focus:ring-red-300  rounded-lg text-sm px-5 py-2.5 text-center dark:border-red-500 dark:text-red-500 dark:hover:text-white dark:hover:bg-red-600 dark:focus:ring-red-900">
            <svg aria-hidden="true" class="w-5 h-5 mr-1 -ml-1" fill="currentColor" viewbox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                <path fill-rule="evenodd" d="M9 2a1 1 0 00-.894.553L7.382 4H4a1 1 0 000 2v10a2 2 0 002 2h8a2 2 0 002-2V6a1 1 0 100-2h-3.382l-.724-1.447A1 1 0 0011 2H9zM7 8a1 1 0 012 0v6a1 1 0 11-2 0V8zm5-1a1 1 0 00-1 1v6a1 1 0 102 0V8a1 1 0 00-1-1z" clip-rule="evenodd" />
            </svg>
            Delete
        </button>
    </div>
</form>
<!-- Preview Drawer -->
<div id="drawer-read-product-advanced{{ $client->Client->id }}" class="overflow-y-auto fixed top-0 left-0 z-40 p-4 w-full max-w-lg h-screen bg-white transition-transform -translate-x-full dark:bg-white" tabindex="-1" aria-labelledby="drawer-label" aria-hidden="true">
    <div>
        <h4 id="read-drawer-label" class="mb-1.5 leading-none text-xl font-semibold  mt-20 dark:text-[#763c26]">Détail de la cotation : <strong>{{ $client->Client->contact_nom }}</strong></h4>
    </div>
    <button type="button" data-drawer-dismiss="drawer-read-product-advanced{{ $client->Client->id }}" aria-controls="drawer-read-product-advanced{{ $client->Client->id }}" class="text-gray-400  mt-20 mb-10 bg-transparent hover:bg-gray-200 border border-gray-500 hover:border-gray-900 rounded-lg text-sm p-1.5 absolute top-2.5 right-2.5 inline-flex items-center dark:hover:bg-[#763c26] dark:hover:text-white">
        <svg aria-hidden="true" class="w-5 h-5" fill="currentColor" viewbox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
            <path fill-rule="evenodd" d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z" clip-rule="evenodd" />
        </svg>
        <span class="sr-only">Close menu</span>
    </button>
    <div class="grid grid-cols-3 gap-4 my-4 sm:mb-5">
        <div class="p-2 w-auto  rounded-lg dark:bg-[#763c26]">
            <img src="https://flowbite.s3.amazonaws.com/blocks/application-ui/products/imac-side-image.png" alt="iMac Side Image">
        </div>
        <div class="p-2 w-auto rounded-lg dark:bg-[#763c26]">
            <img src="https://flowbite.s3.amazonaws.com/blocks/application-ui/products/imac-front-image.png" alt="iMac Front Image">
        </div>
        <div class="p-2 w-auto rounded-lg dark:bg-[#763c26]">
            <img src="https://flowbite.s3.amazonaws.com/blocks/application-ui/products/imac-back-image.png" alt="iMac Back Image">
        </div>
    </div>
    @if ($client->description_systemes)
    <dl class="sm:mb-5">
        <dt class="mb-2 font-semibold leading-none text-[#763c26]">Description du systeme</dt>
        <dd class="mb-4 font-light text-gray-500 sm:mb-5 dark:text-gray-400 max-h-32 overflow-y-auto">
            {{ $client->description_systemes }}
        </dd>
    </dl>
    @endif
    @if ($client->besoins_specifiques)
    <dl class="sm:mb-5">
        <dt class="mb-2 font-semibold leading-none text-[#763c26]">Besoins spécifiques</dt>
        <dd class="mb-4 font-light text-gray-500 sm:mb-5 dark:text-gray-400 overflow-hidden text-ellipsis whitespace-nowrap">
            {{ $client->besoins_specifiques }}
        </dd>
    </dl>
    
    @endif
    <dl class="grid grid-cols-2 gap-4 mb-4">
        @if ($client->commercial_id)
        <div class="col-span-2 p-3 rounded-lg border border-[#763c26] bg-[#763c26]/10 sm:col-span-1">
            <dt class="mb-2 font-semibold leading-none text-[#763c26]">ID Commercial</dt>
            <dd class="flex items-center text-[#763c26]">
                <svg class="w-4 h-4 mr-1.5" aria-hidden="true" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                    <path fill-rule="evenodd" d="M5.05 4.05a7 7 0 119.9 9.9L10 18.9l-4.95-4.95a7 7 0 010-9.9zM10 11a2 2 0 100-4 2 2 0 000 4z" clip-rule="evenodd" />
                </svg>
               
                {{ $client->commercial_id }}
                
            </dd>
        </div>
        @endif
        <!-- Nom Assurance -->
        @if ($client->nom_assurance)
        <div class="col-span-2 p-3 rounded-lg border border-[#763c26] bg-[#763c26]/10 sm:col-span-1">
            <dt class="mb-2 font-semibold leading-none text-[#763c26]">Nom Assurance</dt>
            <dd class="flex items-center text-[#763c26]">
                <svg class="w-4 h-4 mr-1.5" aria-hidden="true" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                    <path fill-rule="evenodd" d="M5.05 4.05a7 7 0 119.9 9.9L10 18.9l-4.95-4.95a7 7 0 010-9.9zM10 11a2 2 0 100-4 2 2 0 000 4z" clip-rule="evenodd" />
                </svg>
                {{ $client->nom_assurance }}
            </dd>
        </div>
        @endif
        <!-- Nom Assurance -->
        @if ($client->montant_garantie)
        <!-- Montant Garantie -->
        <div class="col-span-2 p-3 rounded-lg border border-[#763c26] bg-[#763c26]/10 sm:col-span-1">
            <dt class="mb-2 font-semibold leading-none text-[#763c26]">Montant Garantie</dt>
            <dd class="flex items-center text-[#763c26]">
                <svg class="w-4 h-4 mr-1.5" aria-hidden="true" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                    <path fill-rule="evenodd" d="M5.05 4.05a7 7 0 119.9 9.9L10 18.9l-4.95-4.95a7 7 0 010-9.9zM10 11a2 2 0 100-4 2 2 0 000 4z" clip-rule="evenodd" />
                </svg>
                {{ $client->montant_garantie }}
            </dd>
        </div>
        @endif
        <!-- Nom Assurance -->
        @if ($client->date_effet)
        <!-- Date Effet -->
        <div class="col-span-2 p-3 rounded-lg border border-[#763c26] bg-[#763c26]/10 sm:col-span-1">
            <dt class="mb-2 font-semibold leading-none text-[#763c26]">Date d'effet</dt>
            <dd class="flex items-center text-[#763c26]">
                <svg class="w-4 h-4 mr-1.5" aria-hidden="true" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                    <path fill-rule="evenodd" d="M5.05 4.05a7 7 0 119.9 9.9L10 18.9l-4.95-4.95a7 7 0 010-9.9zM10 11a2 2 0 100-4 2 2 0 000 4z" clip-rule="evenodd" />
                </svg>
                {{ $client->date_effet }}
            </dd>
        </div>
        @endif
        
        <!-- Nom Assurance -->
       
        <!-- Nom Assurance -->
        @if ($client->nombre_vehicules)
    <!-- Nombre de véhicules -->
    <div class="col-span-2 p-3 rounded-lg border border-[#763c26] bg-[#763c26]/10 sm:col-span-1">
        <dt class="mb-2 font-semibold leading-none text-[#763c26]">Nombre de véhicules</dt>
        <dd class="flex items-center text-[#763c26]">
            <svg class="w-4 h-4 mr-1.5" aria-hidden="true" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                <path fill-rule="evenodd" d="M5.05 4.05a7 7 0 119.9 9.9L10 18.9l-4.95-4.95a7 7 0 010-9.9zM10 11a2 2 0 100-4 2 2 0 000 4z" clip-rule="evenodd" />
            </svg>
            {{ $client->nombre_vehicules }}
        </dd>
    </div>
    @endif
        <!-- Nom Assurance -->
        @if ($client->type_vehicules)
    <!-- Type de véhicules -->
    <div class="col-span-2 p-3 rounded-lg border border-[#763c26] bg-[#763c26]/10 sm:col-span-1">
        <dt class="mb-2 font-semibold leading-none text-[#763c26]">Type de véhicules</dt>
        <dd class="flex items-center text-[#763c26]">
            <svg class="w-4 h-4 mr-1.5" aria-hidden="true" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                <path fill-rule="evenodd" d="M5.05 4.05a7 7 0 119.9 9.9L10 18.9l-4.95-4.95a7 7 0 010-9.9zM10 11a2 2 0 100-4 2 2 0 000 4z" clip-rule="evenodd" />
            </svg>
            {{ $client->type_vehicules }}
        </dd>
    </div>
    @endif
        <!-- Nom Assurance -->
        @if ($client->usage)
    <!-- Usage -->
    <div class="col-span-2 p-3 rounded-lg border border-[#763c26] bg-[#763c26]/10 sm:col-span-1">
        <dt class="mb-2 font-semibold leading-none text-[#763c26]">Usage</dt>
        <dd class="flex items-center text-[#763c26]">
            <svg class="w-4 h-4 mr-1.5" aria-hidden="true" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                <path fill-rule="evenodd" d="M5.05 4.05a7 7 0 119.9 9.9L10 18.9l-4.95-4.95a7 7 0 010-9.9zM10 11a2 2 0 100-4 2 2 0 000 4z" clip-rule="evenodd" />
            </svg>
            {{ $client->usage }}
        </dd>
    </div>
    @endif
        <!-- Nom Assurance -->
        @if ($client->puissance_fiscale)
    <!-- Puissance fiscale -->
    <div class="col-span-2 p-3 rounded-lg border border-[#763c26] bg-[#763c26]/10 sm:col-span-1">
        <dt class="mb-2 font-semibold leading-none text-[#763c26]">Puissance fiscale</dt>
        <dd class="flex items-center text-[#763c26]">
            <svg class="w-4 h-4 mr-1.5" aria-hidden="true" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                <path fill-rule="evenodd" d="M5.05 4.05a7 7 0 119.9 9.9L10 18.9l-4.95-4.95a7 7 0 010-9.9zM10 11a2 2 0 100-4 2 2 0 000 4z" clip-rule="evenodd" />
            </svg>
            {{ $client->puissance_fiscale }}
        </dd>
    </div>
    <!-- Type de bien -->
    @endif
        <!-- Nom Assurance -->
        @if ($client->type_bien)
    <div class="col-span-2 p-3 rounded-lg border border-[#763c26] bg-[#763c26]/10 sm:col-span-1">
        <dt class="mb-2 font-semibold leading-none text-[#763c26]">Type de bien</dt>
        <dd class="flex items-center text-[#763c26]">
            <svg class="w-4 h-4 mr-1.5" aria-hidden="true" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                <path fill-rule="evenodd" d="M5.05 4.05a7 7 0 119.9 9.9L10 18.9l-4.95-4.95a7 7 0 010-9.9zM10 11a2 2 0 100-4 2 2 0 000 4z" clip-rule="evenodd" />
            </svg>
            {{ $client->type_bien }}
        </dd>
    </div>
    <!-- Valeur totale -->
    @endif
        <!-- Nom Assurance -->
        @if ($client->valeur_total)
    <div class="col-span-2 p-3 rounded-lg border border-[#763c26] bg-[#763c26]/10 sm:col-span-1">
        <dt class="mb-2 font-semibold leading-none text-[#763c26]">Valeur totale</dt>
        <dd class="flex items-center text-[#763c26]">
            <svg class="w-4 h-4 mr-1.5" aria-hidden="true" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                <path fill-rule="evenodd" d="M5.05 4.05a7 7 0 119.9 9.9L10 18.9l-4.95-4.95a7 7 0 010-9.9zM10 11a2 2 0 100-4 2 2 0 000 4z" clip-rule="evenodd" />
            </svg>
            {{ $client->valeur_total }}
        </dd>
    </div>
    @endif
        <!-- Nom Assurance -->
        
    </dl>
    <div class="flex bottom-0 left-0 justify-center pb-4 space-x-4 w-full">
        <button type="button" data-drawer-dismiss="drawer-read-product-advanced{{ $client->Client->id }}" aria-controls="drawer-read-product-advanced{{ $client->Client->id }}" class="text-[#763c26] hover:text-white border border-[#763c26] hover:bg-[#763c26]/60 focus:ring-4 focus:outline-none focus:ring-[#763c26]/10 rounded-lg text-md px-5 py-2.5 inline-flex items-center justify-end  dark:hover:bg-[#763c26]/60 dark:focus:ring-[#763c26]/50">
            <svg aria-hidden="true" class="mr-1 -ml-1 w-5 h-5" fill="currentColor" viewbox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                <path d="M17.414 2.586a2 2 0 00-2.828 0L7 10.172V13h2.828l7.586-7.586a2 2 0 000-2.828z" />
                <path fill-rule="evenodd" d="M2 6a2 2 0 012-2h4a1 1 0 010 2H4v10h10v-4a1 1 0 112 0v4a2 2 0 01-2 2H4a2 2 0 01-2-2V6z" clip-rule="evenodd" />
            </svg>
            Fermer
        </button>        
    </div>
</div>
<!-- Delete Modal -->
<div id="delete-modal{{ $client->Client->id }}" tabindex="-1" class="fixed top-0 left-0 right-0 z-50 hidden p-4 overflow-x-hidden overflow-y-auto md:inset-0 h-[calc(100%-1rem)] max-h-full">
    <div class="relative w-full h-auto max-w-md max-h-full">
        <div class="relative bg-white rounded-lg shadow dark:bg-[#763c26]/90 border border-gray-200">
            <button type="button" class="absolute top-3 right-2.5 text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm p-1.5 ml-auto inline-flex items-center dark:hover:bg-white dark:hover:text-gray-800" data-modal-toggle="delete-modal{{ $client->Client->id }}">
                <svg aria-hidden="true" class="w-5 h-5" fill="currentColor" viewbox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                    <path fill-rule="evenodd" d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z" clip-rule="evenodd" />
                </svg>
                <span class="sr-only">Close modal</span>
            </button>
            <div class="p-6 text-center">
                <svg aria-hidden="true" class="mx-auto mb-4 text-red-800 w-14 h-14 dark:text-gray-200" fill="none" stroke="currentColor" viewbox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4m0 4h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z" />
                </svg>
                <h3 class="mb-5 text-lg font-normal text-gray-500 dark:text-white">Êtes-vous sûr de vouloir supprimer ce client ?</h3>
                <h5 class="mb-5 text-sm font-normal p-1 rounded-lg bg-slate-200/80 text-red-700">Les cotations de ce client seront également supprimées ?</h5>
                <div class="flex justify-center space-x-4">
                    <form action="{{ route('resource.destroy', $client->Client->id ) }}" method="POST">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="text-white bg-red-600 hover:bg-red-800 focus:ring-4 focus:outline-none focus:ring-red-300 dark:focus:ring-red-800 rounded-lg text-sm inline-flex items-center px-5 py-2.5 text-center">
                            Confirmer
                        </button>
                    </form>
                    <button data-modal-toggle="delete-modal{{ $client->Client->id }}" type="button" class="text-gray-500 bg-white hover:bg-gray-100 focus:ring-4 focus:outline-none focus:ring-gray-200 rounded-lg border border-gray-200 text-sm px-5 py-2.5 hover:text-gray-900 focus:z-10 dark:bg-gray-700 dark:text-gray-300 dark:border-gray-500 dark:hover:text-white dark:hover:bg-gray-600 dark:focus:ring-gray-600">
                        Annuler
                    </button>
                </div>
                
            </div>
        </div>
    </div>
</div>
@endforeach

<script src="https://cdnjs.cloudflare.com/ajax/libs/flowbite/2.3.0/datepicker.min.js"></script>
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
        step.classList.toggle("text-[#763c26]", i <= index);
        stepIndicator.classList.toggle("bg-blue-100", i <= index);
        stepIndicator.classList.toggle("dark:bg-blue-800", i <= index);
        stepIndicator.classList.toggle("bg-gray-100", i > index);
        stepIndicator.classList.toggle("dark:bg-gray-700", i > index);

        // Ajouter une barre sous le texte actif
        if (i === index) {
            stepText.classList.add("border-b-4", "border-[#763c26]", "dark:border-blue-300");
        } else {
            stepText.classList.remove("border-b-4", "border-[#763c26]", "dark:border-blue-300");
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
