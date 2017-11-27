@include('include.head')

@include('partials.navbar')






    <div class="page-wrapper">

        <div id="page-content">
            <div class="container">
                <ol class="breadcrumb">
                    <li><a href="/">Home</a></li>
                    <li><a href="#">Listing</a></li>
                    <li class="active">Detail</li>
                </ol>
                <!--end breadcrumb-->
                <div class="main-content">
                    <div class="title">
                        <h1>Submit Accommodation</h1>
                    </div>
                    <!--end title-->
                    <div class="quick-navigation" data-fixed-after-touch="">
                        <div class="wrapper">
                            <ul>
                                <li><a href="#main-information" class="scroll">Main Information</a></li>
                                <li><a href="#location" class="scroll">Location</a></li>
                                <li><a href="#gallery" class="scroll">Gallery</a></li>
                                <li><a href="#facilities" class="scroll">Facilities</a></li>
                                <li><a href="#additional-information" class="scroll">Additional Information</a></li>
                            </ul>
                        </div>
                    </div>
                    <!--end quick-navigation-->


                    {!! Form::open(['url' => '/submit']) !!}

                    <div class="form-submit labels-uppercase" id="form-submit" enctype="multipart/form-data">



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
                                <div class="col-md-5">
                                    <div class="form-group">
                                        <label for="object-type">Object Type</label>

                                        <select class="framed width-100" name="property_type" id="object-type">

                                            <option value="">  Any Type  </option>
                                            <option value="">  --- HOUSE --- </option>
                                            <option value="1">  Houses</option>
                                            <option value="2">  Flates</option>
                                            <option value="3">  Upper Portions</option>
                                            <option value="4">  Lower Portions</option>
                                            <option value="5">  Farms House</option>
                                            <option value="6">  Rooms</option>

                                            <option value="">  --- PLOTS ---</option>
                                            <option value="7">  Residential Plots</option>
                                            <option value="8">  Commercial Plots</option>
                                            <option value="9">  Agricultural Land</option>
                                            <option value="10">  Industrial Land</option>
                                            <option value="11">  Plot Files</option>
                                            <option value="12">  Plot Forms</option>

                                            <option value="">  --- COMMERCIAL ---</option>
                                            <option value="13">  Offices</option>
                                            <option value="14">  Shops</option>
                                            <option value="15">  Warehouses</option>
                                            <option value="16">  Factories</option>
                                            <option value="17">  Buildings</option>
                                            <option value="18">  Other</option>

                                        </select>
                                    </div>
                                    <!--end form-group-->
                                </div>
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
                                        <!--end form-group-->
                                        <div class="form-group">

                                            <h3>Bedroom<i class="fa fa-question-circle tooltip-question" data-toggle="tooltip" data-placement="right" title="Choose Number"></i></h3>
                                        </div>

                                        <div class="form-group width-60">
                                            <select class="framed width-100" name="room_type_2" id="room-type_2">
                                                <option value="">-- Bedroom --</option>
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
                            <div class="row">
                                <div class="col-md-5">
                                    <h3>Special Offer? <i class="fa fa-question-circle tooltip-question" data-toggle="tooltip" data-placement="right" title="Nam quis ipsum ac sem ornare efficitur et vel mauris. Proin nibh arcu, vulputate eget massa sed."></i></h3>
                                    <div class="form-group-inline vertical-align-middle">
                                        <div class="form-group">
                                            <label class="no-margin"><input type="checkbox" name="special_offer">Special Offer</label>
                                        </div>
                                        <!--end form-group-->
                                        <div class="form-group width-20">
                                            <input type="text" class="form-control" id="percents" name="percents" placeholder="20%">
                                        </div>
                                        <!--end form-group-->
                                        <div class="form-group">
                                            <input type="text" class="form-control" id="special-offer-text" name="special-offer-text" placeholder="Off the price today">
                                        </div>
                                        <!--end form-group-->
                                    </div>
                                    <!--end form-group-inline-->
                                </div>
                                <!--col-md-5-->
                            </div>
                            <!--end row-->
                            <div class="row">
                                <div class="col-md-7">
                                    <h3>Meal</h3>
                                    <ul class="checkboxes inline list-unstyled">
                                        <li><label><input type="checkbox" name="1">Breakfast Included</label></li>
                                        <li><label><input type="checkbox" name="2">Full meal</label></li>
                                        <li><label><input type="checkbox" name="3">Own Meal</label></li>
                                        <li><label><input type="checkbox" name="4">Breakfast & Dinner</label></li>
                                        <li><label><input type="checkbox" name="5">Bed & Breakfast</label></li>
                                        <li><label><input type="checkbox" name="6">All Inclusive</label></li>
                                        <li><label><input type="checkbox" name="7">Ultra All Inclusive</label></li>
                                    </ul>
                                    <!--end checkboxes-->
                                </div>
                                <!--end col-md-7-->
                                <div class="col-md-5">
                                    <div class="row">
                                        <div class="col-md-7">
                                            <h3>Receive Reviews<i class="fa fa-question-circle tooltip-question" data-toggle="tooltip" data-placement="top" title="Nam quis ipsum ac sem ornare efficitur et vel mauris."></i></h3>
                                            <label><input type="checkbox" name="1">Receive Reviews</label>
                                        </div>
                                        <!--end col-md-7-->
                                        <div class="col-md-5">
                                            <h3>Minimum Stay<i class="fa fa-question-circle tooltip-question" data-toggle="tooltip" data-placement="top" title="Nam quis ipsum ac sem ornare efficitur et vel mauris."></i></h3>
                                            <input type="number" class="form-control" id="minimum-stay" name="minimum_stay" placeholder="2">
                                        </div>
                                        <!--end col-md-5-->
                                    </div>
                                    <!--end row-->
                                </div>
                                <!--end col-md-5-->
                            </div>
                            <!--end row-->
                        </section>
                        <section id="location">
                            <div class="row">
                                <div class="col-md-7">
                                    <div class="title">
                                        <h2>Location</h2>
                                        <aside class="step">2</aside>
                                    </div>
                                    <div class="form-group">
                                        <label for="address-autocomplete">City<em>*</em></label>
                                        <select class="framed width-100" name="city" id="city">
                                            <option value="" selected="">Select City</option>
                                            <option value="3">Islamabad</option>
                                            <option value="2">Karachi</option><option value="1">Lahore</option><option value="41">Rawalpindi</option><option value="disabled" disabled="">------------------------------------------------------</option><option value="385">Abbottabad</option><option value="10594">Abdul Hakim</option><option value="10242">Alipur</option><option value="9517">Arifwala</option><option value="1763">Astore</option><option value="1233">Attock</option><option value="1761">Awaran</option><option value="8857">Badin</option><option value="966">Bagh</option><option value="557">Bahawalnagar</option><option value="23">Bahawalpur</option><option value="1735">Bannu</option><option value="1720">Bhakkar</option><option value="11142">Bhalwal</option><option value="1749">Bhimber</option><option value="11286">Buner</option><option value="1059">Burewala</option><option value="1747">Chaghi</option><option value="751">Chakwal</option><option value="11420">Charsadda</option><option value="8860">Chichawatni</option><option value="1469">Chiniot</option><option value="10512">Chishtian Sharif</option><option value="1731">Chitral</option><option value="1061">Chunian</option><option value="1727">Dadu</option><option value="11967">Daharki</option><option value="1509">Daska</option><option value="9178">Depalpur</option><option value="26">Dera Ghazi Khan</option><option value="8244">Dera Ismail Khan</option><option value="10645">Dijkot</option><option value="8474">Duniya Pur</option><option value="1737">FATA</option><option value="16">Faisalabad</option><option value="1293">Fateh Jang</option><option value="10894">Gaarho</option><option value="11915">Gadoon</option><option value="8119">Galyat</option><option value="636">Gharo</option><option value="8810">Ghotki</option><option value="1753">Gilgit</option><option value="10281">Gojra</option><option value="8338">Gujar Khan</option><option value="327">Gujranwala</option><option value="20">Gujrat</option><option value="389">Gwadar</option><option value="1714">Hafizabad</option><option value="11739">Hangu</option><option value="11634">Harappa</option><option value="1048">Haripur</option><option value="1152">Haroonabad</option><option value="9687">Hasilpur</option><option value="399">Hassan Abdal</option><option value="10402">Haveli Lakha</option><option value="9844">Hub (Hub Chowki)</option><option value="1546">Hunza</option><option value="30">Hyderabad</option><option value="3">Islamabad</option><option value="32">Jacobabad</option><option value="11126">Jahanian</option><option value="11026">Jalalpur Jattan</option><option value="10484">Jampur</option><option value="8511">Jauharabad</option><option value="1142">Jhang</option><option value="19">Jhelum</option><option value="9202">Kaghan</option><option value="10279">Kahror Pakka</option><option value="1750">Kalat</option><option value="10416">Kamalia</option><option value="10346">Kamoki</option><option value="2">Karachi</option><option value="9484">Karak</option><option value="544">Kasur</option><option value="8806">Khairpur</option><option value="1685">Khanewal</option><option value="10168">Khanpur</option><option value="1305">Kharian</option><option value="8510">Khushab</option><option value="1757">Khuzdar</option><option value="1430">Kohat</option><option value="9749">Kot Addu</option><option value="968">Kotli</option><option value="1">Lahore</option><option value="10205">Lakki Marwat</option><option value="9837">Lalamusa</option><option value="586">Larkana</option><option value="548">Lasbela</option><option value="1661">Layyah</option><option value="11406">Liaquatpur</option><option value="9872">Lodhran</option><option value="1742">Loralai</option><option value="10482">Lower Dir</option><option value="9422">Mailsi</option><option value="1767">Makran</option><option value="1384">Malakand</option><option value="1496">Mandi Bahauddin</option><option value="771">Mansehra</option><option value="440">Mardan</option><option value="8606">Matiari</option><option value="9636">Mian Channu</option><option value="8310">Mianwali</option><option value="1349">Mirpur</option><option value="1558">Mirpur Khas</option><option value="10893">Mirpur Sakro</option><option value="15">Multan</option><option value="36">Murree</option><option value="977">Muzaffarabad</option><option value="1722">Muzaffargarh</option><option value="1687">Nankana Sahib</option><option value="1258">Naran</option><option value="541">Narowal</option><option value="1752">Nasirabad</option><option value="8801">Naushahro Feroze</option><option value="1704">Nawabshah</option><option value="1741">Neelum</option><option value="1424">Nowshera</option><option value="470">Okara</option><option value="979">Others</option><option value="1528">Others Azad Kashmir</option><option value="1529">Others Balochistan</option><option value="1530">Others Gilgit Baltistan</option><option value="1531">Others Khyber Pakhtunkhwa</option><option value="1532">Others Punjab</option><option value="1533">Others Sindh</option><option value="1716">Pakpattan</option><option value="17">Peshawar</option><option value="10678">Pind Dadan Khan</option><option value="9508">Pir Mahal</option><option value="18">Quetta</option><option value="40">Rahim Yar Khan</option><option value="9645">Rajanpur</option><option value="9027">Ratwal</option><option value="976">Rawalkot</option><option value="41">Rawalpindi</option><option value="1725">Rohri</option><option value="9538">Sadiqabad</option><option value="782">Sahiwal</option><option value="10632">Samundri</option><option value="8609">Sanghar</option><option value="778">Sargodha</option><option value="8607">Sehwan</option><option value="9029">Shahdadpur</option><option value="8552">Shahkot</option><option value="44">Sheikhupura</option><option value="8808">Shikarpur</option><option value="10334">Shorkot</option><option value="480">Sialkot</option><option value="1744">Sibi</option><option value="1545">Skardu</option><option value="1745">Sudhnoti</option><option value="45">Sukkur</option><option value="3094">Swabi</option><option value="1506">Swat</option><option value="12137">Talagang</option><option value="9028">Tando Adam</option><option value="11315">Tando Allahyar</option><option value="11700">Tando Bago</option><option value="464">Taxila</option><option value="1729">Thatta</option><option value="1658">Toba Tek Singh</option><option value="1432">Vehari</option><option value="459">Wah</option><option value="1395">Wazirabad</option><option value="1765">Waziristan</option><option value="1739">Zhob</option>
                                        </select>
                                    </div>




                                    <div class="form-group">
                                        <label for="address-autocomplete">Address<em>*</em></label>
                                        <input type="text" class="form-control" id="address-autocomplete" name="address" placeholder="Accommodation Address" required="">
                                    </div>


                                {{--<div class="form-group">--}}
                                {{--<label>Place on Map</label>--}}
                                {{--<div class="map height-300 box" id="map-item"></div>--}}
                                {{--</div>--}}

                                <!--end map-->
                                    <h3>Position</h3>
                                    <ul class="checkboxes inline list-unstyled">
                                        <li><label><input type="checkbox" name="1">Near the beach</label></li>
                                        <li><label><input type="checkbox" name="2">Near the forest</label></li>
                                        <li><label><input type="checkbox" name="3">Near the ski center</label></li>
                                        <li><label><input type="checkbox" name="4">At he town center</label></li>
                                        <li><label><input type="checkbox" name="5">Isolated</label></li>
                                        <li><label><input type="checkbox" name="6">Private island</label></li>
                                    </ul>
                                    <!--end checkboxes-->
                                </div>
                                <!--end col-md-7-->
                                <div class="col-md-5">
                                    <h2>Contact Information</h2>
                                    <div class="form-group">
                                        <label for="form-submit-email">Email</label>
                                        <input type="email" class="form-control" id="form-submit-email" name="email" placeholder="hello@example.com">
                                    </div>

                                    <!--end form-group-->
                                    <div class="form-group">
                                        <label for="form-submit-mobile-phone">Mobile Phone</label>
                                        <input type="text" class="form-control" id="form-submit-mobile-phone" name="mobile-phone" placeholder="+123 123 456 789">
                                    </div>
                                    <!--end form-group-->
                                    <div class="form-group-inline">
                                        <div class="form-group">
                                            <label for="form-submit-facebook">Facebook Page</label>
                                            <input type="text" class="form-control" id="form-submit-facebook" name="facebook" placeholder="www.facebook.com/yourhotel">
                                        </div>
                                        <!--end form-group-->
                                        <div class="form-group">
                                            <label for="form-submit-twitter">Twitter</label>
                                            <input type="text" class="form-control" id="form-submit-twitter" name="twitter" placeholder="www.twitter.com/yourhotel">
                                        </div>
                                        <!--end form-group-->
                                    </div>
                                    <!--end form-group-inline-->
                                    <div class="form-group-inline">
                                        <div class="form-group">
                                            <label for="form-submit-youtube">Youtube</label>
                                            <input type="text" class="form-control" id="form-submit-youtube" name="youtube" placeholder="www.youtube.com/yourhotel">
                                        </div>
                                        <!--end form-group-->
                                        <div class="form-group">
                                            <label for="form-submit-skype">Skype</label>
                                            <input type="text" class="form-control" id="form-submit-skype" name="skype" placeholder="your.hotel">
                                        </div>
                                        <!--end form-group-->
                                    </div>
                                    <!--end form-group-inline-->
                                </div>
                                <!--end col-md-7-->
                            </div>
                            <!--end row-->
                        </section>
                        <section id="gallery">
                            <div class="title">
                                <h2>Gallery</h2>
                                <aside class="step">3</aside>
                            </div>
                            <div class="file-upload-previews"></div>
                            <div class="file-upload">
                                <input type="file" name="files[]" class="file-upload-input with-preview" multiple title="Click to add files" maxlength="10" accept="gif|jpg|png">
                                <span>Click to add images</span>
                            </div>
                        </section>
                        <section id="facilities">
                            <div class="title">
                                <h2>Facilities</h2>
                                <aside class="step">4</aside>
                            </div>
                            <div class="row">
                                <div class="col-md-4">
                                    <h3>Bathroom</h3>
                                    <ul class="checkboxes inline half list-unstyled">
                                        <li><label><input type="checkbox" name="1">Shower</label></li>
                                        <li><label><input type="checkbox" name="2">Bathtub</label></li>
                                        <li><label><input type="checkbox" name="3">Free toiletries</label></li>
                                        <li><label><input type="checkbox" name="4">Toilet</label></li>
                                        <li><label><input type="checkbox" name="5">Hairdryer</label></li>
                                        <li><label><input type="checkbox" name="6">Bathroom</label></li>
                                    </ul>
                                    <!--end checkboxes-->
                                </div>
                                <!--end col-md-4-->
                                <div class="col-md-4">
                                    <h3>Media & Technology</h3>
                                    <ul class="checkboxes inline half list-unstyled">
                                        <li><label><input type="checkbox" name="1">Satellite channels </label></li>
                                        <li><label><input type="checkbox" name="2">TV</label></li>
                                        <li><label><input type="checkbox" name="3"> Flat-screen TV</label></li>
                                    </ul>
                                    <!--end checkboxes-->
                                </div>
                                <!--end col-md-4-->
                                <div class="col-md-4">
                                    <h3>Living Area</h3>
                                    <ul class="checkboxes inline half list-unstyled">
                                        <li><label><input type="checkbox" name="1">Desk</label></li>
                                        <li><label><input type="checkbox" name="2">Sofa</label></li>
                                        <li><label><input type="checkbox" name="3">Sitting area</label></li>
                                        <li><label><input type="checkbox" name="4">Dining area</label></li>
                                    </ul>
                                    <!--end checkboxes-->
                                </div>
                                <!--end col-md-4-->
                            </div>
                            <!--end row-->
                            <div class="row">
                                <div class="col-md-4">
                                    <h3>Services</h3>
                                    <ul class="checkboxes inline half list-unstyled">
                                        <li><label><input type="checkbox" name="1">Room Service </label></li>
                                        <li><label><input type="checkbox" name="2"> Packed Lunches </label></li>
                                        <li><label><input type="checkbox" name="3">Car Rental </label></li>
                                        <li><label><input type="checkbox" name="4">Shuttle Service</label></li>
                                        <li><label><input type="checkbox" name="5">Airport Shuttle</label></li>
                                        <li><label><input type="checkbox" name="6">24-Hour Front Desk </label></li>
                                        <li><label><input type="checkbox" name="7">Tour Desk </label></li>
                                        <li><label><input type="checkbox" name="8">Ticket Service </label></li>
                                        <li><label><input type="checkbox" name="9">Baggage Storage </label></li>
                                        <li><label><input type="checkbox" name="10">Concierge Service</label></li>
                                        <li><label><input type="checkbox" name="11">Laundry </label></li>
                                        <li><label><input type="checkbox" name="12">Dry Cleaning</label></li>
                                    </ul>
                                    <!--end checkboxes-->
                                </div>
                                <!--end col-md-4-->
                                <div class="col-md-4">
                                    <h3>General</h3>
                                    <ul class="checkboxes inline half list-unstyled">
                                        <li><label><input type="checkbox" name="1">Safe</label></li>
                                        <li><label><input type="checkbox" name="2">Non-smoking Rooms</label></li>
                                        <li><label><input type="checkbox" name="3">Family Rooms </label></li>
                                        <li><label><input type="checkbox" name="4">Elevator</label></li>
                                        <li><label><input type="checkbox" name="5">Airport Shuttle</label></li>
                                        <li><label><input type="checkbox" name="6">24-Hour Front Desk</label></li>
                                        <li><label><input type="checkbox" name="7">Soundproof Rooms </label></li>
                                        <li><label><input type="checkbox" name="8">Heating</label></li>
                                        <li><label><input type="checkbox" name="9">Iron </label></li>
                                    </ul>
                                    <!--end checkboxes-->
                                </div>
                                <!--end col-md-4-->
                                <div class="col-md-4">
                                    <h3>Languages Spoken</h3>
                                    <ul class="checkboxes inline half list-unstyled">
                                        <li><label><input type="checkbox" name="1">English </label></li>
                                        <li><label><input type="checkbox" name="2">Arabic</label></li>
                                        <li><label><input type="checkbox" name="3">Azerbaijani</label></li>
                                        <li><label><input type="checkbox" name="4">French</label></li>
                                        <li><label><input type="checkbox" name="5">German</label></li>
                                        <li><label><input type="checkbox" name="6">Italian</label></li>
                                        <li><label><input type="checkbox" name="7">Russian</label></li>
                                        <li><label><input type="checkbox" name="8">Spanish</label></li>
                                        <li><label><input type="checkbox" name="9">Turkish</label></li>
                                    </ul>
                                    <!--end checkboxes-->
                                </div>
                                <!--end col-md-4-->
                            </div>
                            <!--end row-->
                        </section>
                        <section id="additional-information">
                            <div class="title">
                                <h2>Additional Information</h2>
                                <aside class="step">5</aside>
                            </div>
                            <!--end title-->
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group label-inline">
                                        <label for="children" class="width-30">Children Allowed</label>
                                        <select class="framed width-100" name="children" id="children">
                                            <option value="1">Select</option>
                                            <option value="2">All children allowed</option>
                                            <option value="3">12+ years allowed</option>
                                            <option value="4">No children allowed</option>
                                        </select>
                                    </div>
                                    <!--end form-group-->
                                    <div class="form-group label-inline">
                                        <label for="pets" class="width-30">Pets Allowed</label>
                                        <select class="framed width-100" name="pets" id="pets">
                                            <option value="1">Select</option>
                                            <option value="2">All pets allowed</option>
                                            <option value="3">Only small pets allowed</option>
                                            <option value="4">No pets allowed</option>
                                        </select>
                                    </div>
                                    <!--end form-group-->
                                    <div class="form-group label-inline">
                                        <label for="cancellation" class="width-30">Cancellation</label>
                                        <select class="framed width-100" name="cancellation" id="cancellation">
                                            <option value="1">Select</option>
                                            <option value="2">No cancellation possible</option>
                                            <option value="3">30 days before check in</option>
                                            <option value="4">7 days before check in</option>
                                        </select>
                                    </div>
                                    <!--end form-group-->
                                    <div class="form-group label-inline">
                                        <label for="parking" class="width-30">Parking</label>
                                        <select class="framed width-100" name="parking" id="parking">
                                            <option value="1">Select</option>
                                            <option value="2">Free parking</option>
                                            <option value="3">Payed parking</option>
                                            <option value="4">No parking possible</option>
                                        </select>
                                    </div>
                                    <!--end form-group-->
                                </div>
                                <!--end col-md-6-->
                                <div class="col-md-6">
                                    <div class="row">
                                        <div class="col-md-6">
                                            <h3>Check In</h3>
                                            <div class="form-group-inline">
                                                <div class="form-group">
                                                    <label for="check-in-from">From</label>
                                                    <input type="text" class="form-control" id="check-in-from" name="check-in-from" placeholder="12:00">
                                                </div>
                                                <!--end form-group-->
                                                <div class="form-group">
                                                    <label for="check-in-to">To</label>
                                                    <input type="text" class="form-control" id="check-in-to" name="check-in-to" placeholder="20:00">
                                                </div>
                                                <!--end form-group-->
                                            </div>
                                            <!--end form-group-inline-->
                                            <label><input type="checkbox" name="1">Early Check-in</label>
                                        </div>
                                        <!--end col-md-6-->
                                        <div class="col-md-6">
                                            <h3>Check Out</h3>
                                            <div class="form-group-inline">
                                                <div class="form-group">
                                                    <label for="check-out-from">From</label>
                                                    <input type="text" class="form-control" id="check-out-from" name="check-out-from" placeholder="08:00">
                                                </div>
                                                <!--end form-group-->
                                                <div class="form-group">
                                                    <label for="check-out-to">To</label>
                                                    <input type="text" class="form-control" id="check-out-to" name="check-out-to" placeholder="12:00">
                                                </div>
                                                <!--end form-group-->
                                            </div>
                                            <!--end form-group-inline-->
                                            <label><input type="checkbox" name="1">Late Check-out</label>
                                        </div>
                                        <!--end col-md-6-->
                                    </div>
                                    <!--end row-->
                                </div>
                                <!--end col-md-6-->
                            </div>
                            <!--end row-->
                        </section>
                        <hr>
                        <section>
                            <div class="form-group center">
                                <button type="submit" class="btn btn-primary btn-rounded btn-xlarge">Submit Now</button>
                            </div>
                        </section>
                        <section>
                            <div class="center"><a href="#" class="btn btn-framed btn-default btn-rounded">Preview</a></div>
                        </section>
                    </div>
                {!! Form::close() !!}
                <!--end form-->
                </div>
                <!--end main-content-->
            </div>
            <!--end container-->
        </div>

        <!--end page-content-->
    </div>
<!--end page-wrapper-->




@include('partials.footer')
@include('include.foot')