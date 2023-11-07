<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{
    //

    public function login()
    {
        return view('user.login');
    }

        // validator helper function not working
        // validator( request()->all(),[
        //     'email' => ['required','email'],
        //     'password' => ['required'],
        // ]);
    public function doLogin(Request $request)
    {
        $validatedData = $request->validate([
            'email' => ['required', 'email'],
            'password' => ['required'],
        ]);

        if (auth()->attempt($validatedData)) {
            return redirect('/');
        }
        return redirect()->route('login')->with(['err'=>'Invalid Credentials']);
    }


    public function register()
    {
        return view('user.register');
    }

    public function doRegister(Request $request)
    {
        $request->validate([
            'name' => ['required'],
            'email' => ['required', 'email'],
            'password' => ['required'],
        ]);

        $user = User::create([
            'name' => $request->input('name'),
            'email' => $request->input('email'),
            'password' =>Hash::make($request->input('password')),
        ]);
        return view('user.login');
    }

    public function logout()
    {   
        auth()->logout();
        return redirect('/login');
    }

}
