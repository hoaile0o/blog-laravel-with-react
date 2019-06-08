<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Laravel\Passport\HasApiTokens;

class User extends Authenticatable
{
    protected  $table = "users";
    use HasApiTokens, Notifiable;


    public function comments()
    {
        return $this->hasMany('App\Comments');
    }

    public function posts(){
       return $this->hasMany('App\Post','id','user_id');
    }
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'email', 'password','role','avatar',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    public function role(){
     return$this->belongsTo(Role::class);
    }

    public function hasPermission(Permission $permission){
        return !! optional(optional($this->role)->permissions)->contains($permission);
    }


}
