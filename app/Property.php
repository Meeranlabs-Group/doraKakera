<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\User;

class Property extends Model
{
    //




    protected $table = 'property';


    public function user(){

        return $this->belongsTo('App\User');
    }

//    public function Property(){
//
//        return $this->Property();
//    }

    public function feature(){
        $this->hasOne('App\Feature');
    }

    public function photo(){
        $this->hasMany('App\Photo');
    }
    public function getid(){
        return $this->id;
    }


}
