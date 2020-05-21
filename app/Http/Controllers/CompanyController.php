<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\company;
use App\User;
use App\Category;
use App\kabupaten;
use PDF;
use Illuminate\Support\Facades\DB;
use App\Exports\CompanyExport;
use Maatwebsite\Excel\Facades\Excel;
use App\Http\Controllers\Controller;



class CompanyController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
         $company = company::paginate(10);
        return view('admin.company.index',['company'=>$company]);
    }

    public function cari(Request $request)
	{
        $kabupaten = kabupaten::all();
        $category = Category::all();
        $user = User::all();
        
		$company = $company = company::where('name', $request->cari)->orWhere('name','like','%'.$request->cari.'%')->paginate(10);
        return view('admin.company.index', ['user' => $user, 'category' => $category,
        'kabupaten' => $kabupaten, 'company'=>$company]);
 
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
        return view('admin.company.create', ['user' => $user, 'category' => $category,
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
            'id' => 'required',
            'id_category' => 'required',
            'id_kabupaten' => 'required',
            'fax' => 'required',
        ]);
        
        $company = company::create([
            'name' => $request->name,
            'id' => $request->id,
            'id_category' => $request->id_category,
            'id_kabupaten' => $request->id_kabupaten,
            'fax' => $request->fax,
        ]);

        return redirect('/company');
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
        return view('admin.company.edit',['company' => $company , 'user' => $user, 
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
            'id' => 'required',
            'id_category' => 'required',
            'id_kabupaten' => 'required',
            'fax' => 'required',
            
        ]);
       
        DB::table('companies')->where('id_company',$request->id_company)->update([
            'name' => $request->name,
            'id' => $request->id,
            'id_category' => $request->id_category,
            'id_kabupaten' => $request->id_kabupaten,
            'fax' => $request->fax,
           
        ]);

        return redirect('/company');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        DB::table('companies')->where('id_company',$id)->delete();
            
        // alihkan halaman ke halaman pegawai
        return redirect('/company');
    }
    public function cetak_pdf()
    {
        $kabupaten = kabupaten::all();
        $category = Category::all();
        $user = User::all(); 
        $company = company::all();
 
        $pdf = PDF::loadview('admin.company.company_pdf',['company'=>$company,
         'user' => $user, 'category' => $category, 'kabupaten' => $kabupaten ]);

        //return $pdf->download('laporan-loker-pdf');
        
        return $pdf->stream();
    }
    public function export_excel()
	{
		return Excel::download(new CompanyExport, 'company.xlsx');
	}
   
}

