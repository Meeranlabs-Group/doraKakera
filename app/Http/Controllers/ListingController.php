<?php

namespace App\Http\Controllers;


use App\Property;
use App\City;
use App\Society;
use App\Phase;
use App\Block;
use Illuminate\Support\Facades\DB;

use Illuminate\Http\Request;

class ListingController extends Controller
{
    //


    public function Show_Societies($cityid){



        //$Property1 =Society::where('city_id','=',$cityid)->orderBy('society_name')->get();
        $Property1 =DB::table('property')->where('property.city_id','=',$cityid)->select(DB::raw('count(*) as total'),'property.society_id','society.society_name')
            ->join('society','property.society_id','=','society.id')
            ->groupBy('property.society_id','society.society_name')->get();
$x=$cityid;

  //print_r($Property1);

       return view("listings.house",compact("Property1","x"));


    }

}
