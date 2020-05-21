<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('/guest', 'GuestController@index')->name('guest');
Route::get('/isi/{judul}', 'GuestController@isi')->name('guest.isi');
Auth::routes();
Route::get('/guest/tentang','GuestController@tentang');
Route::get('/cvprofile', 'cvController@edit')->name('cv.edit');


Route::get('/comp/home', 'HomeController@adminHome')->name('admin')->middleware('admin');
Route::get('/blog', 'HomeController@user')->name('user')->middleware('admin');
Route::get('/admin/homeadmin', 'HomeController@amd')->name('amd')->middleware('admin');
Route::get('/login', 'LoginController@login')->middleware('admin');

Auth::routes(['verify' => true]);
//Route::get('/home', 'HomeController@index')->name('home');
//Auth::routes();
//Route::get('/home', 'HomeController@index')->name('home');
//Auth::routes();
//Route::get('/home', 'HomeController@index')->name('home');
Route::middleware(['auth'])->group(function () {
    Route::get('/approval', 'HomeController@approval')->name('approval');

    Route::middleware(['approved'])->group(function () {
        Route::get('/home', 'HomeController@index')->name('home');
    });
});


Route::get('/user', 'useController@index')->name('admin.users.index')->middleware('admin');
Route::get('/users/{user_id}/approve', 'useController@approve')->name('admin.users.approve')->middleware('admin');
   


Route::get('profile', 'ProfileController@edit')->name('profile.edit');
Route::patch('profile', 'ProfileController@update')->name('profile.update');

Route::get('password', 'PasswordController@edit')->name('password.edit');
Route::patch('password', 'PasswordController@update')->name('password.update');




