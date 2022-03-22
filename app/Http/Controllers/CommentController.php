<?php

namespace App\Http\Controllers;

use App\Models\Comment;
use App\Models\Recipe;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Notification;
use App\Notifications\CommentNotification;
use Illuminate\Support\Facades\Auth;
class CommentController extends Controller
{
    public function store(Request $request, Recipe $recipe)

    {
        // $this->validate($request,['comment'=>'required|max:1000']);
        // $comment= new Comment();
        // $comment->recipe_id=$recipe->recipe_id;
        // $recipe=Recipe::find($request->input('recipe_id'));
        // $comment->user_id=auth()->user()->id;
        // $comment->parent_id=auth()->user()->id;
        // $comment->comment=$request->comment;
        // $comment->save();
        // return back();
        // $user = User::all();
        // $recipe=Recipe::all();
        $comment = new Comment();
        $comment->comment = $request->comment;
        $comment->user()->associate($request->user());
        $recipe = Recipe::find($request->recipe_id);
        $recipe->comments()->save($comment);
        // Notification::send($users, new CommentNotification($recipe,auth()->user()));
        $recipe =  Recipe::where('id',$request->recipe_id)->pluck('recipe_name')->first();
        $rec_user = Recipe::where('id',$request->recipe_id)->pluck('user_id');
      $user=User::where('id',$rec_user)->get();
    //    Notification::send($user, new CommentNotification($recipe,auth()->user()));
         foreach ($user as $user) {
            $user->notify(new CommentNotification(auth()->user(), $recipe));
         }
        // dd($user);
        return back();
        // $comment = new Comment(['comment' => request('comment')]);
        // $comment->user_id = auth()->user()->id;
        // $comment->parent_id =auth()->user()->id ;
        // $recipe=Recipe::find($request->recipe_id);
        // $recipe->comments()->save($comment);
        // $input = $request->all();
        // $request->validate(['comment'=>'required',]);
        // $input['user_id'] = auth()->user()->id;
        // Comment::create($input)->dd();
        // return back();


    }
    public function replyStore(Request $request)
    {
        $reply = new Comment();
        $reply->comment = $request->get('comment');
        $reply->user()->associate($request->user());
        $reply->parent_id = $request->get('comment_id');
        // $recipe = Recipe::find($request->input('recipe_id'));
        $recipe = Recipe::find($request->get('recipe_id'));
        $recipe->comments()->save($reply);
        return back();
    }
}
