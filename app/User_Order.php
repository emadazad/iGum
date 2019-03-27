<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class User_Order extends Model
{
	protected $table = 'user_orders';
    protected $primaryKey = 'uoid';

    //relationships
    public function user() {
    	return $this->belongsTo('App\User', 'uid');  
    }

    public function userOrderLines() {
        return $this->hasMany('App\User_Order_Line','uoid');  
    }
}