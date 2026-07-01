<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function index()
    {
        $users = User::latest()->paginate(10);

        return view('users.index', compact('users'));
    }

    public function edit(User $user)
    {
        return view('users.edit', compact('user'));

    }

    public function update(Request $request, User $user)
    {
        $validated = $request->validate([
        'name'  => 'required|max:255',
        'email' => 'required|email',
        'role'  => 'required|in:super_admin,seller,customer',
    ]);

    $user->update($validated);

        return redirect()
        ->route('users.index')
        ->with('success', 'User berhasil diperbarui.');
    }
}