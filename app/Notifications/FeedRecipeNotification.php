<?php

namespace App\Notifications;
use App\Models\Recipe;
use App\Models\Feed;
use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Notifications\Messages\MailMessage;
use Illuminate\Notifications\Notification;

// use App\Notifications\FeedRecipeNotification;
class FeedRecipeNotification extends Notification
{
    use Queueable;
    public $user;
    // public $recipe;
    /**
     * Create a new notification instance.
     *
     * @return void
     */
    public function __construct($user)
    {
        $this->user=$user;
        // $this->recipe=$recipe;

    }
    /**
     * Get the notification's delivery channels.
     *
     * @param  mixed  $notifiable
     * @return array
     */
    public function via($notifiable)
    {
        return ['database'];
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
        ->subject('Hey user, New Recipe availabe')
        ->greeting('Hello' , $this->user)
        ->line('There is a new post , hope you will like it')
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
            //   'email' => $this->user->email,
            //   'recipe'=>$this->recipe,

        ];
    }
}
