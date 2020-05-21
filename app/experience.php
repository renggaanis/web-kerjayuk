<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class experience extends Model
{
    protected $primaryKey = 'id_exp';


    protected $fillable = ['pengalaman'];

    public function post()
    {
        return $this->hasMany('App\post','id_exp');
    }
    public function loker()
    {
        return $this->hasMany('App\loker','id_exp');
    }
    public function pencari()
    {
        return $this->hasMany('App\pencari_kerja','id_exp');
    }
    public function lamaran()
    {
        return $this->hasMany('App\lamaran','id_exp');
    }
}
