<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Phase extends Model
{
    //


    public function location(){

        return $this->belongsTo('App\location');
    }
}