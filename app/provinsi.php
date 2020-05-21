<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class provinsi extends Model
{
    protected $primaryKey = 'id_provinsi';


    protected $fillable = ['provinsi'];

    public function kabupaten()
    {
        return $this->hasMany('App\kabupaten','id_provinsi');
    }

}
