<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class person_post_new extends Model
{
    protected $table="person_post_new";

    public $timestamps=false;

    public function Users(){
    	return $this->belongsTo('app\users','id_user','id');
    }

    public function  ranks(){
        return $this->hasMany('app\ranks','id_person','id');
    }

    public function  comments(){
        return $this->hasMany('app\comments','id_person','id');
    }

    public function  likes(){
        return $this->hasMany('app\likes','id_person','id');
    }

}
