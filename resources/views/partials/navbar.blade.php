<div id="page-header">
    <header>
        <div class="container">
            <div class="secondary-nav">
                <div class="nav-trigger"><a data-toggle="collapse" href="#secondary-nav" aria-expanded="false" aria-controls="secondary-nav"><i class="fa fa-user"></i></a></div>
                <div id="secondary-nav">
                    <nav>
                        <div class="left opacity-60">
                            <a href=""><i class="fa fa-phone"></i>042 111 124 124 </a>
                            <a href="mailto:info@chohanestate.com"><i class="fa fa-envelope"></i>info@chohanestate.com</a>
                        </div>
                        {{--<!--end left-->--}}
                        <div class="right">

                            <!--end element-->
                            <div class="element">
                                <a href="#tab-sign-in" data-toggle="modal" data-tab="true" data-target="#sign-in-register-modal">Sign In</a>
                            </div>
                            <!--end element-->
                            <div class="element">
                                <a href="#tab-register" data-toggle="modal" data-tab="true" data-target="#sign-in-register-modal">Register</a>
                            </div>

                            <div class="element">
                                <a href="{{ url("/addproperty") }}" >Upload Property</a>
                            </div>
                            <!--end element-->

                            <!--end element-->
                        </div>



                        {{--<div class="collapse navbar-collapse" id="app-navbar-collapse">--}}
                            {{--<!-- Left Side Of Navbar -->--}}
                            {{--<ul class="nav navbar-nav">--}}
                                {{--&nbsp;--}}
                            {{--</ul>--}}

                            {{--<!-- Right Side Of Navbar -->--}}
                            {{--<ul class="nav navbar-nav navbar-right">--}}
                                {{--<!-- Authentication Links -->--}}
                                {{--@guest--}}
                                    {{--<li><a href="{{ route('login') }}">Login</a></li>--}}

                                    {{--<li><a href="#tab-sign-in" data-toggle="modal" data-tab="true" data-target="#sign-in-register-modal">Sign In</a></li>--}}
                                    {{--<li><a href="{{ route('register') }}">Register</a></li>--}}
                                    {{--@else--}}
                                        {{--<li class="dropdown">--}}
                                            {{--<a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false" aria-haspopup="true">--}}
                                                {{--{{ Auth::user()->name }} <span class="caret"></span>--}}
                                            {{--</a>--}}

                                            {{--<ul class="dropdown-menu">--}}
                                                {{--<li>--}}
                                                    {{--<a href="{{ route('logout') }}"--}}
                                                       {{--onclick="event.preventDefault();--}}
                                                     {{--document.getElementById('logout-form').submit();">--}}
                                                        {{--Logout--}}
                                                    {{--</a>--}}

                                                    {{--<form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">--}}
                                                        {{--{{ csrf_field() }}--}}
                                                    {{--</form>--}}
                                                {{--</li>--}}
                                            {{--</ul>--}}
                                        {{--</li>--}}
                                        {{--@endguest--}}
                            {{--</ul>--}}
                        {{--</div>--}}


                        <!--end right-->
                    </nav>
                </div>
            </div>
            <!--end secondary-nav-->
        </div>
        <!--end container-->
        <hr>
        <div class="container">
            <div class="primary-nav">
                <div class="left">
                    <a href={{ url("/") }} id="brand"><img src="assets/img/logo.png" height="70%" width="80%" alt=""></a>
                    <a class="nav-trigger" data-toggle="collapse" href="#primary-nav" aria-expanded="false" aria-controls="primary-nav"><i class="fa fa-navicon"></i></a>
                </div>
                <!--end left-->
                <div class="right" >
                    <nav id="primary-nav">
                        <ul>
                            <li class="active"><a href={{ url("/") }}>Home</a></li>

                            <li>
                                <a href={{ url("/about-us") }} >About Us</a>
                                {{--<ul class="child-nav">--}}
                                    {{--<li><a href="listing.html">List Listing</a></li>--}}
                                    {{--<li><a href="listing-matrix.html">Matrix Listing</a></li>--}}
                                {{--</ul>--}}
                            </li>

                            <li>
                                <a href={{ url("/properties") }} >Properties</a>
                            </li>
                            <li>
                                <a href="/MarketAnalysis" class="has-child">Market Analysis</a>
                                <ul class="child-nav">
                                    <li><a href="MarketDetails.php">Transfer Charges</a></li>
                                    <li><a href="MarketDetails.php">News</a></li>
                                    <li><a href="">Property Evaluator</a></li>
                                </ul>


                            </li>




                                    <li><a href="#">DHA Plots</a></li>
                                    <li><a href="#">DHA Files</a></li>
                            {{--<li>--}}


                                {{--<a href="#" >DHA Plots</a>--}}

                            {{--</li>--}}
                            {{--<li>--}}
                                {{--<a href="#" >DHA Files</a>--}}

                            {{--</li>--}}
                            <li>
                                <a href="Map.php">Maps</a>

                            </li>

                            <li>
                                {{--<a href="#" >Transfer Charges</a>--}}

                            </li>
                            <li><a href={{ url("/contact-us")}}>Contact Us</a></li>
                            <li class="submit"><a href={{ url("/addproperty") }}><span>Submit Property</span><i data-toggle="tooltip" data-placement="top" title="Submit Property"><img src="assets/img/plus.png" alt=""></i></a></li>
                        </ul>
                    </nav>
                    <!--end nav-->
                </div>
                <!--end right-->
            </div>
            <!--end primary-nav-->
        </div>
        <!--end container-->
    </header>
    <!--end header-->
</div>
<!--end page-header-->
