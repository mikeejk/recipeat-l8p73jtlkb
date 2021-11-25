<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Support\Carbon;

use Spatie\Permission\Models\Role;
use App\Models\Follower;
use App\Notifications\NotificationDisplay;
use App\Notifications\NewFollower;
use Yajra\Datatables\Datatables;
use Illuminate\Http\Request;

use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Input;
use phpDocumentor\Reflection\Types\Null_;
use Illuminate\Support\Facades\Auth;


class FollowController extends Controller
{
    public function index(Request $request)
    {
        $role = auth()->user()->hasRole('Chef');
        $role1 = auth()->user()->hasRole('Home-Chef');

        //For Home-Chef
        if ($role1) {
            $term = $request->input('q');
            if ($term != '') {
                $roleToExclude = 1;
                $projects = User::query()
                    ->whereDoesntHave('roles', function ($query) use ($roleToExclude) {
                        $query->where('id', $roleToExclude);
                    })->where('id', '!=', auth()->id())
                    ->where('name', 'LIKE', '%' . $term . '%')
                    ->paginate(4);
                $projects->appends(array(
                    'q' =>  $request->input('q'),
                ));
                return view('screens.user.profile.follower', compact('projects'));
            }
            $roleToExclude = 1;
            $projects = User::query()
                ->whereDoesntHave('roles', function ($query) use ($roleToExclude) {
                    $query->where('id', $roleToExclude);
                })->where('id', '!=', auth()->id())
                ->paginate(4);

            return view('screens.user.profile.follower', compact('projects'));
        }
        //For Chef
        elseif ($role) {
            $term = $request->input('q');
            if ($term != '') {
                $roleToExclude = 1;
                $projects = User::query()
                    ->whereDoesntHave('roles', function ($query) use ($roleToExclude) {
                        $query->where('id', $roleToExclude);
                    })->where('id', '!=', auth()->id())
                    ->where('name', 'LIKE', '%' . $term . '%')
                    ->paginate(4);
                $projects->appends(array(
                    'q' =>  $request->input('q'),
                ));
                return view('screens.user.profile.follower', compact('projects'));
            }
            $roleToExclude = 1;
            $projects = User::query()
                ->whereDoesntHave('roles', function ($query) use ($roleToExclude) {
                    $query->where('id', $roleToExclude);
                })->where('id', '!=', auth()->id())
                ->paginate(4);

            return view('screens.user.profile.follower', compact('projects'));
        }
        //For Users
        else {
            $term = $request->input('q');
            if ($term != '') {
                $roleToExclude = 1;
                $projects = User::query()
                    ->whereDoesntHave('roles', function ($query) use ($roleToExclude) {
                        $query->where('id', $roleToExclude);
                    })->where('id', '!=', auth()->id())
                    ->where('name', 'LIKE', '%' . $term . '%')
                    ->paginate(4);
                $projects->appends(array(
                    'q' =>  $request->input('q'),
                ));
                return view('screens.user.profile.follower', compact('projects'));
            }
            $roleToExclude = 1;
            $projects = User::query()
                ->whereDoesntHave('roles', function ($query) use ($roleToExclude) {
                    $query->where('id', $roleToExclude);
                })->where('id', '!=', auth()->id())
                ->paginate(4);

            return view('screens.user.profile.follower', compact('projects'));


            // $projects = User::query()->where('id', '!=', auth()->id())
            //     ->whereDoesntHave('roles')
            //     ->orwhereHas('roles', function ($q) {
            //         $q->whereIn('name', ['Chef', 'Home-Chef']);
            //     })
            //     ->orderBy("id", "asc")
            //     ->paginate(4);
            // return view('screens.user.profile.follower', compact('projects'));
        }
    }



    public function followOrUnfollowuser(Request $request)
    {

        if ($request->Follow) {
            $user = User::findOrFail($request->user);
            // Auth::user()->followings()->attach($user->id);
            $user->followers()->attach(auth()->user()->id);
            $user->notify(new NewFollower(Auth::user()));
            return redirect()->back();
        } else {
            $user = User::findOrFail($request->user);
            $user->followers()->detach(auth()->user()->id);
            // Auth::user()->followings()->detach($user->id);
        }
        // return redirect('/my_follower');
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
            // ->addColumn('action', function () {
            //     $html = '<button type="button" onclick="myApproval()" class="btn btn-sm btn-primary justify-content-end mr-2">Follow</button>';
            //     return $html;
            // })


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
            // ->addColumn('action', function () {
            //     $html = '<button type="button" onclick="myApproval()"class="btn btn-sm btn-danger justify-content-end mr-2">UnFollow</button>';
            //     return $html;
            // })
            ->addColumn('follower', function ($follower) {
                return User::find($follower->leader_id)->name;
            })
            ->toJson();
        return Datatables::of(Follower::query())->make(true);
    }
}
