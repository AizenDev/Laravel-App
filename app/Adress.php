<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Adress extends Model
{
    protected $fillable = ['country', 'city', 'street', 'house', 'flat'];
}
