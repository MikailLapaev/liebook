<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class AuthController extends Controller
{
    public function registerPage()
    {
        return view('pages.register');
    }

    public function loginPage()
    {
        return view('pages.login');
    }

    public function register(Request $request)
    {
        $validated = $request -> validate([
            'name'=>'required|string|max:255',
            'email' => 'required|email|max:255|unique:users,email',
            'password'=>'required|string|min:6|max:255|confirmed'
        ]);

        $user = User::create($validated);
        auth()->login($user);

        return redirect()->route('index');
    }


    public function login(Request $request)
    {
        $validated = $request->validate([
            'email' => 'required',
            'password' => 'required'
        ]);

        if(auth()->attempt($validated)){
            return redirect()->route('index');
        }else{
            return redirect()->route('login')->withErrors(['auth' => 'Неверный логин или пароль']);
        }
    }

    public function logout()
    {
        auth()->logout();
        return redirect()->route('index');
    }
}
