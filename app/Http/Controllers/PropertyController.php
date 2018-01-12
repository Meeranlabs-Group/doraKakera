<?php

namespace App\Http\Controllers;


use App\Block;
use App\Blog;
use App\City;
use App\Phase;
use App\Photo;
use App\Property;
use App\Society;
use App\User;
use Illuminate\Http\UploadedFile;
use Illuminate\Support\Facades\DB;
use App\feature;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Carbon\Carbon;

class PropertyController extends Controller
{

    public function getphases($id){

        $codes=Phase::where('society_id','=',$id)->pluck("id");
        $names=Phase::where('society_id','=',$id)->pluck("phase_name");

        $result=array();


        foreach( $codes as $index => $code ) {

            $result[]=array("name"=>$names[$index], "id"=>$code);


        }



        return json_encode($result);



    }


    public function get_blocks($id,$x){


        $names=Block::where('block_name','like','%'.$id.'%')->where('phase_id','=',$x)->pluck("block_name");

print_r($names);




        return json_encode($names);



    }



    public function getblocks($id){

        $codes=Block::where('phase_id','=',$id)->pluck("id");
        $names=Block::where('phase_id','=',$id)->pluck("block_name");

        $result=array();


        foreach( $codes as $index => $code ) {

            $result[]=array("name"=>$names[$index], "id"=>$code);


        }



        return json_encode($result);



    }

