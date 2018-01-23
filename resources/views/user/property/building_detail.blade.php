@include('include.head')
@include('partials.navbar')


<div id="page-content">
    <div class="container">
    @include('partials.bread_crum_detail')
        <!--end breadcrumb-->
        <div class="row">


            <div class="col-md-3">
                @include('partials.sidesearch')
            </div>


            <div class="col-md-9">

                <div class="quick-navigation" data-fixed-after-touch="">
                    <div class="wrapper">
                        <ul>
                            <li><a href="#description" class="scroll">Description</a></li>
                            <li><a href="#map" class="scroll">Map</a></li>
                            <li><a href="#facilities" class="scroll">Facilities</a></li>

                        </ul>
                    </div>
                </div>








                <div class="main-content">
                    <div class="title">
                        <div class="left">
                            <h1>{{ucfirst($data[0]->title)}}</h1>
                            <h3><a href="#">{{$data[0]->block_name}}</a> - <a href="#">{{$data[0]->phase_name}}</a> - <a href="#">{{$data[0]->society_name}}</a> - <a href="#">{{$data[0]->city_name}}</a>(63 properties)</h3>
                        </div>

                        <div class="right">
                            <a href="#map" class="icon scroll"><i class="fa fa-map-marker"></i>See on the map</a>
                            <a href="t" class="btn btn-primary btn-rounded scroll">Call Now</a>
                        </div>
                    </div>
                    <!--end title-->
                    <section id="gallery">
                        <div class="gallery-detail">
                            <div class="ribbon"><div class="offer-number">{{$data[0]->purpose}}</div></div>

                            <div class="one-item-carousel">

                        @foreach($photos as $photo)
                                <div class="image">

                                    <img src="{{ asset($photo->path)  }}" alt="">
                                </div>
                        @endforeach


                            </div>
                        </div>
                    </section>
                    <h2>Description</h2>
                    <div class="row">
                        <div class="col-md-8">
                            <section id="description">
                                <h3>Chohan Estate Offers</h3>
                                <p>{{$data[0]->description}}
                                </p>

                            </section>

                            <section id="facilities">


                                    <h2>Main Features</h2>

                                <div class="row">

                                    @if($data[0]->built_in_year!="")
                                        <div class="col-md-4 col-sm-4">
                                            <div class="feature">
                                                <h5><i class="icon_box-checked" style="color: #1fad83"> </i>Built in Year: <strong>{{$data[0]->built_in_year}}</strong></h5>
                                            </div>
                                            <!--end feature-->
                                        </div>
                                    @endif


                                        @if($data[0]->total_number_of_floors!="")
                                        <div class="col-md-4 col-sm-4">
                                            <div class="feature">
                                                <h5><i class="icon_box-checked" style="color: #1fad83"> </i>Number of Floors: <strong>{{$data[0]->total_number_of_floors}}</strong></h5>
                                            </div>
                                            <!--end feature-->
                                        </div>
                                    @endif

                                        @if($data[0]->electricity_backup_type!="")
                                        <div class="col-md-4 col-sm-4">
                                            <div class="feature">
                                                <h5><i class="icon_box-checked" style="color: #1fad83"> </i>Electricity Backup: <strong>{{$data[0]->electricity_backup_type}}</strong></h5>
                                            </div>
                                            <!--end feature-->
                                        </div>
                                    @endif
                                        @if($data[0]->flooring_type!="")
                                        <div class="col-md-4 col-sm-4">
                                            <div class="feature">
                                                <h5><i class="icon_box-checked" style="color: #1fad83"> </i>Flooring Type: <strong>{{$data[0]->flooring_type}}</strong></h5>
                                            </div>
                                            <!--end feature-->
                                        </div>
                                    @endif


                                        @if($data[0]->public_parking!="")
                                        <div class="col-md-4 col-sm-4">
                                            <div class="feature">
                                                <h5><i class="icon_box-checked" style="color: #1fad83"> </i>Public Parking </h5>
                                            </div>
                                            <!--end feature-->
                                        </div>
                                    @endif

                                        @if($data[0]->parking_space!="")
                                        <div class="col-md-4 col-sm-4">
                                            <div class="feature">
                                                <h5><i class="icon_box-checked" style="color: #1fad83"> </i>Parking Space: <strong>{{$data[0]->parking_space}}</strong></h5>
                                            </div>
                                            <!--end feature-->
                                        </div>
                                    @endif


                                        @if($data[0]->underground_parking!="")
                                        <div class="col-md-4 col-sm-4">
                                            <div class="feature">
                                                <h5><i class="icon_box-checked" style="color: #1fad83"> </i>Underground Parking</h5>
                                            </div>
                                            <!--end feature-->
                                        </div>
                                    @endif


                                    @if($data[0]->lobby_in_building!="")
                                        <div class="col-md-4 col-sm-4">
                                            <div class="feature">
                                                <h5><i class="icon_box-checked" style="color: #1fad83"> </i>Lobby in Building</h5>
                                            </div>
                                            <!--end feature-->
                                        </div>
                                    @endif

                                        @if($data[0]->central_air_conditioning!="")
                                        <div class="col-md-4 col-sm-4">
                                            <div class="feature">
                                                <h5><i class="icon_box-checked" style="color: #1fad83"> </i>Central Air Conditioning</h5>
                                            </div>
                                            <!--end feature-->
                                        </div>
                                    @endif

                                        @if($data[0]->central_heating!="")
                                        <div class="col-md-4 col-sm-4">
                                            <div class="feature">
                                                <h5><i class="icon_box-checked" style="color: #1fad83"> </i>Central Heating</h5>
                                            </div>
                                            <!--end feature-->
                                        </div>
                                    @endif
                                        @if($data[0]->service_elevators_in_building!="")
                                        <div class="col-md-4 col-sm-4">
                                            <div class="feature">
                                                <h5><i class="icon_box-checked" style="color: #1fad83"> </i>Service Elevators in Building</h5>
                                            </div>
                                            <!--end feature-->
                                        </div>
                                    @endif
                                        @if($data[0]->waste_disposal!="")
                                        <div class="col-md-4 col-sm-4">
                                            <div class="feature">
                                                <h5><i class="icon_box-checked" style="color: #1fad83"> </i>Waste Disposal</h5>
                                            </div>
                                            <!--end feature-->
                                        </div>
                                    @endif
                                        @if($data[0]->elevator_or_lift!="")
                                        <div class="col-md-4 col-sm-4">
                                            <div class="feature">
                                                <h5><i class="icon_box-checked" style="color: #1fad83"> </i>Elevator or Lift</h5>
                                            </div>
                                            <!--end feature-->
                                        </div>
                                    @endif

                                </div>


                                <h2>Business and Communication</h2>
