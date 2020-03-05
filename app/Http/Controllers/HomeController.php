<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use App\Crop;
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
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $user_id = auth()->user()->id;
        $user = user::find($user_id);
        return view('farmer/home')->with('crop',$user->crop);
    }
    
}
