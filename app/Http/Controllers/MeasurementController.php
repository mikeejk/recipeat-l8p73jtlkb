<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
Use App\Models\Measurement;

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

        Measurement::create($data);

        return redirect()->back();
    }
}
