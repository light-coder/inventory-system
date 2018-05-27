<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Sales extends Model
{
    //

	protected $fillable = [
		'product_id',
		'customer_id',
		'issue'


	];




     public function customer(){


    	return $this->belongsTo('App\Customer');
    }


     public function product(){


    	return $this->belongsTo('App\Product');
    }



}
