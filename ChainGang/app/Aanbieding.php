<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Aanbieding extends Model
{
    protected $table = 'aanbieding';
    protected $primaryKey = 'aanbieding_id';

    public function fiets() {
        return $this->belongsTo(Fiets::class);
    }
}
