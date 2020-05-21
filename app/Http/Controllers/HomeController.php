<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;

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
        return view('home');
    }
    public function adminHome()
    {
        return view('company.home');
    }
    public function user()
    {
        return view('blog');
    }
    public function amd()
    {
        return view('admin.homeadmin');
    }
    public function approval()
    {
        return view('approval');
    }

    
}
