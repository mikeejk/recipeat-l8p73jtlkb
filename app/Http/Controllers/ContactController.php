<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Contact;
use Illuminate\Support\Facades\Mail;

class ContactController extends Controller
{

    public function index()
    {
// $contacts = Contact::all();
        return view('contactUs');
    }
     // Function - Create
    public function create()
    {
         return view('contactUs');
    }
    public function store(Request $request)
    {   $this->ValidatedData();
            $contact = new Contact;
            $contact->name = $request->get('name');
            $contact->email = $request->get('email');
            $contact->phone = $request->get('phone');
            $contact->message = $request->get('message');;
            $contact->save();
        // return redirect('/contactUs');
    }
    protected function validatedData()
    {
        return request()->validate(
            [
                    'name'=>'required',
                    'email'=>'required',
                    'phone'=>'required',
                    'message'=>'required',

             ]
        );
    }
}
