<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

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
        $auth_ = Auth::user();

        // pr($auth_->email);

        return view('home', array("name" => $auth_->name, "id" => $auth_->id ));
    }

    public function lugas()
    {
        $auth_ = Auth::user();
        return view('home', array("name" => $auth_->name, "id" => "x" ));
    }

}
