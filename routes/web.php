<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\candidatController;
use App\Http\Controllers\ElecteurController;

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

Route::get('/', function () {
    return view('welcome');
});

// ! POUR CANDIDAT
Route::get("liste-candidat",[candidatController::class,'liste_candidat']);

Route::get("ajout-candidat",[candidatController::class,'ajout_candidat']);

Route::get("/supprimer-candidat/{id}",[candidatController::class,'supprimer_candidat']);

// pour ajouter candidat a partir du formulaire
Route::post("/ajout-candidat/traitement",[candidatController::class,'ajout_candidat_traitement']);


// ! FIN

// ! POUR ELECTEUR
Route::get('liste-electeur',[ElecteurController::class,'liste_electeur']);

Route::get('ajout-electeur',[ElecteurController::class,'ajout_electeur']);

Route::post('/ajout-electeur/traitement',[ElecteurController::class,'ajouter_electeur_traitement']);

Route::get('supprimer-electeur/{id}',[ElecteurController::class,'supprimer_electeur']);


// ! FIN

//! POUR PARRAINER
Route::get('liste-des-parrains',[ElecteurController::class,'liste_des_parrains']);

// Route::get('/je-parraine',[ElecteurController::class,'je_parraine2']);

Route::get('je-parraine/{id}',[ElecteurController::class,'je_parraine']);


Route::post('je-parraine/traitement',[ElecteurController::class,'je_parraine_traitement']);


//!FIN





























// Route::get("blog/{prenom}/{nom}-{id}",function(string $prenom,string $nom,int $id ){
//     return[
//         "prenom"=>$prenom,
//         "nom"=>$nom,
//         "id">10
//     ] ;
// })->where([
//     'id'=>'[0-9]+',
//     'prenom'=>'[a-z0-9\-]+'
// ]);
