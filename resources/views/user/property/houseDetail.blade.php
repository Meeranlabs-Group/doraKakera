@include('include.head')
@include('partials.navbar')


<div id="page-content">
    <div class="container">
        <ol class="breadcrumb">
            <li><a href="#">Home</a></li>
            <li><a href="#">Listing</a></li>
            <li class="active">Detail</li>
        </ol>
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
                            <h3><a href="#">{{$data[0]->block_name}}, {{$data[0]->phase_name}},{{$data[0]->society_name}},{{$data[0]->city_name}}</a> (63 properties)</h3>
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
                                <h2>Facilities</h2>
                                <ul class="bullets half">

                                    <h3>Main Features</h3>

                                    @if($data[0]->built_in_year!="")
                                    <li>Built in Year  <strong>{{$data[0]->built_in_year}}</strong></li>
                                    @endif

                                        @if($data[0]->total_number_of_floors!="")
                                            <li>Total Number of Floors  <strong>{{$data[0]->total_number_of_floors}}</strong></li>
                                        @endif

                                        @if($data[0]->electricity_backup_type!="")
                                        <li>Electricity Backup Type <strong>{{$data[0]->electricity_backup_type}}</strong></li>
                                        @endif

                                        @if($data[0]->	flooring_type!="")
                                        <li>Flooring Type <strong>{{$data[0]->flooring_type}}</strong></li>
                                        @endif







                                    @if($data[0]->double_glazed_window!="")
                                        <label><input type="checkbox" checked disabled >Double Glazed Windows</label>
                                    @endif


                                    @if($data[0]->central_air_conditioning!="")
                                        <label><input type="checkbox" checked disabled >Central Air Conditioning</label>
                                    @endif


                                    @if($data[0]->central_heating!="")
                                        <label><input type="checkbox" checked disabled>Central Heating</label>
                                    @endif


                                    @if($data[0]->waste_disposal!="")
                                        <label><input type="checkbox" checked disabled >Waste Disposal</label>
                                    @endif



                                        @if($data[0]->furnished!="")
                                            <label><input type="checkbox" checked disabled name="Central_Air_Conditioning">Furnished</label>
                                        @endif

                    <h3>Business and Communication</h3>

                                    @if($data[0]->broadband_internet_access!="")
                                        <label><input type="checkbox" checked disabled >Broadband Internet Access</label>
                                    @endif


                                    @if($data[0]->satellite_or_cable_tv_ready!="")
                                        <label><input type="checkbox" checked disabled >Satellite or Cable TV Ready</label>
                                    @endif

                                    @if($data[0]->intercom!="")
                                        <label><input type="checkbox" checked disabled >Intercom</label>
                                    @endif


                     <h3>Nearby Location</h3>

                                @if($data[0]->nearby_schools!="")
                                        <label><input type="checkbox" checked disabled >Nearby Schools</label>
                                    @endif

                                @if($data[0]->nearby_hospitals!="")
                                        <label><input type="checkbox" checked disabled >Nearby Hospitals</label>
                                    @endif

                                @if($data[0]->nearby_shopping_malls!="")
                                        <label><input type="checkbox" checked disabled >Nearby Shopping Malls</label>
                                    @endif

                                @if($data[0]->nearby_restaurants!="")
                                        <label><input type="checkbox" checked disabled >Nearby Restaurants</label>
                                    @endif
                                @if($data[0]->nearby_public_transport!="")
                                        <label><input type="checkbox" checked disabled >Nearby Public Transport Service</label>
                                    @endif



                      <h3>Rooms</h3>

                                    @if($data[0]->drawing_room!="")
                                        <label><input type="checkbox" checked disabled >Drawing Room</label>
                                    @endif

                                    @if($data[0]->dining_room!="")
                                        <label><input type="checkbox" checked disabled >Dining Room</label>
                                    @endif

                                    @if($data[0]->study_room!="")
                                        <label><input type="checkbox" checked disabled >Study Room</label>
                                    @endif

                                    @if($data[0]->prayer_room!="")
                                        <label><input type="checkbox" checked disabled >Prayer Room</label>
                                    @endif

                                    @if($data[0]->powder_room!="")
                                        <label><input type="checkbox" checked disabled >Powder Room</label>
                                    @endif

                                    @if($data[0]->gym_room!="")
                                        <label><input type="checkbox" checked disabled >Gym Room</label>
                                    @endif

                                    @if($data[0]->steaming_room!="")
                                        <label><input type="checkbox" checked disabled >Steaming Room</label>
                                    @endif


                                    @if($data[0]->laundry_room!="")
                                        <label><input type="checkbox" checked disabled >Laundry Room</label>
                                    @endif



                                    @if($data[0]->lounge_or_sitting_room!="")
                                        <label><input type="checkbox" checked disabled >Lounge or Sitting Room</label>
                                    @endif

                       <h3>Healthcare Recreational</h3>


                                    @if($data[0]->lawn_or_garden!="")
                                        <label><input type="checkbox" checked disabled >Lawn or Garden</label>
                                    @endif
                                    @if($data[0]->swimming_pool!="")
                                        <label><input type="checkbox" checked disabled >Swimming Pool</label>
                                    @endif
                                    @if($data[0]->sauna!="")
                                        <label><input type="checkbox" checked disabled >Sauna</label>
                                    @endif
                                    @if($data[0]->jacuzzi!="")
                                        <label><input type="checkbox" checked disabled >Jacuzzi</label>
                                    @endif




                        <h3>Other Facilities</h3>

                                    @if($data[0]->maintenance_staff!="")
                                        <label><input type="checkbox" checked disabled >Maintenance Staff</label>
                                    @endif
                                    @if($data[0]->security_staff!="")
                                        <label><input type="checkbox" checked disabled >Security Staff</label>
                                    @endif
                                    @if($data[0]->facilities_for_disabled!="")
                                        <label><input type="checkbox" checked disabled >Facilities for Disabled</label>
                                    @endif

                                </ul>
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
                                        <dt>Bed Rooms:</dt>
                                        <dd>{{$data[0]->number_of_bedrooms}}</dd>
                                        <dt>Bath Rooms:</dt>
                                        <dd>{{$data[0]->number_of_bathrooms}}</dd>
                                        <dt>Kitchen Rooms:</dt>
                                        <dd>{{$data[0]->number_of_kitchens}}</dd>

                                        <dt>Area:</dt>
                                        <dd>{{ $data[0]->unit_size }}-{{ $data[0]->unit_type }}</dd>
                                        <dt>Parking:</dt>
                                        <dd>{{ $data[0]->parking_space }}</dd>
                                        <dt>Swimming:</dt>
                                        <dd>{{ $data[0]->swimming_pool }}</dd>

                                    </dl>
                                </aside>

                                <aside>
                                    <h1 style="color:grey;">Contact Us</h1>
                                    <address style="padding-left:10%;">

                                        <strong>Head Office</strong><br>
                                        G -16, Phase 1, Masjid Chowk,<br>
                                        Defence Housing Authority Lahore Cantt., Pakistan.<br>
                                        <br>
                                        <strong>UAN:</strong> +92-42-111-124-124<br>
                                        <strong>Mobile:</strong> 0321 9124124<br>
                                        <strong>Tel:</strong> +92-42-35727771-4, 35728881-4<br>
                                        <strong>Fax:</strong> +92-42-35729990<br>
                                        <a href="#">hello@example.com</a><br>
                                        <strong>skype:</strong> your.company
                                        <h2>Social Profiles</h2>
                                        <div class="social-icons">
                                            <a href="https://www.facebook.com/ChohanEstatePk/" target="_blank"><i class="fa fa-facebook"></i></a>
                                            <a href="https://twitter.com/ChohanEstatePk/" target="_blank"><i class="fa fa-twitter"></i></a>
                                            <a href="https://www.instagram.com/ChohanEstatePk/" target="_blank"><i class="fa fa-instagram"></i></a>
                                            <a href="https://www.youtube.com/watch?v=tVQWQIb_2ok" target="_blank"><i class="fa fa-youtube"></i></a>
                                        </div>



                                    </address>
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