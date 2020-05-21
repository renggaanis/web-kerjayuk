<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\kabupaten;
use App\provinsi;

class KabupatenController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $kabupaten = kabupaten::paginate(10);
        
        return view('admin.kabupaten.index',['kabupaten'=>$kabupaten]);
    }
    public function cari(Request $request)
	{
        $provinsi = provinsi::all();
		$kabupaten = $kabupaten = kabupaten::where('kabupaten', $request->cari)->orWhere('kabupaten','like','%'.$request->cari.'%')->paginate(10);
        return view('admin.kabupaten.index',['kabupaten' => $kabupaten, 'provinsi' => $provinsi]);
 
	}

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $provinsi = provinsi::all();
        return view('admin.kabupaten.create', ['provinsi' => $provinsi]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request, [
            'kabupaten' => 'required',
            'id_provinsi' => 'required',
            
        ]);
        
        $kabupaten = kabupaten::create([
            'kabupaten' => $request->kabupaten,
            'id_provinsi' => $request->id_provinsi,
        ]);
        
        return redirect('/kabupaten');
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
        $provinsi = provinsi::all();
        $kabupaten = DB::table('kabupatens')->where('id_kabupaten',$id)->get();
        // passing data pegawai yang didapat ke view edit.blade.php
        return view('admin.kabupaten.edit',['kabupaten' => $kabupaten , 'provinsi' => $provinsi]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request)
    {
        $this->validate($request, [
            'kabupaten' => 'required',
            'id_provinsi' => 'required',
        ]);

        DB::table('kabupatens')->where('id_kabupaten',$request->id_kabupaten)->update([
            'kabupaten' => $request->kabupaten,
            'id_provinsi' => $request->id_provinsi,
           
        ]);

        return redirect('/kabupaten');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        DB::table('kabupatens')->where('id_kabupaten',$id)->delete();
            
        // alihkan halaman ke halaman pegawai
        return redirect('/kabupaten');
    }
}
