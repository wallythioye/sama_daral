<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;


class AdminController extends Controller
{
    public function index()
    {
        // Méthode pour afficher le tableau de bord de l'administrateur
        return view('admin.acceuil_admin');
    }

}
