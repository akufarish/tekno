<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    public function index()
    {
        return view("login");
    }

    public function auth(Request $request)
    {
        $user = $request->validate([
            "name" => ["required"],
            "password" => "required"
        ]);

        if (Auth::attempt($user)) {
            $request->session()->regenerate();
            return redirect()->intended("/home");
        }

        return back()->with("Error", "gagal");
    }

    public function logout(Request $request)
    {
        Auth::logout();

        request()->session()->invalidate();
        request()->session()->regenerateToken();
        return redirect("/login");
    }

    public function sukses()
    {
        return view("home");
    }
}
