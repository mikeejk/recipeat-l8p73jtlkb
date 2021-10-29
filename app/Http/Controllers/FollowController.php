<?php

namespace App\Http\Controllers;
use App\Models\User;

use Illuminate\Http\Request;
use phpDocumentor\Reflection\Types\Null_;

class FollowController extends Controller
{
    public function index(Request $request)
    {
        $projects = User::where([
            ['name', '!=' , Null],
            [function ($query) use ($request) {
                if(($term = $request->term)){
                    $query->orWhere('name','LIKE','%' .$term . '%')->get();
                }

            }]
        ])
         ->orderBy("id","asc")
         ->paginate(4);

         return view('screens.user.profile.follower',compact('projects'))
         ->with('i',(request()->input('page',1) -1)*5);

    }
}
