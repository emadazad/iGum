<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class User_Order_Line extends Model
{
	protected $table = 'user_order_lines';
    protected $primaryKey = 'uolid';

    //relationships
    public function flavors() {
        return $this->belongsToMany('App\Flavor', 'customized_flavors', 'uolid','fid');  
    }
    public function product() {
    	return $this->belongsTo('App\Product', 'pid');  
    }
    public function userOrder() {
    	return $this->belongsTo('App\User_Order', 'uoid');  
    }
}
