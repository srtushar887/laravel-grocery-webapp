<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class order_detail extends Model
{
    public function product()
    {
        return $this->hasOne(product::class,'id','product_id');
    }
}
