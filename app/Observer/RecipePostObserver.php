<?php
namespace App\Observers;
use App\Notifications\NewRecipePost;
use App\Models\Recipe;
use App\Models\User;

class RecipePostObserver
{
    public function created(Recipe $recipe)
    {
        User::all()
        ->except($recipe->user->id)
        ->each(function (User $user) use ($recipe){
         $user->notify( new NewRecipePost($recipe));
        });

    }
}

