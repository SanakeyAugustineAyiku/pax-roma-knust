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
        "election_category",
        "votes",
    ];
}