<?php

namespace App\Http\Controllers;


use App\Photo;
use App\Property;
use Illuminate\Http\UploadedFile;
use Illuminate\Support\Facades\DB;
use App\feature;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class PropertyController extends Controller
{


    public function deleteproperty($id)
    {

        $property = Property::where('id', '=', $id)->update([ 'ad_status'=> 0 ]);
        return redirect('/myproperties');

//        $feature = feature::where('property_id', '=', $id)->get();
//        $photos = Photo::where('property_id', '=', $id);

    }


        public function editproperty($id)
    {

        $property = Property::where('id','=',$id)->get();

        $feature= feature::where('property_id','=',$id)->get();
        $photos =Photo::where('property_id','=',$id);





        //HOUSE PORTION

        if($property[0]->property_type== "Houses"){
            return view('edit_feature.edit_house_feature',compact('property','feature','photos'));
        }


        else if($property[0]->property_type== "Flates"){
            return view('edit_feature.edit_flat_feature',compact('property','feature','photos'));
        }
        else if($property[0]->property_type== "Buildings"){
            return view('edit_feature.edit_building_feature',compact('property','feature','photos'));
        }





        else if($property[0]->property_type== "Office"){
            return view('edit_feature.edit_office_feature',compact('property','feature','photos'));
        }
        else if($property[0]->property_type== "Warehouses"){
            return view('edit_feature.edit_warehouse_feature',compact('property','feature','photos'));
        }

        else if($property[0]->property_type== "Upper-Portions"){
            return view('edit_feature.edit_portion&farm_feature',compact('property','feature','photos'));
        }

        else if($property[0]->property_type== "Lower-Portions"){
            return view('edit_feature.edit_portion&farm_feature',compact('property','feature','photos'));
        }

        else if($property[0]->property_type== "Farms-House"){
            return view('edit_feature.edit_portion&farm_feature',compact('property','feature','photos'));
        }

        else if($property[0]->property_type== "Residential-Plots"){
            return view('edit_feature.edit_plot_feature',compact('property','feature','photos'));
        }

        else if($property[0]->property_type== "Commercial-Plots"){
            return view('edit_feature.edit_plot_feature',compact('property','feature','photos'));
        }

        else if($property[0]->property_type== "Agricultural-Land"){
            return view('edit_feature.edit_land_feature',compact('property','feature','photos'));
        }

        else if($property[0]->property_type== "Industrial-Land"){
            return view('edit_feature.edit_land_feature',compact('property','feature','photos'));
        }


        else if($property[0]->property_type== "Shops"){
            return view('edit_feature.edit_shop_feature',compact('property','feature','photos'));
        }

        else if($property[0]->property_type== "Warehouses"){
            return view('edit_feature.edit_Warehouses_feature',compact('property','feature','photos'));
        }

        else if($property[0]->property_type== "Factories"){
            return view('edit_feature.edit_factory_feature',compact('property','feature','photos'));
        }

        else if($property[0]->property_type== "Buildings"){
            return view('edit_feature.edit_building_feature',compact('property','feature','photos'));
        }

        else
        {
            return view('edit_feature.edit_other_feature',compact('property','feature','photos'));
        }




//       return view('edit_property',compact('property','feature','photos'));

    }


    public function search(Request $request)
    {
        //

        $city = $request['city'];
        $address = $request['location'];
        $area = $request['area'];
        $size = $request['size'];


        $property = Property::orwhere('city', '=', $city)
//            ->where('address','like', '%'.$address.'%')
//            ->where('unit_type','=',$area)
            ->Where('unit_size', 'like', '%' . $size . '%')
//            ->whereIn('id', [1, 2, 3, 4, 5])
            ->get();


        $photos = Photo::all();
//        foreach ($property as $data)
//            echo $data->city;
//
////       print_r($property);

        if ($property=="[]") {
         return redirect('/properties');

        } else
        {
            return view('properties', compact('property', 'photos'));
    }



    }


    public function updateproperty(Request $request){

        $property_id= $request['property_id'];
        $feature_id = $request['feature_id'];




        Property::where('id','=',$property_id)->update(['title'=> $request['title'],'property_type'=>$request['property_type'],
            'description' => $request['description'], 'price' =>$request['price'], 'city'=>$request['city'],
            'address'=>$request['address'], 'purpose'=>$request['purpose'],'unit_type'=>$request['unit_type'],
            'unit_size'=>$request['unit_size'] ]);





    }



    public function store(Request $request)
    {


//       ini_set('post_max_size','256M');


        $post=new Property;
        $feature=new Feature;







        {


//                $post['user_id']=Auth::user()->getid();
//
//           $post['title'] = $request['title'];
//            $post['property_type'] = $request['property_type'];
//            $post['description'] = $request['description'];
//            $post['price'] = $request['price'];
//            $post['city'] = $request['city'];
//            $post['address'] = $request['address'];
//            $post['purpose'] = $request['purpose'];
//            $post['unit_type'] = $request['unit_type'];
//            $post['unit_size'] = $request['unit_size'];

            $id = DB::table('property')->insertGetId(
                [
                    'user_id'=> Auth::user()->getid(),'title'=> $request['title'], 'property_type'=>  $request['property_type'],'description' => $request['description'],
                    'price'=>$request['price'],'city'=>$request['city'],'address'=>$request['address'],
                    'purpose'=>$request['purpose'],'unit_type'=>$request['unit_type'],'unit_size'=>$request['unit_size']
                ]

            );





            if($files=$request->file('files')){
                for($i=0;$i<count($files);$i++) {
                    $photo=new Photo;
                    $name = $files[$i]->getClientOriginalName();

                    $path = $files[$i]->move($request['title'], $name);


                    $photo['property_id'] = $id;
                    $photo['path'] = $path;

                    $photo->save();
                }
            }


           $feature['property_id']=$id;
                          /*main feature*/
            $feature['built_in_year'] = $request['Built_in_Year'];
            $feature['view'] = $request['View'];
            $feature['parking_space'] = $request['Parking_Spaces'];



            $feature['double_glazed_window'] = $request['Double_Glazed_Windows'];
            $feature['central_air_conditioning'] = $request['Central_Air_Conditioning'];
            $feature['central_heating'] = $request['Central_Heating'];
            $feature['flooring_type'] = $request['Flooring_type'];
            $feature['electricity_backup_type'] = $request['Electricity_Backup'];
            $feature['waste_disposal'] = $request['Waste_Disposal'];

            $feature['floor'] = $request['Floor'];
            $feature['total_number_of_floors'] = $request['Total_Number_of_Floors'];
            $feature['other_main_feature'] = $request['Other_Main_Features'];
            $feature['furnished'] = $request['Furnished'];
            $feature['lobby_in_building'] = $request['Lobby_in_Building'];
            $feature['total_floor_building'] = $request['Total_Floors_in_Building'];
            $feature['number_of_elevators_in_building'] = $request['Number_of_Elevators_in_Building'];
            $feature['service_elevators_in_building'] = $request['Service_Elevators_in_Building'];
            $feature['public_parking'] = $request['Public_Parking'];
            $feature['underground_parking'] = $request['Underground_Parking'];
            $feature['elevator_or_lift'] = $request['Elevator_or_Lift'];
            $feature['number_of_units'] = $request['Number_of_Units'];

            $feature['flooring_type'] = $request['Flooring_type'];
            $feature['electricity_backup_type'] = $request['Electricity_Backup_type'];



                //            Buisness and Communication
            $feature['broadband_internet_access'] = $request['Broadband_Internet_Access'];
            $feature['satellite_or_cable_tv_ready'] = $request['Satellite_or_Cable_TV_Ready'];
            $feature['intercom'] = $request['Intercom'];
            $feature['other_business_and_communication'] = $request['Other_Business_and_Communication_Facilities'];
            $feature['business_center_or_media_room_building'] = $request['Business_Center_or_Media_Room_in_Building'];
            $feature['confrence_room_in_building'] = $request['Conference_Room_in_Building'];
            $feature['atm_and_machine_in_building'] = $request['ATM_Credit_Card_Machines_in_Building'];





//            Nearby Locations and Other Facilities

                $feature['nearby_schools'] = $request['Nearby_Schools'];
                $feature['nearby_hospitals'] = $request['Nearby_Hospitals'];
                $feature['nearby_shopping_malls'] = $request['Nearby_Shopping_Malls'];
                $feature['nearby_restaurants'] = $request['Nearby_Restaurants'];
                $feature['distance_from_airport_kms'] = $request['Distance_From_Airport(kms)'];
                $feature['other_nearby_places'] = $request['Other_Nearby_Places'];
                $feature['nearby_public_transport'] = $request['Nearby_Public_Transport_Service'];


            //            Rooms

            $feature['number_of_bedrooms'] = $request['Number_of_Bedrooms'];
            $feature['number_of_bathrooms'] = $request['Number_of_Bathrooms'];
            $feature['number_of_servant_quaters'] = $request['Number_of_Servant_Quarters'];
            $feature['drawing_room'] = $request['Drawing_Room'];
            $feature['dining_room'] = $request['Dining_Room'];
            $feature['number_of_kitchens'] = $request['Number_of_Kitchens'];
            $feature['study_room'] = $request['Study_Room'];
            $feature['prayer_room'] = $request['Prayer_Room'];
            $feature['powder_room'] = $request['Powder_Room'];
            $feature['gym_room'] = $request['Gym_Room'];
            $feature['number_of_store_rooms'] = $request['Number_of_Store_Rooms'];
            $feature['steaming_room'] = $request['Steaming_Room'];
            $feature['lounge_or_sitting_room'] = $request['Lounge_or_Sitting_Room'];
            $feature['laundry_room'] = $request['Laundry_Room'];
            $feature['other_room'] = $request['Other_Rooms'];



            //            Healthcare Recreational


                $feature['lawn_or_garden'] = $request['Lawn_or_Garden'];
                $feature['swimming_pool'] = $request['Swimming_Pool'];
                $feature['sauna'] = $request['Sauna'];
                $feature['jacuzzi'] = $request['Jacuzzi'];
                $feature['other_health_and_recreational'] = $request['Other_Healthcare_and_Recreation_Facilities'];


                //            Other Facilities

                $feature['maintenance_staff'] = $request['Maintenance_Staff'];
                $feature['security_staff'] = $request['Security_Staff'];
                $feature['facilities_for_disabled'] = $request['Facilities_for_Disabled'];
                $feature['laundry_or_dry_cleaning_facilities'] = $request['Laundry_or_Dry_Cleaning_Facility'];
                $feature['communal_or_shared_kitchen_in_building'] = $request['Communal_or_Shared_Kitchen_in_Building'];
                $feature['cctv_security_installed'] = $request['CCTV_Security_Installed'];
                $feature['cafeteria_or_canteen_in_building'] = $request['Cafeteria_or_Canteen_in_Building'];
                $feature['pet_policy_type'] = $request['Pet_Policy_type'];
                $feature['facilities'] = $request['Other_Facilities'];


                //plot features

            $feature['possesion'] = $request['Possesion'];
            $feature['corner'] = $request['Corner'];
            $feature['park_facing'] = $request['Park_Facing'];
            $feature['disputed'] = $request['Disputed'];
            $feature['file'] = $request['File'];
            $feature['balloted'] = $request['Balloted'];
            $feature['sewerage'] = $request['Sewerage'];
            $feature['electricity'] = $request['Electricity'];
            $feature['water_supply'] = $request['Water_Supply'];
            $feature['sui_gas'] = $request['Sui_Gas'];
            $feature['boundry_wall'] = $request['Boundary_Wall'];
            $feature['other_plot_features'] = $request['Other_Plot_Features'];







//                    $table->string('number_of_bedrooms')->nullable();
//                    $table->string('number_of-bathrooms')->nullable();


        }



// $post['Published_at']= Carbon::now();



//        $id= insertGetId($post);


//        $post->save();







        $feature->save();
        return redirect('/myproperties');

    }

    public function show_all(){

        $property= Property::all();
        $photos = Photo::all();


       return view('properties',compact('property','photos'));
//        print_r(phpinfo());
    }

    public function mainPage(){ //showing cities and their count of properties

        $Property1 = DB::table('Property')->select('city',DB::raw('count(*) as total'))->groupBy('city')->get();

        $hot=Property::where('superhot','=',1)->get();

        $photos = Photo::all();

//      return view('welcome',compact('hot','photos'));
      return view('welcome',compact('hot','photos','Property1'));
    }


    public function myproperties(){

        $id=Auth::user()->id;
        $data= Property::where('user_id','=',$id)->where('ad_status','=',1)->get();
        $photos = Photo::all();

       return view('user.property.myproperties',compact('data','photos'));

    }




    public function propertydetail($id){

        $data = Property::find($id)->get();

        $photos = Photo::where("property_id","$id")->get();


        return view('user.property.propertyDetail',compact('data','photos'));
    }



}
