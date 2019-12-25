<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Detail extends Model
{
    protected $table = 'details';

    protected $fillable = [
        'id',
        'quantity',
        'price',
        'product_id',
        'invoice_id'
    ];

    protected $hidden= [
        'created_at',
        'updated_at'
    ];
}
