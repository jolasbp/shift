<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Validation\Rules\File;
use Illuminate\Validation\Rules\Password;

class RegisteredUserController extends Controller
{
    //Show register view
    public function create()
    {
        return view('auth.register');
    }

    //Save new user to db
    public function store(Request $request)
    {
        //Validate
        $userAttributes = $request->validate([
            'username' => ['required'],
            'email' => ['required', 'email', 'unique:users,email'],
            'password' => ['required', 'confirmed', Password::min(6)]
        ]);

        $authorAttributes = $request->validate([
            'author' => ['required'],
            'avatar' => ['required', File::types(['png', 'jpg', 'webp'])]
        ]);

        $user = User::create($userAttributes);

        $avatarPath = $request->avatar->store('avatars');

        $user->author()->create([
            'name' => $authorAttributes['author'],
            'avatar' => $avatarPath
        ]);

        Auth::login($user);

        return redirect('/');
    }
}
