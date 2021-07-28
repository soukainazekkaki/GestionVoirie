<?php

namespace App\Http\Controllers\Responsable;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\ResponsableCommune;
use App\Notifications\NewCompte;

use Illuminate\Support\Facades\Auth;

class ResponsableController extends Controller
{
    function create(Request $request){
        //Validation des entrées
        $request->validate([
           'name'=>'required',
           'email'=>'required|email|unique:responsable_communes,email',
           'commune'=>'required',
           'password'=>'required|min:5|max:30',
           'cpassword'=>'required|min:5|max:30|same:password'
        ]);

        $responsable = new ResponsableCommune();
        $responsable->name = $request->name;
        $responsable->email = $request->email;
        $responsable->commune = $request->commune;
        $responsable->password = \Hash::make($request->password);
        $save = $responsable->save();
        
/*$details_responsable= [
    'message'=>'Votre demande à été envoyer avec succès'
];
$details_admin= [
    'message'=>$responsable->name,'',"à envoyer une demande de l'inscription"
];*/
$responsable->notify(new NewCompte($responsable));
        if( $save ){
            return redirect()->back()->with('success','Vous êtes maintenant enregistré avec succès comme Responsable commune');
            //Envoi des notifications
      
       // $admin->notify(new NewCompte($details_admin));*/
        }else{
            return redirect()->back()->with('fail','Quelque chose a mal tourné, n a pas réussi à s inscrire');
        }
  }

  function check(Request $request){
      //Validation des entrées
      $request->validate([
         'email'=>'required|email|exists:responsable_communes,email',
         'password'=>'required|min:5|max:30'
      ],[
          'email.exists'=>'This email is not exists in responsable_communes table'
      ]);

      $creds = $request->only('email','password');

      if( Auth::guard('responsable')->attempt($creds) ){
          return redirect()->route('responsable.home');
      }else{
          return redirect()->route('responsable.login')->with('fail','Données incorrectes');
      }
  }

  function logout(){
      Auth::guard('responsable')->logout();
     // return redirect('/');
     return redirect('/template');
  }
}
