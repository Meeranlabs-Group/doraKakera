
    <div class="sidebar">
        <div class="box filter">
            <h2>Search</h2>

            {!! Form::open(['url' => '/search','class'=>'labels-uppercase','id'=>'form-filter']) !!}

            <div class="form-group>
                <label for="form-filter-check-in">Purpose</label>
                {{--<input type="text" class="form-control date" id="form-filter-check-in" name="check-in" placeholder="Check In">--}}
                <select class="form-control" name="area" id="area_type" class="form-control">
                    <option value="lahore">Sale</option>

                    <option value="Kanal">Rent</option>
                </select>
            </div>

            <div class="form-group">
                <label for="form-filter-check-in">City</label>
                {{--<input type="text" class="form-control date" id="form-filter-check-in" name="check-in" placeholder="Check In">--}}
                <select name="area" id="area_type" class="form-control">
                    <option value="lahore">Lahore</option>
                    <option value="islamabad">Islamabad</option>
                    <option value="faislabad">Faislabad</option>
                    <option value="gujrat">Gujrat</option>
                    <option value="Kanal">other</option>
                </select>
            </div>

            <div class="form-group">
                <label for="form-filter-check-in">Society</label>
                {{--<input type="text" class="form-control date" id="form-filter-check-in" name="check-in" placeholder="Check In">--}}
                <select name="area" id="area_type" class="form-control">
                    <option value="">Select</option>
                    <option value="revenue">Revenue</option>
                    <option value="suigas">sui gas</option>
                    <option value="lda">LDA</option>
                    <option value="singhar">Singhar</option>
                    <option value="other">other</option>
                </select>
            </div>

                <!--end form-group-->

            <div class="row">
                <div class="form-group">

                    <div class="col-md-6">
                        <label for="form-filter-check-in">Phase</label>
                        {{--<input type="text" class="form-control date" id="form-filter-check-in" name="check-in" placeholder="Check In">--}}
                        <select  name="area" id="area_type" class="form-control">
                            <option value="">Phase</option>
                            <option value="Square_Feet">Square Feet</option>
                            <option value="Square_Yards">Square Yards</option>
                            <option value="Square_Meters">Square Meters</option>
                            <option value="Marla">Marla</option>
                            <option value="Kanal">Kanal</option>
                        </select>
                    </div>


                    <div class="col-md-6">
                        <label for="form-filter-check-in">Block</label>
                        {{--<input type="text" class="form-control date" id="form-filter-check-in" name="check-in" placeholder="Check In">--}}
                        <select name="area" id="area_type" class="form-control">
                            <option value="">Block</option>
                            <option value="Square_Feet">Square Feet</option>
                            <option value="Square_Yards">Square Yards</option>
                            <option value="Square_Meters">Square Meters</option>
                            <option value="Marla">Marla</option>
                            <option value="Kanal">Kanal</option>
                        </select>
                    </div>



                </div>
                <!--end form-group-->
            </div>

                <div class="row">
                    <div class="form-group">

                        <div class="col-md-6">
                        <label for="form-filter-check-in">Land Area</label>
                        {{--<input type="text" class="form-control date" id="form-filter-check-in" name="check-in" placeholder="Check In">--}}
                        <select name="area" id="area_type" class="form-control">
                            <option value="">Select Unit</option>
                            <option value="Square_Feet">Square Feet</option>
                            <option value="Square_Yards">Square Yards</option>
                            <option value="Square_Meters">Square Meters</option>
                            <option value="Marla">Marla</option>
                            <option value="Kanal">Kanal</option>
                        </select>
                        </div>
                    {{--</div>--}}
                    {{--<!--end form-group-->--}}

                    {{--<div class="form-group">--}}
                        {{--<label for="form-filter-check-out">Nights</label>--}}
                        <div class="col-md-6">
                            <label for="form-filter-check-in">Size</label>
                            <input type="number" class="form-control" id="form-filter-check-in" name="size">
                    </div>
                    </div>
                </div>

        




                <!--end form-group-inline-->



                <div class="center">
                    <a href="#filter-advanced-search" class="link icon" data-toggle="collapse" aria-expanded="false" aria-controls="filter-advanced-search">Advanced Search<i class="fa fa-plus"></i></a>
                </div>
                <div class="collapse" id="filter-advanced-search">
                    <div class="wrapper">

                        <!--end section-->
                        <section>
                            <h3>Property Type </h3>
                            <ul class="checkboxes">
                                <li><label><input type="checkbox" name="hotel">Apartmets<span>67</span></label></li>
                                <li><label><input type="checkbox" name="apartment">Hotels<span>31</span></label></li>
                                <li><label><input type="checkbox" name="breakfast-only">Boats<span>68</span></label></li>
                                <li><label><input type="checkbox" name="spa-wellness">Villas<span>52</span></label></li>
                            </ul>
                            <div class="collapse" id="all-property-types">
                                <ul class="checkboxes">
                                    <li><label><input type="checkbox" name="ski-center">Ski Center<span>67</span></label></li>
                                    <li><label><input type="checkbox" name="cottage">Cottage<span>31</span></label></li>
                                    <li><label><input type="checkbox" name="hostel">Hostel<span>68</span></label></li>
                                    <li><label><input type="checkbox" name="boat">Boat<span>52</span></label></li>
                                </ul>
                            </div>
                            <!--end checkboxes-->
                            <a href="#all-property-types" class="link" data-toggle="collapse" aria-expanded="false" aria-controls="all-property-types">Show all</a>
                        </section>
                        <!--end section-->
                        <section>
                            <h3>Property Facility</h3>
                            <ul class="checkboxes no-bottom-margin">
                                <li><label><input type="checkbox" name="wi-fi">Wi-fi<span>12</span></label></li>
                                <li><label><input type="checkbox" name="free-parking">Free Parking<span>48</span></label></li>
                                <li><label><input type="checkbox" name="airport">Airport Shuttle<span>36</span></label></li>
                                <li><label><input type="checkbox" name="family-rooms">Family Rooms<span>56</span></label></li>
                            </ul>
                            <!--end checkboxes-->
                        </section>
                        <!--end section-->
                    </div>
                    <!--end filter-advanced-search-->
                </div>
                <!--end collapse-->
                <div class="form-group center">
                    <button type="submit" class="btn btn-primary btn-rounded form-control">Search</button>
                </div>



        {!! Form::close() !!}



        </div>

        <a href="#" class="advertising-banner">
            <span class="banner-badge">Advertising</span>
            <img src="{{ asset("assets/img/ad-banner-02.jpg") }}" alt="">
        </a>
    </div>
    <!--end sidebar-->