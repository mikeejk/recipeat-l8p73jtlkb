<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Spatie\Permission\Models\Role;
use Illuminate\Support\Facades\DB;
use App\Models\Recipe;
use App\Models\User;
use App\Models\Pinboard;
use App\Models\Chef_question;
use App\Models\Question;
use App\Models\Follower;
use App\Models\Like;

class HomeController extends Controller
{
    public function index()
    {
        // $follow = Follower::where('follower_id', auth()->user()->id)->pluck('leader_id');
        // $recipe = Recipe::where('user_id', '!=', auth()->user()->id )->where('status', 'Approved')->where('user_id', $follow)->get();
        $recipe = Recipe::where('creator', '=', '1')->latest()->get();
        $user = User::where('id', auth()->user()->id)->first();
        $chef_questions = Chef_question::where('user_id', auth()->user()->id)->first();
        $question = Question::where('user_id', auth()->user()->id)->first();
        $collections = Pinboard::latest()->take(3)->get();
        $CollectionName = Pinboard::all('id', 'pin_name');
        $recipes = Recipe::where('user_id', auth()->user()->id)->get()->count();

        $posts = Recipe::whereUserId(auth()->user()->id)->get(['id']);
        $total_like_count = '0';
        foreach ($posts as $post) {
            $post = Like::wherelikeable_id($post->id)->count();
            $total_like_count = $post + $total_like_count;
        }
        // dd($total_like_count) ;


        $roleToExclude = 1;
        $id = auth()->user()->id;
        $suggestions = User::whereDoesntHave('roles', function ($query) use ($roleToExclude) {
            $query->where('id', $roleToExclude);
        })->where('id', '!=', $id)->where('name', '!=', '0')->whereNotIn('id', function ($query) use ($id) {
            $query->select('leader_id')
                ->from('followers')
                ->where('follower_id', $id);
        })->get()->take(3);

        foreach ($suggestions as $suggestion) {
                $profile_image = DB::table('chef_questions')->select('*')->join('users', 'users.id', '=', 'chef_questions.user_id')->where('chef_questions.user_id', $suggestion->id)->get('image');
        }

        return view('home', compact('recipe', 'user', 'question', 'chef_questions', 'collections', 'recipes', 'suggestions', 'total_like_count','profile_image','CollectionName'));
    }
}
