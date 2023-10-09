<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Race;

class RaceController extends Controller
{
    public function ajout_race()
    {
        return view('race.ajout_race');
    }


       public function ajout_race_traitement(Request $request)
      {
           $request->validate([
           'nom' => 'required',
           'description' => 'required',
        ]);

        $race = new Race();
        $race->nom = $request->nom;
        $race->description = $request->description;
        $race->save();

        return redirect()->route('races.create')->with('success', 'race ajoutée avec succès.');
    }
    public function liste_race()
    {
       $races = Race::all();
       return view('race.liste_race', compact('races'));
       
    }

}
