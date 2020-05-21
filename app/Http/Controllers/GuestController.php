<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\loker;
use App\Category;
use App\User;
use Illuminate\Support\Facades\DB;

class GuestController extends Controller
{
    public function tentang(){
        
        $cat = Category::all();
       
        return view('blog.tentang', compact('cat'));
    
    }
    public function index(loker $loker)
    {
       
        $cat = Category::all();

        $dat = $loker->latest()->take(8)->get();
        return view('guest', compact('dat', 'cat'));
      
    }
    public function isi($judul){
        $cat = Category::all();

        $dat = loker::where('judul', $judul)->get();
        return view('blog.isi', compact('dat', 'cat'));

    }
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
