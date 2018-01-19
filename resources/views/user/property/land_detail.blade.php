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



                            {{--<h2>Facilities</h2>--}}

                            <section id="facilities">

                                <h2>Main Features</h2>
                                <div class="row">
                                    <div class="col-md-4 col-sm-4">
                                        <div class="feature">
                                            @if($data[0]->possesion!="")
                                                <h4><i class="icon_box-checked" style="color: #1fad83"> </i>Possesion</h4>
                                            @endif
                                        </div>
                                        <!--end feature-->
                                    </div>


                                    <div class="col-md-4 col-sm-4">
                                        <div class="feature">
                                            @if($data[0]->disputed!="")
                                                <h4><i class="icon_box-checked" style="color: #1fad83"> </i>Disputed</h4>

                                            @endif
                                        </div>
                                        <!--end feature-->
                                    </div>

                                    <div class="col-md-4 col-sm-4">
                                        <div class="feature">
                                            @if($data[0]->electricity!="")
                                                <h4><i class="icon_box-checked" style="color: #1fad83"> </i>Electricity</h4>

                                            @endif
                                        </div>
                                        <!--end feature-->
                                    </div>

                                    <div class="col-md-4 col-sm-4">
                                        <div class="feature">
                                            @if($data[0]->sui_Gas!="")
                                                <h4><i class="icon_box-checked" style="color: #1fad83"> </i>Sui Gas</h4>

                                            @endif
                                        </div>
                                        <!--end feature-->
                                    </div>

                                    <div class="col-md-4 col-sm-4">
                                        <div class="feature">
                                            @if($data[0]->irrigation!="")
                                                <h4><i class="icon_box-checked" style="color: #1fad83"> </i>Irrigation</h4>

                                            @endif
                                        </div>
                                        <!--end feature-->
                                    </div>

                                    <div class="col-md-4 col-sm-4">
                                        <div class="feature">
                                            @if($data[0]->Tube_Wells!="")
                                                <h4><i class="icon_box-checked" style="color: #1fad83"> </i>Tube Wells</h4>

                                            @endif
                                        </div>
                                        <!--end feature-->
                                    </div>


                                    <div class="col-md-4 col-sm-4">
                                        <div class="feature">
                                            @if($data[0]->Accessible_by_Road!="")
                                                <h4><i class="icon_box-checked" style="color: #1fad83"> </i>Accessible by Road</h4>

                                            @endif
                                        </div>
                                        <!--end feature-->
                                    </div>

                                    <div class="col-md-4 col-sm-4">
                                        <div class="feature">
                                            @if($data[0]->Perimeter_Fencing!="")
                                                <h4><i class="icon_box-checked" style="color: #1fad83"> </i>Perimeter Fencing</h4>

                                            @endif
                                        </div>
                                        <!--end feature-->
                                    </div>

                                    <div class="col-md-4 col-sm-4">
                                        <div class="feature">
                                            @if($data[0]->Is_Land_Fertile!="")
                                                <h4><i class="icon_box-checked" style="color: #1fad83"> </i>Is Land Fertile</h4>

                                            @endif
                                        </div>
                                        <!--end feature-->
                                    </div>
                                    <div class="col-md-4 col-sm-4">
                                        <div class="feature">
                                            @if($data[0]->Boundary_Lines!="")
                                                <h4><i class="icon_box-checked" style="color: #1fad83"> </i>Boundary Lines</h4>

                                            @endif
                                        </div>
                                        <!--end feature-->
                                    </div>


                                </div>

                                <h2>Nearby Location</h2>
<div class="row">

    <div class="col-md-4 col-sm-4">
        <div class="feature">
            @if($data[0]->nearby_schools!="")
                <h4><i class="icon_box-checked" style="color: #1fad83"> </i>Nearby Schools</h4>
            @endif
        </div>
        <!--end feature-->
    </div>


    <div class="col-md-4 col-sm-4">
        <div class="feature">
            @if($data[0]->nearby_hospitals!="")
                <h4><i class="icon_box-checked" style="color: #1fad83"> </i>Nearby Hospitals</h4>
            @endif
        </div>
        <!--end feature-->
    </div>


    <div class="col-md-4 col-sm-4">
        <div class="feature">
            @if($data[0]->nearby_shopping_malls!="")
                <h4><i class="icon_box-checked" style="color: #1fad83"> </i>Nearby Shopping Malls</h4>
            @endif
        </div>
        <!--end feature-->
    </div>


    <div class="col-md-4 col-sm-4">
        <div class="feature">
            @if($data[0]->nearby_restaurants!="")
                <h4><i class="icon_box-checked" style="color: #1fad83"> </i>Nearby Restaurants</h4>
            @endif
        </div>
        <!--end feature-->
    </div>

    <div class="col-md-4 col-sm-4">
        <div class="feature">
            @if($data[0]->nearby_public_transport!="")
                <h4><i class="icon_box-checked" style="color: #1fad83"> </i>Nearby Public Transport Service</h4>
            @endif
        </div>
        <!--end feature-->
    </div>

    <div class="col-md-4 col-sm-4">
        <div class="feature">


            @if($data[0]->distance_from_airport_kms!="")
                {{--<li>Distance From Airport <strong>{{$data[0]->distance_from_airport_kms}}</strong></li>--}}

                <h4><i class="icon_box-checked" style="color: #1fad83"> </i>Distance From Airport {{$data[0]->distance_from_airport_kms}}</h4>
            @endif

            {{--@if($data[0]->distance_from_airport_kms!="")--}}
                {{--<h4><i class="icon_box-checked" style="color: #1fad83"> </i>Nearby Public Transport Service</h4>--}}
            {{--@endif--}}

        </div>
        <!--end feature-->
    </div>













</div>


 <h2>Other Facilities</h2>
<div class="row">



    <div class="col-md-4 col-sm-4">
        <div class="feature">
            @if($data[0]->security_staff!="")
                <h4><i class="icon_box-checked" style="color: #1fad83"> </i>Security Staff</h4>
            @endif
        </div>
        <!--end feature-->
    </div>
    <div class="col-md-4 col-sm-4">
        <div class="feature">
            @if($data[0]->other_facilities!="")
                <h4><i class="icon_box-checked" style="color: #1fad83"> </i>Other Facilities {{$data[0]->other_facilities}}</h4>
            @endif
        </div>
        <!--end feature-->
    </div>
</div>

      </section>


                            <section id="map">
                                <h2>Map</h2>



                                <div class="map height-300 box">
                                    <iframe
                                            width="600"
                                            height="300"
                                            frameborder="0" style="border:0"
                                            src="https://www.google.com/maps/embed/v1/search?key=AIzaSyCiORWYia17a_vsgEq5Zi6Wmbvlw1oTAMU
    &q={{$data[0]->address}}},{{$data[0]->city_name}}" >
                                    </iframe>

                                </div>

                                <!--end map-->
                            </section>
                        </div>

                        <!--end col-md-8-->
                        <div class="col-md-4">
                            <div class="sidebar">

                                <aside class="box">
                                    <dl>
                                        <dt>Nearby Water Resources:</dt>
                                        <dd>{{$data[0]->Nearby_Water_Resources}}</dd>
                                        <dt>Other Land Features</dt>
                                        <dd>{{$data[0]->Other_Land_Features}}</dd>


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