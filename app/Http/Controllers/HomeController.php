<?php

namespace App\Http\Controllers;
// on doit ajouter ces deux lignes suivant car on utilise des fcts dyalhom ici
use App\Mail\EnvoiMail;
use App\Mail\TestMarkdownmail;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        return view('home');
    }

    //Fonction pour le test mail
    public function testmail()
    {
        //On appel à la facade Mail :: et puis on indique le recepteur à qui on va envoyer le mail
     /*   Mail::to('soukaina@gmail.com')->send(new EnvoiMail());
        return view('emails.pagemail');*/

        // ou on fait comme ça car ça c'est dynamique l'autre est statique
       
       /* $user = ['email' => 'soukaina@gmail.com', 'name' => 'Madame ***' ];
        Mail::to($user['email'])->send(new EnvoiMail($user));
        return view('emails.pagemail'); */

        // on va modifier ça car on va utiliser le markdown mail
        Mail::to('soukaina@gmail.com')->send(new TestMarkdownmail());
        return view('emails.pagemail');
    }
}
