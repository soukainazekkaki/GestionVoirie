<?php

namespace App\Http\Controllers\Responsable;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

//Afin d'utiliser les attributs de la table responsable
use App\Models\ResponsableCommune;
//pour que la classe auth soit acceptable
use Illuminate\Support\Facades\Auth;

// On l'utilise pour valider les régles posées
use App\Http\Requests\Profil;

class voirieController extends Controller
{
   /* public function allvoirie()
    {
        return('allvoirie');
    }*/
    public function addvoirie()
    {
        return('addvoirie');
    }




    //fonction permer modifier les données ajoutés 
    public function edit()
    {
           $responsables=ResponsableCommune::find(Auth::guard('responsable')->user()->id);
           return view ('dashboard.responsable.editprofile')->with('responsables',$responsables);
    }


    public function update(Request $request)
    {

    //dd($request);

    $validate = $request->validate([
             'name' => 'required',
             'email' => 'required|email',
             'commune' => 'required'
             
    ]);

    $responsables=ResponsableCommune::find(Auth::guard('responsable')->user()->id);
    $responsables->name = $request['name'];
    $responsables->email = $request['email'];
    $responsables->commune = $request['commune'];

    $responsables->save();

    return redirect()->route('responsable.profile')->with('success','Les données sont bien modifiés.');
    }
}
