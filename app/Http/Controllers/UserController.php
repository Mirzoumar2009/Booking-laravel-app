<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function index()
    {
        $users = User::all();
        return view('users.index', compact('users'));
    }


    public function create()
    {
        return view('users.create');
    }


    public function store(Request $request)
    {
        $validated = $request->validate([
            'name' => 'required|string|max:23',
            'email' => 'required|min:12|max:250|email',
            'password' => 'required|min:6',

        ]);
        //$post = $request->all();
        User::create($validated);
        return redirect()->route('user.index');
        /*dd($post);*/
    }

    public function show(User $user)
    {
        return view('users.show', compact('user'));
    }


    public function edit(User $user)
    {
        return view('users.edit', compact('user'));
    }

    public function update(Request $request, User $user)
    {
        $validate = $request->validate([
            'name' => 'required|string|max:23',
            'email' => 'required|min:12|max:250|email',
            'password' => 'required|min:6',
        ]);
        $user->update($validate);
        return redirect()->route('user.index')->with('success');
    }



    public function destroy(User $user)
    {
        $user->delete();
        return redirect()->route('user.index');
    }
}
