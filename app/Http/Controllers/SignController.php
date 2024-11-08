<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Http\RedirectResponse;

class SignController extends Controller
{
    public function signin()
    {
        return view("signin");
    }
    public function authenticate(Request $request): RedirectResponse
    {
        $credentials = $request->validate([
            "email" => "required|email",
            "password" => "required|min:8|max:12",
        ]);

        if (Auth::attempt($credentials)) {
            $request->session()->regenerate();
            return redirect()->intended("home");
        }

        return back()->withErrors([
            "email"=> "The provided credentials do not match our records.",
        ])->onlyInput("email");
    }

    public function signup()
    {
        return view("signup");
    }

    public function create(Request $request): RedirectResponse
    {
        $create_user = User::create([
            "name"=> $request->name,
            "username"=> $request->username,
            "email"=> $request->email,
            "password"=> Hash::make($request->password),
        ]);

        if ($create_user) {
            $create_user->save();
            return redirect("/sign-in");
        }

        return redirect("/sign-in");   
    }
}
