<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class comments extends Model
{
    protected $table="comments";

    public $timestamps=false;

    public function users(){
    	return $this->belongsTo('app\users','id_user','id');
    }

    public function person_post_new(){
    	return $this->belongsTo('app\person_post_new','id_person','id');
    }

    public function products(){
    	return $this->belongsTo('app\products','id_product','id');
    }
}
