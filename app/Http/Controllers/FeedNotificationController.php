<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Notifications\FeedRecipeNotification;
use Illuminate\Support\Facades\Notification;

class FeedNotificationController extends Controller
{   //recipe feed notifications
    // public function index()
    // {
    //     $user_id = auth()->user()->id;
    //     $feednote = DB::table('notifications')->where('type', 'App\Notifications\FeedRecipeNotification')
    //         ->where('notifiable_id', $user_id)->count();
    //     $feednotifications = DB::table('notifications')->where('type', 'App\Notifications\FeedRecipeNotification')
    //         ->where('notifiable_id', $user_id)->get('data');

    //      return view('screens.user.profile.feednotifications', compact('feednotifications','feednote'));
    //     //  dd($feednotifications);
    // }
    //notifications for follow
    public function index1()
    {
        $user_id = auth()->user()->id;
        $notifications = DB::table('notifications')->where('type', 'App\Notifications\NewFollower')
            ->where('notifiable_id', $user_id)
            ->where(
                function ($query) {
                    $query->orWhereNull('read_at');
                }
            )->get('data');
        $feednotifications = DB::table('notifications')->where('type', 'App\Notifications\FeedRecipeNotification')
            ->where('notifiable_id', $user_id)
            ->where(
                function ($query) {
                    $query->orWhereNull('read_at');
                }
            )->get('data');

        $commentnotifications = DB::table('notifications')->where('type', 'App\Notifications\CommentNotification')
            ->where('notifiable_id', $user_id)
            ->where(
                function ($query) {
                    $query->orWhereNull('read_at');
                }
            )->get('data');

        return view('screens.user.profile.notifications_screen', compact('notifications', 'commentnotifications', 'feednotifications'));
    }
    public function readNotification()
    {
        $user = auth()->user()->id;
        $user->unreadNotifications()->update(['read_at' => now()]);
        return redirect()->back();
    }
    public function show($id)
    {
        $user = auth()->user()->id;
        $notification = $user->notifications()->where('id', $id)->first();

        if ($notification) {
            $notification->markAsRead();
            return redirect($notification->data['link']);
        }
    }
}
