<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Measurement;

class MeasurementController extends Controller
{
    // Function - Create
    public function create()
    {
        return view('screens.admin.recipe.add_measurement');
    }

    // Function - Store
    public function store(Request $request)
    {
        // Data - Save
        $data = request()->validate([
            'measurement' => 'required',
        ]);

        // Send the use inputed data to create function
        Measurement::create($data);

        // If the user click the (SAVE) button run the if condition
        // If the user click the (SAVE AND INSERT NEXT) button run the else condition
        if ($request->get('action') == 'measurement_save') {
            return redirect('/admin_recipe');
        } elseif ($request->get('action') == 'measurement_save_next') {
            return redirect()->back();
        }
    }
}
