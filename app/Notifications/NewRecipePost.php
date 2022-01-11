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
    protected $following;
    protected $recipe;
    /**
     * Create a new notification instance.
     *
     * @return void
     */
    public function __construct(Recipe $recipe)
    {
        $this->recipe = $recipe;
        $this->recipeuser=$recipe->user;
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
                    ->subject('Create Recipe')
                    ->line($this->recipeuser->name.'Just created a New Recipe: '.$this->recipe->name)
                    ->action('checkItOut', url('/'));

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

            'name' => $this->recipeuser->name,
            // 'recipe_id' =>$this->recipe->id,
            'message'=>'created new recipe',
        ];
    }
}
