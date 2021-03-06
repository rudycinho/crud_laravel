<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    protected $table = 'products';

    protected $fillable = [
        'id',
        'name',
        'price',
        'stock',
        'category_id'
    ];

    protected $hidden= [
        'created_at',
        'updated_at'
    ];
}
