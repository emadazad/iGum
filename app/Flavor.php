<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Flavor extends Model
{
    protected $primaryKey = 'fid';

    //relationships
    public function userOrders() {
        return $this->belongsToMany('App\User_Order_Line', 'customized_flavors', 'fid','uolid');  
    }
}
