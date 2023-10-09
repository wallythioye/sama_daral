<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use app\Models\Mouton;
use app\Models\User;
use Illuminate\Database\Eloquent\Relations\HasMany;

class EleveurController extends Controller
{
    public function index()
    {
        // Méthode pour afficher le tableau de bord de l'éleveur
        return view('eleveur.acceuil_eleveur');
    }

}
