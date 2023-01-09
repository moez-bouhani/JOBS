<?php

namespace App\Notifications;

use App\User;
use Illuminate\Bus\Queueable;

use Illuminate\Notifications\Notification;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Notifications\Messages\MailMessage;

use Illuminate\Notifications\Messages\BroadcastMessage;

use Carbon\Carbon;
class UserRegistered extends Notification
{
    use Queueable;
 
    public $user;
    /**
     * Create a new notification instance.
     *
     * @return void
     */
  public function __construct($user)
    {
        //
        $this->user = $user;
    } 

    /**
     * Get the notification's delivery channels.
     *
     * @param  mixed  $notifiable
     * @return array
     */


    public function via($notifiable)
    {
       return ['database']; /* ,'broadcast' */
    }

    public function toDatabase($notifiable)
    {
        return [
            $this->user->nom,
           // 'user'=>$notifiable,
           
        ];
        
    }

  

    /**
     * Get the broadcastable representation of the notification.
     *
     * @param  mixed  $notifiable
     * @return BroadcastMessage
     */
  /*   public function toBroadcast($notifiable)
    {
        return new BroadcastMessage([
            $this->user->nom,
        ]);
    } */

 
   /*  public function toBroadcast($notifiable)
    {
        return new BroadcastMessage([
            'notification'=> $notifiable->notifications()->latest()->first()
        ]);
    } */ 




}
