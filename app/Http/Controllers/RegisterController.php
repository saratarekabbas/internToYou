<?php

namespace App\Http\Controllers;
use App\Models\User;
use Illuminate\Http\Request;

class RegisterController extends Controller
{
    public function create()
    {
        return view('register.create');
    }

    public function store()
    {
//       Validation
        $attributes = request()->validate([
            'name' => 'required|max:255',
            'username' => 'required|max:255|min:8|unique:users,username',
            'email' => 'required|email|max:255|unique:users,email',
            'password' => 'required|min:7|max:255',
        ]);

        $attributes['password'] = bcrypt($attributes['password']);

        User::create($attributes);

        session()->flash('success', 'Your account has been successfully created');

        return redirect('/');
    }
}
