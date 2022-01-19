<?php
namespace App\Notifications;
namespace App\Listeners;
use App\Listeners\NewUserNotification;
use app\Models\User;
use App\Notifications;

Class SendNewUserNotification
{
    public function handle($event)
    {
        $admins = User::whereHas('roles',function($query){
            $query->where('id',1);
        })->get();
        Notification::send($admins,new NewUserNotification($event->user));
    }
}
