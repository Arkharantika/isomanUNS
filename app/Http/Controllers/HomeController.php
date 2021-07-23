<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;
use App\Models\UserData;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $role = Auth::user()->role;
        $check = UserData::where('id_user',Auth::user()->id)->first();

        if($check == null){
            $user = Auth::user();
        // return view('layouts.example');
        return view('userdata', compact('user'));
            // return view('userdata');
        }
        // $dosen = Dosen::where('nip',Auth::user()->nim)->first();
        $user = Auth::user();
        $complete = UserData::where('id_user',$user->id)->get()->first();
        return view('user.homeuser', compact('complete','user'));
        // if($role == "admin"){
        //     $user = Auth::user();
        //     // return view('layouts.example');
        //     $complete = UserData::where('id_user',$user->id);
        //     return view('user.homeuser', compact('complete','user'));
        // } else if($role == "user"){ 
        //     $user = Auth::user();
        // // return view('layouts.example');
        // return view('user.homeuser', compact('user'));
        // } else {
        //     return redirect()->to('logout');
        // }
        
    }
}
