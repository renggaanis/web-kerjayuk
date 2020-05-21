<?php
 
namespace App;

use App\Http\AuthTraits\OwnsRecord;
use Illuminate\Notifications\Notifiable;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Database\Eloquent\Model;

 
class User extends Authenticatable implements MustVerifyEmail
{

    use Notifiable;
 
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'email', 'password','admin','telepon','approved_at',
    ];
 
    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];
 
    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];
    protected $primaryKey = 'id';
    protected $table = 'users';
    
    public function loker()
    {
        return $this->hasMany('App\loker','id');
    }

    public function pencari_kerja()
    {
    	return $this->hasMany('App\pencari_kerja','id');
    }
    public function company()
    {
    	return $this->hasOne('App\company','id');
    }

    public function Category(){
    	return $this->belongsTo('App\Category','id_category');
    }

    public function kab(){
    	return $this->belongsTo('App\kabupaten','id_kabupaten');
    }

    public function role(){
    	return $this->belongsTo('App\role','id_role');
    }
    public function lamaran()
    {
    	return $this->hasMany('App\lamaran','id');
    }
}
