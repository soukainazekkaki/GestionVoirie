<?php

namespace App\Notifications;

use App\Models\Admin;
use App\Models\User;
use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Notifications\Messages\MailMessage;
use Illuminate\Notifications\Notification;
use App\Models\responsableCommune;

class NewCompte extends Notification
{
    use Queueable;

    /**
     * Create a new notification instance.
     *
     * @return void
     */
   //public $details;
   protected $responsable;
    public function __construct(responsableCommune $responsable)
    {
        //$this->details= $details;
        $this->responsable = $responsable;
    }

    /**
     * Get the notification's delivery channels.
     *
     * @param  mixed  $notifiable
     * @return array
     */
    public function via($notifiable)
    {
        // on va pas l'utiliser car on va envoyer nofication via database
        //return ['mail'];
        //car on va passer un tableau 
        return ['database'];
    }

    /**
     * Get the mail representation of the notification.
     *
     * @param  mixed  $notifiable
     * @return \Illuminate\Notifications\Messages\MailMessage
     */


     //On a pas besoin de ça car on va utiliser seulement database donc va devenir commentaire
  /* public function toMail($notifiable)
    {
        return (new MailMessage)
                    ->from('meryem@gmail.com')
                    ->line('The introduction to the notification.')
                    ->action('Notification Action', url('/'))
                    ->line('Thank you for using our application!');
    } */




    /**
     * Get the array representation of the notification.
     *
     * @param  mixed  $notifiable
     * @return array
     */
  /*  public function toDatabase($notifiable)
    {
        // hadi zadnaha
      /*return [
           'repliedTime'=> Carbon::now()
        ];
    }*/

     // On va utiliser ça car les données vont envoyer sous forme table
    public function toArray($notifiable)
    {
        // hadi zadnaha
       /* return [
           'message'=$this->details['message'=>'Votre demande à été envoyer avec succès']
        ];*/

        // user->id, kandiro les colonne kifmahoma maktobin f table users
        return [
                'responsableid' => $this->responsable->id,
                'responsablename' => $this->responsable->name,
                'responsablecommune' => $this->responsable->commune,
                'responsableemail' => $this->responsable->email
         ];


        
    }
}
