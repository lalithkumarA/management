<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class mgtsworks extends Model
{
    protected $fillable = [
        'name', 'mobile', 'detail'
    ];
    public function mgt(){
         return $this->hasOne(mgt::class,'id','name');
     }
}

    //it's seletect the function id-> for (mgt+or+any other name) than return call $this hasOne function(where the db call:mgt::class,'' )
