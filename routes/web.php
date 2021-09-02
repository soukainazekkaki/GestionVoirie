<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\User\UserController;
use App\Http\Controllers\Admin\AdminController;
use App\Http\Controllers\Responsable\ResponsableController;
use App\Http\Controllers\Responsable\voirieController;
use App\Http\Controllers\AdvoirieController;
use App\Http\Controllers\DependanceController;
use App\Http\Controllers\HomeController;
use Illuminate\Notifications\Notification;


/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('template');
});

Auth::routes();

//Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::prefix('user')->name('user.')->group(function(){
  // guest cad spécifier le type de personne authentifié (login et register)
//on a ajouté PreventBackHistory pour bien structurer les choses si on retourne en arriére
    Route::middleware(['guest:web','PreventBackHistory'])->group(function(){
          Route::view('/login','dashboard.user.login')->name('login');
          Route::view('/register','dashboard.user.register')->name('register');

          Route::view('/profile','dashboard.user.profile')->name('profile');
          Route::post('/create',[UserController::class,'create'])->name('create');
          Route::post('/check',[UserController::class,'check'])->name('check');
        
    });
// pour que la page home s'affiche il faut que user est authentifie
    Route::middleware(['auth:web','PreventBackHistory'])->group(function(){
          Route::view('/home','dashboard.user.home')->name('home');
          // pour se déconnecter
          Route::post('/logout',[UserController::class,'logout'])->name('logout');
        });

    });

    Route::prefix('admin')->name('admin.')->group(function(){
       // on a spécifié name de guard => guest:admin
        Route::middleware(['guest:admin','PreventBackHistory'])->group(function(){
              Route::view('/login','dashboard.admin.login')->name('login');
              Route::post('/create',[AdminController::class,'create'])->name('create');
              Route::post('/check',[AdminController::class,'check'])->name('check');
        });
    // on a spécifié name de guard => auth:admin
        Route::middleware(['auth:admin','PreventBackHistory'])->group(function(){
            Route::view('/home','dashboard.admin.home')->name('home');
            //Route::view('/admindash','dashboard.admin.admindash')->name('admindash');
            Route::post('/logout',[AdminController::class,'logout'])->name('logout');
        });
    
    });

// Route pour responsable communale
    Route::prefix('responsable')->name('responsable.')->group(function(){

        Route::middleware(['guest:responsable','PreventBackHistory'])->group(function(){
             Route::view('/login','dashboard.responsable.login')->name('login');
             Route::view('/register','dashboard.responsable.register')->name('register');
             Route::post('/createresp',[ResponsableController::class,'createresp'])->name('createresp');
             Route::post('/check',[ResponsableController::class,'check'])->name('check');
        });
 
        Route::middleware(['auth:responsable','PreventBackHistory'])->group(function(){
            // On va pas travailler avec cette route 
            //Route::view('/home','dashboard.responsable.home')->name('home');

            //cette route nous redirige vers une page où il y a tous les voiries à travers
            //Fonction liste
             Route::get('home', [AdvoirieController::class,'list'])->name('home');

             //pour tester l'affichage des voiries mais ça marche pas 
             //Route::view('/allvoirie','dashboard.responsable.allvoirie')->name('allvoirie');
             Route::view('/profile', 'dashboard.responsable.profile')->name('profile');
             Route::view('/gestionCompte', 'dashboard.responsable.gestionCompte')->name('gestionCompte');
             Route::view('/addvoirie', 'dashboard.responsable.addvoirie')->name('addvoirie');
             Route::view('/consultationVoirie','dashboard.responsable.consultationVoirie')->name('consultationVoirie');
             Route::post('logout',[ResponsableController::class,'logout'])->name('logout');
             // la route qui transfére les données d'une voirie vers bdd
             Route::post('/ajout',[AdvoirieController::class,'ajout'])->name('ajout');
             
             //allvoirie
             Route::get('allvoirie', [AdvoirieController::class,'affichage'])->name('allvoirie');
            //cette route nous envoie à la page où on va modifier les données de voirie lors de clic sur bouton modifier
             Route::get('/editvoirie/{id}', [AdvoirieController::class,'edit'])->name('editvoirie');
            //route pour les données liranmodifiéw fin raymshiw aprés 
             Route::put('/updatevoirie/{id}', [AdvoirieController::class,'update'])->name('updatevoirie');
             //route permet supprimer les données d'une voirie
             Route::get('/deletevoirie/{id}', [AdvoirieController::class,'delete'])->name('deletevoirie');
             //cette route pour le bouton voir qui affiche les informations de chaque voirie(Carte=Map)
             Route::get('/showvoirie/{id}', [AdvoirieController::class,'show'])->name('showvoirie');
             

             //cette route nous envoie à la page où on va modifier les données de responsable lors de clic sur bouton modifier
             Route::get('/editprofile', [voirieController::class,'edit'])->name('editprofile');
             //route pour les données liranmodifiéw fin raymshiw aprés 
             Route::post('/updateprofile', [voirieController::class,'update'])->name('updateprofile');

            //Tous les utilisateurs
             Route::get('gestionCompte', [UserController::class,'affichage'])->name('gestionCompte');
              //route permet supprimer les données d'un utilisateur
              Route::get('/deleteuser/{id}', [UserController::class,'delete'])->name('deleteuser');
              //cette route nous envoie à la page où on va modifier les données de user lors de clic sur bouton modifier
             Route::get('/edituser/{id}', [UserController::class,'edit'])->name('edituser');
             //route pour les données liranmodifiéw fin raymshiw aprés 
             Route::put('/updateuser/{id}', [UserController::class,'update'])->name('updateuser');

            // pour les dépendances de la voirie concernée
            Route::get('/adddependance/{id}', [DependanceController::class,'adddependance'])->name('adddependance');
            // Route::get('/adddependance/{id}', 'dashboard.responsable.adddependance')->name('adddependance');
             Route::post('/create',[DependanceController::class,'create'])->name('create');
            //Route::get('/allvoirie_pdf', [AdvoirieController::class,'exportPDF'])->name('allvoirie_pdf');
            Route::get('/allvoirie_pdf', [AdvoirieController::class,'pdf'])->name('allvoirie_pdf');
            Route::post('/save', [AdvoirieController::class,'save'])->name('save');

        });
 
 });

 // pour le choix de personne qui va s'authentifie
 Route::get('/registerAs', 'App\Http\Controllers\Admin\AdminController@registerAs')->name('registerAs');


 // Page d'accueil
 Route::get('/template', 'App\Http\Controllers\Admin\AdminController@template')->name('template');

 // pour le choix de personne qui va se connecter 
 Route::get('/loginAs', 'App\Http\Controllers\Admin\AdminController@loginAs')->name('loginAs');

// pour l'envoie de mail
 Route::get('/pageemail', 'App\Http\Controllers\HomeController@testmail')->name('pageemail');


// Les routes suivants ne ça marche pas 
//Pour afficher les voiries
 //Route::get('/AllvoirieTest', 'App\Http\Controllers\AdvoirieController@display')->name('AllvoirieTest');
 //Route::get('/allvoirie', 'App\Http\Controllers\AdvoirieController@list')->name('responsable.allvoirie')->middleware(['auth','responsable']);
 //Route::get('/home', 'App\Http\Controllers\AdvoirieController@list')->name('dashboard.responsable.home')->middleware(['auth','responsable']);


 //pdf
 Route::get('/voirie-pdf',function(){
     return view('voirie-pdf');
     $pdf = PDF::loadView('voirie-pdf');
     return $pdf->download('voirie-pdf');
 });
