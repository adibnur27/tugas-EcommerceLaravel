<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ListProduct extends Model
{
    use HasFactory;
    
    protected $fillable = ['name', 'description', 'slug', 'image', 'price', 'stock', 'category_id'];
}
