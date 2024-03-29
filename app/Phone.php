<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Phone extends Model
{
    
    // Table Name
    protected $table = 'phone';

    // Primary Key
    public $primaryKey = 'id';

    // Timestamps
    public $timestamps = true;

    public function user(){
        return $this->belongsTo('App\User');
    }
 
}
