<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Http\Requests\Auth\LoginRequestUser;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
class LoginController extends Controller
{
    
    //
    public function Connexion(LoginRequestUser $request){
        
        // User::create([
        //     'name' => 'Admin User',
        //     'email' => 'admin@example.com',
        //     'password' => Hash::make('password123'), // Utilisez un mot de passe sécurisé
        //     'client_id' => null, // Aucun client associé pour cet utilisateur
        //     'role' => 'admin', // Rôle administrateur
        // ]);

        $credentials = $request->validated();
        // Tenter de connecter l'utilisateur avec les informations fournies
        if (Auth::attempt($credentials)) {
            // Récupérer l'utilisateur connecté
            $user = Auth::user();
            
            // Regénérer la session pour éviter les attaques de fixation de session
            $request->session()->regenerate();

            // Rediriger en fonction du type d'accès
            switch ($user->role) {
                case 'Admin':
                    return redirect()->route('dashboard'); // Rediriger vers le dashboard Assureur
                default:
                    return redirect()->route('dashboard'); // Redirection par défaut
            }
        }
         // Si la tentative de connexion échoue, rediriger vers la page de login avec un message d'erreur
         return back()->withErrors([
            'email' => 'Informations de connexion invalide, veuillez réverifier',
        ])->withInput();
    }

    public function logout(Request $request)
    {
        // Déconnexion de l'utilisateur
        Auth::logout();

        // Invalider la session pour l'utilisateur
        $request->session()->invalidate();

        // Générer un nouveau token CSRF pour éviter les attaques CSRF après la déconnexion
        $request->session()->regenerateToken();

        // Rediriger l'utilisateur vers la page de login avec un message de succès
        return redirect('/Connexion')->with('success', 'Vous avez été déconnecté avec succès.');
    }
}
