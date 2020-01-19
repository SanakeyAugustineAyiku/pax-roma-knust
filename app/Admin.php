<?php

namespace App;

use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class Admin extends Authenticatable
{
    use Notifiable;

    //
    protected $fillable = [
        "name",
        "email",
        "period",
        "role_id",
        "password",
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
    public function roles()
    {
        return $this->belongsToMany('App\Role','admin_roles');
    }

    public function hasRole($role)
    {
      if ($this->roles()->where('role', $role)->first()) {
        return true;
      }
      return false;
    }

}
