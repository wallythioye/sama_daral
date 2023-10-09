<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\RaceController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\EleveurController;
use App\Http\Controllers\ClientController;
use App\Http\Controllers\MoutonController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\Auth\LoginController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

// Route::get('/', function () {
//     return view('welcome');
// });

Auth::routes();

// Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');


// Route::get('/login', [LoginController::class, 'showLoginForm'])->name('login');

Route::get('/liste-user', [UserController::class, 'list_users'])->name("liste-user");

Route::get('/', [UserController::class, 'home']);

Route::get('/bloquer-user/{id}', [UserController::class, 'bloquerUser'])->name('bloquerUser');
Route::get('/debloquer-user/{id}', [UserController::class, 'debloquerUser'])->name('debloquerUser');
Route::get('/users/{id}', [UserController::class, 'details_users'])->name('user.details');
Route::get('/delete-user/{id}', [UserController::class, 'delete_user'])->name('user.delete');

Route::get('/modifier-user/{id}', [UserController::class, 'afficherModifier']);
Route::post('/modifier-user/{id}', [UserController::class, 'modifierUtilisateur'])->name('modifier-utilisateur');
Route::get('/supprimer-user/{id}', [UserController::class, 'supprimerUtilisateur'])->name('supprimer-utilisateur');

Route::get('/races/ajout', [RaceController::class, 'ajout_race'])->name('races.create');
Route::post('/races', [RaceController::class, 'ajout_race_traitement'])->name('races.ajout');
Route::get('/liste/race', [RaceController::class, 'liste_race']);

Route::get('/mouton/ajout', [MoutonController::class, 'ajout_mouton'])->name('mouton.create');
Route::post('/mouton', [MoutonController::class, 'ajout_mouton_traitement'])->name('mouton.ajout');
Route::get('/liste/mouton', [MoutonController::class, 'liste_mouton'])->name("mouton.liste");
Route::get('/moutons/{id}', [MoutonController::class, 'details_mouton'])->name('mouton.details');
Route::get('/moutonsClient/{id}', [MoutonController::class, 'details_mouton_client'])->name('moutons.details');
Route::get('/modifier-mouton/{id}', [MoutonController::class, 'modifier_mouton']);
Route::post('/modifier-mouton/{id}', [MoutonController::class, 'modifier_mouton_traitement'])->name('modifier-mouton');
Route::get('/supprimer-mouton/{id}', [MoutonController::class, 'supprimerMouton'])->name('supprimer-mouton');

// Route::middleware(['auth'])->group(function () {
//     Route::get('/mes-moutons', [MoutonController::class,'mesMoutons'])->name('eleveur.mesMoutons');
// });


Route::get('/contacts', [ContactController::class, 'index'])->name('contacts.index');
Route::get('/contacts/create', [ContactController::class, 'create'])->name('contacts.create');
Route::post('/contacts', [ContactController::class, 'store'])->name('contacts.store');



Route::middleware(['auth'])->group(function () {
    Route::get('/mes-moutons', [MoutonController::class, 'mesMoutons'])->name('eleveur.mesMoutons');
});
Route::middleware(['auth'])->group(function () {
    Route::get('/se-deconnecter', [UserController::class, 'seDeconnecter'])->name('user.logout');
});

Route::middleware(['auth', 'role:admin'])->group(function () {
    Route::get('/admin', [AdminController::class, 'index'])->name('admin.acceuill');
});
Route::middleware(['auth', 'role:eleveur'])->group(function () {
    Route::get('/eleveur', [EleveurController::class, 'index'])->name('eleveur.acceuil');
});
Route::middleware(['auth', 'role:client'])->group(function () {
    Route::get('/client', [MoutonController::class, 'liste_mouton_client'])->name('client.acceuil');
});




