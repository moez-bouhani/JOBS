<?php

namespace App\Notifications;

use Illuminate\Bus\Queueable;
use Illuminate\Notifications\Notification;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Notifications\Messages\MailMessage;

class ClientContact extends Notification
{
    public $contact;

    public function __construct($contact)
    {
        $this->contact = $contact;
    }

    public function via($notifiable)
    {
        return ['database']; //need to create notifications table check the below link
    }

   

    public function toArray($notifiable)
    {
        return [
            'createdUser'=> $this->contact,
            'client'=> $notifiable
        ];
    }




    protected $appends = ['human_created_at'] ;                     

    public function getHumanCreatedAtAttribute()
    {
        return $this->created_at->diffForHumans();
    }



   /*  public function toBroadcast($notifiable)
    {
        return new BroadcastMessage([
            'notification'=> $notifiable->notifications()->latest()->first()
        ]);
    } */
}
