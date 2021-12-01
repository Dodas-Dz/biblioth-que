<?php

namespace App\Notifications;

use App\Models\Abonne;
use App\Models\User;
use Illuminate\Bus\Queueable;
use Illuminate\Notifications\Notification;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Notifications\Messages\MailMessage;

class abonneNotification extends Notification
{
    use Queueable;
   
   
    public $abonne_nom;
    public $abonne_prenom;
   
   
    /**
     * Create a new notification instance.
     *
     * @return void
     */
    public function __construct($abonne_nom, $abonne_prenom )
    {
       
        $this->abonne_nom=$abonne_nom;
        $this->abonne_prenom=$abonne_prenom;
    
    }

    /**
     * Get the notification's delivery channels.
     *
     * @param  mixed  $notifiable
     * @return array
     */
    public function via($notifiable)
    {
        return ['database','mail'];
    }

    /**
     * Get the mail representation of the notification.
     *
     * @param  mixed  $notifiable
     * @return \Illuminate\Notifications\Messages\MailMessage
     */
    public function toMail($notifiable)
    {
        return (new MailMessage)
                    ->line('The introduction to the notification.')
                    ->action('Notification Action', url('/'))
                    ->line('Thank you for using our application!');
    }

    /**
     * Get the array representation of the notification.
     *
     * @param  mixed  $notifiable
     * @return array
     */
    public function toArray($notifiable)
    {
        return [

            'titre'=> 'un nouveau abonne a rejoint la bibliothèque :' ,
            'abonne_nom'=> 'NOM :' .$this->abonne_nom,
            'abonne_prenom'=> 'PRENOM :' .$this->abonne_prenom,
           
            //
        ];
    }

    public function deleteNotification($id)
    {
        $notification = Notification::find($id);
        $notification->delete();
        return back();
    }
   
}
