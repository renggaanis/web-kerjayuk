<?php

namespace App\Http\Controllers;

use Auth;
use App\loker;
use App\kabupaten;
use App\Category;
use App\pendidikan;
use App\gaji;
use App\sistem;
use App\User;
use App\experience;
use App\komp;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

class MatchController extends Controller
{
    public function match()
    {
        $auth = Auth::user()->id;
        $category_widget = Category::all();
        $loker = loker::all();
        $loker = DB::select('SELECT l.id_loker, l.judul, l.gambar, l.created_at,
         s.name, k.kabupaten, e.pengalaman, l.id_komp, c.nama, ck.id, ck.lname, ck.id_komp FROM lokers l
        LEFT JOIN experiences e ON l.id_exp=e.id_exp
        LEFT JOIN kabupatens k ON l.id_kabupaten=k.id_kabupaten
        LEFT JOIN categories c ON l.id_category=c.id_category
        LEFT JOIN komps s ON l.id_komp=s.id_komp
        
        LEFT JOIN pencari_kerjas ck ON l.id_komp=ck.id_komp
        WHERE ck.lname IS NOT NULL AND ck.id='.$auth.'
        ORDER BY l.judul');

        return view('blog.match', ['category_widget' => $category_widget, 'loker'=> $loker]);
    }
    public function match_loc()
    {
        $auth = Auth::user()->id;
        $category_widget = Category::all();
        $loker = loker::all();
        $loker = DB::select('SELECT l.id_loker, l.judul, l.gambar, l.created_at,
         s.name, k.kabupaten, e.pengalaman, l.id_komp, c.nama, ck.id, ck.lname, ck.id_komp FROM lokers l
        LEFT JOIN experiences e ON l.id_exp=e.id_exp
        LEFT JOIN kabupatens k ON l.id_kabupaten=k.id_kabupaten
        LEFT JOIN categories c ON l.id_category=c.id_category
        LEFT JOIN komps s ON l.id_komp=s.id_komp
        
        LEFT JOIN pencari_kerjas ck ON l.id_kabupaten=ck.id_kabupaten
        WHERE ck.lname IS NOT NULL AND ck.id='.$auth.'
        ORDER BY l.judul');

        return view('blog.matchloc', ['category_widget' => $category_widget, 'loker'=> $loker]);
    }
}
