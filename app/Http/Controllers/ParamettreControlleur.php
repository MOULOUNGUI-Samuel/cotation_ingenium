<?php

namespace App\Http\Controllers;

  //
  use Illuminate\Pagination\Paginator;
  use Illuminate\Pagination\LengthAwarePaginator;

class ParamettreControlleur extends Controller
{
  
    
    public function index()
    {
        // Créer une collection fictive de 13 produits
       $products = collect([
    ['choice' => '<input type="checkbox">', 'name' => 'Pièce', 'code' => 'PC', 'status' => 'Disponible'],
    ['choice' => '<input type="checkbox">', 'name' => 'Unité', 'code' => 'UN', 'status' => 'Disponible'],
    ['choice' => '<input type="checkbox">', 'name' => 'Paquet', 'code' => 'PK', 'status' => 'En rupture'],
    ['choice' => '<input type="checkbox">', 'name' => 'Boîte', 'code' => 'BX', 'status' => 'Disponible'],
    ['choice' => '<input type="checkbox">', 'name' => 'Carton', 'code' => 'CT', 'status' => 'Limité'],
    ['choice' => '<input type="checkbox">', 'name' => 'Palette', 'code' => 'PL', 'status' => 'Disponible'],
    ['choice' => '<input type="checkbox">', 'name' => 'Baril', 'code' => 'BR', 'status' => 'En rupture'],
    ['choice' => '<input type="checkbox">', 'name' => 'Lot', 'code' => 'LT', 'status' => 'Disponible'],
    ['choice' => '<input type="checkbox">', 'name' => 'Caisse', 'code' => 'CS', 'status' => 'Limité'],
    ['choice' => '<input type="checkbox">', 'name' => 'Sac', 'code' => 'SC', 'status' => 'Disponible'],
    ['choice' => '<input type="checkbox">', 'name' => 'Flacon', 'code' => 'FL', 'status' => 'Disponible'],
    ['choice' => '<input type="checkbox">', 'name' => 'Tube', 'code' => 'TB', 'status' => 'En rupture'],
    ['choice' => '<input type="checkbox">', 'name' => 'Bouteille', 'code' => 'BT', 'status' => 'Disponible'],
    ['choice' => '<input type="checkbox">', 'name' => 'Pack', 'code' => 'PKT', 'status' => 'Limité'],
    ['choice' => '<input type="checkbox">', 'name' => 'Ensemble', 'code' => 'ES', 'status' => 'Disponible'],
    ['choice' => '<input type="checkbox">', 'name' => 'Bobine', 'code' => 'BO', 'status' => 'Disponible'],
    ['choice' => '<input type="checkbox">', 'name' => 'Rouleau', 'code' => 'RL', 'status' => 'Limité'],
    ['choice' => '<input type="checkbox">', 'name' => 'Barquette', 'code' => 'BQ', 'status' => 'Disponible'],
    ['choice' => '<input type="checkbox">', 'name' => 'Conteneur', 'code' => 'CTN', 'status' => 'En rupture'],
    ['choice' => '<input type="checkbox">', 'name' => 'Tonne', 'code' => 'T', 'status' => 'Disponible'],
    ['choice' => '<input type="checkbox">', 'name' => 'Kilogramme', 'code' => 'KG', 'status' => 'Disponible'],
    ['choice' => '<input type="checkbox">', 'name' => 'Gramme', 'code' => 'G', 'status' => 'Limité'],
    ['choice' => '<input type="checkbox">', 'name' => 'Millilitre', 'code' => 'ML', 'status' => 'Disponible'],
    ['choice' => '<input type="checkbox">', 'name' => 'Litre', 'code' => 'L', 'status' => 'Disponible'],
    ['choice' => '<input type="checkbox">', 'name' => 'Coffret', 'code' => 'CF', 'status' => 'Disponible'],
    ['choice' => '<input type="checkbox">', 'name' => 'Set', 'code' => 'ST', 'status' => 'Limité'],
    ['choice' => '<input type="checkbox">', 'name' => 'Palette EURO', 'code' => 'PEU', 'status' => 'En rupture'],
    ['choice' => '<input type="checkbox">', 'name' => 'Caisson', 'code' => 'CN', 'status' => 'Disponible'],
    ['choice' => '<input type="checkbox">', 'name' => 'Bidon', 'code' => 'BD', 'status' => 'Disponible'],
    ['choice' => '<input type="checkbox">', 'name' => 'Jerrican', 'code' => 'JR', 'status' => 'Limité'],
]);

    
        // Calcul de la pagination
        $currentPage = Paginator::resolveCurrentPage();
        $perPage = 5;
        $total = $products->count(); // Taille totale de la collection d'origine
        $productsToShow = $products->slice(($currentPage - 1) * $perPage, $perPage)->values();
    
        $paginatedProducts = new LengthAwarePaginator(
            $productsToShow,
            $total,
            $perPage,
            $currentPage,
            ['path' => Paginator::resolveCurrentPath()]
        );

        return view('Admin.configuration', compact('paginatedProducts'));
    }
}
