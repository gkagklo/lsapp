<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Tablet extends Model
{
    
    // Table Name
    protected $table = 'tablet';

    // Primary Key
    public $primaryKey = 'id';

    // Timestamps
    public $timestamps = true;

    public function user(){
        return $this->belongsTo('App\User');
    }
}
