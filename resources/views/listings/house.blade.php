@include('include.head')
@include('partials.navbar')
<div id="page-content">
    <div class="container">
        <ol class="breadcrumb">
            <li><a href="{{ url("/")}}">Home</a></li>
            <li class="active">About Us</li>
        </ol>
        <!--end breadcrumb-->
        <div class="row">
            {{--<div class="col-md-3">--}}
                {{--<div class="sidebar">--}}
                    {{--<div class="box filter">--}}
                        {{--<h2>About Us</h2>--}}
                        {{--<ul class="links">--}}
                            {{--<li class="active"><a href={{ url("/about-us")}}>About Us</a></li>--}}
                            {{--<li><a href="terms-and-conditions.html">Terms & Conditions</a></li>--}}
                            {{--<li><a href={{ url("/contact-us")}}>Contact Us</a></li>--}}
                        {{--</ul>--}}
                    {{--</div>--}}


                    {{--<a href="#" class="advertising-banner">--}}
                        {{--<span class="banner-badge">Advertising</span>--}}
                        {{--<img src="{{ asset("assets/img/ad-banner-02.jpg") }}" alt="">--}}
                    {{--</a>--}}


                    {{--<!--end filter-->--}}
                {{--</div>--}}
                {{--<!--end sidebar-->--}}
            {{--</div>--}}
            {{--<!--end col-md-3-->--}}
            <div class="col-md-12">
                <div class="block">
                    <div class="container">
                        <div class="title">
                            <h2 class="center">Available Properties</h2>
                        </div>
                        <!--end title-->


               <ul class="list-links">
               @foreach($Property1 as $property)

                  <li><a href="/houses/{{ $x }}/{{ $property->society_name }}">{{ $property->society_name }}<span>{{$property->total}}</span></a></li>
                                {{--<li><a href="/houses/{{ $property->city_id }}">{{ $property->city_name }}<span>{{ $property->total }}</span></a></li>--}}
               @endforeach



                        </ul>
                        <!--end list-links-->
                    </div>
                    <!--end container-->
                </div>
                <!--end main-content-->
            </div>




        </div>
        <!--end row-->
    </div>
    <!--end container-->
</div>
<!--end page-content-->
@include('partials.footer');
@include('include.foot');