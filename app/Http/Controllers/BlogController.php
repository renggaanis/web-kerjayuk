<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\loker;
use App\Category;
use Illuminate\Support\Facades\DB;

class BlogController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function about(){
        
        $category_widget = Category::all();
       
        return view('blog.about', compact('category_widget'));
    
    }
    public function index(loker $loker){
        $category_widget = Category::all();

        $data = $loker->latest()->take(8)->get();
        return view('blog', compact('data', 'category_widget'));
    }

    public function isi_blog($judul){
        $category_widget = Category::all();

        $data = loker::where('judul', $judul)->get();
        return view('blog.isi_post', compact('data', 'category_widget'));

    }

    public function list_blog(){
        $category_widget = Category::all();

        $data = loker::latest()->paginate(6);
        return view('blog.list_post', compact('data', 'category_widget'));
    }

    public function list_category(category $category){
        $category_widget = Category::all();

        $data = $category->loker()->paginate(6);
        return view('blog.list_post', compact('data', 'category_widget'));
    }

    public function cari(request $request){
        $category_widget = Category::all();

        $data = $data = loker::where('judul', $request->cari)->orWhere('judul','like','%'.$request->cari.'%')->paginate(6);
        return view('blog.list_post', compact('data', 'category_widget'));
    
    }
    public function iklan()
    {
        $category_widget = Category::all();
        return view('blog.iklan', compact('category_widget'));
    }
   
    
}
