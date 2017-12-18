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



                {{--<div class="main-content">--}}
                    {{--<div class="title">--}}
                        {{--<h1>Listing</h1>--}}
                        {{--<div class="display-selector">--}}
                        {{--<span>Display:</span>--}}
                        {{--<a href="listing.html" class="active" data-toggle="tooltip" data-placement="left" title="Display list"><i class="fa fa-th-list"></i></a>--}}
                        {{--<a href="listing-matrix.html" data-toggle="tooltip" data-placement="left" title="Display matrix"><i class="fa fa-th"></i></a>--}}
                        {{--</div>--}}
                    {{--</div>--}}




                <div class="main-content">
                    <div class="title">
                        <div class="left">
                            <h1>Mountain Paradise<span class="rating"><i class="fa fa-star"></i>9.9</span></h1>
                            <h3><a href="#">Austria</a> (63 properties)</h3>
                        </div>
                        <div class="right">
                            <a href="#map" class="icon scroll"><i class="fa fa-map-marker"></i>See on the map</a>
                            <a href="t" class="btn btn-primary btn-rounded scroll">Call Now</a>
                        </div>
                    </div>
                    <!--end title-->
                    <section id="gallery">
                        <div class="gallery-detail">
                            <div class="ribbon"><div class="offer-number">SALE</div></div>

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
                                <h3>Spend Great Time in Our Hotel!</h3>
                                <p>Consectetur adipiscing elit. Vivamus nec augue ac dui sodales euismod. Suspendisse
                                    at dui sit amet felis commodo dictum. Class aptent taciti sociosqu ad litora
                                    torquent per conubia nostra, per inceptos himenaeos. Integer commodo eleifend erat,
                                    vitae tincidunt urna volutpat et. Mauris laoreet, sem ut sodales sodales,
                                    massa turpis posuere lectus, non aliquet massa nisl ac orci.
                                </p>
                                <p>Aenean non dapibus neque. Praesent tempus aliquet felis, auctor aliquet ligula bibendum
                                    id. Phasellus ut finibus ligula. Suspendisse sodales lacus vel viverra egestas. Donec
                                    eu interdum sem, sed tempus odio. Interdum et malesuada fames ac ante ipsum primis in
                                    faucibus. In ut ante lacinia, interdum ante eu, posuere ex. Donec iaculis elit
                                    consectetur nisi finibus, a vestibulum nibh mattis. Aliquam erat volutpat.
                                </p>
                            </section>
                            <section id="facilities">
                                <h2>Facilities</h2>
                                <ul class="bullets half">
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
                                        <dt>1-Bed Rooms:</dt>
                                        <dd>23</dd>
                                        <dt>2-Bed Rooms:</dt>
                                        <dd>48</dd>
                                        <dt>Apartments:</dt>
                                        <dd>12</dd>
                                        <dt>Parking:</dt>
                                        <dd>Free</dd>
                                        <dt>Swimming:</dt>
                                        <dd>Yes</dd>
                                        <dt>Ski Center:</dt>
                                        <dd>2km</dd>
                                    </dl>
                                </aside>
                                <aside>
                                    <h2>Contact</h2>
                                    <address>
                                        <strong>Your Company</strong><br>
                                        4877 Spruce Drive<br>
                                        West Newton, PA 15089<br>
                                        <br>
                                        +1 (734) 123-4567<br>
                                        <a href="#">hello@example.com</a><br>
                                        <strong>skype:</strong> your.company
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