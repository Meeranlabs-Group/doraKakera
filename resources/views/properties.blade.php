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




                <div class="main-content">
                    <div class="title">
                        <h1>Listing</h1>
                        {{--<div class="display-selector">--}}
                            {{--<span>Display:</span>--}}
                            {{--<a href="listing.html" class="active" data-toggle="tooltip" data-placement="left" title="Display list"><i class="fa fa-th-list"></i></a>--}}
                            {{--<a href="listing-matrix.html" data-toggle="tooltip" data-placement="left" title="Display matrix"><i class="fa fa-th"></i></a>--}}
                        {{--</div>--}}
                    </div>



                    @foreach($property as $data)
                        @include('partials.listingproperty')
                    @endforeach



                </div>
        </div>



         </div>

        <div class="center">
            <ul class="pagination">
                <li class="prev">
                    <a href="#"><i class="arrow_left"></i></a>
                </li>
                <li class="active"><a href="#">1</a></li>
                <li><a href="#">2</a></li>
                <li><a href="#">3</a></li>
                <li><a href="#">4</a></li>
                <li><a href="#">5</a></li>
                <li class="next">
                    <a href="#"><i class="arrow_right"></i></a>
                </li>
            </ul>
            <!-- end pagination-->
        </div>




    </div>
</div>

@include('partials.footer')
@include('include.foot')