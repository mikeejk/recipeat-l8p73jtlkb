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

        Measurement::create($data);

        if ($request->get('action') == 'measurement_save') {
            return redirect('/admin_recipe');
        } elseif ($request->get('action') == 'measurement_save_next') {
            return redirect()->back();
        }
    }
}
