<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ElectionCandidate extends Model
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        "name",
        "avatar",
        "position",
        "election_name",
        "election_category",
        "votes",
    ];

    public function elections()
    {
        return $this->hasOne('App\Election',[ "election_name","election_category"],'id');
    }
}
