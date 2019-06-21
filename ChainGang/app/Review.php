<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Review extends Model
{
    protected $table = 'reviews';
    protected $primaryKey = 'review_id';
  public function User(){



     return $this->belongsTo('App\User', 'user_id');

  }
}
