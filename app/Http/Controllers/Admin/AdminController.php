<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
//hadi zadtha
use App\Models\Admin;
use Illuminate\Support\Facades\Auth;

class AdminController extends Controller
{
    function create(Request $request){
        //Validation des entrées
        $request->validate([
           'name'=>'required',
           'email'=>'required|email|unique:admins,email',
           'phone'=>'required',
           'password'=>'required|min:5|max:30',
           'cpassword'=>'required|min:5|max:30|same:password'
        ]);

        $admin = new Admin();
        $admin->name = $request->name;
        $admin->email = $request->email;
        $admin->phone= $request->phone;
        $admin->password = \Hash::make($request->password);
        $save = $admin->save();

        if( $save ){
            return redirect()->back()->with('success','Vous êtes maintenant enregistré avec succès comme Admin');
        }else{
            return redirect()->back()->with('fail','Quelque chose a mal tourné, n a pas réussi à s inscrire');
        }
  }

    function check(Request $request){
        //Validation des entrées
        $request->validate([
           'email'=>'required|email|exists:admins,email',
           'password'=>'required|min:5|max:30'
        ],[
            'email.exists'=>'This email is not exists in admins table'
        ]);

        $creds = $request->only('email','password');

        if( Auth::guard('admin')->attempt($creds) ){
            return redirect()->route('admin.home');
           // return redirect()->route('admin.admindash');
        }else{
            return redirect()->route('admin.login')->with('fail','Données incorrectes');
        }
   }

   function logout(){
       Auth::guard('admin')->logout();
       // Avant : return redirect('/');
       //Aprés
       return redirect('/template');
   }

   function template ()
   {
       return view ('template');
   }

   function registerAs ()
   {
       return view ('registerAs');
   }
   function loginAs ()
   {
       return view ('loginAs');
   }
}
