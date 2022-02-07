<?php

namespace App\Http\Controllers;
use App\Models\Pin_recipe;
use App\Models\Pinboard;
use Illuminate\Http\Request;
use App\Models\Recipe;
use Yajra\Datatables\Datatables;

class PinRecipeController extends Controller
{
    // Function - Store
    public function store(Request $request)
    {
        // Create New Object
        $recipe_pin = new Pin_recipe();

        // User_id Form User Model
        $user_id = auth()->user()->id;

        // Recipe_id Form Recipe Model
         $recipe_pin->recipe_id = $request->input('recipe_id');
        // PinBoard_id from Pin Baord Model
        $recipe_pin->pinboard_id = $request->input('pinboard_id');
        // Recipe-Data Storeing - Foreign Key
        $recipe_pin->user_id = $user_id;
        // Data Save
         $recipe_pin->save();
         return redirect()->back();
    }
     // Function - view
     public function view(Pin_recipe $recipe_pins)
     {   $recipes=Recipe::all();
        $pinboards=Pinboard::all();
         return view('/recipe_view', compact('recipes','pinboards'));
     }
     public function destroy(Pin_recipe $recipe_pin)
     {
         $recipe_pin->delete();

         return redirect()->back();
     }

    //Function - Index1 for myfavourite
    public function index()
    {
        $recipe=Recipe::all('id','recipe_name');
        $recipe_pin = Pin_recipe::all();
         return view('/myfavourite', compact('recipe_pin','recipe'));

    }
     // Function - getIndex1 for myfavourite
    public function getIndex()
    {
        return view('screens.user.profile.myfavourite');
    }

    public function anyData()
    {
        $recipe_pin = Pin_recipe::where('pinboard_id',1)->where('user_id', auth()->user()->id);
        return datatables()->of($recipe_pin)
            ->addColumn('action', function ($recipe_pin) {
                $html = '<a href="/recipe_view/' . $recipe_pin->recipe_id . '" class="btn btn-sm btn-primary justify-content-end">View</a> ';
                $html .= '<a href="/recipe_pin/'.$recipe_pin->id .'/delete" class="btn btn-sm btn-danger justify-content-end">Delete</a>';
                return $html;
            })
            ->addColumn('recipe_name', function ($recipe_pin) {
                return Recipe::find($recipe_pin->recipe_id)->recipe_name;
            })->toJson();

        return Datatables::of(Pin_recipe::query())->make(true);
    }

     //Function - Index1 for familyfavourite
     public function index1()
     {
         $recipe=Recipe::all('id','recipe_name');
         $recipe_pin = Pin_recipe::all();
          return view('/familyfav', compact('recipe_pins','recipe'));

     }
      // Function - getIndex1 for myfavourite
     public function getIndex1()
     {
         return view('screens.user.profile.familyfav');
     }

     public function anyData1()
     {
         $familyfav = Pin_recipe::where('pinboard_id',2)->where('user_id', auth()->user()->id);
         return datatables()->of($familyfav)
             ->addColumn('action', function ($recipe_pin) {
                 $html = '<a href="/recipe_view/' . $recipe_pin->recipe_id .'" class="btn btn-sm btn-primary justify-content-end">View</a> ';
                 $html .= '<a href="/recipe_pin/'.$recipe_pin->id .'/delete" class="btn btn-sm btn-danger justify-content-end">Delete</a>';
                 return $html;
             })
             ->addColumn('recipe_name', function ($recipe_pin) {
                 return Recipe::find($recipe_pin->recipe_id)->recipe_name;
             })->toJson();

         return Datatables::of(Pin_recipe::query())->make(true);
     }
      //Function - Index1 for favdesert
      public function index2()
      {
          $recipe=Recipe::all('id','recipe_name');
          $recipe_pin = Pin_recipe::all();
           return view('/favdesert', compact('recipe_pins','recipe'));
      }
       // Function - getIndex2 for favdesert
      public function getIndex2()
      {
          return view('screens.user.profile.favdesert');
      }
      public function anyData2()
      {
          $favdeserts = Pin_recipe::where('pinboard_id',3)->where('user_id', auth()->user()->id);
          return datatables()->of($favdeserts)
              ->addColumn('action', function ($recipe_pin) {
                  $html = '<a href="/recipe_view/' . $recipe_pin->recipe_id . '" class="btn btn-sm btn-primary justify-content-end">View</a> ';
                  $html .= '<a href="/recipe_pin/'.$recipe_pin->id .'/delete" class="btn btn-sm btn-danger justify-content-end">Delete</a>';
                  return $html;
              })
              ->addColumn('recipe_name', function ($recipe_pin) {
                  return Recipe::find($recipe_pin->recipe_id)->recipe_name;
              })->toJson();

          return Datatables::of(Pin_recipe::query())->make(true);
      }
//Function - Index3 for favdesert
public function index3()
{
    $recipe=Recipe::all('id','recipe_name');
    $recipe_pin = Pin_recipe::all();
     return view('/favdinner', compact('recipe_pins','recipe'));
}
 // Function - getIndex3 for favdesert
public function getIndex3()
{
    return view('screens.user.profile.favdinner');
}
public function anyData3()
{
    // $recipes = Recipe::where('user_id', auth()->user()->id)->get()->count();
    $favdinner = Pin_recipe::where('pinboard_id',4)->where('user_id', auth()->user()->id);
    return datatables()->of($favdinner)
        ->addColumn('action', function ($recipe_pin) {
            $html = '<a href="/recipe_view/' . $recipe_pin->recipe_id . '/" class="btn btn-sm btn-primary justify-content-end">View</a> ';
            $html .= '<a href="/recipe_pin/'.$recipe_pin->id .'/delete" class="btn btn-sm btn-danger justify-content-end">Delete</a>';
            return $html;
        })
        ->addColumn('recipe_name', function ($recipe_pin) {
            return Recipe::find($recipe_pin->recipe_id)->recipe_name;
        })->toJson();
    return Datatables::of(Pin_recipe::query())->make(true);
}

}
