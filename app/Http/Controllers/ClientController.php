<?php

namespace App\Http\Controllers;

use Auth;
use Illuminate\Http\Request;
use App\Http\Controllers\Order;

class ClientController extends Controller
{
    public function index()
    {
        // Méthode pour afficher le tableau de bord du client
        return view('client.acceuil_client');
    }
}