<div class="row">


    @if($data[0]->broadband_internet_access!="")
        <div class="col-md-4 col-sm-4">
            <div class="feature">
                <h5><i class="icon_box-checked" style="color: #1fad83"> </i>Broadband Internet Access</h5>
            </div>
            <!--end feature-->
        </div>
    @endif
        @if($data[0]->satellite_or_cable_tv_ready!="")
        <div class="col-md-4 col-sm-4">
            <div class="feature">
                <h5><i class="icon_box-checked" style="color: #1fad83"> </i>Satellite or Cable TV Ready</h5>
            </div>
            <!--end feature-->
        </div>
    @endif
        @if($data[0]->business_center_or_media_room_building!="")
        <div class="col-md-4 col-sm-4">
            <div class="feature">
                <h5><i class="icon_box-checked" style="color: #1fad83"> </i>Business Center or Media Room</h5>
            </div>
            <!--end feature-->
        </div>
    @endif

        @if($data[0]->confrence_room_in_building!="")
        <div class="col-md-4 col-sm-4">
            <div class="feature">
                <h5><i class="icon_box-checked" style="color: #1fad83"> </i>Conference Room in Building</h5>
            </div>
            <!--end feature-->
        </div>
    @endif

        @if($data[0]->intercom!="")
        <div class="col-md-4 col-sm-4">
            <div class="feature">
                <h5><i class="icon_box-checked" style="color: #1fad83"> </i>Intercom</h5>
            </div>
            <!--end feature-->
        </div>
    @endif

        @if($data[0]->atm_and_machine_in_building!="")
        <div class="col-md-4 col-sm-4">
            <div class="feature">
                <h5><i class="icon_box-checked" style="color: #1fad83"> </i>ATM Credit Card Machines in Building</h5>
            </div>
            <!--end feature-->
        </div>
    @endif



        @if($data[0]->other_business_and_communication!="")
        <div class="col-md-4 col-sm-4">
            <div class="feature">
                <h5><i class="icon_box-checked" style="color: #1fad83"> </i>Other Business and Communication <strong>{{$data[0]->other_business_and_communication}}</strong></h5>
            </div>
            <!--end feature-->
        </div>
    @endif
