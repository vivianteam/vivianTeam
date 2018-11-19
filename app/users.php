<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class users extends Model
{
    protected $table="users";

    public $timestamps=false;

    public function type_users(){
    	return $this->belongsTo('app\type_users','id_type','id');
    }

    public function  orders(){
        return $this->hasMany('app\orders','id_user','id');
    }

    public function  ranks(){
        return $this->hasMany('app\ranks','id_user','id');
    }

    public function  comments(){
        return $this->hasMany('app\comments','id_user','id');
    }

    public function  person_post_new(){
        return $this->hasMany('app\person_post_new','id_user','id');
    }

    public function  likes(){
        return $this->hasMany('app\likes','id_user','id');
    }

}
