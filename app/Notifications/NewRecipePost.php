<?php

namespace App\Notifications;
use App\Models\Recipe;
use App\Modelds\User;
use App\Models\Follower;
use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Notifications\Messages\MailMessage;
use Illuminate\Notifications\Notification;

class NewRecipePost extends Notification
{
    use Queueable;
    protected $user;
    protected $recipe;
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
        return ['mail'];
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
                    ->subject('Create Recipe')
                    ->line($this->user.'Just created a New Recipe: '.$this->recipe->name)
                    ->action('Read Post' , url('/'))
                    ->line('Thank you for being with us!');

    }
    /**
     * Get the array representation of the notification.
     *
     * @param  mixed  $notifiable
     * @return array
     */
    public function toDatabase($notifiable)
    {
        return [

            'name' => $this->user->name,
            // 'recipe_id' =>$this->recipe->id,
            'message'=>'created new recipe',
        ];
    }
}
