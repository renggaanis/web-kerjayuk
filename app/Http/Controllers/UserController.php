<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{
    public function index()
    {
    	// mengambil data dari table pegawai
    	$users = User::paginate(10);
 
    	// mengirim data pegawai ke view index
    	return view('admin.index',['users' => $users]);
 
    }
    public function cari(Request $request)
	{
		// menangkap data pencarian
		$cari = $request->cari;
 
    		// mengambil data dari table pegawai sesuai pencarian data
		$users = DB::table('users')
		->where('name','like',"%".$cari."%")
		->paginate();
 
    		// mengirim data pegawai ke view index
		return view('admin.index',['users' => $users]);
 
	}
    public function tambah()
    {
    
        // memanggil view tambah
        return view('admin.tambah');
    
    }
    public function store(Request $request)
    {
        $this->validate($request, [
            'name' => 'required',
            'admin' => 'required',
            'email' => 'required',
            'password' => 'required',
            'telepon' => 'required',
          
        ]);




        // insert data ke table users
        DB::table('users')->insert([
            'name' => $request->name,
            'admin' => $request->admin,
            'email' => $request->email,
            'password' => Hash::make($request->password),
            'telepon' => $request->telepon,

            
        ]);



        // alihkan halaman ke halaman users
        return redirect('/users');
    
    }
    public function edit($id)
    {
        // mengambil data pegawai berdasarkan id yang dipilih
        $users = DB::table('users')->where('id',$id)->get();
        // passing data pegawai yang didapat ke view edit.blade.php
        return view('admin.edit',['users' => $users]);
    
    }
    public function update(Request $request)
    {
        $this->validate($request, [
            'name' => 'required',
            'admin' => 'required',
            'email' => 'required',
            'telepon' => 'required',

        ]);



        DB::table('users')->where('id',$request->id)->update([
            'name' => $request->name,
            'admin' => $request->admin,
            'email' => $request->email,
            'telepon' => $request->telepon,

           
        ]);
        // alihkan halaman ke halaman pegawai
        return redirect('/users');
    }
    public function hapus($id)
    {
        // menghapus data pegawai berdasarkan id yang dipilih
        DB::table('users')->where('id',$id)->delete();
            
        // alihkan halaman ke halaman pegawai
        return redirect('/users');
    }
    
 
	
}
