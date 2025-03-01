<?php

namespace App\Http\Controllers\Auth;
use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class RegistrationController extends Controller
{
    public function showRegistrationForm()
    {
        return view('auth.register'); // Load registration form
    }

    public function register(Request $request)
    {
        // dd($request->all());
        // Validate input
        $request->validate([
            'full_name' => 'required|string|max:255',
            'email' => 'required|email|unique:users',
            'password' => 'required|min:6',
            'confirm_password' => 'required|min:6|same:password',
        ]);

        // Create user
        $user = User::create([
            'name' => $request->full_name,
            'email' => $request->email,
            'password' => Hash::make($request->password)
        ]);

        // Log in the new user
        // Auth::login($user);

        // Redirect to dashboard
        return redirect()->route('login');
    }

    public function logout()
    {
        Auth::logout();
        return redirect('/register');
    }

}
