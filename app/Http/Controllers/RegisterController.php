<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class RegisterController extends Controller
{
    //

    public function registerForm() 
    {
        return view('sign-up');
    }
    
    public function register()
    {

        $user_info = $request->validate([
            'email' => ['required','email'],
            'name' => ['required'],
            'password' => ['required','regex:pattern']

        ]);

        User::create($user_info);

        // It will redirect to the uses table privileged users will  have to await the approval of the admin;
        return redirect()->route();
    }
}