</div>

                     <h2>Nearby Location</h2>
                        <div class="row">


                            @if($data[0]->nearby_schools!="")
                                <div class="col-md-4 col-sm-4">
                                    <div class="feature">
                                        <h5><i class="icon_box-checked" style="color: #1fad83"></i>Nearby Schools</h5>
                                    </div>
                                    <!--end feature-->
                                </div>
                            @endif
                                @if($data[0]->nearby_hospitals!="")
                                <div class="col-md-4 col-sm-4">
                                    <div class="feature">
                                        <h5><i class="icon_box-checked" style="color: #1fad83"></i>Nearby Hospitals</h5>
                                    </div>
                                    <!--end feature-->
                                </div>
                            @endif
                                @if($data[0]->nearby_shopping_malls!="")
                                <div class="col-md-4 col-sm-4">
                                    <div class="feature">
                                        <h5><i class="icon_box-checked" style="color: #1fad83"></i>Nearby Shopping Malls</h5>
                                    </div>
                                    <!--end feature-->
                                </div>
                            @endif
                                @if($data[0]->nearby_restaurants!="")
                                <div class="col-md-4 col-sm-4">
                                    <div class="feature">
                                        <h5><i class="icon_box-checked" style="color: #1fad83"></i>Nearby Restaurants</h5>
                                    </div>
                                    <!--end feature-->
                                </div>
                            @endif
                                @if($data[0]->nearby_public_transport!="")
                                <div class="col-md-4 col-sm-4">
                                    <div class="feature">
                                        <h5><i class="icon_box-checked" style="color: #1fad83"></i>Nearby Public Transport Service</h5>
                                    </div>
                                    <!--end feature-->
                                </div>
                            @endif

                                @if($data[0]->distance_from_airport_kms!="")
                                <div class="col-md-4 col-sm-4">
                                    <div class="feature">
                                        <h5><i class="icon_box-checked" style="color: #1fad83"></i>Distance From Airport <strong>{{$data[0]->distance_from_airport_kms}}</strong></h5>
                                    </div>
                                    <!--end feature-->
                                </div>
                            @endif

                                @if($data[0]->other_nearby_places!="")
                                <div class="col-md-4 col-sm-4">
                                    <div class="feature">
                                        <h5><i class="icon_box-checked" style="color: #1fad83"></i>Distance From Airport <strong>{{$data[0]->distance_from_airport_kms}}</strong></h5>
                                    </div>
                                    <!--end feature-->
                                </div>
                            @endif

                        </div>

                        <h2>Other Facilities</h2>

                                <div class="row">


                                    @if($data[0]->maintenance_staff!="")
                                        <div class="col-md-4 col-sm-4">
                                            <div class="feature">
                                                <h5><i class="icon_box-checked" style="color: #1fad83"></i>Maintenance Staff</h5>
                                            </div>
                                            <!--end feature-->
                                        </div>
                                    @endif

                                        @if($data[0]->security_staff!="")
                                            <div class="col-md-4 col-sm-4">
                                                <div class="feature">
                                                    <h5><i class="icon_box-checked" style="color: #1fad83"></i>Security Staff</h5>
                                                </div>
                                                <!--end feature-->
                                            </div>
                                        @endif

                                        @if($data[0]->laundry_or_dry_cleaning_facilities!="")
                                            <div class="col-md-4 col-sm-4">
                                                <div class="feature">
                                                    <h5><i class="icon_box-checked" style="color: #1fad83"></i>Laundry or Dry Cleaning Facility</h5>
                                                </div>
                                                <!--end feature-->
                                            </div>
                                        @endif
                                        @if($data[0]->facilities_for_disabled!="")
                                            <div class="col-md-4 col-sm-4">
                                                <div class="feature">
                                                    <h5><i class="icon_box-checked" style="color: #1fad83"></i>Facilities for Disabled</h5>
                                                </div>
                                                <!--end feature-->
                                            </div>
                                        @endif
                                        @if($data[0]->pet_policy_type!="")
                                            <div class="col-md-4 col-sm-4">
                                                <div class="feature">
                                                    <h5><i class="icon_box-checked" style="color: #1fad83"></i>{{$data[0]->pet_policy_type}}</h5>
                                                </div>
                                                <!--end feature-->
                                            </div>
                                        @endif
                                    @if($data[0]->facilities!="")
                                            <div class="col-md-4 col-sm-4">
                                                <div class="feature">
                                                    <h5><i class="icon_box-checked" style="color: #1fad83"></i>Other Facilities <strong>{{$data[0]->facilities}}</strong></h5>
                                                </div>
                                            <!--end feature-->
                                            </div>
                                        @endif

                                </div>

                            </section>
                            <section id="map">
                                <h2>Map</h2>
                                <div id="map-item" class="map height-300 box"></div>
                                <!--end map-->
                            </section>
                        </div>
                        <!--end col-md-8-->
                        <div class="col-md-4">
                            <div class="sidebar">

                                <aside class="box">
                                    <dl>

                                        <dt>Area:</dt>
                                        <dd>{{ $data[0]->unit_size }}-{{ $data[0]->unit_type }}</dd>

                                        @if($data[0]->Underground_Parking!="")
                                            <dt>Underground Parking:</dt>
                                            <dd>{{ $data[0]->Underground_Parking }}</dd>
                                        @endif

                                    </dl>
                                </aside>

                                <aside>
                                    @include('user.property.contact_detail')
                                </aside>
                            </div>
                            <!--end sidebar-->
                        </div>
                        <!--end col-md-4-->
                    </div>
                    <!--end row-->

                </div>


                </div>
            </div>



        </div>
    </div>


@include('partials.footer')
@include('include.foot')