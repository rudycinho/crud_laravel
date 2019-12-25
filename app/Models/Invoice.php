<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Invoice extends Model
{
    protected $table = 'invoices';

    protected $fillable = [
        'id',
        'date',
        'client_id',
        'payment_mode_id'
    ];

    protected $hidden= [
        'created_at',
        'updated_at'
    ];
}
