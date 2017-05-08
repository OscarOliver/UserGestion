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

    public function update(Request $request) {

        if (auth()->user()->getAuthIdentifier() != $request->user_id)
            return view('accessDenied');

        $this->validate(request(), [
            'name' => 'required|min:3|max:255',
            'surname' => 'max:255',
            'address' => 'max:255',
            'phone' => 'max:255',
            'email' => 'required|email|max:255',
//            'password' => 'required|min:6|confirmed',
        ]);

        $user = User::findOrFail($request->user_id);

        if ($request->input('name'))
            $user->name = $request->name;
        if ($request->input('surname'))
            $user->surname = $request->surname;
        if ($request->input('address'))
            $user->address = $request->address;
        if ($request->input('phone'))
            $user->phone = $request->phone;
        if ($request->input('email'))
            $user->email = $request->email;

        $user->save();

        return redirect('/users/' . $user->id);
    }
}
