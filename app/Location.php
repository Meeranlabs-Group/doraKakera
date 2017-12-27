<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Location extends Model
{
    //

    protected $table = 'Location';


    public function property(){
        return $this->belongsTo('App\Property');
    }


    public function city(){
        return $this->hasMany('App\City');
    }
    public function phase(){
        return $this->hasMany('App\Phase');
    }
    public function Block(){
        return $this->hasMany('App\Block');
    }
    public function Society(){
        return $this->hasMany('App\Society');
    }

}
