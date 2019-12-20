<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Client extends Model
{
    protected $table='clients';

    protected $fillable = [
        'id',
        'name',
        'last_name',
        'address',
        'birth_date',
        'phone',
        'email'
    ];

    protected $hidden = [
        'created_at',
        'updated_at'
    ];
}
