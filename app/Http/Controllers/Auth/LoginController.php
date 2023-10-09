<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Providers\RouteServiceProvider;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;

class LoginController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Login Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles authenticating users for the application and
    | redirecting them to your home screen. The controller uses a trait
    | to conveniently provide its functionality to your applications.
    |
    */

    use AuthenticatesUsers;

    /**
     * Where to redirect users after login.
     *
     * @var string
     */
public function authenticated(Request $request, $user)
{
    // Vérifiez le statut de l'utilisateur ici
    if ($user->statut == 0) {
        Auth::logout(); // Déconnexion de l'utilisateur bloqué
        return redirect()->route('login')->with('error', 'Votre compte est bloqué.');
    }
}
    
    protected function redirectTo()
{
    $user = Auth::user();
    if ($user->role == 'admin') {
        return '/admin';
    } elseif ($user->role == 'client') {
        return '/client';
    } elseif ($user->role == 'eleveur') {
        return '/eleveur';
    } else {
        // Redirection par défaut en cas de rôle non reconnu
        return '/';
    }
}


    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest')->except('logout');
    }
    
}
