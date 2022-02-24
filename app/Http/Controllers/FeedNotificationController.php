<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class FeedNotificationController extends Controller
{
    public function index()
    {
        $user_id = auth()->user()->id;
        $feednote = DB::table('notifications')->where('type', 'App\Notifications\FeedRecipeNotification')
            ->where('notifiable_id', $user_id)->count();
        $feednotifications = DB::table('notifications')->where('type', 'App\Notifications\FeedRecipeNotification')
            ->where('notifiable_id', $user_id)->get('data');

         return view('screens.user.profile.feednotifications', compact('feednotifications','feednote'));
        //  dd($feednotifications);
    }
}
