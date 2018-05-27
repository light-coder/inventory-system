<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    //

    protected $fillable = [
        'name',
        'price'
    ];


    public function inventory(){


    	return $this->hasMany('App\Inventory');
    }


    public function sales(){


    	return $this->hasMany('App\Sales');
    }


     public function account(){


    	return $this->hasOne('App\Account');
    }
}
