<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class RecipeStepController extends Controller
{
    public function destroy(RecipeStepController $recipestep)
    {
        $recipestep->delete();

        return redirect('/recipes');
    }
}
