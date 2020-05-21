<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\komp;

class KompsController extends Controller
{
    public function index()
    {
        $komp = komp::paginate(10);
        //with('category')->get();
        //dd($post);
        return view('admin.kompetensi.index',['komp'=>$komp]);
    }
    public function cari(Request $request)
	{
		// menangkap data pencarian
		$cari = $request->cari;
 
    		// mengambil data dari table pegawai sesuai pencarian data
		$komp = DB::table('komps')
		->where('name','like',"%".$cari."%")
		->paginate();
 
    		// mengirim data pegawai ke view index
		return view('admin.kompetensi.index',['komp' => $komp]);
 
 
    }
    public function create()
    {
        $komp = komp::all();
        return view('admin.kompetensi.create', ['komp' => $komp]);
    }
    public function store(Request $request)
    {
        $this->validate($request, [
            'name' => 'required',
        ]);

        $komp = komp::create([
            'name' => $request->name,
        ]);

        return redirect('/komp');
    }
    public function edit($id)
    {
        $komp = DB::table('komps')->where('id_komp',$id)->get();
        // passing data pegawai yang didapat ke view edit.blade.php
        return view('admin.kompetensi.edit',['komp' => $komp]);
    }
    public function update(Request $request)
    {
        $this->validate($request, [
            'name' => 'required',
        ]);

        DB::table('komps')->where('id_komp',$request->id_komp)->update([
        
            'name' => $request->name,
        ]);

        //$post->update($post_data);


        return redirect('/komp');
    }
    public function destroy($id)
    {
        DB::table('komps')->where('id_komp',$id)->delete();
            
        // alihkan halaman ke halaman pegawai
        return redirect('/komp');
    }
}
