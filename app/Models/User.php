<?php

namespace App\Models;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Auth;

class User extends Authenticatable
{
    use HasFactory, Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name',
        'email',
        'password',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];
    
    use Notifiable;

    public function goals()
  {
    return $this->hasMany('App\Goal');
  }
  public function Todos()
  {
    return $this->hasMany('App\Todo');
  }
  public function reviews()
  {
    return $this->hasMany('App\Review');
  }
  
  public static function userAuthenticate($id)
  {
    if($id !== Auth::id()){
      return redirect('/home')->throwResponse();
    }
  }
}





