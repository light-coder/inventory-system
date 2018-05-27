<?php

namespace App;

//use App\Prduct;

use Illuminate\Database\Eloquent\Model;

class Inventory extends Model
{
    //
    protected $fillable = [
    	'product_id',
    	'customer_id',
    	'details',
    	'issue',
    	'reciept'

    ];



     public function product(){


    	return $this->belongsTo('App\Product');
    }
    public function customer(){


    	return $this->belongsTo('App\Customer');
    }

}
