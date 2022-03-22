<?php

namespace App\Notifications;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Notifications\Messages\MailMessage;
use Illuminate\Notifications\Notification;

class CommentNotification extends Notification
{
    use Queueable;
    public $user;
    public $recipe;

    /**
     * Create a new notification instance.
     *
     * @return void
     */
    public function __construct($user,$recipe)
    {
        $this->user=$user;
        $this->recipe=$recipe;
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
        ->subject('Comment Recipe')
        ->line($this->user.'Just commentted your Recipe: '.$this->recipe)
        ->action('Read Post' , url('/'))
        ->line('Thank you for being with us!');
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
            'name' => $this->user->name,
            // 'email' => $this->user->email,
            'recipe'=>$this->recipe,
            // 'message'=>'commentted Your recipe',
        ];
    }
}
