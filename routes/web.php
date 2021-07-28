<?php

use Illuminate\Support\Facades\Route;
//Hadi zadnaha car on va travailler par le controlleur dans les routes
use App\Http\Controllers\User\UserController;
use App\Http\Controllers\Admin\AdminController;
use App\Http\Controllers\Responsable\ResponsableController;
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
    return view('welcome');
});

Auth::routes();

//Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::prefix('user')->name('user.')->group(function(){
  // guest cad spécifier le type de persoone authentifié (login et register)
//on a ajouté PreventBackHistory pour bien structurer les choses si on retourne en arriére
    Route::middleware(['guest:web','PreventBackHistory'])->group(function(){
          Route::view('/login','dashboard.user.login')->name('login');
          Route::view('/register','dashboard.user.register')->name('register');
          // pour créer un nv user hadi la route likan7atoha f Form dyal register 
          //bash kitsefto les données dyal formulaire o b méthode post(lier avec register)
          Route::post('/create',[UserController::class,'create'])->name('create');
          //Pour vérifier la connexion de user (lier avec login )
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
             Route::post('/create',[ResponsableController::class,'create'])->name('create');
             Route::post('/check',[ResponsableController::class,'check'])->name('check');
        });
 
        Route::middleware(['auth:responsable','PreventBackHistory'])->group(function(){
             Route::view('/home','dashboard.responsable.home')->name('home');
             Route::post('logout',[ResponsableController::class,'logout'])->name('logout');
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