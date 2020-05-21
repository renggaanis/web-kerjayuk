<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\pencari_kerja;
use App\User;
use App\kabupaten;
use App\Category;
use App\pendidikan;
use App\experience;
use App\komp;
use App\lamaran;
use App\loker;
use Auth;
use Illuminate\Support\Facades\DB;

class KelolaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $category_widget = Category::all();
        $loker = loker::all();
        $lamaran = lamaran::paginate(10);
        return view('admin.kelola.index',['lamaran'=>$lamaran, 'category_widget' => $category_widget,
        'loker' => $loker]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
  
    public function lamaran($id){
        
        $data = lamaran::where('id_lamaran', $id)->get();
        return view('admin.kelola.lamaran', compact('data'));

    }
    public function balas($id){
        
        $data = lamaran::where('id_lamaran', $id)->get();
        return view('admin.kelola.balas', compact('data'));

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
