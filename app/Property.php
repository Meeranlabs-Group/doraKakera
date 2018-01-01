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



    public function city(){
        $this->hasOne('App\City');
    }

    public function society(){
        $this->hasOne('App\Society');
    }
    public function phase(){
        $this->hasOne('App\Phase');
    }
    public function block(){
        $this->hasOne('App\Block');
    }




    public function photo(){
        $this->hasMany('App\Photo');
    }
    public function getid(){
        return $this->id;
    }


}
