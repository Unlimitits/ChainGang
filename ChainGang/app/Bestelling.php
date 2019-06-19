<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Bestelling extends Model
{
    public $table = "bestelling";

    public function user(){
        return $this->belongsTo('App\User');
    }
}
