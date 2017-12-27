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


    public function feature(){
        $this->hasOne('App\Feature');
    }

    public function location(){
        $this->hasOne('App\Location');
    }

    public function photo(){
        $this->hasMany('App\Photo');
    }
    public function getid(){
        return $this->id;
    }


}
