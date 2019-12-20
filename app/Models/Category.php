<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    protected $table='categories';

    protected $fillable = [
        'id',
        'name',
        'description'
    ];

    protected $hidden= [
        'created_at',
        'updated_at'
    ];
}
