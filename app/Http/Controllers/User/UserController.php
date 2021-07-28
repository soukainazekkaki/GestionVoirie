<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use App\Notifications\NewCompte;

//Hado ajoutéthom
use App\Models\User;
use Illuminate\Support\Facades\Auth;

class UserController extends Controller
{
    function create(Request $request){
        //Validation des entrées 
        // cad pour validation des entrés de formulaire 
        $request->validate([
            // required cad on doit obligatoirement renseigner le champ de name 
            'name'=>'required',
            // doit étre renseigner et prend la forme d'email et il doit étre unique 
            'email'=>'required|email|unique:users,email',
            // Doit contenir min 5 caractéres et max 30 caractére 
            'password'=>'required|min:5|max:30',
            // doit étre de méme mot de passe entré avant 
            'cpassword'=>'required|min:5|max:30|same:password'
        ]);
//si la validation des champs est réussit on insere un nouveau user dans la table des user
// new User c'est le nom de la table  
        $user = new User();
        $user->name = $request->name;
        $user->email = $request->email;
        $user->password = \Hash::make($request->password);
        $save = $user->save();

      //  $user->notify(new NewCompte($user));

// si user est bien insérer on affiche un msg de succés sur la page de register
        if( $save ){
            return redirect()->back()->with('success','Vous êtes maintenant enregistré avec succès');
        }else{
            return redirect()->back()->with('fail','Quelque chose a mal tourné, n a pas réussi à s inscrire');
        }
  }
  //Fonction qui vérifier la connexion de user (lier avec login) 
  function check(Request $request){
    //Validation des entrées 
    $request->validate([
        // est ce que ce email existe dans la table user ou non 
       'email'=>'required|email|exists:users,email',
       'password'=>'required|min:5|max:30'
    ],[
        'email.exists'=>'This email is not exists on users table'
    ]);

    $creds = $request->only('email','password');
    if( Auth::guard('web')->attempt($creds) ){
        // s'il est déjà existe va rediriger vers la page home des user 
        return redirect()->route('user.home');
    }else{
        //sinon il va le rediriger vers la page login pour réessayer
        return redirect()->route('user.login')->with('fail','Données incorrectes');
    }
}
// fonction pour se déconnecter 
function logout(){
    Auth::guard('web')->logout();
    //return redirect('/');
    return redirect('/template');
}
}