Route::group(['middleware' => ['auth','admin']], function(){

    Route::get('/homecomp','PerusahaanController@home');
        Auth::routes();
        Route::get('/comp','PerusahaanController@index');
        Route::get('/comp/cari','PerusahaanController@cari');
    
        Auth::routes();
    
        Route::get('/comp/create', 'PerusahaanController@create');
    
        Auth::routes();
    
        Route::post('/comp/store','PerusahaanController@store');
    
        Auth::routes();
    
        Route::get('/comp/edit/{id}','PerusahaanController@edit');
    
        Auth::routes();
    
        Route::post('/comp/update','PerusahaanController@update');
    
        Auth::routes();
    
        Route::get('/comp/destroy/{id}','PerusahaanController@destroy');

        
        Route::get('/blog', 'BlogController@index')->name('blog');
        Route::get('/isi-post/{judul}', 'BlogController@isi_blog')->name('blog.isi');
        Route::get('/list-post','BlogController@list_blog')->name('blog.list');
        Route::get('/list-category/{category}','BlogController@list_category')->name('blog.category');
        Route::get('/cari','BlogController@cari')->name('blog.cari');
        Auth::routes();
        Route::get('/blog/about','BlogController@about');
        Route::get('/blog/iklan','BlogController@iklan');

        Route::get('/match','MatchController@match');
        Route::get('/matchloc','MatchController@match_loc');





        Auth::routes();
        Route::get('/cv', 'cvController@index')->name('cv');
        Auth::routes();
        Route::get('/cv/create', 'cvController@create')->name('cv.create');
        Auth::routes();
        Route::post('/cv/store','cvController@store');
        Auth::routes();
        Route::get('/cv/edit/{id}','cvController@edit');
        Auth::routes();
        Route::post('/cv/update','cvController@update');


        Auth::routes();
        Route::get('/data', 'DataController@index')->name('data');
        Auth::routes();
        Route::get('/data/create', 'DataController@create')->name('data.create');
        Auth::routes();
        Route::post('/data/store','DataController@store');
        Auth::routes();
        Route::get('/data/edit/{id}','DataController@edit');
        Auth::routes();
        Route::post('/data/update','DataController@update');



        Auth::routes();
        Route::get('/lamaran', 'LamaranController@index')->name('lamaran');
        Auth::routes();
        Route::get('/lamaran/create', 'LamaranController@create');
        Auth::routes();
        Route::post('/lamaran/store','LamaranController@store');
        Auth::routes();
        Route::get('/lamaran/success', 'LamaranController@success')->name('lamaran.success');




        Auth::routes();
        Route::get('/kelola', 'KelolaController@index')->name('kelola');
        Auth::routes();
        Route::get('/kelola/lamaran/{id}','KelolaController@lamaran');
        Auth::routes();
        Route::get('/kelola/balas/{id}','KelolaController@balas');

    
    
        //ADMIN
        Auth::routes();
    
        Route::get('/homeadmin', 'amdController@index')->name('homeadmin');
    
    
        Auth::routes();
    
        Route::get('/loker', 'LokerController@index');
        Route::get('/loker/cari','LokerController@cari');

        Auth::routes();
    
        Route::get('/loker/create', 'LokerController@create');
    
        Auth::routes();
    
        Route::post('/loker/store','LokerController@store');
    
        Auth::routes();
    
        Route::get('/loker/edit/{id}','LokerController@edit');
    
        Auth::routes();
    
        Route::post('/loker/update','LokerController@update');
    
        Auth::routes();
    
        Route::get('/loker/destroy/{id}','LokerController@destroy');
    
        Route::get('/loker/cetak_pdf', 'LokerController@cetak_pdf');




        Auth::routes();
    
        Route::get('/komp', 'KompsController@index');
        Route::get('/komp/cari','KompsController@cari');
        Auth::routes();
        Route::get('/komp/create', 'KompsController@create');
        Auth::routes();
        Route::post('/komp/store','KompsController@store');
        Auth::routes();  
        Route::get('/komp/edit/{id}','KompsController@edit');
        Auth::routes();
        Route::post('/komp/update','KompsController@update');
        Auth::routes();
        Route::get('/komp/destroy/{id}','KompsController@destroy');



    
    
        //provinsi
        Auth::routes();
    
        Route::get('/provinsi', 'ProvinsiController@index');
        Route::get('/provinsi/cari','ProvinsiController@cari');
        Auth::routes();
        Route::get('/provinsi/create', 'ProvinsiController@create');
        Auth::routes();
        Route::post('/provinsi/store','ProvinsiController@store');
        Auth::routes();  
        Route::get('/provinsi/edit/{id}','ProvinsiController@edit');
        Auth::routes();
        Route::post('/provinsi/update','ProvinsiController@update');
        Auth::routes();
        Route::get('/provinsi/destroy/{id}','ProvinsiController@destroy');
    
        //kabupaten
        Auth::routes();
    
        Route::get('/kabupaten', 'KabupatenController@index');
        Route::get('/kabupaten/cari','KabupatenController@cari');
        Auth::routes();
    
        Route::get('/kabupaten/create', 'KabupatenController@create');
        Auth::routes();
    
        Route::post('/kabupaten/store','KabupatenController@store');
        Auth::routes();
    
        Route::get('/kabupaten/edit/{id}','KabupatenController@edit');
        Auth::routes();
    
        Route::post('/kabupaten/update','KabupatenController@update');
        Auth::routes();
        Auth::routes();
    
        Route::get('/kabupaten/destroy/{id}','KabupatenController@destroy');
    
    
        //pencari kerja
        Auth::routes();
    
        Route::get('/pencari', 'PencariController@index');
        Route::get('/pencari/cari','PencariController@cari');
        Auth::routes();
    
        Route::get('/pencari/create', 'PencariController@create');
        Auth::routes();
    
        Route::post('/pencari/store','PencariController@store');
        Auth::routes();
    
        Route::get('/pencari/edit/{id_pencari}','PencariController@edit');
        Auth::routes();
    
        Route::post('/pencari/update','PencariController@update');
        Auth::routes();
    
        Route::get('/pencari/destroy/{id}','PencariController@destroy');
        Auth::routes();

        Route::get('/pencari/cetak_pdf', 'PencariController@cetak_pdf');
    
    
    
        //company
        Auth::routes();
    
        Route::get('/company', 'CompanyController@index');
        Route::get('/company/cari','CompanyController@cari');
        Auth::routes();
    
        Route::get('/company/create', 'CompanyController@create');
        Auth::routes();
    
        Route::post('/company/store','CompanyController@store');
        Auth::routes();
    
        Route::get('/company/edit/{id_company}','CompanyController@edit');
    
        Auth::routes();
    
        Route::post('/company/update','CompanyController@update');
    
        Auth::routes();
    
        Route::get('/company/destroy/{id}','CompanyController@destroy');
        Route::get('/company/cetak_pdf', 'CompanyController@cetak_pdf');
        Route::get('/company/export_excel', 'CompanyController@export_excel');
    
    
        Auth::routes();
    
        Route::get('/categories','CategoryController@index');
        Route::get('/categories/cari','CategoryController@cari');
    
        Auth::routes();
    
        Route::get('/categories/create', 'CategoryController@create');
    
        Auth::routes();
    
        Route::post('/categories/store','CategoryController@store');
    
        Auth::routes();
    
        Route::get('/categories/edit/{id_category}','CategoryController@edit');
    
        Auth::routes();
    
        Route::post('/categories/update','CategoryController@update');
    
        Auth::routes();
    
        Route::get('/categories/destroy/{id}','CategoryController@destroy');
    
        });
        Route::get('/users','UserController@index');
        Route::get('/users/cari','UserController@cari');
    
        Auth::routes();
    
        Route::get('/users/tambah','UserController@tambah');
    
        Auth::routes();
    
        Route::post('/users/store','UserController@store');
    
        Auth::routes();
    
        Route::get('/users/edit/{id}','UserController@edit');
    
        Auth::routes();
    
        Route::post('/users/update','UserController@update');
    
        Auth::routes();
    
        Route::get('/users/hapus/{id}','UserController@hapus');




//Auth::routes(['verify' => true]);








