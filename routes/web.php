<?php

use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\GestionCotationController;
use App\Http\Controllers\ParamettreControlleur;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/Dashboard', function () {
    return view('Admin.dashboard');
})->name('dashboard');
Route::get('/Connexion', function () {
    return view('Auth.login');
})->name('connexion');

Route::get('/Inscription', function () {
    return view('Auth.inscription');
})->name('Inscription');
Route::post('/login', [LoginController::class, 'Connexion'])->name('login');
Route::middleware(['auth'])->group(function () {
    
    Route::post('/logout', [LoginController::class, 'logout'])->name('logout');

    Route::get('/Dashboard', function () {
        return view('Cotations.dashboard');
    })->name('dashboard');
    
    Route::get('/Enregistrement d\'une cotation', [GestionCotationController::class, 'index'])->name('ajouter_cotation');
    Route::get('/Liste des cotation', [GestionCotationController::class, 'liste_cotation'])->name('liste_cotation');
    Route::post('/Enregistrement', [GestionCotationController::class, 'create'])->name('enregistrer_cotation');
    Route::delete('/resources/{id}', [GestionCotationController::class, 'destroy'])->name('resource.destroy');
});
