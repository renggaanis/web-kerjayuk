<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class amdController extends Controller
{
    public function index()
    {
        return view('admin.homeadmin');
    }
}