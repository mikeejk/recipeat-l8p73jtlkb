<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Measurement;
use Yajra\Datatables\Datatables;

class MeasurementController extends Controller
{
    // Function - index
    public function index()
    {
        $measurement = Measurement::all();
        return redirect('/measurements', compact('measurement'));
    }

    // Function - Create
    public function create()
    {
        return view('screens.admin.recipe.add_measurement');
    }

    // Function - Store
    public function store(Request $request)
    {
        // Create New Object
        $measurement = new Measurement();

        //Validate the Data
        $measurement = Measurement::create($this->ValidatedData());

        // User Entered - Data Saving
        $measurement->measurement = $request->get('measurement');

        // Data Save
        $measurement->save();

        // If the user click the (SAVE) button run the if condition
        // If the user click the (SAVE AND INSERT NEXT) button run the else condition
        if ($request->get('action') == 'measurement_save') {
            return redirect()->back();
        } elseif ($request->get('action') == 'measurement_save_next') {
            return redirect()->back();
        }
    }

    // Function - Edit
    public function edit(Measurement $measurement)
    {
        return view('screens.admin.recipe.edit_measurement', compact('measurement'));
    }

    // Function - Update
    public function update(Measurement $measurement)
    {
        $data = request()->validate(
            [
                'measurement' => 'required',
            ]
        );

        $measurement->update($data);

        return redirect('/measurements_create');
    }

    // Function - Destroy
    public function destroy(Measurement $measurement)
    {
        $measurement->delete();

        return redirect('/measurements_create');
    }


    // Function - getIndex
    public function getIndex()
    {
        return view('screens.admin.recipe.add_measurement');
    }

    // Function - anyData
    public function anyData()
    {
        $measurements = Measurement::all();
        return datatables()->of($measurements)
            ->addColumn('action', function ($measurement) {
                $html = '<a href="/measurements/'.$measurement->id.'/edit" class="btn btn-sm btn-primary justify-content-end">Edit</a> ';
                $html .= '<a href="/measurements/'.$measurement->id.'/delete" class="btn btn-sm btn-danger justify-content-end">Delete</a>';                return $html;
            })->toJson();

        return Datatables::of(Measurement::query())->make(true);
    }

    // Function - ValidatedDate
    protected function validatedData()
    {
        return request()->validate(
            [
                'measurement' => "required|string|unique:measurements,measurement"
            ]
        );
    }
}
