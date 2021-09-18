<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Mail;
use Spatie\Permission\Models\Role;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use App\Mail\InviteCreated;
use Carbon\Carbon;
use App\Models\Invite;
use App\Models\User;
use Yajra\Datatables\Datatables;

class InviteController extends Controller
{
    // Function - Index
    // Get the data from the Invite Model
    public function index()
    {
        $invites = Invite::all();
        return view('screens.admin.invite.user', compact('invites'));
    }

    // Function - Invite
    // Get the data from the Role Model
    public function invite()
    {
        $roles = Role::all();
        return view('screens.admin.invite.add', compact('roles'));
    }

    // Function - Process
    public function process(Request $request)
    {
        // Do - Condition
        // generate a random token
        do
        {
            $token = Str::random();
        }

        // While - Condition
        // Chef if the token is already present or not in the Data-Base
        while (Invite::where('token', $token)->first());

        // Create New Object
        $invite = new Invite();

        // Invite-Data Storeing - Foreign Keys
        $invite->role_id = $request->get('roles');

        // Invite-Data Storeing - User Entered
        $invite->name = $request->get('name');
        $invite->contact = $request->get('contact');
        $invite->email = $request->get('email');

        // Invite-Data Storeing - Random Genrated
        $invite->token = $token;

        // Save Data
        $invite->save();

        // Send the to correspond Mail address
        Mail::to($request->get('email'))->send(new InviteCreated($invite));

        return redirect('add_user');
    }

    // Function - Accept
    public function accept($token)
    {
        // If the token is already used its goes to 404
        if (!$invite = Invite::where('token', $token)->first())
        {
            abort(404);
        }

        // store the data
        $user = new User();

        $user->email = $invite->email;
        $user->name = false;
        $user->password = false;

        $user->save();

        // If invite is accepted get the timeline for the user updated to Data-Base
        Invite::where('email', $invite->email)
            ->where('token', $token)
            ->update(['invite_accepted_at' => Carbon::now()]); // With Carbon - for get the timestamp

        // With Role Base invite
        $role = Role::find($invite->role_id);

        // Assign the role to the user
        $user->assignRole($role->name);

        return redirect('register');
    }

    // Function - ValidateData
    protected function validatedData()
    {
        // Validation the data
        return request()->validate([
            'name' => 'required',
            'email' => 'required|email', 'required', 'string', 'unique:users',
            'user' => 'roles', 'required',
            'contact' => 'required',
        ]);
    }

    // Function - getIndex
    public function getIndex()
    {
        return view('screens.admin.invite.user');
    }

    // Function - anyData
    public function anyData()
    {
        return Datatables::of(Invite::query())->make(true);
    }
}
