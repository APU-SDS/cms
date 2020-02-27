<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Event extends Model
{

    protected $fillable = [
        'created_by', 'organisation', 'title', 'identifier', 'file', 'description', 'attendance', 'expiry'
    ];

    protected $casts = [
        'created_at' => 'datetime',
        'updated_at' => 'datetime'
    ];

}
