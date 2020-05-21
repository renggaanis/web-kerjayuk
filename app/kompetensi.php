<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class kompetensi extends Model
{
    protected $primaryKey = 'id_kompetensi';
    protected $fillable = ['kompetensi','id_pencari','id_bidang']; 

    public function category(){
    	return $this->belongsTo('App\Category','id_category');
    }

    public function pencari(){
    	return $this->belongsTo('App\pencari_kerja','id_pencari');
    }
}
