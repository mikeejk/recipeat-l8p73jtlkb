<?php

namespace App\Http\Controllers;

use App\Models\Pinboard;
use App\Models\Pin_recipe;
use Illuminate\Http\Request;
use Yajra\Datatables\Datatables;

class PinboardController extends Controller
{
    public function index()
    {
        $pins = Pinboard::all();


        $pin_recipe = Pin_recipe::where('user_id', auth()->user()->id)->get()->count();
        $pin_recipe = Pin_recipe::all();
        return redirect('/pins', compact('pins', 'pin_recipe'));
    }

    // Function - Create
    public function create()
    {

        return view('screens.admin.recipe.add_pins');
    }
    public function show()
    {
        $pin_recipe=Pin_recipe::all();
        $myfavourite=Pin_recipe::where('pinboard_id',1)->where('user_id',auth()->user()->id)->get()->count();
        $familyfav=Pin_recipe::where('pinboard_id',2)->where('user_id',auth()->user()->id)->get()->count();;
        $favdesert=Pin_recipe::where('pinboard_id',3)->where('user_id',auth()->user()->id)->get()->count();;
        $favdinner=Pin_recipe::where('pinboard_id',4)->where('user_id',auth()->user()->id)->get()->count();;
        return view('screens.user.profile.pinboard',compact('myfavourite','familyfav','favdesert','favdinner'));
    }
    // Function - Store
    public function store(Request $request)
    {
        // Validate the Data
        $this->ValidatedData();

        // Create New Object
        $pin = new Pinboard();

        // User_id Form User Model
        $user_id = auth()->user()->id;

        // Recipe-Data Storeing - Foreign Key
        $pin->user_id = $user_id;

        // User Entered - Data Saving
        $pin->pin_name = $request->get('pin_name');

        // Data Save
        $pin->save();

        return redirect()->back();
    }

    // Function - Edit
    public function edit(Pinboard $pin)
    {
        return view('screens.admin.recipe.edit_pin', compact('pin'));
//    dd($pin);
    }

    //Function - Update
    public function update(Pinboard $pin)
    {
        $data = request()->validate(
            [
                'pin_name' => 'required',
            ]
        );

        $pin->update($data);

        return redirect('/pins_create');
    }

    // Function - Destroy
    public function destroy(Pinboard $pin)
    {
        $pin->delete();

        return redirect('/pins_create');
    }

    // Function - getIndex
    public function getIndex()
    {
        return view('screens.admin.recipe.add_pin');
    }

    // Function - anyData
    public function anyData()
    {
        $pinboards = Pinboard::all();
        return datatables()->of($pinboards)
            ->addColumn('action', function ($pin) {
                $html = '<a href="/pins/' . $pin->id . '/edit" class="btn btn-sm btn-primary justify-content-end">Edit</a> ';
                $html .= '<a href="/pins/' . $pin->id . '/delete" class="btn btn-sm btn-danger justify-content-end">Delete</a>';
                return $html;
            })->toJson();

        return Datatables::of(Pinboard::query())->make(true);
    }

    // Function - ValidatedData
    protected function validatedData()
    {
        return request()->validate(
            [
                'pin_name' => "required|string"
            ]
        );
    }
}
