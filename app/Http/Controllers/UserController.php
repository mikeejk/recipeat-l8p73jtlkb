<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{

    public function createstep1(Request $request)
    {
        $user = $request->session()->get('user');
        return view('auth.register1', compact('user'));
    }

    public function poststep1(Request $request)
    {
        $validatedData = $request->validate([
            'name' => 'required',
        ]);

        if (empty($request->session()->get('user'))) {
            $user = new User();
            $user->fill($validatedData);
            $request->session()->put('user', $user);
        } else {
            $user = $request->session()->get('user');
            $user->fill($validatedData);
            $request->session()->put('user', $user);
        }
        return redirect('/register2');
    }

    public function createstep2(Request $request)
    {
        $user = $request->session()->get('user');
        return view('auth.register2', compact('user'));
    }

    public function poststep2(Request $request)
    {
        $validatedData = $request->validate([
            'diets' => 'nullable',
            'cusinies' => 'nullable',
        ]);
        $user = $request->session()->get('user');
        $user->fill($validatedData);
        $request->session()->put('user', $user);
        return redirect('/register3');
    }


    public function createstep3(Request $request)
    {
        $user = $request->session()->get('user');
        return view('auth.register3', compact('user'));
    }

    public function poststep3(Request $request)
    {
        $validatedData = $request->validate([
            'gender' => 'nullable',
            'cooking_level' => 'nullable',
        ]);
        $user = $request->session()->get('user');
        $user->fill($validatedData);
        $request->session()->put('user', $user);
        return redirect('/register4');
    }

    public function createstep4(Request $request)
    {
        $user = $request->session()->get('user');

        return view('auth.register4', compact('user'));
    }

    public function registerData(Request $request)
    {
        // $password = request('password');
        // $hashed = Hash::make($password);


        $user1 = new User();
        $user1->email = $request->get('email');
        $password = $request->get('password');
        $user1->password = Hash::make($password);

        $user = $request->session()->get('user');
        // $user->fill($personArray);
        $user->fill(array('email'=> $user1->email,'password'=>$user1->password));
        $request->session()->put('user', $user);
        $user->save();
        // dd($user);
        $request->session()->forget('user');

        // $product = $request->session()->get('product');
        // $product->save();

        // $request->session()->forget('product');

        return redirect('/email/verify');
    }

}
