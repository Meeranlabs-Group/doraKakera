<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Society extends Model
{
    //


    public function location(){
        return $this->belongsTo('App\location');
    }

}
