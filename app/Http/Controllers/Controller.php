<?php

namespace App\Http\Controllers;


use App\User;
use App\Blog;
use App\Property;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;

use Illuminate\Support\Facades\Auth;
use PhpParser\Node\Expr\Array_;


class Controller extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;


    public function usermenu(){
        $id= Auth::user()->getid();
        $sale=Property::where('user_id','=',$id)->where('purpose','=','Sale')->count();
        $rent=Property::where('user_id','=',$id)->where('purpose','=','Rent')->count();
        $approved=Blog::where('user_id','=',$id)->where('status','=',1)->count();
        $disapproved=Blog::where('user_id','=',$id)->where('status','=',0)->count();
        $allArticle=Blog::where('user_id','=',$id)->count();



//        $propertytype=Property::where('user_id','=',$id)->where('purpose','=','Sale')->count();
        return Array($sale,$rent,$approved,$disapproved,$allArticle);


    }
}
