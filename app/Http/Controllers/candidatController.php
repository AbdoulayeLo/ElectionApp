<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\candidatController;
use App\Models\Candidat;

class candidatController extends Controller
{
    // pour la creation de candidat
    public function liste_candidat(){
        $listCand=Candidat::all();
        return view('candidat.liste-candidat',compact('listCand'));
    }

    public function ajout_candidat(){
        return view('candidat.ajout-candidat');
    }

  

    public function ajout_candidat_traitement(Request $request)
    {
        // dd($request);
        $request->validate([ 
                'prenom'=>'required',
                'nom'=>'required',
                'parti'=>'required',
                'photo'=>'required',
                'biographie'=>'required',
                // image|mimes|png,jpg,jpeg,ico,svg|max:KB',
            ]);
 
            //!Methode 1
            $candidat=new Candidat();
            $candidat->prenom=$request->prenom;
            $candidat->nom=$request->nom;
            $candidat->parti=$request->parti;
            $candidat->photo=$request->photo;
            $candidat->biographie=$request->biographie;

            //!Methode 2
            // Candidat::create($request->all());

            $candidat->save();

            return redirect('/liste-candidat')->with('status','le candidat a bien ete ajoute avec success.');
    }

    public function supprimer_candidat($id){

        $candidat=Candidat::find($id);
        $candidat->delete();

        return redirect('/liste-candidat')->with('status','Le candidat a bien ete supprimer avec success.');
}

public function je_parraine(){
    $listCand=Candidat::all();
        return view('electeur.je-parraine',compact('listCand'));
}
        
}
