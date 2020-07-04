<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class order extends Model
{
    public function user()
    {
        return $this->hasOne(User::class,'id','user_id');
    }
}
