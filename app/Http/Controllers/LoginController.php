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

        // $name = $request->input("name");
        // $password = $request->input("password");

        // if(empty($name) || empty($password)) {
        //     return response()->view("login", [
        //         "title" => "login",
        //         "error" => "username dan password tidak boleh kosong"
        //     ]);
        // }

        if (Auth::attempt($user)) {
            $request->session()->regenerate();
            return redirect()->intended("/dashboard");
        }

        return back()->with("Error", "gagal");

        // return response()->view("login", [
        //     "title" => "login",
        //     "error" => "kamu bukan admin"
        // ]);
    }

    public function logout(Request $request)
    {
        Auth::logout();

        request()->session()->invalidate();
        request()->session()->regenerateToken();
        return redirect("/login");
    }
}
