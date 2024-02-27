<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;

class PageController extends Controller
{
    public function informasi()
    {
        if (Auth::check()) {
            // Guest view
            return view('user.informasi');
        } else {
            // Authenticated user view
            return view('guest.informasi');
        }
    }
    public function beranda()
    {
        if (Auth::check()) {
            return view('user.beranda');
        } else {
            return view('guest.beranda');
        }
    }
    public function admindashboard()
    {
        return view('/admin/admindashboard');
    }
}