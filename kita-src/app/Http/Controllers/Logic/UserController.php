<?php

namespace App\Http\Controllers\Logic;

use Exception;
use App\Models\User;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\RedirectResponse;
use App\Http\Requests\StoreUserRequest;
use Illuminate\Support\Facades\Log;
use Illuminate\Foundation\Auth\User as Authenticatable;


class UserController extends Controller
{
    public function index() 
    {
        $users = User::all();
        
        return response()->json([
            'message' => 'Users retrieved successfully',
            'users' => $users
        ]);
    }

    public function me() { return response()->json(Auth::user()); }

    public function store(StoreUserRequest $request) 
    {
        $validated = $request->validated();
        $validated['password'] = bcrypt($validated['password']);

        $user = User::create($validated);

        return response()->json([
            'message' => 'User created successfully',
            'user' => $user
        ], 201);
    }

    public function update(StoreUserRequest $request, User $user) 
    {
        $validated = $request->validated();

        if ($request->filled('password')){
            $validated['password'] = bcrypt($request->input('password'));
        }
        $user->update($validated);

        return response()->json([
            'message' => 'User updated successfully',
            'user' => $user
        ]);
    }

    public function destroy(User $user) 
    {
        $user->delete();

        return response()->json([
            'message' => 'User deleted successfully'
        ]);
    }
}
