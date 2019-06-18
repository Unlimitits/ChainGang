<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Medewerker extends Model
{
    protected $table = 'gebruiker';
    protected $primaryKey = 'gebruiker_id';
}
