<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\Mouton;
use App\Models\Race;
use App\Models\User;
use Illuminate\Support\Facades\Storage;
use \Illuminate\Support\Facades\Auth;

class MoutonController extends Controller
{
    public function ajout_mouton()
    {
        $races = Race::all();
        $users = User::all();

        return view('mouton.ajout_mouton', compact('races', 'users'));

    }

    public function ajout_mouton_traitement(Request $request)
    {
    $request->validate([
        'nom' => 'required',
        'prix' => 'required',
        'genealogie' => 'required',
        'photo' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048',
        'race_id' => 'required',
    ]);

    // Récupérez l'ID de l'utilisateur actuellement connecté
    $user_id = auth()->user()->id;

    // Créez un nouveau mouton avec l'ID de l'utilisateur
    $mouton = new Mouton();
    $mouton->nom = $request->nom;
    $mouton->prix = $request->prix;
    $mouton->genealogie = $request->genealogie;
    $mouton->race_id = $request->race_id;
    $mouton->user_id = $user_id;
    
    if ($request->hasFile('photo')) {
        $imagePath = $request->file('photo')->store('public/images');
        $imageUrl = Storage::url($imagePath);
        $mouton->photo = $imageUrl;
}
    $mouton->save();
    return redirect()->route('eleveur.mesMoutons');
}

   public function liste_mouton()
    {
        $moutons = Mouton::all();
        return view('mouton.liste_mouton', compact('moutons'));
    }
   public function liste_mouton_client()
    {
        $moutons = Mouton::all();
        return view('client.acceuil_client', compact('moutons'));
    }

    public function details_mouton($id)
    {
        $user = User::all();
        $mouton = Mouton::find($id);
        return view('mouton.details_mouton', compact('mouton','user'));
    }
    public function details_mouton_client($id)
    {
        $user = User::all();
        $mouton = Mouton::find($id);
        return view('client.detail_mouton', compact('mouton','user'));
    }
    public function modifier_mouton($id)
    {
    $races = Race::all();
    $mouton = Mouton::findOrFail($id);

    return view('mouton.update_mouton', compact('mouton','races'));
}

public function modifier_mouton_traitement(Request $request, $id)
{

    $this->validate($request, [
        'nom' => 'required',
        'prix' => 'required',
        'genealogie' => 'required',
        'photo' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048',
        'race_id' => 'required',
    ]);

    // Récupérer le mouton à modifier en fonction de son ID
    $mouton = Mouton::findOrFail($id);

    // Mettre à jour les données du mouton
    $mouton->nom = $request->input('nom');
    $mouton->prix = $request->input('prix');
    $mouton->genealogie = $request->input('genealogie');

    if ($request->hasFile('photo')) {
        $imagePath = $request->file('photo')->store('public/images');
        $imageUrl = Storage::url($imagePath);

        $mouton->photo = $imageUrl;
    }
    $mouton->save();

    return redirect()->route('eleveur.mesMoutons');
}

public function mesMoutons()
{
    // Vérifie si l'utilisateur est connecté en tant qu'éleveur
    if (Auth::check() && Auth::user()->role === 'eleveur') {
        $userId = Auth::id(); // Récupérez l'ID de l'utilisateur connecté
        $moutons = Mouton::where('user_id', $userId)->get(); // Récupérez les moutons associés à cet utilisateur

        return view('eleveur.mes_mouton', compact('moutons'));
    }
    return redirect('/');
}
public function supprimerMouton($id)
    {
        $mouton = Mouton::findOrFail($id);
        $mouton->delete();
        return redirect()->route('eleveur.mesMoutons');
    }

}