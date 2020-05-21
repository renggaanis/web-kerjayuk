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

class LamaranController extends Controller
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
        return view('lamaran.index',['lamaran'=>$lamaran, 'category_widget' => $category_widget,
        'loker' => $loker]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $komp = komp::all();
        $exp = experience::all();
        $pendidikan = pendidikan::all();
        $user = User::all();
        $category = Category::all();
        $kabupaten = kabupaten::all();
        $loker = loker::all();

        $category_widget = Category::all();

        return view('lamaran.create', compact( 'category_widget','user',
        'category','kabupaten','pendidikan', 'exp', 'komp', 'loker'));
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
            'name' => 'required',
            'id_komp' => 'required',
            'id_loker' => 'required',
            'id_exp' => 'required',
            'id_pendidikan' => 'required',
            'id_category' => 'required',
            'id_kabupaten' => 'required',
            'jenis_kelamin' => 'required',
            'tempat_lahir' => 'required',
            'tanggal_lahir' => 'required',
            'agama' => 'required',
            'posisi' => 'required',
            'essay' => 'required',
            'jurusan' => 'required',
            'alamat' => 'required',
            'telepon' => 'required',
            'foto' => 'required',
            


        ]);

        $foto = $request->foto;
        $new_foto = time().$foto->getClientOriginalName();
        
        $lamaran = lamaran::create([
            'name' => $request->name,
            'id_komp' => $request->id_komp,
            'id_exp' => $request->id_exp,
            'id_loker' => $request->id_loker,
            'id_pendidikan' => $request->id_pendidikan,
            'id_category' => $request->id_category,
            'id_kabupaten' => $request->id_kabupaten,
            'jenis_kelamin' => $request->jenis_kelamin,
            'tempat_lahir' => $request->tempat_lahir,
            'tanggal_lahir' => $request->tanggal_lahir,
            'agama' => $request->agama,
            'posisi' => $request->posisi,
            'essay' => $request->essay,
            'jurusan' => $request->jurusan,
            'alamat' => $request->alamat,
            'telepon' => $request->telepon,
            'foto' => 'public/ulpoad/user/'.$new_foto,
            'id' => Auth::id()
  
        ]);

        $foto->move('public/ulpoad/user/', $new_foto);

        return redirect()->route('lamaran.success');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function success()
    {
        $category_widget = Category::all();
        $loker = loker::all();
        return view('lamaran.succes',[ 'category_widget' => $category_widget,
        'loker' => $loker]);
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
