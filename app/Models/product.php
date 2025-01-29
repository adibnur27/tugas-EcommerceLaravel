<?php

namespace App\Models;

use Illuminate\Support\Arr;
use Illuminate\Database\Eloquent\Model;

class product extends model
{
    protected $fillable = ['name', 'description', 'slug', 'image', 'price', 'stock','category_id'];
}
