<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class lamaran extends Model
{
    protected $primaryKey = 'id_lamaran';


    protected $fillable = ['id', 'id_exp','id_category','id_loker','id_kabupaten','name','jenis_kelamin', 'tempat_lahir', 'tanggal_lahir',
     'agama', 'id_pendidikan', 'id_komp','foto','essay','jurusan','alamat','telepon','posisi'];

     public function user()
     {
         return $this->belongsTo('App\User', 'id');
     }
    public function kab()
    {
    	return $this->belongsTo('App\kabupaten', 'id_kabupaten');
    }
    public function bidang()
    {
    	return $this->belongsTo('App\Category', 'id_category');
    }
    public function pend()
    {
    	return $this->belongsTo('App\pendidikan', 'id_pendidikan');
    }
    public function exp()
    {
    	return $this->belongsTo('App\experience', 'id_exp');
    }
    public function komp()
    {
    	return $this->belongsTo('App\komp', 'id_komp');
    }
    public function loker()
    {
    	return $this->belongsTo('App\loker', 'id_loker');
    }
   
}
