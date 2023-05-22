<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class loginController extends Controller
{
    public function index()
    {
        $user =  User::all();
        return view('login',compact(['user']));
    }

    public function authenticate(Request $request)
    {
        $credentials = $request->validate([
            'email' => 'required|email:dns',
            'password' => 'required|min:5'
        ]);

        if(Auth::attempt($credentials)){
            if (auth()->user()->is_admin == 0) {
                $request->session()->regenerate();
                return redirect()->intended('/landing');
            }else {
                $request->session()->regenerate();
                return redirect()->intended('/dashboard');
            }

        }
        return back()->with('loginError','Login failed');
    }

    public function logout(Request $request)
    {
        Auth::logout();

        request()->session()->invalidate();

        request()->session()->regenerateToken();

        return redirect('/landing');
    }
}
