<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class AuthController extends Controller
{
    public function register()
    {
        return view('register');
    }

    public function registerPost(Request $request)
    {
        $user = new User();

        $user->name = $request->name;
        $user->email = $request->email;
        $user->level = "user";
        $user->password = Hash::make($request->password);

        $user->save();

        return redirect('login')->with('success', 'Register successfully');
    }

    public function login()
    {
        return view('login');
    }

    public function loginPost(Request $request)
    {
        $credetials = [
            'email' => $request->email,
            'password' => $request->password,
        ];

        if (Auth::attempt($credetials)) {
            $user = Auth::user();

            if ($user->level == 'user') {
                return redirect('/home')->with('success', 'Login berhasil');
            } elseif ($user->level == 'admin') {
                return redirect('/admindashboard')->with('success', 'Login berhasil sebagai admin');
            }
        }

        return redirect('login')->with('error', 'Email or Password salah');
    }

    public function logout()
    {
        Auth::logout();

        return redirect('login')->with('success', 'login berhasil');
    }
    public function logoutAd()
    {
        Auth::logout();

        return redirect('login')->with('success', 'login berhasil');
    }
}