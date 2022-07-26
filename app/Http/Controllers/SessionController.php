<?php

namespace App\Http\Controllers;


use Illuminate\Validation\ValidationException;

class SessionController extends Controller
{
    public function create()
    {
        return view('session.create');
    }

    /**
     * @throws ValidationException
     */
    public function store()
    {
//        validate request
        $attributes = request()->validate([
            'email' => 'required|email',
            'password' => 'required',
        ]);

//        authenticate and login based on credentials
        if (auth()->attempt($attributes)) {
            return redirect('/')->with('success', 'Welcome Back');
        }
//        error message
        throw ValidationException::withMessages([
            'email' => 'Credentials could not be verified.'
        ]);
    }

    public function destroy()
    {
        auth()->logout();
        return redirect('/')->with('success', 'Goodbye!');
    }
}
