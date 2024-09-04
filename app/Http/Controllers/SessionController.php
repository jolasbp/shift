<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Auth;
use Illuminate\Validation\ValidationException;

use function Laravel\Prompts\alert;

class SessionController extends Controller
{
    //Show login view
    public function create()
    {
        return view('auth.login');
    }

    //Login new user
    public function store()
    {
        $attributes = request()->validate([
            'username' => ['required'],
            'password' => ['required'],
        ]);

        if (! Auth::attempt($attributes)) {
            throw ValidationException::withMessages([
                'username' => 'Sorry, those credentials do not match.',
            ]);
        }

        request()->session()->regenerate();

        return redirect('/');
    }

    //Logout user
    public function destroy()
    {
        Auth::logout();

        return redirect('/');
    }
}
