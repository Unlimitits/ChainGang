<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Fiets extends Model
{

    protected $primaryKey = 'fiets_id';

    public function aanbieding(){
        return $this->hasOne(Aanbieding::class);
    }
}
