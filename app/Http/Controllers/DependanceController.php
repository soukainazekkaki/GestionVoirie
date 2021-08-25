<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use App\Models\AdVoirie;
use App\Models\Dependance;
//pour que la classe auth soit acceptable
use Illuminate\Support\Facades\Auth;

class DependanceController extends Controller
{
   /* public function store($id)
    {

    }*/
    public function adddependance(AdVoirie $id)
    {
        //on a fait ça car on veut ajouter la dépendance selon chaque voirie 
        // alors on veut selectionner la voirie qu'on va ajouter ses dependances
        $voirie = AdVoirie::all();
        return view ('dashboard.responsable.adddependance')->with('voirie',$voirie);
    }



    function create(Request $request){
        //Validation des entrées 
        // cad pour validation des entrés de formulaire 
        $request->validate([
            // required cad on doit obligatoirement renseigner le champ de type amenagement
            'type_dependance'=>'required',
            'type_amenagement'=>'required',
            'date_amenagement'=>'required',
            'amenageur'=>'required',
            'etat_exploitation'=>'required',
        ]);
     /*   $voirie_id = DB::table('ad_voiries')
        ->select('id')
        ->get();*/

        

//si la validation des champs est réussit on insere un nouveau user dans la table des user
// new User c'est le nom de la table  

        $dependance = new Dependance();
        $dependance->type_dependance = $request->type_dependance;
        $dependance->type_amenagement = $request->type_amenagement;
        $dependance->date_amenagement = $request->date_amenagement;
        $dependance->amenageur = $request->amenageur;
        $dependance->etat_exploitation = $request->etat_exploitation;
        $dependance->voirie_id = $request->voirie_id;
        $save = $dependance->save();

      //  $user->notify(new NewCompte($user));

// si user est bien insérer on affiche un msg de succés sur la page de register
        if( $save ){
            return redirect()->route('responsable.allvoirie')->with('success','l ajout a été fait avec succès');
        }else{
            return redirect()->route('responsable.allvoirie')->with('fail','Quelque chose a mal tourné, n a pas réussi à ajouter dépendance');
        }
  }
}
