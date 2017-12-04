<?php

namespace App\Http\Controllers;


use App\Property;
use App\feature;
use Illuminate\Http\Request;

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



        $post=new Property;
        $feature=new Feature;


        if ($post['property_type']='Houses' || $post['property_type']='Flates' || $post['property_type']='Upper Portions'
                    || $post['property_type']='Lower Portions' || $post['property_type']='Farms House' || $post['property_type']='Rooms')

        {
           $post['title'] = $request['title'];
            $post['property_type'] = $request['property_type'];
            $post['description'] = $request['description'];
            $post['price'] = $request['price'];
            $post['city'] = $request['city'];
            $post['address'] = $request['address'];




            $feature['built_in_year'] = $request['Built_in_Year'];
            $feature['view'] = $request['View'];
            $feature['parking_space'] = $request['=Parking_Spaces'];


            $feature['double_glazed_window'] = $request['house_Double_Glazed_Windows'];
            $feature['central_air_conditioning'] = $request['house_Central_Air_Conditioning'];
            $feature['central_heating'] = $request['house_Central_Heating'];
            $feature['flooring'] = $request['flooring'];
            $feature['electricity_backup'] = $request['Electricity_Backup'];
            $feature['waste_disposal'] = $request['house_Waste_Disposal'];
            $feature['total_number_of_floors'] = $request['house_Total_Number_of_Floors'];
            $feature['other_main_feature'] = $request['house_Other_Main_Features'];
            $feature['furnished'] = $request['house_Furnished'];



                //            Buisness and Communication
            $feature['broadband_internet_access'] = $request['house_Broadband_Internet_Access'];
            $feature['satellite_or_cable_tv_ready'] = $request['house_Satellite_or_Cable_TV_Ready'];
            $feature['intercom'] = $request['house_Intercom'];
            $feature['other_business_and_communication'] = $request['house_Other_Business_and_Communication_Facilities'];





//            Nearby Locations and Other Facilities

                $feature['nearby_schools'] = $request['house_Nearby_Schools'];
                $feature['nearby_hospitals'] = $request['house_Nearby_Hospitals'];
                $feature['nearby_shopping_malls'] = $request['house_Nearby_Shopping_Malls'];
                $feature['nearby_restaurants'] = $request['house_Nearby_Restaurants'];
                $feature['distance_from_airport_kms'] = $request['house_Distance_From_Airport'];
                $feature['other_nearby_places'] = $request['house_Nearby_Public_Transport_Service'];


            //            Rooms
            $feature['number_of_servant_quaters'] = $request['house_Number_of_Servant_Quarters'];
            $feature['drawing_room'] = $request['house_Drawing_Room'];
            $feature['dining_room'] = $request['house_Dining_Room'];
            $feature['number_of_kitchens'] = $request['house_Number_of_Kitchens'];
            $feature['number_of_kitchens'] = $request['house_Study_Room'];
            $feature['prayer_room'] = $request['house_Prayer_Room'];
            $feature['powder_room'] = $request['house_Powder_Room'];
            $feature['gym_room'] = $request['house_Gym_Room'];
            $feature['number_of_store_rooms'] = $request['house_Number_of_Store_Rooms'];
            $feature['steaming_room'] = $request['house_Steaming_Room'];
            $feature['lounge_or_sitting_room'] = $request['house_Lounge_or_Sitting_Room'];
            $feature['laundry_room'] = $request['house_Laundry_Room'];
            $feature['other_room'] = $request['house_Other_Rooms'];



            //            Healthcare Recreational



                $feature['lawn_or_garden'] = $request['house_Lawn_or_Garden'];
                $feature['swimming_pool'] = $request['house_Swimming_Pool'];
                $feature['sauna'] = $request['house_Sauna'];
                $feature['jacuzzi'] = $request['house_Jacuzzi'];
                $feature['other_health_and_recreational'] = $request['house_Other_Healthcare_and_Recreation_Facilities'];




                //            Other Facilities

                $feature['maintainance_staff'] = $request['house_Maintenance_Staff'];
                $feature['security_staff'] = $request['house_Security_Staff'];
                $feature['facilities_for_disabled'] = $request['house_Facilities_for_Disabled'];
                $feature['other_facilities'] = $request['house_Other_Facilities'];


//                    $table->string('number_of_bedrooms')->nullable();
//                    $table->string('number_of-bathrooms')->nullable();


        }
// $post['Published_at']= Carbon::now();

        $post->save();


        $feature->save();
        return redirect('/');

    }


    public function show_all(){

        $property= Property::all() ;

        return view('properties',compact('property'));
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
