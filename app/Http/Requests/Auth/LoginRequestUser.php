<?php

namespace App\Http\Requests\Auth;

use Illuminate\Auth\Events\Lockout;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\RateLimiter;
use Illuminate\Support\Str;
use Illuminate\Validation\ValidationException;

class LoginRequestUser extends FormRequest
{
     // Cette méthode détermine si l'utilisateur est autorisé à faire cette requête.
    // Ici, cela retourne toujours "true", ce qui signifie que tout utilisateur peut effectuer cette requête.
    public function authorize(): bool
    {
        return true;
    }

    /**
      /**
     * Définit les règles de validation qui s'appliquent à la demande.
     */
    public function rules(): array
    {
        return [
            'email' => ['required', 'string', 'email'],  // Validation de l'email
            'password' => ['required', 'string', 'min:6'],  // Validation du mot de passe (min 6 caractères)
        ];
    }

    /**
     * Messages personnalisés pour les erreurs de validation.
     */
    public function messages(): array
    {
        return [
            'email.required' => 'L\'adresse email est obligatoire.',
            'email.email' => 'Veuillez entrer une adresse email valide.',
            'password.required' => 'Le mot de passe est obligatoire.',
            'password.min' => 'Le mot de passe doit contenir au moins 6 caractères.',
        ];
    }
    /**
     * Cette méthode tente d'authentifier l'utilisateur avec les informations fournies.
     * Si l'authentification échoue, elle déclenche une exception avec un message d'erreur.
     * Elle gère aussi le mécanisme de limitation de tentatives d'authentification.
     */
    public function authenticate(): void
    {
        // Vérifie si la demande de connexion n'a pas dépassé la limite de tentatives autorisées.
        $this->ensureIsNotRateLimited();

        // Tente de connecter l'utilisateur avec l'email et le mot de passe fournis.
        // Si Auth::attempt échoue (informations incorrectes), on enregistre une tentative ratée.
        if (! Auth::attempt($this->only('email', 'password'), $this->boolean('remember'))) {
            // Si les informations sont incorrectes, on augmente le compteur de tentatives échouées.
            RateLimiter::hit($this->throttleKey());

            // Lancer une exception avec un message d'erreur indiquant que l'email est invalide.
            throw ValidationException::withMessages([
                'email' => trans('auth.failed'), // Message d'échec d'authentification
            ]);
        }

        // Si la connexion réussit, on réinitialise le compteur de tentatives.
        RateLimiter::clear($this->throttleKey());
    }

    /**
     * Cette méthode s'assure que l'utilisateur n'a pas dépassé la limite de tentatives de connexion.
     * Si c'est le cas, elle lance un événement "Lockout" et une exception est levée avec un délai d'attente avant la prochaine tentative.
     */
    public function ensureIsNotRateLimited(): void
    {
        // Vérifie si l'utilisateur a dépassé la limite de 5 tentatives échouées.
        if (! RateLimiter::tooManyAttempts($this->throttleKey(), 5)) {
            return; // Si le nombre de tentatives est inférieur à 5, on continue sans problème.
        }

        // Si trop de tentatives échouées, on déclenche l'événement de verrouillage (Lockout).
        event(new Lockout($this));

        // Calcul du nombre de secondes restantes avant la prochaine tentative.
        $seconds = RateLimiter::availableIn($this->throttleKey());

        // Lancer une exception avec un message indiquant combien de temps il faut attendre avant la prochaine tentative.
        throw ValidationException::withMessages([
            'email' => trans('auth.throttle', [
                'seconds' => $seconds,
                'minutes' => ceil($seconds / 60), // Convertit les secondes en minutes.
            ]),
        ]);
    }

    /**
     * Cette méthode génère une clé unique pour identifier les tentatives de connexion basées sur l'email et l'adresse IP.
     * Cette clé est utilisée pour suivre le nombre de tentatives échouées.
     */
    public function throttleKey(): string
    {
        // Concatène une version "translittérée" (convertie en minuscules et sans accents) de l'email et l'adresse IP de l'utilisateur.
        return Str::transliterate(Str::lower($this->string('email')) . '|' . $this->ip());
    }
}
