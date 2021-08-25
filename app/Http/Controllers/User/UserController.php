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
            return redirect()->back()->with('success','l enregistrement a été fait avec succès');
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

function profile ()
   {
       return view ('profile');
   }

   //fonction permet d'afficher tous les users en detail existent dans bdd vers la page gestioncompte
   public function affichage()
   {
       $users = User::orderBy('id')->get();
       return view('dashboard.responsable.gestionCompte', compact ('users'));
       
   }

   //fonction permet supprimer les données selon un nom selectionnées
   public function delete($id)
   {
       $users=User::find($id);
       $users->delete();
       return redirect()->route('responsable.gestionCompte')->with('users,$users');
   }

   //fonction permer modifier les données ajoutés 
   public function edit($id)
   {
          $users=User::find($id);
          return view ('dashboard.responsable.edituser')->with('users',$users);
   }
   //cette fonction nous permet donner la page qu'on va faire les modification sur des données d'utilisateur en détail déja existe dans systéme
   public function update(Request $request,$id)
   {

    $validate = $request->validate([
        'name' => 'required',
        'email' => 'required|email'
        
]);



       $users=User::find($id);
       $users->name = $request['name'];
       $users->email = $request['email'];
       $users->save();
   
   return redirect()->route('responsable.gestionCompte')->with('success','Les données sont bien modifiés.');
   }

}
