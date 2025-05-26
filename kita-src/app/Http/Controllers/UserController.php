<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function index() {
        $users = User::all();
        return response()->json($users);
    }

    public function store(Request $request){
        $validated = $request->validate();
        $validated['password'] = bcrypt($validated['password']);

        User::create($validated);

        return redirect()->route('user.index')->with('succcess', 'User created successfully');
    }

    public function update(Request $request, User $user) {
        // Add this to routes.
        // Route::put('/users/{user}', [UserController::class, 'update'])->name('users.update');

        $validated = $request->validate();

        if ($request->filled('password')){
            $validated['password'] = bcrypt($request->input('password'));
        }

        $user->update($validated);

        return redirect()->route('user.index')->with('success', 'User was updated successfully.');
    }

    public function destroy(User $user) {
        // Add this to routes.
        // Route::put('/users/{user}', [UserController::class, 'destroy'])->name('users.destroy');

        $user->delete();

        return redirect()->route('user.index')->with('success', 'User was successfully deleted.');
    }
}
