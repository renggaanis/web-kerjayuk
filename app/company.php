<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class company extends Model
{
    protected $primaryKey = 'id_company';
    
    protected $table = 'companies';

    protected $fillable = ['id','fax','name','id_category', 'id_kabupaten'];

    public function users()
    {
    	return $this->belongsTo('App\User', 'id');
    }
    public function category()
    {
    	return $this->belongsTo('App\Category', 'id_category');
    }
    public function kab()
    {
    	return $this->belongsTo('App\kabupaten', 'id_kabupaten');
    }
}
