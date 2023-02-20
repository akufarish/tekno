<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use App\Models\User;

class RegisterController extends Controller
{
    public function index()
    {
        return view("register");
    }

    public function store(Request $request)
    {
        $validasi = $request->validate([
            "name" => "required|max:255",
            "password" => "required",
        ]);

        $validasi["password"] = Hash::make($validasi["password"]);

        User::create($validasi);
        return redirect("/login")->with("success", "berhasil");
    }

}
