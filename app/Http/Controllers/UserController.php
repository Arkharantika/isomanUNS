<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;

class UserController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        $user = Auth::user();
        // return view('user.homeuser');
        return view('user.homeuser', compact('user'));
    }

    public function prior()
    {
        $user = Auth::user();
        // return view('layouts.example');
        return view('user.homeuser', compact('user'));
    }
}
