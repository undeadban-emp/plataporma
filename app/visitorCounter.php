<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class visitorCounter extends Model
{
    protected $fillable = ['ip' , 'from', 'to', 'action'];
}
