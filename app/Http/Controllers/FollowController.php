<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Follower;
use Yajra\Datatables\Datatables;
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
            ->paginate(4);
        return view('screens.user.profile.follower', compact('projects'), compact('projects_count'));

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

    //Function - Index1 for approve
    public function index1()
    {
        $followers = Follower::all();
        return view('screens.user.profile.homechef_followers', compact('followers'));
    }

    // Function - getIndex1 for approve
    public function getIndex1(Follower $followers)
    {
        return view('screens.user.profile.homechef_followers');
    }

    //Function - anyData1 for approve
    public function anyData1()
    {
        $followers = Follower::where('leader_id', auth()->user()->id)->get();
        return datatables()->of($followers)
            ->addColumn('action', function () {
                $html = '<button type="button" onclick="myApproval()"class="btn btn-sm btn-danger justify-content-end mr-2">UnFollow</button>';
                return $html;
            })
            ->addColumn('follower', function ($follower) {
                return User::find($follower->follower_id)->name;
            })
            ->toJson();
        return Datatables::of(Follower::query())->make(true);
    }

     //Function - Index1 for approve
     public function index2()
     {
         $followers = Follower::all();
         return view('screens.user.profile.homechef_following', compact('followers'));
     }

     // Function - getIndex1 for approve
     public function getIndex2(Follower $followers)
     {
         return view('screens.user.profile.homechef_following');
     }

     //Function - anyData1 for approve
     public function anyData2()
     {
         $followers = Follower::where('follower_id', auth()->user()->id)->get();
         return datatables()->of($followers)
             ->addColumn('action', function () {
                 $html = '<button type="button" onclick="myApproval()"class="btn btn-sm btn-primary justify-content-end mr-2">Follow</button>';
                 return $html;
             })
             ->addColumn('follower', function ($follower) {
                 return User::find($follower->leader_id)->name;
             })
             ->toJson();
         return Datatables::of(Follower::query())->make(true);
     }
}
