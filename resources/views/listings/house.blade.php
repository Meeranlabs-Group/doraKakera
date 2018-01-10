@include('include.head')
@include('partials.navbar')


<div id="page-content">
    <div class="container">
        <ol class="breadcrumb">
            <li><a href="{{ url("/")}}">Home</a></li>
            <li ><a href="{{ url("/houses/$x") }}">{{$property[0]->city_name}}</a></li>
            <li ><a href="{{ url("/houses/$x/$y")}}">{{$property[0]->society_name}}</a></li>
            <li ><a href="{{ url("/houses/$x/$y/$z")}}">{{$property[0]->phase_name}}</a></li>
            <li class="active">{{$property[0]->block_name}}</li>

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
                    </div>



                    @foreach($property as $data)
                        @include('partials.listingproperty')
                    @endforeach



                </div>
            </div>



        </div>

        <div class="center">
            {{$property->render()}}
        </div>

        <!-- end pagination-->




    </div>
</div>

@include('partials.footer')
@include('include.foot')