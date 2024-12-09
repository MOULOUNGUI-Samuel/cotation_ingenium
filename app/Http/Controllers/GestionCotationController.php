<?php

namespace App\Http\Controllers;

use App\Models\Client;
use App\Models\Document;
use App\Models\TableCotation;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Validator;

class GestionCotationController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('Cotations.ajouter_cotation');
    }
    public function liste_cotation()
    {
        $clients = TableCotation::with('Client')->get();
        return view('Cotations.liste_cotation', compact('clients'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create(Request $request)
    {
        //
        // Validation des données
        $validator = Validator::make($request->all(), [
            'raison_sociale' => 'required|string|max:255',
            'adresse' => 'required|string',
            'contact_nom' => 'required|string|max:255',
            'contact_tel' => 'required|numeric',
            'contact_email' => 'required|email|unique:clients,contact_email',
            'secteur_activite' => 'required|in:Industrie,Commerce,Services',
            'chiffre_affaires' => 'required|numeric',
            'secteur_couverture' => 'required|string',
            'montant_garantie' => 'nullable|string',
            'date_effet' => 'required|date',
            'besoins_specifiques' => 'nullable|string',
            'nb_vehicules' => 'nullable|integer',
            'type_vehicules' => 'nullable|in:Légers,Poids lourds,Utilitaires',
            'Usage' => 'nullable|in:Privé,Professionnel',
            'puissance' => 'nullable|numeric',
            'type_biens' => 'nullable|in:Immeuble,Equipements,Marchandises',
            'valeur_biens' => 'nullable|numeric',
            'taille_entreprise' => 'nullable|integer',
            'budget_it' => 'nullable|numeric',
            'description_systemes' => 'nullable|string',
            'annee' => 'nullable|integer',
            'nature_sinistre' => 'nullable|string',
            'montant_pertes' => 'nullable|numeric',
            'description_sinistres' => 'nullable|string',
            'contenu_commentaire' => 'nullable|string',
            'file' => 'nullable|file|mimes:pdf,jpg,png',
        ], [
            'raison_sociale.required' => 'La raison sociale est obligatoire.',
            'adresse.required' => 'L\'adresse complète est obligatoire.',
            'contact_nom.required' => 'Le nom du contact est obligatoire.',
            'contact_tel.required' => 'Le numéro de téléphone est obligatoire.',
            'contact_tel.numeric' => 'Le numéro de téléphone doit être un nombre valide.',
            'contact_email.required' => 'L\'email de contact est obligatoire.',
            'contact_email.email' => 'L\'email de contact doit être une adresse email valide.',
            'contact_email.unique' => 'Cet email de contact existe déjà.',
            'secteur_activite.required' => 'Le secteur d\'activité est obligatoire.',
            'secteur_activite.in' => 'Le secteur d\'activité doit être parmi Industrie, Commerce ou Services.',
            'chiffre_affaires.required' => 'Le chiffre d\'affaires est obligatoire.',
            'chiffre_affaires.numeric' => 'Le chiffre d\'affaires doit être un nombre valide.',
            'secteur_couverture.required' => 'Le secteur de couverture est obligatoire.',
            'date_effet.required' => 'La date d\'effet est obligatoire.',
            'date_effet.date' => 'La date d\'effet doit être une date valide.',
            'nb_vehicules.integer' => 'Le nombre de véhicules doit être un entier valide.',
            'type_vehicules.in' => 'Le type de véhicules doit être parmi Légers, Poids lourds ou Utilitaires.',
            'Usage.in' => 'L\'usage doit être Privé ou Professionnel.',
            'puissance.numeric' => 'La puissance fiscale doit être un nombre valide.',
            'type_biens.in' => 'Le type de bien doit être Immeuble, Équipements ou Marchandises.',
            'valeur_biens.numeric' => 'La valeur totale des biens doit être un nombre valide.',
            'taille_entreprise.integer' => 'La taille de l\'entreprise doit être un entier valide.',
            'budget_it.numeric' => 'Le budget IT doit être un nombre valide.',
            'file.mimes' => 'Le fichier doit être au format PDF, JPG ou PNG.',
        ]);

        // Validation des données
        $validatedData = $validator->validated();

        if ($validator->fails()) {
            return redirect()->back()
                ->withErrors($validator)
                ->withInput(); // Important pour que old() fonctionne
        }


        // Création ou récupération du client
        $client = Client::create([
            'raison_sociale' => $validatedData['raison_sociale'],
            'adresse_complete' => $validatedData['adresse'],
            'contact_nom' => $validatedData['contact_nom'],
            'contact_telephone' => $validatedData['contact_tel'],
            'contact_email' => $validatedData['contact_email'],
            'secteur_activite' => $validatedData['secteur_activite'],
            'chiffre_affaires' => $validatedData['chiffre_affaires'],
        ]);

        // Insertion dans la table des cotations
        $cotation = TableCotation::create([
            'client_id' => $client->id,
            'commercial_id' => '654456454',
            'nom_assurance' => $validatedData['secteur_couverture'],
            'montant_garantie' => $validatedData['montant_garantie'],
            'date_effet' => $validatedData['date_effet'],
            'besoins_specifiques' => $validatedData['besoins_specifiques'],
            'nombre_vehicules' => $validatedData['nb_vehicules'],
            'type_vehicules' => $validatedData['type_vehicules'],
            'usage' => $validatedData['Usage'],
            'puissance_fiscale' => $validatedData['puissance'],
            'type_bien' => $validatedData['type_biens'],
            'valeur_total' => $validatedData['valeur_biens'],
            'taille_entreprise' => $validatedData['taille_entreprise'],
            'budget_it_annuel' => $validatedData['budget_it'],
            'description_systemes' => $validatedData['description_systemes'],
            'annee' => $validatedData['annee'],
            'nature_sinistre' => $validatedData['nature_sinistre'],
            'montant_pertes' => $validatedData['montant_pertes'],
            'description_sinistres' => $validatedData['description_sinistres'],
            'contenu_commentaire' => $validatedData['contenu_commentaire'],
        ]);

        // Gestion des fichiers
        if ($request->hasFile('file')) {
            $file = $request->file('file');
            $path = $file->store('documents', 'public');

            // Récupérer et normaliser l'extension du fichier
            $extension = strtoupper($file->getClientOriginalExtension());

            // Vérifier que l'extension est valide avant l'insertion
            if (!in_array($extension, ['PDF', 'JPG', 'PNG'])) {
                return redirect()->back()->with('error', 'Type de document non valide. Seuls PDF, JPG, et PNG sont acceptés.');
            }

            Document::create([
                'cotation_id' => $cotation->id,
                'nom_document' => $file->getClientOriginalName(),
                'type_document' => $extension,
                'chemin_document' => $path,
            ]);
        }

        // Valider la transaction
        session()->flash('success', 'Cotation enregistrée avec succès.');
        return redirect()->route('liste_cotation'); // Redirige vers une route GET


    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
         // Recherchez la ressource à supprimer
         $resource = Client::findOrFail($id);

         // Supprimez la ressource
         $resource->delete();

         // Redirigez avec un message de succès
         return redirect()->route('liste_cotation')->with('success', 'Le client a été supprimée ainsi que ces cotations.');
    }
}
