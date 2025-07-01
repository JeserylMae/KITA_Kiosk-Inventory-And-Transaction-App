<?php

namespace App\Http\Controllers\Auth;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Http\Requests\StoreUserRequest;
use App\Traits\HandlesEmailVerification;
use App\Http\Controllers\Logic\UserController;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;

class AuthController extends Authenticatable implements MustVerifyEmail
{
    public function __construct()
    {
        $this->user = new UserController();
    }

    /**
     * Handle the incoming request.
     */
    public function signup(StoreUserRequest $request)
    {
        $response = $this->user->store($request);
        $data = $response->getData();
        $userId = $data->user->id;
        
        Auth::LoginUsingId($userId);

        // $user = User::find($userId);
        // $user->sendEmailVerificationNotification();
        // To send a verification email, ensure your mail configuration is set up correctly in the .env file:
        // MAIL_MAILER=smtp
        // MAIL_HOST=smtp.mailtrap.io
        // MAIL_PORT=2525
        // MAIL_USERNAME=your_username
        // MAIL_PASSWORD=your_password
        // MAIL_ENCRYPTION=null
        // MAIL_FROM_ADDRESS=no-reply@example.com
        // MAIL_FROM_NAME="${APP_NAME}"
        
        return back()->with('success', 'User created successfully');
    }

    public function login(Request $request)
    {
        $credentials = $request->only('email', 'password');

        if (Auth::attempt($credentials)) {
            return redirect()->intended('dashboard')->with('success', 'Login successful');
        }

        return back()->withErrors(['email' => 'Invalid credentials'])->withInput();
    }

    public function logout(Request $request)
    {
        Auth::logout();

        $request->session()->invalidate();
        $request->session()->regenerateToken();

        return redirect()->route('login')->with('success', 'Logged out successfully');
    }
}