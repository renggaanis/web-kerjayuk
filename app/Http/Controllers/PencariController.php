<?php

namespace App\Http\Controllers;

use PDF;
use Illuminate\Http\Request;
use App\pencari_kerja;
use App\User;
use App\kabupaten;
use App\Category;
use App\pendidikan;
use App\experience;
use App\komp;
use Illuminate\Support\Facades\DB;


class PencariController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $pencari_kerja = pencari_kerja::paginate(10);
        return view('admin.pencari_kerja.index',['pencari_kerja'=>$pencari_kerja]);
    }
    public function cari(Request $request)
	{
        $komp = komp::all();
        $exp = experience::all();
        $pendidikan = pendidikan::all();
        $user = User::all();
        $category = Category::all();
        $kabupaten = kabupaten::all();
		$pencari_kerja = $pencari_kerja = pencari_kerja::where('fname', $request->cari)->orWhere('fname','like','%'.$request->cari.'%')->paginate(10);
        return view('admin.pencari_kerja.index', ['user' => $user,
        'category' => $category, 'kabupaten' => $kabupaten, 'pendidikan' => $pendidikan,
         'pencari_kerja' => $pencari_kerja, 'exp' => $exp, 'komp' => $komp ]);
 
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
        return view('admin.pencari_kerja.create', ['user' => $user,
         'category' => $category, 'kabupaten' => $kabupaten,
          'pendidikan' => $pendidikan, 'exp' => $exp, 'komp' => $komp ]);
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
            'id' => 'required',
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
            'id' => $request->id,
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
            
  
        ]);
        $foto->move('public/ulpoad/user/', $new_foto);

        return redirect('/pencari');
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
        $user = User::all(); 
        $pencari_kerja = DB::table('pencari_kerjas')->where('id_pencari',$id)->get();
        return view('admin.pencari_kerja.edit',['pencari_kerja' => $pencari_kerja ,
         'user' => $user, 'category' => $category, 'kabupaten' => $kabupaten,
          'pendidikan' => $pendidikan, 'exp' => $exp, 'komp' => $komp ]);
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
            'id' => 'required',
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
            'id' => $request->id,
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


        return redirect('/pencari');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        DB::table('pencari_kerjas')->where('id_pencari',$id)->delete();
            
        // alihkan halaman ke halaman pegawai
        return redirect('/pencari');
    }
    public function cetak_pdf()
    {
        $komp = komp::all();
        $exp = experience::all();
        $pendidikan = pendidikan::all();
        $category = Category::all();
        $kabupaten = kabupaten::all();
        $user = User::all(); 
        $pencari_kerja = pencari_kerja::all();
 
        $pdf = PDF::loadview('admin.pencari_kerja.pencari_pdf',['pencari_kerja'=>$pencari_kerja,
         'user' => $user, 'category' => $category, 'kabupaten' => $kabupaten,
          'pendidikan' => $pendidikan, 'exp' => $exp, 'komp' => $komp]);

        //return $pdf->download('laporan-loker-pdf');
        
        return $pdf->stream();
    }
}
