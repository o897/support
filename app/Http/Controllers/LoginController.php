<?php

namespace App\Http\Controllers;
use Laravel\Socialite\Facades\Socialite;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\User;

class LoginController extends Controller
{

    public function loginForm()
    {
        return view('login');
    }

    public function authenticate(Request $request)
    {

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


public function redirectToFacebook()
{
    return Socialite::driver('facebook')->redirect();
}

public function handleFacebookCallback()
{
    $user = Socialite::driver('facebook')->user();

    $existingUser = User::where('email', $user->email)->first();

    if ($existingUser) {
        Auth::login($existingUser);
    } else {
        $newUser = new User();
        $newUser->name = $user->name;
        $newUser->email = $user->email;
        $newUser->password = bcrypt(str_random(16));
        $newUser->save();
        Auth::login($newUser);
    }

    return redirect('/user');
}
}
