<?php

namespace App\Http\Controllers;

use App\Models\Electeur;
use Illuminate\Http\Request;
use App\Models\Candidat;

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


    // !fonctions de parrainnage
    public function liste_des_parrains(){
        $listParr=Electeur::all();
        return view('electeur.liste-des-parrains',compact('listParr'));
    }
    public function je_parraine($id){
        $listElec=Electeur::all();
        $listCand=Candidat::all();

        return view('electeur.je-parraine',compact('listElec','listCand'));
    }
        // public function je_parraine2(){
        //     $listCand=Candidat::all();
        //     return view('electeur.je-parraine',compact('listCand'));
        // }
    

    public function je_parraine_traitement(Request $request){

        $request->validate([
            'prenom'=>"required",
            'nom'=>"required",
            'CNI'=>"required",
            'adresse'=>"required",
            
        ]);
        $parrain= new Electeur();
        $candParrain=new Candidat();
        $parrain->prenom=$request->prenom;
        $parrain->nom=$request->nom;
        $parrain->numelec=$request->numelec;
        $parrain->adresse=$request->adresse;
        $parrain->candidat=$request->$candParrain;

        $parrain->save();

        return redirect('/liste-des-parrains')->with('status','L\'electeur a parraine avec success');
    }

    // ! FIN

}
