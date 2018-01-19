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
                                <h2>Facilities</h2>
                                <ul >

                                    <h3>Main Features</h3>

                                    @if($data[0]->possesion!="")
                                        <li>Possesion <strong>{{$data[0]->possesion}}</strong></li>
                                    @endif

                                    @if($data[0]->Corner!="")
                                        <li>Corner <strong>{{$data[0]->Corner}}</strong></li>
                                    @endif

                                     @if($data[0]->Park_Facing!="")
                                        <li>Park Facing <strong>{{$data[0]->Park_Facing}}</strong></li>
                                    @endif


                                    @if($data[0]->Balloted!="")
                                        <li>Balloted <strong>{{$data[0]->Balloted}}</strong></li>
                                    @endif


                                    @if($data[0]->Sewerage!="")
                                        <li>Sewerage <strong>{{$data[0]->Sewerage}}</strong></li>
                                    @endif

                                    @if($data[0]->Water_Supply!="")
                                        <li>Water Supply <strong>{{$data[0]->Water_Supply}}</strong></li>
                                    @endif




                                @if($data[0]->disputed!="")
                                        <li>Disputed <strong>{{$data[0]->disputed}}</strong></li>
                                    @endif

                                    @if($data[0]->electricity!="")
                                        <li>Electricity <strong>{{$data[0]->electricity}}</strong></li>
                                    @endif

                                    @if($data[0]->sui_Gas!="")
                                        <li>Sui Gas <strong>{{$data[0]->sui_Gas}}</strong></li>
                                    @endif

                                    @if($data[0]->irrigation!="")
                                        <li>Irrigation <strong>{{$data[0]->irrigation}}</strong></li>
                                    @endif

                                    @if($data[0]->Tube_Wells!="")
                                        <li>Tube Wells <strong>{{$data[0]->Tube_Wells}}</strong></li>
                                    @endif

                                    @if($data[0]->Accessible_by_Road!="")
                                        <li>Accessible by Road <strong>{{$data[0]->Accessible_by_Road}}</strong></li>
                                    @endif

                                   @if($data[0]->Perimeter_Fencing!="")
                                        <li>Perimeter Fencing <strong>{{$data[0]->Perimeter_Fencing}}</strong></li>
                                    @endif

                                   @if($data[0]->Is_Land_Fertile!="")
                                        <li>Is Land Fertile <strong>{{$data[0]->Is_Land_Fertile}}</strong></li>
                                    @endif

                                   @if($data[0]->Boundary_Wall!="")
                                        <li>Boundary Wall <strong>{{$data[0]->Boundary_Wall}}</strong></li>
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

                                    @if($data[0]->distance_from_airport_kms!="")
                                        <li>Distance From Airport <strong>{{$data[0]->distance_from_airport_kms}}</strong></li>
                                    @endif







                        <h3>Other Facilities</h3>


                                    @if($data[0]->security_staff!="")
                                        <label><input type="checkbox" checked disabled >Security Staff</label>
                                    @endif

                                    @if($data[0]->other_facilities!="")
                                        <li>Other Facilities<strong>{{$data[0]->other_facilities}}</strong></li>
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

                                        <dt>Other Plot Features</dt>
                                        <dd>{{$data[0]->Other Plot Feature}}</dd>


                                        <dt>Area:</dt>
                                        <dd>{{ $data[0]->unit_size }}-{{ $data[0]->unit_type }}</dd>

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