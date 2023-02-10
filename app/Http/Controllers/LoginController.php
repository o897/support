<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\User;

class LoginController extends Controller
{
    //

    public function loginForm()
    {
        return view('login');
    }

    public function authenticate(Request $request)
    {
        // dd($request->all());

        $credentials = $request->validate([
            'email' => ['required','email'],
            'password' => ['required']
        ]);

        if(Auth::attempt($credentials)) {
            // Admin role: 2 , Agent role: 1 , User role: 0
            if (auth()->user()->hasRole('admin')) 
            {
              $request->session()->regenerate();
              return redirect()->route('admin.index');

            } elseif (auth()->user()->hasRole('agent')) {

              $request->session()->regenerate();
              return redirect()->route('agent.index');

            } elseif (auth()->user()->hasRole('user')) {

                $request->session()->regenerate();
                return redirect()->route('user.index');

            }

        }
        
        dd("Wrong password");


        return back()->withErrors([
            'email' => 'The provided credentails do not match our records.',
        ])->onlyInput('email');
    }


    public function logout(Request $request)
    {
        Auth::logout();

        $request->session()->invalidate();

        $request->session()->regenerateToken();

        return redirect('/');
    }
}
