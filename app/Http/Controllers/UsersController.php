<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;

class UsersController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index() {

        $users = User::orderBy('name', 'asc')->get();

        return view('users.index', compact('users'));
    }

    public function show(User $user) {

        return view('users.show', compact('user'));
    }

    public function edit(User $user) {
        if (auth()->user()->getAuthIdentifier() == $user->id)
            return view('users.edit', compact('user'));
        else
            return view('accessDenied');
    }

    public function update() {
        $this->validate(request(), [
            'name' => 'required|min:3|max:255',
            'surname' => 'max:255',
            'address' => 'max:255',
            'phone' => 'max:255',
            'email' => 'required|email|max:255|unique:users',
//            'password' => 'required|min:6|confirmed',
        ]);

        User::updated(request(['name', 'surname', 'address', 'phone', 'email']));

        return redirect('/users');
    }
}
