<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;
use App\company;
use App\User;
use App\Category;
use App\kabupaten;
use Illuminate\Support\Facades\DB;

class DataController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $company = Auth::user()->company()->paginate(10);
        return view('data.index',['company'=>$company]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $kabupaten = kabupaten::all();
        $category = Category::all();
        $user = User::all();
        return view('data.create', ['user' => $user, 'category' => $category,
        'kabupaten' => $kabupaten]);
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
            'id_category' => 'required',
            'id_kabupaten' => 'required',
            'fax' => 'required',
        ]);
        
        $company = company::create([
            'name' => $request->name,
            'id_category' => $request->id_category,
            'id_kabupaten' => $request->id_kabupaten,
            'fax' => $request->fax,
            'id' => Auth::id()
        ]);

        return redirect('/data');
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
        $category = Category::all();
        $user = User::all(); 
        $company = DB::table('companies')->where('id_company',$id)->get();
        return view('data.edit',['company' => $company , 'user' => $user, 
        'category' => $category,
        'kabupaten' => $kabupaten]);
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
            'name' => 'required',
            'id_category' => 'required',
            'id_kabupaten' => 'required',
            'fax' => 'required',
            
        ]);
       
        DB::table('companies')->where('id_company',$request->id_company)->update([
            'name' => $request->name,
            'id_category' => $request->id_category,
            'id_kabupaten' => $request->id_kabupaten,
            'fax' => $request->fax,
           
        ]);

        return redirect('/data');
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
