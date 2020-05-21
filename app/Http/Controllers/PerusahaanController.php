<?php

namespace App\Http\Controllers;

use App\loker;
use App\kabupaten;
use App\Category;
use App\pendidikan;
use App\gaji;
use App\sistem;
use Auth;
use App\User;
use App\experience;
use App\komp;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;
use Illuminate\Http\Request;

class PerusahaanController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function home()
    {
        return view('company.home');
    }

    public function index()
    {
        $loker = Auth::user()->loker()->paginate(10);
        return view('company.index',['loker'=>$loker]);

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $kabupaten = kabupaten::all();
        $komp = komp::all();
        $exp = experience::all();
        $pendidikan = pendidikan::all();
        $gaji = gaji::all();
        $sistem = sistem::all();
        $Category = Category::all();
        return view('company.create',
        ['Category' => $Category, 'pendidikan' => $pendidikan,
        'gaji' => $gaji, 'sistem' => $sistem, 'exp' => $exp, 'komp' => $komp, 'kabupaten' => $kabupaten]);
    }

    public function cari(Request $request)
	{
        $kabupaten = kabupaten::all();
        $komp = komp::all();
        $exp = experience::all();
        $pendidikan = pendidikan::all();
        $gaji = gaji::all();
        $sistem = sistem::all();
        $Category = Category::all();

		$loker = $loker = loker::where('judul', $request->cari)->orWhere('judul','like','%'.$request->cari.'%')->paginate(10);
        return view('company.index',['loker' => $loker, 'Category' => $Category,
         'pendidikan' => $pendidikan,
        'gaji' => $gaji, 'sistem' => $sistem, 'exp' => $exp, 'komp' => $komp, 'kabupaten' => $kabupaten ]);
 
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
            'judul' => 'required',
            'id_exp' => 'required',
            'id_kabupaten' => 'required',
            'id_komp' => 'required',
            'id_category' => 'required',
            'id_pendidikan' => 'required',
            'id_gaji' => 'required',
            'id_sistem' => 'required',
            'content' => 'required',
            'gambar' => 'required',

        ]);
        
        $gambar = $request->gambar;
        $new_gambar = time().$gambar->getClientOriginalName();
        
        $loker = loker::create([
            'judul' => $request->judul,
            'id_exp' => $request->id_exp,
            'id_kabupaten' => $request->id_kabupaten,
            'id_komp' => $request->id_komp,
            'id_category' => $request->id_category,
            'id_pendidikan' => $request->id_pendidikan,
            'id_gaji' => $request->id_gaji,
            'id_sistem' => $request->id_sistem,
            'content' => $request->content,
            'gambar' => 'public/ulpoad/post/'.$new_gambar,
            'id' => Auth::id()
        ]);
        
        
        $gambar->move('public/ulpoad/post/', $new_gambar);

        return redirect('/comp');
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
        $kabupaten = kabupaten::all();
        $komp = komp::all();
        $exp = experience::all();
        $pendidikan = pendidikan::all();
        $gaji = gaji::all();
        $sistem = sistem::all();
        $Category = Category::all();

        $loker = DB::table('lokers')->where('id_loker',$id)->get();
        // passing data pegawai yang didapat ke view edit.blade.php
        return view('company.edit',['loker' => $loker , 'Category' => $Category,
         'pendidikan' => $pendidikan,
        'gaji' => $gaji, 'sistem' => $sistem, 'exp' => $exp,
         'komp' => $komp, 'kabupaten' => $kabupaten]);
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
            'judul' => 'required',
            'id_exp' => 'required',
            'id_kabupaten' => 'required',
            'id_komp' => 'required',
            'id_category' => 'required',
            'id_pendidikan' => 'required',
            'id_gaji' => 'required',
            'id_sistem' => 'required',
            'content' => 'required',
            'gambar' => 'required'
        ]);
        $gambar = $request->gambar;
        $new_gambar = time().$gambar->getClientOriginalName();
        $gambar->move('public/upload/post/', $new_gambar);

        DB::table('lokers')->where('id_loker',$request->id_loker)->update([
            'judul' => $request->judul,
            'id_exp' => $request->id_exp,
            'id_kabupaten' => $request->id_kabupaten,
            'id_komp' => $request->id_komp, 
            'id_category' => $request->id_category,
            'id_pendidikan' => $request->id_pendidikan,
            'id_gaji' => $request->id_gaji,
            'id_sistem' => $request->id_sistem,
            'content' => $request->content,
            'gambar' => 'public/upload/post/'.$new_gambar,
           
        ]);
       
        //$post->update($post_data);
        return redirect('/comp');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        DB::table('lokers')->where('id_loker',$id)->delete();
            
        // alihkan halaman ke halaman pegawai
        return redirect('/comp');
    }
}
