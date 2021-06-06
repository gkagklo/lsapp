<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Periferiaka extends Model
{
    
    // Table Name
    protected $table = 'periferiaka';

    // Primary Key
    public $primaryKey = 'id';

    // Timestamps
    public $timestamps = true;

    public function user(){
        return $this->belongsTo('App\User');
    }
}
