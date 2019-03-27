<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    protected $primaryKey = 'pid';

    //relationships
    public function userOrderLines() {
        return $this->hasMany('App\User_Order_Line','pid');  
    }
}
