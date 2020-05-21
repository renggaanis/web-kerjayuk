<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class kabupaten extends Model
{
    protected $primaryKey = 'id_kabupaten';


    protected $fillable = ['kabupaten', 'id_provinsi'];

    public function Provinsi(){
    	return $this->belongsTo('App\provinsi','id_provinsi');
    }
    public function user()
    {
        return $this->hasMany('App\User','id_kabupaten');
    }

    public function pencari()
    {
    	return $this->hasMany('App\pencari_kerja','id_kabupaten');
    }
    public function company()
    {
    	return $this->OneMany('App\company','id_kabupaten');
    }

    public function post()
    {
        return $this->hasMany('App\post','id_kabupaten');
    }
    public function loker()
    {
        return $this->hasMany('App\loker','id_kabupaten');
    }
    public function lamaran()
    {
        return $this->hasMany('App\lamaran','id_kabupaten');
    }
}
