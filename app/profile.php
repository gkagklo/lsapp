<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class profile extends Model
{
    protected $fillable = ['city','country','thl1','thl2','user_id'];

    public function user()
    {
        return $this->belongsTo('App\User');
    }

}
