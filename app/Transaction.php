<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Transaction extends Model
{
    protected $fillable = [
        'id',
        'code',
        'amount',
        'user_id',
        'created_at'
    ];
}
