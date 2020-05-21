<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class loker extends Model
{
    protected $primaryKey = 'id_loker';


    protected $fillable = ['id','judul','id_exp', 'id_kabupaten','id_category',
     'content', 'gambar', 'id_pendidikan',
    'id_sistem', 'id_penempatan', 'id_gaji','id_komp'
    ];

    public function category(){
    	return $this->belongsTo('App\Category','id_category');
    }
    public function user(){
    	return $this->belongsTo('App\User','id');
    }
    
    public function pendidikan(){
    	return $this->belongsTo('App\pendidikan', 'id_pendidikan');
    }
    public function gaji(){
    	return $this->belongsTo('App\gaji', 'id_gaji');
    }
    public function sistem(){
    	return $this->belongsTo('App\sistem', 'id_sistem');
    }
    public function exp(){
    	return $this->belongsTo('App\experience', 'id_exp');
    }
    public function komp(){
    	return $this->belongsTo('App\komp', 'id_komp');
    }
    public function kab(){
    	return $this->belongsTo('App\kabupaten', 'id_kabupaten');
    }
    public function lamaran()
    {
        return $this->hasMany('App\lamaran','id_loker');
    }
}
