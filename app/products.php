<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class products extends Model
{
    protected $table="products";
    public $timestamps=false;
    public function smallCategories(){
    	return $this->belongsTo('app\smallCategories','id_small_category','id');
    }

     public function  images(){
        return $this->hasMany('app\images','id_product','id');
    }

    public function order_details(){
    	return $this->hasMany('app\order_details','id_product','id');
    }

    public function  ranks(){
        return $this->hasMany('app\ranks','id_user','id');
    }

    public function  comments(){
        return $this->hasMany('app\comments','id_user','id');
    }

    public function  likes(){
        return $this->hasMany('app\likes','id_user','id');
    }
}
