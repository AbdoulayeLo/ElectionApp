<?php

namespace App\Http\Controllers;

use App\Models\Electeur;
use Illuminate\Http\Request;

class ElecteurController extends Controller
{
    public function liste_electeur (){
        $listElec=Electeur::all();
        return view('electeur.liste-electeur',compact('listElec'));
    }

    public function ajout_electeur(){
        return view('electeur.ajout-electeur');
    }

    public function ajouter_electeur_traitement(Request $request){
        $request->validate([
            'prenom'=>"required",
            'nom'=>"required",
            'CNI'=>"required",
            'adresse'=>"required",
        ]);

        $electeur = new Electeur();
        $electeur->prenom=$request->prenom;
        $electeur->nom=$request->nom;
        $electeur->CNI=$request->CNI;
        $electeur->adresse=$request->adresse;
        
        $electeur->save();

        return redirect('/liste-electeur')->with('status','L\'electeur a ete bien ajoute');
    }

    public function supprimer_electeur($id){
        $electeur= Electeur::find($id);
        $electeur->delete();

        return redirect('/liste-electeur')->with('status','L\'electeur a ete supprimer avec success.');
    }
}
