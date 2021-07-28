<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class EnvoiMail extends Mailable
{
    use Queueable, SerializesModels;

    // pour parcourir les données de user on déclare cet attribut 
    public $data = [];

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct(Array $user)
    {
        $this->data = $user;
        // alors on peut utiliser directement ce variable dans le fichier pagemail
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        //On doit préciser le sendeur cad l'emetteur celui qui va envoyer le mail
        // On peut définir aussi un sujet (subject)
        //fonction attach cad pour attacher à ce mail des fichiers (image, pdf....)
        //public_path cad on va faire le chemain de piéce jointe image voirie
        return $this->from('meryem@gmail.com')
                    ->subject('Mon objet personnalisé')
                    ->view('emails.pagemail')
                    ->attach(public_path('images/voirie1.jpg'));
    }
}
