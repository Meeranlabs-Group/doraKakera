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
                            <li><a href="#additional-information" class="scroll">Additional Information</a></li>
                            <li><a href="#reviews" class="scroll">Reviews</a>(23)</li>
                        </ul>
                    </div>
                </div>



                <div class="main-content">
                    <div class="title">
                        <h1>Listing</h1>
                        {{--<div class="display-selector">--}}
                        {{--<span>Display:</span>--}}
                        {{--<a href="listing.html" class="active" data-toggle="tooltip" data-placement="left" title="Display list"><i class="fa fa-th-list"></i></a>--}}
                        {{--<a href="listing-matrix.html" data-toggle="tooltip" data-placement="left" title="Display matrix"><i class="fa fa-th"></i></a>--}}
                        {{--</div>--}}
                    </div>

                    @include('partials.detail')
                </div>
            </div>



        </div>
    </div>
</div>

@include('partials.footer')
@include('include.foot')