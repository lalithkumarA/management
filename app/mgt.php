<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class mgt extends Model
{
    protected $fillable = [
        'name', 'customerform', 'detail'
    ];

    protected $table = ['mgts'
    ];
}
