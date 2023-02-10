<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Spatie\Permission\Models\Role;
use Illuminate\Support\Facades\Hash;
use Spatie\Permission\Traits\HasRoles;
// Create new Users Controller
class RegisterController extends Controller
{
    //
    use HasRoles;

    public function registerForm() 
    {

        return view('register');
    }
    
        public function register(Request $request)
        {
            ddd($request->all());
            // Get the role you want to assign
            $role = Role::where('name', '=', $request->role)->first();

            
             $user = User::create([
                'name' => $request->name,
                'email' => $request->email,
                'role' => $request->role, // If role no defined role is user
                'location' => $request->location,
                'password' => Hash::make($request->password),
            ])->assignRole($role);
    
            if(auth()->user()->hasRole('admin')) {
                return redirect()->back();
            }
            // Assign role to user
            // $user->assignRole($role);

            Log::create([
                
                'message' => 'New user current time'

            ]);

            return redirect()->route('user.index');
    }
}
