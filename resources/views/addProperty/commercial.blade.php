<section id="main-information">
    <div class="title">
        <h2>Main Information</h2>
        <aside class="step">1</aside>
    </div>
    <div class="row">
        <div class="col-md-7">
            <div class="form-group">
                <label for="form-submit-title">Title<em>*</em></label>
                <input type="text" class="form-control" id="form-submit-title" name="title" placeholder="Accommodation Title" required="">
            </div>
            <!--end form-group-->
        </div>
        <!--end col-md-7-->

        <!--end col-md-5-->
    </div>
    <!--end row-->

    <div class="row">
        <div class="col-md-7">
            <div class="form-group">
                <label for="form-submit-description">Description<em>*</em></label>
                <textarea class="form-control" name="description" id="form-submit-description" rows="10" name="description" required="" placeholder="Describe your accommodation"></textarea>
            </div>
            <!--end form-group-->
        </div>

        <div class="col-md-5">
            <h3>Mian Items<i class="fa fa-question-circle tooltip-question" data-toggle="tooltip" data-placement="right" title="Enter price"></i></h3>
            <div class="form-group-inline">
                <div class="form-group width-60">




                    {{--<div class="form-group">--}}
                    <label for="price">Price</label>
                    <input type="text" class="form-control" id="check-in-to" name="price" placeholder="10000">
                    {{--</div>--}}


                    {{--<select class="framed width-100" name="room_type_1" id="room-type_1">--}}
                    {{--<option value="">Select Room Type</option>--}}
                    {{--<option value="1">Apartment</option>--}}
                    {{--<option value="2">Family Room</option>--}}
                    {{--<option value="3">Double Room</option>--}}
                    {{--</select>--}}



                </div>




                <!--end form-group-->


            </div>
            <!--end form-group-inline-->
            <div class="form-group-inline">
                <!--end form-group-->
                <div class="form-group">
                    <h3>Bathroom<i class="fa fa-question-circle tooltip-question" data-toggle="tooltip" data-placement="right" title="Choose Number"></i></h3>
                </div>

                <div class="form-group width-60">
                    <select class="framed width-100" name="room_type_2" id="room-type_2">
                        <option value="">-- Select -- </option>
                        <option value="1">1</option>
                        <option value="2">2</option>
                        <option value="3">3</option>
                        <option value="4">4</option>
                        <option value="5">5</option>
                        <option value="6">6</option>
                        <option value="7">7</option>
                        <option value="8">8</option>
                        <option value="9">9</option>
                        <option value="10">10</option>
                        <option value="10+">10+</option>

                    </select>
                </div>
            </div>
            <!--end form-group-inline-->


            <div class="form-group-inline">
                <div class="form-group width-60">
                    <select class="framed width-100" name="room_type_2" id="room-type_2">
                        <option value="">Size Unit Type</option>
                        <option value="1">Marla</option>
                        <option value="2">Kanal</option>
                        <option value="3">Square Feet</option>
                        <option value="4">Square Meter</option>
                        <option value="5">Square Yard</option>
                    </select>
                </div>
                <!--end form-group-->
                <div class="form-group">
                    <input type="number" class="form-control" id="number-of-rooms_2" name="room_number_2" placeholder="1">
                </div>
                <!--end form-group-->
            </div>



        {{--<div class="form-group-inline">--}}
        {{--<div class="form-group">--}}
        {{--<h3>Price<i class="fa fa-question-circle tooltip-question" data-toggle="tooltip" data-placement="right" title="Choose Price"></i></h3>--}}
        {{--</div>--}}
        {{--<div class="form-group width-60">--}}
        {{--<input type="number" class="form-control" id="minimum-stay" name="minimum_stay" placeholder="2">--}}
        {{--</div>--}}
        {{--<!--end form-group-->--}}
        {{--</div>--}}
        <!--end form-group-inline-->
            {{--<a href="#" class="link icon"><i class="fa fa-plus"></i>Add Room Type</a>--}}
        </div>
        <!--end col-md-5-->
    </div>
    <!--end row-->

    <!--end row-->

    <!--end row-->
</section>