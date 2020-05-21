<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class pendidikan extends Model
{
    protected $primaryKey = 'id_pendidikan';


    protected $fillable = ['name'
    ];
    public function post()
    {
        return $this->hasMany('App\post','id_pendidikan');
    }
    public function loker()
    {
        return $this->hasMany('App\loker','id_pendidikan');
    }
    public function pencari()
    {
        return $this->hasMany('App\pencari_kerja','id_pendidikan');
    }
    public function lamaran()
    {
        return $this->hasMany('App\lamaran','id_pendidikan');
    }

}
