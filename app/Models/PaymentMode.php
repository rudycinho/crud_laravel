<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class PaymentMode extends Model
{
    protected $table='payment_modes';

    protected $fillable=[
        'id',
        'name',
        'another_details'
    ];

    protected $hidden= [
        'created_at',
        'updated_at'
    ];
}
