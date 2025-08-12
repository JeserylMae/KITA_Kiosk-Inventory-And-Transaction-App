<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Http\Requests\StoreUserRequest;

class AuthController extends Controller
{
    /**
     * Handle the incoming register request.
     */
    public function signup(StoreUserRequest $request)
    {        
        $validated = $request->validated();
        $validated['password'] = bcrypt($validated['password']); 

        $user = User::create($validated);

        Auth::LoginUsingId($user->id);
        
        return back()->with('success', 'Congratulations! Your account has been created. Thank you for joining us.');
    }

    public function login(Request $request)
    {
        $credentials = $request->only('email', 'password');

        if (Auth::attempt($credentials)) {
            return redirect()->intended('dashboard')->with('success', 'Logged in successfully.');
        }

        return back()->withErrors([
            'login' => 'Login failed. Please check your email and password then try again.'
        ])->withInput();
    }

    public function logout(Request $request)
    {
        Auth::logout();

        $request->session()->invalidate();
        $request->session()->regenerateToken();

        return redirect()->route('login')->with('success', 'Logged out successfully');
    }
}