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

                                    @if($data[0]->built_in_year=="")
                                    <li>Built in Year  <strong>{{$data[0]->built_in_year}}</strong></li>

                                    @if($data[0]->double_glazed_window=="")
                                       {{--// <li><label><input type="checkbox" checked disabled name="Double_Glazed_Windows">Double Glazed Windows</label></li>--}}
                                    @else
                                            <label><input type="checkbox" checked disabled name="Double_Glazed_Windows">Double Glazed Windows</label>
                                    @endif


                                    @if($data[0]->central_air_conditioning)
                                        <label><input type="checkbox" checked disabled name="Central_Air_Conditioning">Central Air Conditioning</label>
                                    @endif



                                    <li>Sauna</li>
                                    <li>Fireplace or fire pit</li>
                                    <li>Outdoor Kitchen</li>
                                    <li>Tennis Courts</li>
                                    <li>Trees and Landscaping</li>
                                    <li>Sun Room</li>
                                    <li>Family Room</li>
                                    <li>Concrete Flooring</li>
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