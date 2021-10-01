<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Measurement;
use Yajra\Datatables\Datatables;

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
            return redirect()->back();
        } elseif ($request->get('action') == 'measurement_save_next') {
            return redirect()->back();
        }
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
                $html = '<a href="/categorys/'.$measurement->id.'/edit" class="btn btn-sm btn-primary justify-content-end">Edit</a> ';
                $html .= '<a href="/categorys/'.$measurement->id.'/delete" class="btn btn-sm btn-danger justify-content-end">Delete</a>';                return $html;
            })->toJson();

        return Datatables::of(Measurement::query())->make(true);
    }
}
