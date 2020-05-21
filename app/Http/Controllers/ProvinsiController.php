<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\provinsi;

class ProvinsiController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $provinsi = provinsi::paginate(10);
        //with('category')->get();
        //dd($post);
        return view('admin.provinsi.index',['provinsi'=>$provinsi]);
    }

    public function cari(Request $request)
	{
		// menangkap data pencarian
		$cari = $request->cari;
 
    		// mengambil data dari table pegawai sesuai pencarian data
		$provinsi = DB::table('provinsis')
		->where('provinsi','like',"%".$cari."%")
		->paginate();
 
    		// mengirim data pegawai ke view index
		return view('admin.provinsi.index',['provinsi' => $provinsi]);
 
 
	}

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $provinsi = provinsi::all();
        return view('admin.provinsi.create', ['provinsi' => $provinsi]);
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
            'provinsi' => 'required',
        ]);

        $provinsi = provinsi::create([
            'provinsi' => $request->provinsi,
        ]);

        return redirect('/provinsi');
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
        $provinsi = DB::table('provinsis')->where('id_provinsi',$id)->get();
        // passing data pegawai yang didapat ke view edit.blade.php
        return view('admin.provinsi.edit',['provinsi' => $provinsi]);
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
            'provinsi' => 'required',
        ]);

        DB::table('provinsis')->where('id_provinsi',$request->id_provinsi)->update([
        
            'provinsi' => $request->provinsi,
        ]);

        //$post->update($post_data);


        return redirect('/provinsi');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        DB::table('provinsis')->where('id_provinsi',$id)->delete();
            
        // alihkan halaman ke halaman pegawai
        return redirect('/provinsi');
    }
}
