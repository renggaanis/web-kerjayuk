<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;
use App\komp;
use App\loker;
use App\Category;
use App\pencari_kerja;
use App\User;
use App\kabupaten;
use App\pendidikan;
use App\experience;
use Illuminate\Support\Facades\DB;

class cvController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function index(){

        $category_widget = Category::all();
        $pencari_kerja = Auth::user()->pencari_kerja()->paginate(10);
        return view('cv.index',['pencari_kerja'=>$pencari_kerja, 'category_widget' => $category_widget]);
    
    }
    
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(loker $loker)
    {
        $komp = komp::all();
        $exp = experience::all();
        $pendidikan = pendidikan::all();
        $user = User::all();
        $category = Category::all();
        $kabupaten = kabupaten::all();

        $category_widget = Category::all();

        $data = $loker->latest()->take(8)->get();
        return view('cv.create', compact('data', 'category_widget','user',
        'category','kabupaten','pendidikan', 'exp', 'komp'));
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
            'fname' => 'required',
            'lname' => 'required',
            'id_komp' => 'required',
            'id_exp' => 'required',
            'id_pendidikan' => 'required',
            'id_category' => 'required',
            'id_kabupaten' => 'required',
            'jenis_kelamin' => 'required',
            'tempat_lahir' => 'required',
            'tanggal_lahir' => 'required',
            'agama' => 'required',
            'foto' => 'required',


        ]);

        $foto = $request->foto;
        $new_foto = time().$foto->getClientOriginalName();
        
        $pencari_kerja = pencari_kerja::create([
            'fname' => $request->fname,
            'lname' => $request->lname,
            'id_komp' => $request->id_komp,
            'id_exp' => $request->id_exp,
            'id_pendidikan' => $request->id_pendidikan,
            'id_category' => $request->id_category,
            'id_kabupaten' => $request->id_kabupaten,
            'jenis_kelamin' => $request->jenis_kelamin,
            'tempat_lahir' => $request->tempat_lahir,
            'tanggal_lahir' => $request->tanggal_lahir,
            'agama' => $request->agama,
            'foto' => 'public/ulpoad/user/'.$new_foto,
            'id' => Auth::id()
  
        ]);

        $foto->move('public/ulpoad/user/', $new_foto);

        return redirect()->route('cv.create')->with('success', 'Data anda berhasil disimpan,
        silahkan lanjutkan pencarian lowongan kerja sesuai minat anda');
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
        $komp = komp::all();
        $exp = experience::all();
        $pendidikan = pendidikan::all();
        $category = Category::all();
        $kabupaten = kabupaten::all();

        $category_widget = Category::all();

        $pencari_kerja = DB::table('pencari_kerjas')->where('id_pencari',$id)->get();
        return view('cv.edit',['pencari_kerja' => $pencari_kerja ,
         'category' => $category, 'kabupaten' => $kabupaten,   
          'pendidikan' => $pendidikan, 'exp' => $exp, 'komp' => $komp,
          'category_widget' => $category_widget ]);
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
            'fname' => 'required',
            'lname' => 'required',
            'id_komp' => 'required',
            'id_exp' => 'required',
            'id_pendidikan' => 'required',
            'id_category' => 'required',
            'id_kabupaten' => 'required',
            'jenis_kelamin' => 'required',
            'tempat_lahir' => 'required',
            'tanggal_lahir' => 'required',
            'agama' => 'required',
            'foto' => 'required',
            

        ]);
        $foto = $request->foto;
        $new_foto = time().$foto->getClientOriginalName();
        $foto->move('public/upload/user/', $new_foto);
       
        DB::table('pencari_kerjas')->where('id_pencari',$request->id_pencari)->update([
            'fname' => $request->fname,
            'lname' => $request->lname,
            'id_komp' => $request->id_komp,
            'id_exp' => $request->id_exp,
            'id_pendidikan' => $request->id_pendidikan,
            'id_category' => $request->id_category,
            'id_kabupaten' => $request->id_kabupaten,
            'jenis_kelamin' => $request->jenis_kelamin,
            'tempat_lahir' => $request->tempat_lahir,
            'tanggal_lahir' => $request->tanggal_lahir,
            'agama' => $request->agama,
            'foto' => 'public/upload/user/'.$new_foto,
           
        ]);

        //$post->update($post_data);


        return redirect('/cv');
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
