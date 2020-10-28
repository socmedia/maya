<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;

    public $incrementing = false;

    protected $fillable = [
        'id', 'name', 'slug_name', 'image', 'description', 'production_price', 'sell_price', 'is_showed'
    ];
}