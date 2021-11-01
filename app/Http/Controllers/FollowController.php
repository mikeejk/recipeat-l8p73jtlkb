<?php

namespace App\Http\Controllers;

use App\Models\User;

use Illuminate\Http\Request;
use phpDocumentor\Reflection\Types\Null_;

class FollowController extends Controller
{
    public function index(Request $request)
    {
        $projects_count = User::all();
        $projects = User::where([
            ['name', '!=', Null],
            [function ($query) use ($request) {
                if (($term = $request->term)) {
                    $query->orWhere('name', 'LIKE', '%' . $term . '%')->get();
                }
            }]
        ])
            ->orderBy("id", "asc")
            ->paginate(5);

        return view('screens.user.profile.follower', compact('projects'), compact('projects_count'))
            ->with('i', (request()->input('page', 1) - 1) * 5);
    }

    public function followUser(int $user_id)
    {
        $user = User::find($user_id);
        if (!$user) {
            return redirect()->back()->with('error', 'User does not exist.');
        }

        $user->followers()->attach(auth()->user()->id);
        return redirect()->back();
    }

    public function unFollowUser(int $user_id)
    {
        $user = User::find($user_id);
        if (!$user) {
            return redirect()->back()->with('error', 'User does not exist.');
        }
        $user->followers()->detach(auth()->user()->id);
        return redirect()->back();
    }


    public function show(int $userId)
    {
        $user = User::find($userId);
        $followers = $user->followers;
        $followings = $user->followings;
        return view('screens.user.profile.follower', compact('user', 'followers', 'followings'));
    }
}
