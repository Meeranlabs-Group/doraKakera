<?php

namespace App\Http\Controllers;

use App\User;
use App\Blog;
use App\Property;


use Illuminate\Support\Facades\Hash;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ProfileController extends Controller
{


    public function profile()
    {
        $id = Auth::user()->getid();
        $data= User::find($id);
        if($data->path=="")
        {
            $data->path="assets/img/user logo.png";
        }

        return view('user.profile.profile', compact('data'));
    }


    public function RentProperties(){

        
}

    public function SaleProperties(){

}

    public function updateprofile(Request $request){

        $update=new User();



                if( ($files=$request->file('file'))  ){
                $name = $files->getClientOriginalName();
                $path = $files->move($request['name'], $name);
                $update['path'] = $path;
                }


                else{
                    $path = $request->path;
                }

                Auth::user()->where('id', Auth::user()->getid())->update(['name'=> $request['name'],'number'=> $request['number'],
                    'address'=> $request['address'], 'city'=> $request['city'] , 'email'=> $request['email'],'zip'=> $request['zip'],
                    'path'=> $path ]);

                return redirect('/profile');

    }

    protected function validator(array $data)
    {
        return Validator::make($data, [

            'password' => 'required|string|min:6|confirmed',
        ]);
    }

        public function updatepassword(Request $request)
        {


            $update = new User();

            //        $update['name'] = $request['name'];
//echo     Auth::user()->password ;

//            $echo =     ) ;
//
//
//            echo "<br>";
//         echo $echo;


            if (Hash::check($request['password'], Auth::user()->password ) ){
                echo "dsvjsdnvkj";
            }


//            Auth::user()->where('id', Auth::user()->getid())->update(['password'=> $request['password'] ]);



        }

}
