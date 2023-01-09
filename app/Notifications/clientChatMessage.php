<?php

namespace App\Notifications;

use Illuminate\Bus\Queueable;
use Illuminate\Notifications\Notification;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Notifications\Messages\MailMessage;

class clientChatMessage extends Notification
{   protected $message;

    public function __construct($message)
    {
        $this->message = $message;
    }

    public function via($notifiable)
    {
        return ['database']; //need to create notifications table check the below link
    }

    public function toArray($notifiable)
    {
       return 
       $this->message;
     
       
          
    }
   
}
