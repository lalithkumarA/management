<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class mgtsworks extends Model
{
    protected $fillable = [
        'name', 'mobile', 'detail'
    ];

    // it's seletect the function id-> for (mgt+or+any other name) than return call $this hasOne function(where the db call:mgt::class,'id' to 'name' )
    public function mgt(){
         return $this->hasOne(mgt::class,'id','name');
     }
}
