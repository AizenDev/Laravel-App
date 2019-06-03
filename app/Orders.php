<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Orders extends Model
{
    protected $fillable = ['user_id', 'prod_id', 'type_id', 'prod_name', 'price'];
}
