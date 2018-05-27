<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Customer extends Model
{
    //

protected $fillable = [
	'name',
	'address',
	'number',
];




public function sales(){


    	return $this->hasMany('App\Sales');
    }
    public function inventory(){


    	return $this->hasMany('App\Inventory');
    }
    
    public function account(){


    	return $this->hasOne('App\Account');
    }

}
