<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Compte;

class CreerCompteController extends Controller
{
    public function showRegistrationForm()
    {
        return view('onglet.creerCompte'); // Assurez-vous d'avoir votre vue pour le formulaire
    }

    public function register(Request $request)
    {
        // Validation des données entrées par l'utilisateur
        $validatedData = $request->validate([
            'nom' => 'required|string|max:255',
            'prenom' => 'required|string|max:255',
            'login' => 'required|string|email|max:255|unique:Compte',
            'mdp' => 'required|string|min:8|confirmed',
        ]);

        // Création d'un nouvel utilisateur dans la base de données
        $user = Compte::create([
            'nom' => $validatedData['nom'],
            'prenom' => $validatedData['prenom'],
            'login' => $validatedData['login'],
            'mdp' => $validatedData['mdp'], // Cryptage du mot de passe
        ]);

        // Redirection après l'enregistrement avec un message de succès
        return redirect('/')->with('success', 'Votre compte a été créé avec succès ! Connectez-vous maintenant.');
    }
}
