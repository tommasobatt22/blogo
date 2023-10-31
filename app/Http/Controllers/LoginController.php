<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class LoginController extends Controller
{
    public function login(){
        return view("authors/login");
    }
    
    public function doLogin(Request $request){
        $validatedData = $request->validate([
            "email" =>["required"],
            "password" =>["required"]
        ]);

        if(Auth::attempt($validatedData)){
            $request->session()->regenerate();

            return redirect()->intended();
        }
        return back()->withErrors([
            "login" => "Error :_("
        ]);
    }

    public function register(){
        return view("authors/register");
    }

    public function doRegister(Request $request){
        $validatedData = $request->validate([
            "name" =>["required"],
            "surname" =>["required"],
            "email" =>["required", "email"],
            "password" =>["required","confirmed", "min:6"]
        ]);
        $validatedData['password'] = Hash::make($validatedData['password']);

        User::create($validatedData);

        return redirect('/');
    }
        
}
