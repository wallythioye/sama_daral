<?php

namespace App\Http\Controllers;
use App\Models\User;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class UserController extends Controller
{
    public function list_users()
    {
       $users = User::all();
       return view('users.liste_users', compact('users'));
    }
    public function bloquerUser($id)
    {
        // Recherchez l'utilisateur par son ID
        $user = User::findOrFail($id);

        // Bloquez l'utilisateur en mettant son statut à 0
        $user->statut = 0;
        $user->save();

        // Déconnectez l'utilisateur s'il est actuellement connecté
        if (Auth::check() && Auth::user()->id === $id) {
            Auth::logout();
        }

        // Redirigez vers la liste des utilisateurs avec un message de succès
        return redirect()->route('liste-user')->with('success', 'Utilisateur bloqué avec succès.');
    }


    public function debloquerUser($id)
{
    // Recherchez l'utilisateur par son ID
    $user = User::findOrFail($id);

    // Débloquez l'utilisateur en mettant son statut à 1
    $user->statut = 1;
    $user->save();
    // Redirigez vers la liste des utilisateurs avec un message de succès
    return redirect()->route('liste-user')->with('success', 'Utilisateur débloqué avec succès.');
}


public function afficherModifier($id)
{

    $user = User::findOrFail($id);

    return view('users.update_users', compact('user'));
}

public function modifierUtilisateur(Request $request, $id)
{

    $this->validate($request, [
        'prenom' => 'required|string|max:255',
        'nom' => 'required|string|max:255',
        'sexe' => 'required|string|max:255',
        'telephone' => 'required|string|max:255',
        'adresse' => 'required|string|max:255',
        'role' => 'required|string',
        // Ajoutez ici les règles de validation pour les autres champs
    ]);

    // Récupérer l'utilisateur à modifier en fonction de son ID
    $user = User::findOrFail($id);

    // Mettre à jour les données de l'utilisateur
    $user->prenom = $request->input('prenom');
    $user->nom = $request->input('nom');
    $user->sexe = $request->input('sexe');
    $user->telephone = $request->input('telephone');
    $user->adresse = $request->input('adresse');
    $user->role = $request->input('role');

    $user->save();

    return redirect()->route('liste-user')->with('success', 'Utilisateur modifié avec succès.');
}

    public function supprimerUtilisateur($id)
    {
        // Récupérer l'utilisateur à supprimer en fonction de son ID
        $user = User::findOrFail($id);
        // Supprimer l'utilisateur de la base de données
        $user->delete();
        // Rediriger l'utilisateur vers la page de liste des utilisateurs avec un message de succès
        return redirect()->route('liste-users')->with('success', 'Utilisateur supprimé avec succès.');
    }
    public function home(){
        return view("index");
    }

    public function delete_user($id){
        $user= User::find($id);
        $user->delete();
        return redirect('/liste-user');
    }
    public function details_users($id)
    {
        $user = User::find($id);
        return view('users.detail_user', compact('user'));
    }
    public function seDeconnecter()
{
        Auth::logout(); // Déconnexion de l'utilisateur bloqué
        return redirect()->route('login')->with('error', 'Votre compte est bloqué.');
}
}
