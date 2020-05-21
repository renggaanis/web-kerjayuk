<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    protected $primaryKey = 'id_category';

    protected $table = 'categories';

    protected $fillable = ['nama'];
    
    public function post()
    {
        return $this->hasMany('App\post','id_category');
    }
    public function loker()
    {
        return $this->hasMany('App\loker','id_category');
    }

    
    public function user()
    {
        return $this->hasMany('App\User','id_category');
    }

    public function komp()
    {
        return $this->hasMany('App\kompetensi','id_category');
    }

    public function pencari()
    {
        return $this->hasMany('App\pencari_kerja','id_category');
    }
    public function lamaran()
    {
        return $this->hasMany('App\lamaran','id_category');
    }

    public function company()
    {
        return $this->OneMany('App\company','id_category');
    }

    public function getRouteKeyName()
    {
        return 'nama';
    }
}

