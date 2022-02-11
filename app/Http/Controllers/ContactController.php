<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Contact;
use Illuminate\Support\Facades\Mail;

class ContactController extends Controller
{

    public function contactUs()
    {
        return view('contactUs');
    }
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'email' => 'required|email',
            'phone' => 'required|digits:10|numeric',
            'message' => 'required',
        ]);
        $input = $request->all();

        Contact::create($input);
        //  Send mail to admin
        Mail::send('contactMail', array(
            'name' => $input['name'],
            'email' => $input['email'],
            'phone' => $input['phone'],
            'message' => $input['message'],
        ), function($message) use ($request){
            $message->from($request->email);
            $message->to('admin@mindzapp.in', 'Admin')->message($request->get('message'));
        });
        return view('/');
    }
}
