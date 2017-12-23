@extends('edit_feature.mainview')
@section('body')

    <section id="features">
        <div class="title">
            <h2>Features</h2>
            <aside class="step">4</aside>
        </div>


        <div class="row">
            <div class="col-md-12">
                <h3>Main Features</h3>
                <ul class="checkboxes inline half list-unstyled">

                    <div class="row">
                        <div class="col-md-3">
                            <div class="form-group width-80">
                                <label>Built in Year</label>
                                <select  name="Built_in_Year" class="framed width-80">
                                    <option value="{{ $feature[0]->built_in_year }}">{{ $feature[0]->built_in_year }}</option>
                                    <option value="" disabled>Select</option>
                                    <?php
                                    for($i = 1990 ; $i <= date('Y'); $i++){
                                        echo "<option value=".$i.">".$i."</option>";
                                    }
                                    ?>

                                </select>


                            </div>
                        </div>


                        {{--<li><label><input type="text" name="Built_in_Year">Built in Year</label></li>--}}


                        <div class="col-md-3">
                            <div class="form-group width-80">
                                <label>Parking Spaces</label>
                                <select  name="Parking_Spaces" class="framed width-80">
                                    <option value="{{ $feature[0]->parking_space }}">{{ $feature[0]->parking_space }}</option>
                                    <option value="" disabled>Select</option>

                                    <option value="0">0</option>
                                    <option value="1">1</option>
                                    <option value="2">2</option>
                                    <option value="3">3</option>
                                    <option value="4">4</option>
                                    <option value="5">5></option>

                                </select>
                            </div>
                        </div>

                        <div class="col-md-3">
                            <div class="form-group width-80">
                                <label>Flooring</label>
                                <select  name="Flooring_type" class="framed width-80">
                                    <option value="{{ $feature[0]->Flooring_type }}">{{ $feature[0]->number_of_bedrooms }}</option>
                                    <option value="" disabled>Select</option>
                                    <option value="Flooring_None">None</option>
                                    <option value="Flooring_Tiles">Tiles</option>
                                    <option value="Flooring_Marble">Marble</option>
                                    <option value="Flooring_Wooden">Wooden</option>
                                    <option value="Flooring_Chip">Chip</option>
                                    <option value="Flooring_Cement">Cement</option>
                                    <option value="Flooring_Other">Other</option>

                                </select>
                            </div>
                        </div>

                        <div class="col-md-3">
                            <div class="form-group width-80">
                                <label>Electricity Backup</label>
                                <select name="Electricity_Backup_type" class="framed width-80">
                                    <option value="{{ $feature[0]->Electricity_Backup_type }}">{{ $feature[0]->number_of_bedrooms }}</option>
                                    <option value="" disabled>Select</option>
                                    <option value="Electricity_Backup_None">None</option>
                                    <option value="Electricity_Backup_Generator">Generator</option>
                                    <option value="Electricity_Backup_Ups">Ups</option>
                                    <option value="Electricity_Backup_Solar">Solar</option>
                                    <option value="Electricity_Backup_Other">Other</option>
                                </select>



                            </div>
                        </div>



                        <div class="col-md-3">
                            <div class="form-group width-80">
                                <label>Total Floors in Building</label>
                                {{--<div class="input-number">--}}
                                {{--<div class="change-button plus">--}}
                                {{--<i class="fa fa-caret-up"></i>--}}
                                {{--</div>--}}
                                {{--<div class="change-button minus">--}}
                                {{--<i class="fa fa-caret-down"></i>--}}
                                {{--</div>--}}

                                <input type="number"  name="Total_Floors_in_Building" value="{{ $feature[0]->total_floor_building }}">
                                {{--</div>--}}
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="form-group width-80">
                                <label>Number of Elevators in Building</label>
                                {{--<div class="input-number">--}}
                                {{--<div class="change-button plus">--}}
                                {{--<i class="fa fa-caret-up"></i>--}}
                                {{--</div>--}}
                                {{--<div class="change-button minus">--}}
                                {{--<i class="fa fa-caret-down"></i>--}}
                                {{--</div>--}}

                                <input type="number"  name="Number_of_Elevators_in_Building" value="{{ $feature[0]->number_of_elevators_in_building }}">

                                {{--</div>--}}


                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="form-group width-80">
                                <label>Number of Bedrooms</label>


                                <select  name="Number_of_Bedrooms" class="framed width-80">
                                    <option value="{{ $feature[0]->number_of_bedrooms }}">{{ $feature[0]->number_of_bedrooms }}</option>
                                    <option value="" disabled>Select</option>


                                    <option value="0">0</option>
                                    <option value="1">1</option>
                                    <option value="2">2</option>
                                    <option value="3">3</option>
                                    <option value="4">4</option>
                                    <option value="5">5></option>

                                </select>

                            </div>
                        </div>

                        <div class="col-md-3">
                            <div class="form-group width-80">
                                <label>Number of Kitchens</label>
                                <select  name="Number_of_Kitchens" class="framed width-80">
                                    <option value="{{ $feature[0]->	number_of_kitchens }}">{{ $feature[0]->	number_of_kitchens }}</option>
                                    <option value="" disabled>Select</option>

                                    <option value="0">0</option>
                                    <option value="1">1</option>
                                    <option value="2">2</option>
                                    <option value="3">3</option>
                                    <option value="4">4</option>
                                    <option value="5">5></option>

                                </select>

                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="form-group width-80">
                                <label>View</label>

                                <input type="text" name="View" value="{{ $feature[0]->View}}">


                            </div>
                        </div>

                        <div class="col-md-3">
                            <div class="form-group width-80">
                                <label>Number of Bathrooms</label>

                                <select  name="Number_of_Bathrooms" class="framed width-80">
                                    <option value="{{ $feature[0]->number_of_bathrooms }}">{{ $feature[0]->number_of_bathrooms }}</option>
                                    <option value="" disabled>Select</option>


                                    <option value="0">0</option>
                                    <option value="1">1</option>
                                    <option value="2">2</option>
                                    <option value="3">3</option>
                                    <option value="4">4</option>
                                    <option value="5">5></option>

                                </select>

                            </div>
                        </div>

                        <div class="clearfix"></div>

                        <div class="col-md-3">

                        </div>
                        <div class="col-md-3">

                        </div>
                        <div class="col-md-3">

                        </div>



                        <ul>







                            @if($feature[0]->	lobby_in_building)
                                <li><label><input type="checkbox" checked name="Lobby_in_Building">Lobby in Building</label></li>
                            @else
                                <li><label><input type="checkbox" name="Lobby_in_Building">Lobby in Building</label></li>
                            @endif


                        @if($feature[0]->double_glazed_window)
                                <li><label><input type="checkbox" checked name="Double_Glazed_Windows">Double Glazed Windows</label></li>
                            @else
                                <li><label><input type="checkbox" name="Double_Glazed_Windows">Double Glazed Windows</label></li>
                            @endif

                            @if($feature[0]->central_air_conditioning)
                                <li><label><input type="checkbox" checked name="Central_Air_Conditioning">Central Air Conditioning</label></li>
                            @else
                                <li><label><input type="checkbox" name="Central_Air_Conditioning">Central Air Conditioning</label></li>

                            @endif
                            @if($feature[0]->central_heating)
                                <li><label><input type="checkbox" checked name="Central_Heating">Central Heating</label></li>
                            @else
                                <li><label><input type="checkbox" name="Central_Heating">Central Heating</label></li>

                            @endif


                            @if($feature[0]->waste_disposal)
                                <li><label><input type="checkbox" checked name="Waste_Disposal">Waste Disposal</label></li>
                            @else
                                <li><label><input type="checkbox" name="Waste_Disposal">Waste Disposal</label></li>
                            @endif

                            {{--<li><label><input type="text" name="Floor">Floor</label></li>--}}
                            {{--<li><label><input type="text" name="Total_Floors_in_Building">Total Floors in Building</label></li>--}}
                            {{--<li><label><input type="text" name="Number_of_Elevators_in_Building">Number of Elevators in Building</label></li>--}}

                            <li><label><input type="checkbox" name="Service_Elevators_in_Building">Service Elevators in Building</label></li>
                            @if($feature[0]->service_elevators_in_building)
                                <li><label><input type="checkbox" checked name="Service_Elevators_in_Building">Service Elevators in Building</label></li>
                            @else
                                <li><label><input type="checkbox" name="Service_Elevators_in_Building">Service Elevators in Building</label></li>
                            @endif
                            {{--<li><label><input type="text" name="Other_Main_Features">Other Main Features</label></li>--}}

                            @if($feature[0]->furnished)
                                <li><label><input type="checkbox" checked name="Furnished">Furnished</label></li>
                            @else
                                <li><label><input type="checkbox" name="Furnished">Furnished</label></li>
                            @endif
                        </ul>
                    </div>
                </ul>
                <!--end checkboxes-->
            </div>
            <!--end col-md-4-->


            {{--<div class="col-md-6">--}}
                {{--<h3>Buisness and Communication</h3>--}}
                {{--<ul class="checkboxes inline half list-unstyled">--}}



                    {{--<li><label><input type="checkbox" name="Broadband_Internet_Access">Broadband Internet Access</label></li>--}}
                    {{--<li><label><input type="checkbox" name="Satellite_or_Cable_TV_Ready">Satellite or Cable TV Ready</label></li>--}}


                    {{--<li><label><input type="checkbox" name="Intercom">Intercom</label></li>--}}
                    {{--<li><label><input type="checkbox" name="ATM_Credit_Card_Machines_in_Building">ATM Credit Card Machines in Building</label></li>--}}
                    {{--<li> <label>Other Business and Communication <br>Facilities</label> </li>--}}
                    {{--<li><div class="form-group width-60">--}}

                            {{--<input type="text" name="Other_Business_and_Communication_Facilities">--}}
                        {{--</div>--}}
                    {{--</li>--}}
                    {{--<li><label><input type="text" name="Other_Business_and_Communication_Facilities">Other Business and Communication Facilities</label></li>--}}


                {{--</ul>--}}
                {{--<!--end checkboxes-->--}}
            {{--</div>--}}
            <!--end col-md-4-->
            <div class="col-md-6">
                <h3> Buisness and Communication</h3>
                <div  id="b&c">
                    <ul class="checkboxes inline half list-unstyled " >


                        @if($feature[0]->broadband_internet_access)
                            <li><label><input type="checkbox" checked name="Broadband_Internet_Access">Broadband Internet Access</label></li>
                        @else
                            <li><label><input type="checkbox" name="Broadband_Internet_Access">Broadband Internet Access</label></li>
                        @endif

                        @if($feature[0]->satellite_or_cable_tv_ready)
                            <li><label><input type="checkbox" checked name="Satellite_or_Cable_TV_Ready">Satellite or Cable TV Ready</label></li>
                        @else
                            <li><label><input type="checkbox" name="Satellite_or_Cable_TV_Ready">Satellite or Cable TV Ready</label></li>
                        @endif


                            @if($feature[0]->business_center_or_media_room_building)
                                <li><label><input type="checkbox" checked name="Business_Center_or_Media_Room_in_Building">Business Center or Media Room</label></li>
                            @else
                                <li><label><input type="checkbox" name="Business_Center_or_Media_Room_in_Building">Business Center or Media Room</label></li>
                            @endif

                            <li><label><input type="checkbox" name="Conference_Room_in_Building">Conference Room in Building</label></li>


                            @if($feature[0]->confrence_room_in_building)
                                <li><label><input type="checkbox" checked name="Conference_Room_in_Building">Conference Room in Building</label></li>
                            @else
                                <li><label><input type="checkbox" name="Conference_Room_in_Building">Conference Room in Building</label></li>
                            @endif

                            @if($feature[0]->intercom)
                            <li><label><input type="checkbox" checked name="Intercom">Intercom</label></li>
                        @else
                            <li><label><input type="checkbox" name="Intercom">Intercom</label></li>
                        @endif

                            <li><label><input type="checkbox" name="ATM_Credit_Card_Machines_in_Building">ATM Credit Card Machines in Building</label></li>
                            @if($feature[0]->atm_and_machine_in_building)
                                <li><label><input type="checkbox" checked name="ATM_Credit_Card_Machines_in_Building">ATM Credit Card Machines in Building</label></li>
                            @else
                                <li><label><input type="checkbox" name="ATM_Credit_Card_Machines_in_Building">ATM Credit Card Machines in BuildingIntercom</label></li>
                            @endif

                        <div class="clearfix"></div>
                        <li> <label>Other Business and Communication <br>Facilities</label> </li>
                        <li><div class="form-group width-60">

                                <input type="text" name="Other_Business_and_Communication_Facilities" value="{{ $feature[0]->other_business_and_communication}}">
                            </div>
                        </li>


                    </ul>
                </div>
                <!--end checkboxes-->
            </div>

            {{--<div class="col-md-6">--}}


                {{--<h3>Nearby Locations </h3>--}}
                {{--<div  id="N&L">--}}
                    {{--<ul class="checkboxes inline half list-unstyled">--}}

                        {{--<li><label><input type="checkbox" name="Nearby_Schools">Nearby Schools</label></li>--}}
                        {{--<li><label><input type="checkbox" name="Nearby_Hospitals">Nearby Hospitals</label></li>--}}
                        {{--<li><label><input type="checkbox" name="Nearby_Shopping_Malls">Nearby Shopping Malls</label></li>--}}
                        {{--<li><label><input type="checkbox" name="Nearby_Restaurants">Nearby Restaurants</label></li>--}}
                        {{--<li><label><input type="checkbox" name="Nearby_Public_Transport_Service">Nearby Public Transport Service</label></li>--}}

                        {{--<li><label><input type="text" name="Other_Nearby_Places">Other Nearby Places</label></li>--}}
                        {{--<div class="clearfix"></div>--}}
                        {{--<li><label>Distance From Airport(kms)</label></li>--}}
                        {{--<li><div class="form-group width-60">--}}

                                {{--<input type="text" name="Distance_From_Airport(kms)">--}}
                            {{--</div></li>--}}
                    {{--</ul>--}}
                {{--</div>--}}
                {{--<div class="col-md-6">--}}
                    {{--<h3>Nearby Locations </h3>--}}
                    {{--<div  id="N&L">--}}
                        {{--<ul class="checkboxes inline half list-unstyled">--}}


                            {{--@if($feature[0]->nearby_schools)--}}
                                {{--<li><label><input type="checkbox" checked name="Nearby_Schools">Nearby Schools</label></li>--}}
                            {{--@else--}}
                                {{--<li><label><input type="checkbox" name="Nearby_Schools">Nearby Schools</label></li>--}}
                            {{--@endif--}}

                            {{--@if($feature[0]->nearby_hospitals)--}}
                                {{--<li><label><input type="checkbox" checked name="Nearby_Hospitals">Nearby Hospitals</label></li>--}}
                            {{--@else--}}
                                {{--<li><label><input type="checkbox" name="Nearby_Hospitals">Nearby Hospitals</label></li>--}}
                            {{--@endif--}}

                            {{--@if($feature[0]->nearby_shopping_malls)--}}
                                {{--<li><label><input type="checkbox" checked name="Nearby_Shopping_Malls">Nearby Shopping Malls</label></li>--}}
                            {{--@else--}}
                                {{--<li><label><input type="checkbox" name="Nearby_Shopping_Malls">Nearby Shopping Malls</label></li>--}}
                            {{--@endif--}}

                            {{--@if($feature[0]->nearby_restaurants)--}}
                                {{--<li><label><input type="checkbox" checked name="Nearby_Restaurants">Nearby Restaurants</label></li>--}}
                            {{--@else--}}
                                {{--<li><label><input type="checkbox" name="Nearby_Restaurants">Nearby Restaurants</label></li>--}}
                            {{--@endif--}}


                            {{--@if($feature[0]->nearby_public_transport)--}}
                                {{--<li><label><input type="checkbox" checked name="Nearby_Public_Transport_Service">Nearby Public Transport Service</label></li>--}}
                            {{--@else--}}
                                {{--<li><label><input type="checkbox" name="Nearby_Public_Transport_Service">Nearby Public Transport Service</label></li>--}}
                            {{--@endif--}}


                            {{--<li><label><input type="text" name="Other_Nearby_Places">Other Nearby Places</label></li>--}}
                            {{--<div class="clearfix"></div>--}}
                            {{--<li><label>Distance From Airport(kms)</label></li>--}}
                            {{--<li><div class="form-group width-60">--}}

                                    {{--<input type="text" name="Distance_From_Airport(kms)" value="{{ $feature[0]->distance_from_airport_kms }}">--}}
                                {{--</div></li>--}}
                        {{--</ul>--}}
                    {{--</div>--}}
                    {{--<!--end checkboxes-->--}}
                {{--</div>--}}


            {{--</div>--}}
            <!--end row-->
            <div class="clearfix"></div>









            <div class="col-md-6">
                <h3>Rooms</h3>
                <div  id="R">
                    <ul class="checkboxes inline half list-unstyled">

                        @if($feature[0]->drawing_room)
                            <li><label><input type="checkbox" checked name="Drawing_Room">Drawing Room</label></li>
                        @else
                            <li><label><input type="checkbox" name="Drawing_Room">Drawing Room</label></li>
                        @endif


                        @if($feature[0]->dining_room)
                            <li><label><input type="checkbox" checked name="Dining_Room">Dining Room</label></li>
                        @else
                            <li><label><input type="checkbox" name="Dining_Room">Dining Room</label></li>
                        @endif

                        @if($feature[0]->study_room)
                            <li><label><input type="checkbox" checked name="Study_Room">Study Room</label></li>
                        @else
                            <li><label><input type="checkbox" name="Study_Room">Study Room</label></li>
                        @endif


                        @if($feature[0]->prayer_room)
                            <li><label><input type="checkbox"checked name="Prayer_Room">Prayer Room</label></li>
                        @else
                            <li><label><input type="checkbox" name="Prayer_Room">Prayer Room</label></li>
                        @endif


                        @if($feature[0]->powder_room)
                            <li><label><input type="checkbox" checked name="Powder_Room">Powder Room</label></li>
                        @else
                            <li><label><input type="checkbox" name="Powder_Room">Powder Room</label></li>
                        @endif


                        @if($feature[0]->gym_room)
                            <li><label><input type="checkbox"checked  name="Gym_Room">Gym Room</label></li>
                        @else
                            <li><label><input type="checkbox" name="Gym_Room">Gym Room</label></li>
                        @endif


                        @if($feature[0]->steaming_room)
                            <li><label><input type="checkbox" checked name="Steaming_Room">Steaming Room</label></li>
                        @else
                            <li><label><input type="checkbox" name="Steaming_Room">Steaming Room</label></li>
                        @endif


                        @if($feature[0]->lounge_or_sitting_room)
                            <li><label><input type="checkbox"checked  name="Lounge_or_Sitting_Room">Lounge or Sitting Room</label></li>
                        @else
                            <li><label><input type="checkbox" name="Lounge_or_Sitting_Room">Lounge or Sitting Room</label></li>
                        @endif

                        @if($feature[0]->laundry_room)
                            <li><label><input type="checkbox" checked  name="Laundry_Room">Laundry Room</label></li>
                        @else
                            <li><label><input type="checkbox" name="Laundry_Room">Laundry Room</label></li>
                        @endif

                        <div class="clearfix"></div>
                        <li><label>Other Rooms</label></li>
                        <li>
                            <div class="form-group width-60">
                                <input type="number" name="Other_Rooms" value="{{ $feature[0]->other_room}}">
                            </div>
                        </li>


                        <li><label>Number of Servant Quarters</label> </li>
                        </li>
                        <li> <div class="form-group width-60">

                                <input type="number" name="Number_of_Servant_Quarters" value="{{ $feature[0]->number_of_servant_quaters}}">

                            </div> </li>


                            <li>  <label>Number of Store Rooms</label> </li>
                            <li>
                                <div class="form-group width-60">

                                    <input type="number" name="Number_of_Store_Rooms" value="{{ $feature[0]->number_of_store_rooms}}">

                                </div>

                    </ul>

                </div>
            </div>

            <!--end col-md-4-->


            <!--end col-md-4-->
            <div class="col-md-6">
                <h3>Healthcare Recreational</h3>
                <ul class="checkboxes inline half list-unstyled">

                    @if($feature[0]->sauna)
                        <li><label><input type="checkbox" checked name="Sauna">Sauna</label></li>
                    @else
                        <li><label><input type="checkbox" name="Sauna">Sauna</label></li>
                    @endif

                    @if($feature[0]->jacuzzi)
                        <li><label><input type="checkbox" checked name="Jacuzzi">Jacuzzi</label></li>
                    @else
                        <li><label><input type="checkbox" name="Jacuzzi">Jacuzzi</label></li>
                    @endif


                    <li><label>Other Healthcare and Recreation Facilities</label></li>
                    <li>
                        <div class="form-group width-60">
                            <input type="text" name="Other_Healthcare_and_Recreation_Facilities" value="{{ $feature[0]->other_health_and_recreational }}">
                        </div></li>
                </ul>
                <!--end checkboxes-->
            </div>




            {{--<div class="col-md-6">--}}
                {{--<h3>Other Facilities</h3>--}}
                {{--<ul class="checkboxes inline half list-unstyled">--}}
                    {{--<li><label><input type="checkbox" name="Maintenance_Staff">Maintenance Staff</label></li>--}}
                    {{--<li><label><input type="checkbox" name="Security_Staff">Security Staff</label></li>--}}
                    {{--<li><label><input type="checkbox" name="Laundry_or_Dry_Cleaning_Facility">Laundry or Dry Cleaning Facility</label></li>--}}
                    {{--<li><label><input type="checkbox" name="Communal_or_Shared_Kitchen_in_Building">Communal or Shared Kitchen in Building</label></li>--}}
                    {{--<li><label><input type="checkbox" name="Facilities_for_Disabled">Facilities for Disabled</label></li>--}}



                    {{--<li><label>Pet Policy</label></li>--}}


                    {{--<li><div class="form-group width-60">--}}

                            {{--<select name="Pet_Policy_type">--}}
                                {{--<option value="Pet_Policy_Allowed">Allowed</option>--}}
                                {{--<option value="Pet_Policy_Not_Allowed">Not Allowed</option>--}}
                            {{--</select>--}}
                        {{--</div>--}}
                    {{--</li>--}}


                    {{--<li><label>Other Facilities</label></li>--}}


                    {{--<li><div class="form-group width-60">--}}

                            {{--<input type="text" name="Other_Facilities">--}}
                        {{--</div>--}}
                    {{--</li>--}}

                {{--</ul>--}}
                {{--<!--end checkboxes-->--}}
            {{--</div>--}}



            <div class="col-md-4">
                <h3>Other Facilities</h3>
                <ul class="checkboxes inline half list-unstyled">


                    @if($feature[0]->maintenance_staff)
                        <li><label><input type="checkbox" checked name="Maintenance_Staff">Maintenance Staff</label></li>
                    @else
                        <li><label><input type="checkbox" name="Maintenance_Staff">Maintenance Staff</label></li>
                    @endif

                    @if($feature[0]->security_staff)
                        <li><label><input type="checkbox" checked  name="Security_Staff">Security Staff</label></li>
                    @else
                        <li><label><input type="checkbox" name="Security_Staff">Security Staff</label></li>
                    @endif


                        @if($feature[0]->laundry_or_dry_cleaning_facilities)
                            <li><label><input type="checkbox" checked  name="Laundry_or_Dry_Cleaning_Facility">Laundry or Dry Cleaning Facility</label></li>
                        @else
                            <li><label><input type="checkbox" name="Laundry_or_Dry_Cleaning_Facility">Laundry or Dry Cleaning Facility</label></li>
                        @endif

                        @if($feature[0]->communal_or_shared_kitchen_in_building	)
                            <li><label><input type="checkbox" checked name="Communal_or_Shared_Kitchen_in_Building">Communal or Shared Kitchen in Building</label></li>
                        @else
                            <li><label><input type="checkbox" name="Communal_or_Shared_Kitchen_in_Building">Communal or Shared Kitchen in Building</label></li>
                        @endif

                    @if($feature[0]->facilities_for_disabled)
                        <li><label><input type="checkbox" checked name="Facilities_for_Disabled">Facilities for Disabled</label></li>
                    @else
                        <li><label><input type="checkbox" name="Facilities_for_Disabled">Facilities for Disabled</label></li>
                    @endif

                        <li><label>Pet Policy</label></li>


                        <li><div class="form-group width-60">

                                <select name="Pet_Policy_type">
                                    <option value="{{ $feature[0]->	pet_policies }}">{{ $feature[0]->pet_policies }}</option>
                                    <option value="" disabled>Select</option>
                                    <option value="Pet_Policy_Allowed">Allowed</option>
                                    <option value="Pet_Policy_Not_Allowed">Not Allowed</option>
                                </select>
                            </div>
                        </li>


                    <li><label>Other Facilities</label></li>
                    <li>   <div class="form-group width-60"> <input type="text" name="Other_Facilities" value="{{ $feature[0]->other_facilities}}">

                        </div>

                    </li>

                </ul>
                <!--end checkboxes-->
            </div>


            <!--end col-md-4-->
        </div>
        <!--end row-->
    </section>

@endsection



