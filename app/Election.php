<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Election extends Model
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'election_category', 'period', 'start', 'end','status',
    ];

    public function election_candidate()
    {
        return $this->belongsTo('App\ElectionCandidate',['election_category','election_name'],['election_category','period']);
    }
}
