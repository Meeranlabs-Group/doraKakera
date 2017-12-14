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
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //



    }








    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
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
        return redirect('/');

    }

    public function show_all(){

        $property= Property::all() ;

       return view('properties',compact('property'));
//        print_r(phpinfo());
    }



    public function mainPage(){ //showing cities and their count of properties


        $Property= Property::select('city')->Distinct()->get();
        $i=0;
        echo "<br>";
        foreach ( $Property as $p) {

            $count = Property::select('city')-> where('city', '=', $p->city)->groupby()->count();

            $Property1[$i] = array('city'=>$p->city,'count'=>$count);

$i++;

        }


print_r($Property1);


     // return view('welcome',compact('Property1'));
    }


    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //

        $posts= Property::latest('published_at')->get();



    }

    public function detail(){

        return view('propertyDetail');
    }



    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
