<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class komp extends Model
{
    protected $primaryKey = 'id_komp';

    protected $fillable = ['name'];
    
    public function post()
    {
        return $this->hasMany('App\post','id_komp');
    }
    public function loker()
    {
        return $this->hasMany('App\loker','id_komp');
    }
    public function pencari()
    {
        return $this->hasMany('App\pencari_kerja','id_komp');
    }
    public function lamaran()
    {
        return $this->hasMany('App\pencari_kerja','id_komp');
    }
}
