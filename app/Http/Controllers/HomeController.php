<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;



class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
       // $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $user_id = auth()->user()->id;
        $user = User::find($user_id);
        return view('home')->with('posts',$user->posts)->with('laptop',$user->laptops)->with('phone',$user->phones)->with('tablet',$user->tablets)->with('periferiaka',$user->periferiakas);
       
    }

  

    public function refreshCaptcha()
    {
        return response()->json(['captcha' => captcha_img()]);
    }

    

}
