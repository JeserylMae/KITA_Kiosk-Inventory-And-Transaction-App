<?php

namespace App\Http\Controllers\Logic;

use App\Models\User;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\RedirectResponse;
use App\Http\Requests\StoreUserRequest;

class UserController extends Controller
{
    public function index() 
    {
        $users = User::all();
        return response()->json($users);
    }

    public function me() 
    {
        return response()->json(Auth::user());
    }

    public function store(StoreUserRequest $request): RedirectResponse 
    {
        $validated = $request->validate();

        $validated['password'] = bcrypt($validated['password']);

        User::create($validated);

        return redirect()->route('user.index')->with('succcess', 'User created successfully');
    }

    public function update(StoreUserRequest $request, User $user): RedirectResponse 
    {
        $validated = $request->validate();

        if ($request->filled('password')){
            $validated['password'] = bcrypt($request->input('password'));
        }

        $user->update($validated);

        return redirect()->route('user.index')->with('success', 'User was updated successfully.');
    }

    public function destroy(User $user): RedirectResponse 
    {
        $user->delete();

        return redirect()->route('user.index')->with('success', 'User was successfully deleted.');
    }
}
