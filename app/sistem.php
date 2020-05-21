<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class sistem extends Model
{
    protected $primaryKey = 'id_sistem';


    protected $fillable = ['name'
    ];
   
    public function loker()
    {
        return $this->hasMany('App\loker','id_sistem');
    }

}
