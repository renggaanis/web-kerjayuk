<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class CategoryController extends Controller
{
    public function index()
    {
        $categories = DB::table('categories')->paginate(10);
 
    	// mengirim data pegawai ke view index
    	return view('admin.category.index',['categories' => $categories]);
 
    }
    public function create()
    {
        return view('admin.category.create');
    }
    public function cari(Request $request)
	{
		// menangkap data pencarian
		$cari = $request->cari;
 
    		// mengambil data dari table pegawai sesuai pencarian data
		$categories = DB::table('categories')
		->where('nama','like',"%".$cari."%")
		->paginate();
 
    		// mengirim data pegawai ke view index
        return view('admin.category.index',['categories' => $categories]);
 
	}
    public function store(Request $request)
    {
        DB::table('categories')->insert([
            'nama' => $request->nama,
            
        ]);

        return redirect('/categories');
    }
    public function edit($id_category)
    {
        $categories = DB::table('categories')->where('id_category',$id_category)->get();
        // passing data pegawai yang didapat ke view edit.blade.php
        return view('admin.category.edit',['categories' => $categories]);
  
    }

    
    public function update(Request $request)
    {
        DB::table('categories')->where('id_category',$request->id_category)->update([
            'nama' => $request->nama,
            
        ]);

        return redirect('/categories');
    }
    public function destroy ($id)
    {
        DB::table('categories')->where('id_category',$id)->delete();
            
        // alihkan halaman ke halaman pegawai
        return redirect('/categories');
    }
}
