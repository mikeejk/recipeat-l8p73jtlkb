<?php

namespace App\Http\Controllers;
use App\Models\Comment;
use App\Models\Recipe;
use Illuminate\Http\Request;

class CommentController extends Controller
{
    public function store(Request $request,Recipe $recipe)

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

        $comment= new Comment();
        $comment->comment=$request->comment;
        $comment->user()->associate($request->user());
        $recipe=Recipe::find($request->recipe_id);
        $recipe->comments()->save($comment);



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
        $reply=new Comment();
        $reply->comment=$request->get('comment');
        $reply->user()->associate($request->user());
        $reply->parent_id=$request->get('comment_id');
        // $recipe = Recipe::find($request->input('recipe_id'));
        $recipe=Recipe::find($request->get('recipe_id'));
        $recipe->comments()->save($reply);
        return back();

    }
}
