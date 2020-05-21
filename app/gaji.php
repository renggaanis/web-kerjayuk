<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class gaji extends Model
{
    protected $primaryKey = 'id_gaji';


    protected $fillable = ['gaji'
    ];
    public function post()
    {
        return $this->hasMany('App\post','id_gaji');
    }
    public function loker()
    {
        return $this->hasMany('App\loker','id_gaji');
    }
}
