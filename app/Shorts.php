<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Shorts extends Model
{
    protected $fillable = ['id', 'brand_id', 'category_id', 'color', 'price', 'size', 'model', 'club', 'img', 'description'];
}
