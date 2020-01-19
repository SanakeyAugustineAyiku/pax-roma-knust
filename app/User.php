<?php

namespace App;

use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class User extends Authenticatable
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        "fullname",
        "email",
        "phone",
        "dob",
        "emergency_contact",
        "gender",
        "subgroup",
        "hostel",
        "room_number",
        "program",
        "year",
        "password",
        "avatar",
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

    /**
     * Check whether the user has a role
     */
    // public function hasRole($role)
    // {
    //   if ($this->roles()->where('role', $role)->first()) {
    //     return true;
    //   }
    //   return false;
    // }
}