    public function getsocieties($id){

        $codes=Society::where('city_id','=',$id)->pluck("id");
$names=Society::where('city_id','=',$id)->pluck("society_name");

$result=array();


        foreach( $codes as $index => $code ) {

            $result[]=array("name"=>$names[$index], "id"=>$code);


        }



        return json_encode($result);



    }
    public function addproperty(){
       $cities=City::all();
//       $phases=Phase::all();
//        $societies=Society::all();
//       $blocks=Block::all();

       return view('addproperty',compact('cities','societies','phases','blocks'));
    }
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





//
//        //HOUSE PORTION
//
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






    }
    public function OnChangeeditproperty(Request $request)
    {


        $property = Property::where('id','=',$request['id'])->get();

        $feature= feature::where('property_id','=',$request['id'])->get();
        $photos =Photo::where('property_id','=',$request['id']);





//
//        //HOUSE PORTION
//
        if($request['property_type']== "Houses"){
            return view('edit_feature.edit_house_feature',compact('property','feature','photos'));
        }


        else if($request['property_type']== "Flates"){
            return view('edit_feature.edit_flat_feature',compact('property','feature','photos'));
        }
        else if($request['property_type']== "Buildings"){
            return view('edit_feature.edit_building_feature',compact('property','feature','photos'));
        }


        else if($request['property_type']== "Office"){
            return view('edit_feature.edit_office_feature',compact('property','feature','photos'));
        }
        else if($request['property_type']== "Warehouses"){
            return view('edit_feature.edit_warehouse_feature',compact('property','feature','photos'));
        }

        else if($request['property_type']== "Upper-Portions"){
            return view('edit_feature.edit_portion&farm_feature',compact('property','feature','photos'));
        }

        else if($request['property_type']== "Lower-Portions"){
            return view('edit_feature.edit_portion&farm_feature',compact('property','feature','photos'));
        }

        else if($request['property_type']== "Farms-House"){
            return view('edit_feature.edit_portion&farm_feature',compact('property','feature','photos'));
        }

        else if($request['property_type']== "Residential-Plots"){
            return view('edit_feature.edit_plot_feature',compact('property','feature','photos'));
        }

        else if($request['property_type']== "Commercial-Plots"){
            return view('edit_feature.edit_plot_feature',compact('property','feature','photos'));
        }

        else if($request['property_type']== "Agricultural-Land"){
            return view('edit_feature.edit_land_feature',compact('property','feature','photos'));
        }

        else if($request['property_type']== "Industrial-Land"){
            return view('edit_feature.edit_land_feature',compact('property','feature','photos'));
        }


        else if($request['property_type']== "Shops"){
            return view('edit_feature.edit_shop_feature',compact('property','feature','photos'));
        }

        else if($request['property_type']== "Warehouses"){
            return view('edit_feature.edit_Warehouses_feature',compact('property','feature','photos'));
        }

        else if($request['property_type']== "Factories"){
            return view('edit_feature.edit_factory_feature',compact('property','feature','photos'));
        }

        else if($request['property_type']== "Buildings"){
            return view('edit_feature.edit_building_feature',compact('property','feature','photos'));
        }

        else
        {
            return view('edit_feature.edit_other_feature',compact('property','feature','photos'));
        }






    }


    public function search(Request $request)
    {


        $photos = Photo::all();
        $cites=City::all();

        $Houses= $request['Houses'];
        $Flates = $request['Flates'];
        $Farms_House = $request['Farms-House'];
        $Offices = $request['Offices'];
        $Rooms = $request['Rooms'];
        $Shops = $request['Shops'];
        $Upper_Portions = $request['Upper-Portions'];

        $Lower_Portions = $request['Lower-Portions'];
        $Residential_Plots = $request['Residential-Plots'];
        $Commercial_Plots = $request['Commercial-Plots'];
        $Agricultural_Land = $request['Agricultural-Land'];
        $Industrial_Land = $request['Industrial-Land'];
        $Warehouses = $request['Warehouses'];

        $Factories = $request['Factories'];
        $Buildings = $request['Buildings'];
        $Plot_Files = $request['Plot-Files'];

        $Plot_Forms = $request['Plot-Forms'];
        $Other = $request['Other'];

        $purpose= $request['purpose'];
        $city = $request['city'];
        $society = $request['society'];
        $phase = $request['Phase'];
        $size = $request['size'];
        $block = $request['block'];
        $unit_type = $request['area'];



//        $city1 = DB::table('city')->where('city_name','LIKE','%'.$city.'%');
//        $society1 = DB::table('society')->where('society_name','LIKE','%'.$society.'%');
//        $phase1 = DB::table('phase')->where('phase_name','LIKE','%'.$phase.'%');
//        $block1 = DB::table('block')->where('block_name','LIKE','%'.$block.'%');

//            $search=DB:: table('property')->where('property.purpose','LIKE','%'.$purpose.'%')

//
//
//        $property1=Property::select('feature.*','society.*','city.*','property.*') ->where('property.purpose','like','%'.$purpose.'%')
//       // $property1=Property::select('city.*','property.*') ->where('property.purpose','like','%'.$purpose.'%')
//            ->where('property.unit_type','like','%'.$unit_type.'%')->where('property.unit_size','like','%'.$size.'%')
//            ->leftjoin('feature','property.id','=','feature.property_id')
//
//            ->leftjoin('city','city.id','=','property.city_id');
////            if($city!='')
////           $property1 ->where('city_id','=',$city);
//
//      $property1 ->leftjoin('society','society.id','=','property.society_id');
//      $property1 ->leftjoin('society','society.id','=','property.society_id');
////        if($society!='')
////            $property1 ->where('society_id','=',$society);
//           // ->leftjoin('society','society.id','=','property.society_id')
////            ->merge($society1)
////            ->merge($phase1)
////            ->merge($block1)
//            //->get();
//
//
        $property1=Property::select('feature.*','city.*','society.*','phase.*','block.*','property.*');
//        if($unit_type!='')
//            $property1 ->where('property.unit_type','=',$purpose);

        if($Houses!='')
            $property1 ->orwhere('property.property_type','=',$Houses);

        if($Flates!='')
            $property1 ->orwhere('property.property_type','=',$Flates);

        if($Farms_House!='')
            $property1 ->orwhere('property.property_type','=',$Farms_House);

        if($Offices!='')
            $property1 ->orwhere('property.property_type','=',$Offices);

        if($Rooms!='')
            $property1 ->orwhere('property.property_type','=',$Rooms);

        if($Shops!='')
            $property1 ->orwhere('property.property_type','=',$Shops);

        if($Upper_Portions!='')
            $property1 ->orwhere('property.property_type','=',$Upper_Portions);

        if($Lower_Portions!='')
            $property1 ->orwhere('property.property_type','=',$Lower_Portions);

        if($Residential_Plots!='')
            $property1 ->orwhere('property.property_type','=',$Residential_Plots);

        if($Commercial_Plots!='')
            $property1 ->orwhere('property.property_type','=',$Commercial_Plots);

        if($Agricultural_Land!='')
            $property1 ->orwhere('property.property_type','=',$Agricultural_Land);

        if($Industrial_Land!='')
            $property1 ->orwhere('property.property_type','=',$Industrial_Land);

        if($Warehouses!='')
            $property1 ->orwhere('property.property_type','=',$Warehouses);


        if($Factories!='')
            $property1 ->orwhere('property.property_type','=',$Factories);
        if($Buildings!='')
            $property1 ->orwhere('property.property_type','=',$Buildings);

        if($Plot_Files!='')
            $property1 ->orwhere('propertyproperty_typee','=',$Plot_Files);
        if($Plot_Forms!='')
            $property1 ->orwhere('property.property_type','=',$Plot_Forms);

        if($unit_type!='')
            $property1 ->where('property.unit_type','=',$unit_type);
        if($size!='')
            $property1 ->where('property.unit_size','=',$size);
        if($Other!='')
            $property1 ->orwhere('property.property_type','=',$Other);


        if($purpose!='')
            $property1 ->where('property.purpose','=',$purpose);
        if($city!='')
            $property1 ->where('property.city_id','=',$city);
        if($society!='')
            $property1 ->where('property.society_id','=',$society);
        if($phase!='')
            $property1 ->where('property.phase_id','=',$phase);
        if($block!='')
            $property1 ->where('property.block_id','=',$block);

        $property1  ->leftjoin('feature','property.id','=','feature.property_id')->
        join('city','city.id','=','property.city_id')->join('society','society.id','=','property.society_id')
            ->join('phase','phase.id','=','property.phase_id')
            ->join('block','block.id','=','property.block_id')
            ->where('ad_status','=','1');


        //->get();
        $property=$property1 ->paginate(9);





//        $filter=array("purpose" => $purpose,"city_id"=> $city,"society_id" => $society,"phase_id"=>$phase,"block_id"=>$block,
//            "unit_type"=>$unit_type, "unit_size" => $size);
//
//
//
//       print_r($filter);
//
//
//
//        foreach ($filter as $key => $value) {
//
//            if($value !=""){
//
//                $result[]=array('col'=>$key,'val'=>$value);
//            }
//        }
////print_r($result);
//
//        $property1 =Property::with('feature')->
//        where('ad_status','=','1');
//
//            foreach($result as $f){
//                $property1->where($f['col'],'=',$f['val']);
//
//
//            }
//
//$d=$property1->get();
//
//        print_r($d);
////        $property=Property::select('feature.*','city.*','society.*','phase.*','block.*','property.*')
//        $property=Property::select() ->leftjoin('feature','property.id','=','feature.property_id')
//            ->join('city','city.city_name','=',$city)
//            ->join('society','society.name','=',$society)
//            ->join('phase','phase.name','=',$phase)
//            ->join('block','block.name','=',$block)
//            ->where('property.unit_type','like','%'.$unit_type.'%')->where('property.unit_size','like','%'.$size.'%')
//            ->where('property.purpose','like','%'.$purpose.'%')
//
//
//        ->paginate(8);
//



















        return view('/properties', compact('property','photos','cites'));
    }



    public function updateproperty(Request $request){

        $property_id= $request['property_id'];
        $feature_id = $request['feature_id'];




        Property::where('id','=',$property_id)->update(['title'=> $request['title'],'property_type'=>$request['property_type'],
            'description' => $request['description'], 'price' =>$request['price'], 'city_id'=>$request['city'],'society_id'=>$request['society'],
            'phase_id'=>$request['Phase'],'block_id'=>$request['block'],
            'address'=>$request['address'], 'purpose'=>$request['purpose'],'unit_type'=>$request['unit_type'],
            'unit_size'=>$request['unit_size'] ]);


        feature::where('property_id','=',$property_id)->update([ 'built_in_year' => $request['Built_in_Year'],
            'view' => $request['View'], 'parking_space' => $request['Parking_Spaces'], 'double_glazed_window'=> $request['Double_Glazed_Windows'],
            'central_air_conditioning'=>$request['Central_Air_Conditioning'],'central_heating'=>$request['Central_Heating'],
            'flooring_type'=>$request['Flooring_type'],'electricity_backup_type' => $request['Electricity_Backup'],
            'waste_disposal' => $request['Waste_Disposal'],'floor' => $request['Floor'],'total_number_of_floors'=> $request['Total_Number_of_Floors'],
            'other_main_feature'=> $request['Other_Main_Features'],  'furnished' => $request['Furnished'],'furnished'=> $request['Furnished'],
            'lobby_in_building' => $request['Lobby_in_Building'], 'total_floor_building'=>$request['Total_Floors_in_Building'],
            'number_of_elevators_in_building' => $request['Number_of_Elevators_in_Building'],'service_elevators_in_building'=> $request['Service_Elevators_in_Building'],
            'public_parking'=>$request['Public_Parking'],'underground_parking'=> $request['Underground_Parking'],'elevator_or_lift' => $request['Elevator_or_Lift'],
            'number_of_units'=> $request['Number_of_Units'],'flooring_type' => $request['Flooring_type'],'electricity_backup_type'=>$request['Electricity_Backup_type'],
            'broadband_internet_access'=> $request['Broadband_Internet_Access'],'satellite_or_cable_tv_ready'=> $request['Satellite_or_Cable_TV_Ready'],
            'intercom'=> $request['Intercom'],'other_business_and_communication'=> $request['Other_Business_and_Communication_Facilities'],
            'business_center_or_media_room_building'=> $request['Business_Center_or_Media_Room_in_Building'],'confrence_room_in_building'=> $request['Conference_Room_in_Building'],
            'atm_and_machine_in_building'=>$request['ATM_Credit_Card_Machines_in_Building'],'nearby_schools'=>$request['Nearby_Schools'],
            'nearby_hospitals'=> $request['Nearby_Hospitals'],'nearby_shopping_malls'=> $request['Nearby_Shopping_Malls'],
            'nearby_restaurants'=> $request['Nearby_Restaurants'],'distance_from_airport_kms'=> $request['Distance_From_Airport(kms)'],
            'other_nearby_places'=> $request['Other_Nearby_Places'],'nearby_public_transport'=> $request['Nearby_Public_Transport_Service'],
            'number_of_bedrooms'=> $request['Number_of_Bedrooms'],'number_of_bathrooms'=> $request['Number_of_Bathrooms'],
            'number_of_servant_quaters' => $request['Number_of_Servant_Quarters'],'drawing_room'=>$request['Drawing_Room'],
            'dining_room'=> $request['Dining_Room'],'number_of_kitchens'=> $request['Number_of_Kitchens'],'study_room'=> $request['Study_Room'],
            'prayer_room'=> $request['Prayer_Room'],'powder_room'=> $request['Powder_Room'],'gym_room'=>$request['Gym_Room'],
            'number_of_store_rooms'=> $request['Number_of_Store_Rooms'],'steaming_room'=> $request['Steaming_Room'],
            'lounge_or_sitting_room'=> $request['Lounge_or_Sitting_Room'],'laundry_room' => $request['Laundry_Room'],
            'other_room'=> $request['Other_Rooms'],'lawn_or_garden'=> $request['Lawn_or_Garden'],'swimming_pool'=>$request['Swimming_Pool'],
            'sauna' => $request['Sauna'],'jacuzzi'=> $request['Jacuzzi'],'other_health_and_recreational'=> $request['Other_Healthcare_and_Recreation_Facilities'],
            'maintenance_staff' => $request['Maintenance_Staff'], 'security_staff'=> $request['Security_Staff'],'facilities_for_disabled'=>$request['Facilities_for_Disabled'],
            'laundry_or_dry_cleaning_facilities'=>$request['Laundry_or_Dry_Cleaning_Facility'],'communal_or_shared_kitchen_in_building'=>$request['Communal_or_Shared_Kitchen_in_Building'],
            'cctv_security_installed'=>$request['CCTV_Security_Installed'],'cafeteria_or_canteen_in_building'=> $request['Cafeteria_or_Canteen_in_Building'],
            'pet_policy_type'=> $request['Pet_Policy_type'],'facilities'=> $request['Other_Facilities'],'possesion'=>$request['Possesion'],
            'corner'=> $request['Corner'],'park_facing'=>$request['Park_Facing'],'disputed' =>$request['Disputed'],'file'=> $request['File'],
            'balloted'=> $request['Balloted'],'sewerage'=>$request['Sewerage'], 'electricity'=> $request['Electricity'],
            'water_supply'=> $request['Water_Supply'],'sui_gas'=> $request['Sui_Gas'],'boundry_wall'=>$request['Boundary_Wall'],
            'other_plot_features'=>$request['Other_Plot_Features']
        ]);
        
        return redirect('/myproperties');
    }



    public function store(Request $request)
    {

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

            $temp = str_slug($request['title'], '-');
            if(!Property::all()->where('slug',$temp)->isEmpty()){
                $i = 1;
                $newslug = $temp . '-' . $i;
                while(!Property::all()->where('slug',$newslug)->isEmpty()){
                    $i++;
                    $newslug = $temp . '-' . $i;
                }
              $temp =  $newslug;
            }
               if ($request['society']==""){
                   $request['society']=2000;
                   $request['phase']=14;
                   $request['block']=142;

               }
               else if($request['phase']=="")
               {
                   $request['phase']=14;
                   $request['block']=142;
               }
               else if($request['block']=="")
               {
                   $request['block']=142;
               }

            $id = DB::table('property')->insertGetId(
                [
                    'user_id'=> Auth::user()->getid(),'title'=> $request['title'],'address'=> $request['address'],'slug'=> $temp, 'property_type'=>  $request['property_type'],'description' => $request['description'],
                    'price'=>$request['price'],'city_id'=>$request['city'],'society_id'=>$request['society'],
                    'phase_id'=>$request['Phase'],'block_id'=>$request['block'],'address'=>$request['address'],'status'=>1,
                    'purpose'=>$request['purpose'],'unit_type'=>$request['unit_type'],'unit_size'=>$request['unit_size'],'created_at'=>Carbon::now()

                ]

            );
            if($files=$request->file('files')){
                for($i=0;$i<count($files);$i++) {
                    $photo=new Photo;
                    $name = $files[$i]->getClientOriginalName();

                   // $name->resize('1200','800');


                    if($i==1){
                        $photo['rank'] = 1;
                    }
                    $l=preg_replace("/[^a-zA-Z0-9\s]/","",$request['title']);

                    $path = $files[$i]->move($l, $name);


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

        }


        $feature->save();
//        return redirect('/myproperties');
        return redirect('/properties');


    }

    public function show_all(){
        $cites=City::all();
        $photos = Photo::all();
        $Property1 =DB::table('property')->select(DB::raw('count(*) as total'),'property.city_id','city.city_name')->join('city','property.city_id','=','city.id')
            ->groupBy('property.city_id','city.city_name')->get();

        $property=Property::select('feature.*','city.*','society.*','phase.*','block.*','property.*')->leftjoin('feature','property.id','=','feature.property_id')->
        join('city','city.id','=','property.city_id')->join('society','society.id','=','property.society_id')
            ->join('phase','phase.id','=','property.phase_id')
            ->join('block','block.id','=','property.block_id')
            ->where('ad_status','=','1')->paginate(8);


        $sidesearch=Property::selectRaw('property_type, COUNT(*) as count')
            ->groupBy('property_type')
//            ->orderBy('count', 'asc')
            ->get();

        return view('properties',compact('property','Property1','photos','cites','sidesearch'));
    }


    public function show_all_plots(){
        $cites=City::all();
        $photos = Photo::all();
        $Property1 =DB::table('property')->select(DB::raw('count(*) as total'),'property.city_id','city.city_name')->join('city','property.city_id','=','city.id')
            ->groupBy('property.city_id','city.city_name')->get();


        $property=Property::select('feature.*','city.*','society.*','phase.*','block.*','property.*')
            ->leftjoin('feature','property.id','=','feature.property_id')
            ->join('city','city.id','=','property.city_id')->join('society','society.id','=','property.society_id')
            ->join('phase','phase.id','=','property.phase_id')
            ->join('block','block.id','=','property.block_id')
            ->where('ad_status','=','1')
            ->where('property.society_id','=',"52")->where('property.city_id','=',"2")

            ->Where(function ($query) {

                $query->Where('property.property_type','=',"Residential-Plots")->orWhere('property.property_type','=',"Commercial-Plots")
                    ->orWhere('property.property_type','=',"Agricultural-Land")->orWhere('property.property_type','=',"Industrial-Land");
            })

            ->paginate(8);

        $sidesearch=Property::selectRaw('property_type, COUNT(*) as count')
            ->groupBy('property_type')
//            ->orderBy('count', 'asc')
            ->get();




        return view('properties',compact('property','Property1','photos','cites','sidesearch'));


    }
    public function mainPage(){ //showing cities and their count of properties and Blog Title


     $articles= Blog::all(); 


 


        $Property1 =DB::table('property')->select(DB::raw('count(*) as total'),'property.city_id','city.city_name')->join('city','property.city_id','=','city.id')
            ->groupBy('property.city_id','city.city_name')->get();


        $hot=Property::select('city.*','society.*','phase.*','block.*','property.*')->where('superhot','=',1)->leftjoin('feature','property.id','=','feature.property_id')->join('city','city.id','=','property.city_id')->join('society','society.id','=','property.society_id')
            ->join('phase','phase.id','=','property.phase_id')->join('block','block.id','=','property.block_id')->get();

        $photos = Photo::all();
//print_r($hot);
//print_r($photos);
        $cities= City::all();

//      return view('welcome',compact('hot','photos'));
     return view('welcome',compact('hot','photos','Property1','articles','cities'));
    }


    public function myproperties(){

        $id=Auth::user()->id;
       //$data=Property::select('property.*')->leftjoin('feature','property.id','=','feature.property_id')->get();
        //$data= Property::find(1)->user;

        $photos = Photo::all();

            $result=$this->usermenu();

// $data=Property::select('property.*')->join('city', 'city.id', '=', 'property.city_id')->join('society','society.id','=','property.society_id')
//     ->join('phase','phase.id','=','property.phase_id')->join('block','block.id','=','property.block_id')->get();
//        //$data= Property::find(1)->user;
$data=Property::select('feature.*','city.*','society.*','phase.*','block.*','property.*')->where('property.user_id','=',$id)->leftjoin('feature','property.id','=','feature.property_id')->
join('city','city.id','=','property.city_id')->join('society','society.id','=','property.society_id')
    ->join('phase','phase.id','=','property.phase_id')->join('block','block.id','=','property.block_id')->paginate(10);



      return view('user.property.myproperties',compact('data','photos','result'));

    }




    public function propertydetail($id){
        $cites=City::all();



       // $data = Property::find($id)->get();
        $data=Property::select('feature.*','city.*','society.*','phase.*','block.*','property.*')->where('property.slug','=',$id)->leftjoin('feature','property.id','=','feature.property_id')->
        join('city','city.id','=','property.city_id')->join('society','society.id','=','property.society_id')
            ->join('phase','phase.id','=','property.phase_id')
            ->join('block','block.id','=','property.block_id')->get();

        foreach ($data as $datas) {
            if ($datas->society_name == "Other") {

                $datas->society_name = "";
                $datas->phase_name = "";
                $datas->block_name = "";

            } else if ($datas->phase_name == "Other") {
                $datas->phase_name = "";
                $datas->block_name = "";
            } else if ($datas->block_name == "Other") {
                $datas->block_name = "";
            }
        }

        $photos = Photo::where("property_id",$data[0]->id)->get();

        $sidesearch=Property::selectRaw('property_type, COUNT(*) as count')
            ->groupBy('property_type')
//            ->orderBy('count', 'asc')
            ->get();


        $opt=$data[0]->property_type;


        if ($opt == "Houses"){

           return view('user.property.houseDetail',compact('data','photos','cites','sidesearch'));
        }

        if ($opt == "Flates"){
              return view('user.property.flateDetail',compact('data','photos','cites','sidesearch'));
        }
        if ($opt == "Buildings"){
              return view('user.property.building_detail',compact('data','photos','cites','sidesearch'));
        }
        if ($opt == "Factories"){
              return view('user.property.factory_detail',compact('data','photos','cites','sidesearch'));
        }
        if ($opt == "Agricultural-Land" || $opt == "Industrial-Land" ){
              return view('user.property.land_detail',compact('data','photos','cites','sidesearch'));
        }
        if ($opt == "Offices"){
              return view('user.property.office_detail',compact('data','photos','cites','sidesearch'));
        }
              if ($opt == "Residential-Plots" || $opt == "Commercial-Plots"){
              return view('user.property.plot_detail',compact('data','photos','cites','sidesearch'));
        }
        if ($opt == "Upper-Portions" || $opt == "Lower-Portions" ||  $opt="Farms-House" ){
              return view('user.property.portion&farm_detail',compact('data','photos','cites','sidesearch'));
        }

        if ($opt == "Shops"){
              return view('user.property.shop_detail',compact('data','photos','cites','sidesearch'));
        }
        if ($opt == "Warehouses"){
              return view('user.property.warehouse_detail',compact('data','photos','cites','sidesearch'));
        }


        if ($opt == "Other") {
            return view('user.property.other_detail', compact('data', 'photos', 'cites','sidesearch'));
        }



    }



}
