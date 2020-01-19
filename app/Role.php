<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Role extends Model
{
    protected $fillable = ['role','description'];

    public function admins()
    {
        return $this->belongsToMany('App\Admin','admin_roles');
    }

    public function users()
    {
        return $this->belongsToMany('App\User','user_roles');
    }
}
