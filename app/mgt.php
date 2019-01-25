<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class mgt extends Model
{
	protected $table = 'mgts';
    protected $fillable = [
    'user_id', 'name', 'customerform', 'detail'
    ];
}
