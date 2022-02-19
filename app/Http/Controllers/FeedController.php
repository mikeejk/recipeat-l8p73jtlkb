<?php

namespace App\Http\Controllers;

use Yajra\Datatables\Datatables;
use App\Models\Feed;
use App\Models\Recipe;
use App\Models\Cuisine;
use App\Models\Category;
use App\Models\User;
use Illuminate\Support\Facades\Notification;
use Illuminate\Http\Request;
use App\Notifications\FeedRecipeNotification;
use Illuminate\Notifications\Notifiable;
use Illuminate\Support\Facades\Auth;

class FeedController extends Controller
{
    public function confirm(Request $request)
    {
        // Create New Object
        $feed = new Feed();
         $user_id = $request->input('role');
         $feed->user_id = $user_id;
        // Recipe_id Form Recipe Model
         $feed->recipe_id = $request->get('recipe_id');

        // Data Save
         $feed->save();
         $user_id = $request->input('role');
         $user = User::query()
         ->whereHas('roles', function ($query) use ($user_id) {
            $query->where('id',$user_id);
            })->first();
            $role_id=1;
            $admin= User::query()
            ->whereHas('roles', function ($query) use ($role_id) {
               $query->where('id',$role_id);
               });
            // $recipe=Recipe::whrere('id','=',$feed->recipe_id)->get('recipe_name');
            // $recipe = Recipe::where('id', '=', $feed->recipe_id)->pluck('recipe_name');
         $user->notify(new  FeedRecipeNotification(Auth::user()));

        //  dd($recipe);

     return redirect()->back();
    }
    //Function - Index1 for myfavourite
    public function index()
    {
        $add_feed = Recipe::all();
        $notifications = auth()->user()->unreadNotifications;

        return view('screens.admin.newsfeed.add_feed', compact('add_feed','notifications'));
    }
    public function getIndex()
    {
        return view('screens.admin.newsfeed.add_feed');
    }
    public function anydata()
    {
        $add_feed = Recipe::where('status', 'Approved');
        return datatables()->of($add_feed)
            //  ->addColumn('checkbox', function ($recipe) {
            //       return '<input type="checkbox" class="get_value" value="{{$recipe->id }}"name="id[]" />';
            //  })
            ->addColumn('checkbox', function ($recipe) {
                return '<input type="checkbox" value="' . $recipe->id . '"  name="recipe_id" />';
           })
            ->addColumn('name', function ($user) {
                // return to view (What: get the user_id form recipe table and check with user table then display the corresponding name of the user_id)
                return User::find($user->user_id)->name;
            })
            // Add Column 'category'
            ->addColumn('category', function ($category) {
                // return to view (What: get the category_id form recipe table and check with categorys table then display the correspond name of the category_id)
                return Category::find($category->category_id)->category;
            })
            // Add Column 'cuisine'
            ->addColumn('cuisine', function ($cuisine) {
                // return to view (What: get the cuisine_id form recipe table and check with role table then display the correspond name of the cuisine_id)
                return Cuisine::find($cuisine->cuisine_id)->cuisine;
            })->toJson();
        return Datatables::of(Recipe::query())->make(true);
    }
}
