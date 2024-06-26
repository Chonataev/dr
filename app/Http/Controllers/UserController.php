<?php
namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function index()
    {
        $users = User::all();
        return view('admin.users.index', compact('users'));
    }

    public function show(User $user)
    {
        return view('users.show', compact('user'));
    }

    public function edit(User $user)
    {
        return view('admin.users.edit', compact('user'));
    }

    public function update(Request $request, User $user)
    {
        $request->validate([
            'role' => 'required|integer',
            'status' => 'required|boolean',
        ]);

        $user->update([
            'role' => $request->role,
            'status' => $request->status,
        ]);

        return redirect()->route('users.index')->with('success', 'Колдонуучу ийгиликтүү жаңыртылды!');
    }

    public function destroy(User $user)
    {
        $user->delete();

        return redirect()->route('users.index')->with('success', 'Колдонуучу ийгиликтүү жок кылынды!');
    }
}
