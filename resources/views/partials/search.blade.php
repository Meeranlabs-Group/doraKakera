<div id="page-content">
    <div class="hero-section" data-height="600">
        <form id="form-hero">
            <div class="hero-inner">
                <div class="hero-wrapper" >
                    <div class="caption">
                        <div class="inner">
                            <div class="container">
                                <h1 class="center">Find Your Best Property</h1>
                                <div class="row no-gutters">




                                    <div class="col-md-2 col-sm-2 col-md-offset-3">
                                        <div class="form-group">
                                            <button type="button" id="show" value="buy" class="btn btn-primary">BUY</button>
                                        </div>
                                    </div>

                                    <div class="col-md-2 col-sm-2">
                                        <div class="form-group">
                                            <button type="button" onclick="location.href='{{ url("/addproperty") }}';"  class="btn btn-primary submit">SELL</button>
                                        </div>
                                    </div>

                                    <div class="col-md-2 col-sm-2">
                                        <div class="form-group">
                                            <button type="button" id="show1" value="rent" class="btn btn-primary">RENT</button>
                                        </div>
                                    </div>



                                </div>


                                <div class="row no-gutters">
                                    <div class="col-md-8 col-sm-8 col-md-offset-2 search-bar" id="0">
                                        <div class="col-md-4 col-sm-4 ">
                                            <div class="form-group">
                                                <label style="color: white" >Property Type</label>

                                                <select class="form-control framed white">

                                                    <option value="">  Any Type  </option>
                                                    <option value="" disabled>  --- HOUSE --- </option>
                                                    <option value="Houses">  Houses</option>
                                                    <option value="Flates">  Flates</option>
                                                    <option value="Upper-Portions">  Upper Portions</option>
                                                    <option value="Lower-Portions">  Lower Portions</option>
                                                    <option value="Farms-House">  Farms House</option>
                                                    <option value="Rooms">  Rooms</option>

                                                    <option value="" disabled>  --- PLOTS ---</option>
                                                    <option value="Residential-Plots">  Residential Plots</option>
                                                    <option value="Commercial-Plots">  Commercial Plots</option>
                                                    <option value="Agricultural-Land">  Agricultural Land</option>
                                                    <option value="Industrial-Land">  Industrial Land</option>
                                                    <option value="Plot-Files">  Plot Files</option>
                                                    <option value="Plot-Forms">  Plot Forms</option>

                                                    <option value="" disabled>  --- COMMERCIAL ---</option>
                                                    <option value="Offices">  Offices</option>
                                                    <option value="Shops">  Shops</option>
                                                    <option value="Warehouses">  Warehouses</option>
                                                    <option value="Factories">  Factories</option>
                                                    <option value="Buildings">  Buildings</option>
                                                    <option value="Other">  Other</option>

                                                </select>
                                            </div>
                                            <!--end form-group-->
                                        </div>
                                        <div class="col-md-4 col-sm-4">
                                            <div class="form-group">
                                                <label style="color: white" for="city">City</label>
                                                <select class="form-control framed white" name="city" id="city">
                                                    <option value="" selected>Select City</option>
                                                    <option value="Islamabad">Islamabad</option>
                                                    <option value="Lahore">Lahore</option>
                                                    <option value="Karachi">Karachi</option>
                                                    <option value="Rawalpindi">Rawalpindi</option>
                                                    <option value="" disabled>------------------------------------------------------</option>
                                                    <option value="Abbottabad">Abbottabad</option>
                                                    <option value="Abdul Hakim">Abdul Hakim</option>
                                                    <option value="Alipur">Alipur</option>
                                                    <option value="Arifwala">Arifwala</option>
                                                    <option value="Astore">Astore</option>
                                                    <option value="Attock">Attock</option>
                                                    <option value="Awaran">Awaran</option>
                                                    <option value="Badin">Badin</option>
                                                    <option value="Bagh">Bagh</option>
                                                    <option value="Bahawalnagar">Bahawalnagar</option>
                                                    <option value="Bahawalpur">Bahawalpur</option>
                                                    <option value="Bannu">Bannu</option>
                                                    <option value="Bhakkar">Bhakkar</option>
                                                    <option value="Bhalwal">Bhalwal</option><option value="Bhimber">Bhimber</option>
                                                    <option value="Buner">Buner</option><option value="Burewala">Burewala</option><option value="Chaghi">Chaghi</option>
                                                    <option value="Chakwal">Chakwal</option><option value="Charsadda">Charsadda</option><option value="Chichawatni">Chichawatni</option>
                                                    <option value="Chiniot">Chiniot</option><option value="Chishtian Sharif">Chishtian Sharif</option>
                                                    <option value="Chitral0">Chitral</option><option value="Chunian">Chunian</option><option value="Dadu">Dadu</option>
                                                    <option value="Daharki">Daharki</option><option value="Daska">Daska</option><option value="Depalpur">Depalpur</option>
                                                    <option value="Dera Ghazi Khan">Dera Ghazi Khan</option><option value="Dera Ismail Khan">Dera Ismail Khan</option>
                                                    <option value="Dijkot">Dijkot</option><option value="uniya Pur">Duniya Pur</option><option value="FATA">FATA</option>
                                                    <option value="Faisalabad">Faisalabad</option><option value="Fateh Jang">Fateh Jang</option><option value="Gaarho">Gaarho
                                                    </option><option value="Gadoon">Gadoon</option><option value="Galyat">Galyat</option><option value="Gharo">Gharo</option>
                                                    <option value="Ghotki">Ghotki</option><option value="Gilgit">Gilgit</option><option value="Gojra">Gojra</option>
                                                    <option value="Gujar Khan">Gujar Khan</option><option value="Gujranwala">Gujranwala</option><option value="Gujrat">Gujrat</option>
                                                    <option value="Gwadar">Gwadar</option><option value="Hafizabad">Hafizabad</option><option value="Hangu">Hangu</option>
                                                    <option value="Harappa">Harappa</option><option value="Haripur">Haripur</option><option value="Haroonabad">Haroonabad</option>
                                                    <option value="Hasilpur">Hasilpur</option><option value="Hassan Abdal">Hassan Abdal</option><option value="Haveli Lakha">Haveli Lakha
                                                    </option><option value="Hub (Hub Chowki)">Hub (Hub Chowki)</option><option value="Hunza">Hunza</option>
                                                    <option value="Hyderabad">Hyderabad</option><option value="Islamabad">Islamabad</option><option value="Jacobabad">Jacobabad</option>
                                                    <option value="Jahanian">Jahanian</option><option value="Jalalpur Jattan">Jalalpur Jattan</option><option value="Jampur">Jampur</option>
                                                    <option value="Jauharabad">Jauharabad</option><option value="Jhang">Jhang</option><option value="Jhelum">Jhelum</option>
                                                    <option value="Kaghan">Kaghan</option><option value="Kahror Pakka">Kahror Pakka</option><option value="Kalat">Kalat</option>
                                                    <option value="Kamalia">Kamalia</option><option value="Kamoki">Kamoki</option><option value="Karachi">Karachi</option><option value="Karak">Karak</option>
                                                    <option value="Kasur">Kasur</option><option value="Khairpur">Khairpur</option><option value="Khanewal">Khanewal</option>
                                                    <option value="Khanpur">Khanpur</option><option value="Kharian">Kharian</option><option value="Khushab">Khushab</option>
                                                    <option value="Khuzdar">Khuzdar</option><option value="Kohat">Kohat</option><option value="Kot Addu">Kot Addu</option>
                                                    <option value="Kotli">Kotli</option><option value="Lahore">Lahore</option><option value="Lakki Marwat">Lakki Marwat</option>
                                                    <option value="Lalamusa">Lalamusa</option><option value="Larkana">Larkana</option><option value="Lasbela">Lasbela</option>
                                                    <option value="Layyah">Layyah</option><option value="Liaquatpur">Liaquatpur</option><option value="Lodhran">Lodhran</option>
                                                    <option value="Loralai">Loralai</option><option value="Lower Dir">Lower Dir</option><option value="Mailsi">Mailsi</option>
                                                    <option value="Makran">Makran</option><option value="Malakand">Malakand</option><option value="Mandi Bahauddin">Mandi Bahauddin
                                                    </option><option value="Mansehra">Mansehra</option><option value="Mardan">Mardan</option><option value="Matiari">Matiari</option>
                                                    <option value="Mian Channu">Mian Channu</option><option value="Mianwali">Mianwali</option><option value="Mirpur">Mirpur</option>
                                                    <option value="Mirpur Khas">Mirpur Khas</option><option value="Mirpur Sakro">Mirpur Sakro</option><option value="Multan">Multan
                                                    </option><option value="Murree">Murree</option><option value="Muzaffarabad">Muzaffarabad</option><option value="Muzaffargarh">
                                                        Muzaffargarh</option><option value="Nankana Sahib">Nankana Sahib</option><option value="Naran">Naran</option>
                                                    <option value="Narowal">Narowal</option><option value="Nasirabad">Nasirabad</option><option value="Naushahro Feroze">
                                                        Naushahro Feroze</option><option value="Nawabshah">Nawabshah</option><option value="Neelum">Neelum</option><option value="Nowshera">Nowshera</option>
                                                    <option value="Okara">Okara</option><option value="Others">Others</option><option value="Others Azad Kashmir">Others Azad Kashmir</option>
                                                    <option value="Others Balochistan">Others Balochistan</option><option value="Others Gilgit Baltistan">Others Gilgit Baltistan</option>
                                                    <option value="Others Khyber Pakhtunkhwa">Others Khyber Pakhtunkhwa</option><option value="Others Punjab">Others Punjab</option>
                                                    <option value="Others Sindh">Others Sindh</option><option value="Pakpattan">Pakpattan</option><option value="Peshawar">Peshawar</option>
                                                    <option value="Pind Dadan Khan">Pind Dadan Khan</option><option value="Pir Mahal">Pir Mahal</option><option value="Quetta">Quetta</option>
                                                    <option value="Rahim Yar Khan">Rahim Yar Khan</option><option value="Rajanpur">Rajanpur</option><option value="Ratwal">Ratwal</option>
                                                    <option value="Rawalkot">Rawalkot</option><option value="Rawalpindi">Rawalpindi</option><option value="Rohri">Rohri</option>
                                                    <option value="Sadiqabad">Sadiqabad</option><option value="Sahiwal">Sahiwal</option><option value="Samundri">Samundri</option>
                                                    <option value="Sanghar">Sanghar</option><option value="Sargodha">Sargodha</option><option value="Sehwan">Sehwan</option>
                                                    <option value="Shahdadpur">Shahdadpur</option><option value="Shahkot">Shahkot</option><option value="Sheikhupura">Sheikhupura</option>
                                                    <option value="Shikarpur">Shikarpur</option><option value="Shorkot">Shorkot</option><option value="Sialkot">Sialkot
                                                    </option><option value="Sibi">Sibi</option><option value="Skardu">Skardu</option><option value="Sudhnoti">Sudhnoti
                                                    </option><option value="Sukkur">Sukkur</option><option value="Swabi">Swabi</option><option value="Swat">Swat
                                                    </option><option value="Talagang">Talagang</option><option value="Tando Adam">Tando Adam</option><option value="Tando Allahyar">
                                                        Tando Allahyar</option><option value="Tando Bago">Tando Bago</option><option value="Taxila">Taxila</option>
                                                    <option value="Thatta">Thatta</option><option value="Toba Tek Singh">Toba Tek Singh</option><option value="Vehari">Vehari</option>
                                                    <option value="Wah">Wah</option><option value="Wazirabad">Wazirabad</option><option value="Waziristan">Waziristan</option>
                                                    <option value="Zhob">Zhob</option>
                                                </select>
                                            </div>
                                            <!--end form-group-->
                                        </div>


                                        <div class="col-md-4 col-sm-4">
                                            <div class="form-group">
                                                <label style="color: white" for="">Area/Location</label>
                                                <select class="form-control framed white">
                                                    <option value="">  Any Type  </option>
                                                    <option value="">  --- HOUSE --- </option>
                                                    <option value="">  Houses</option>
                                                    <option value="">  Flates</option>
                                                    <option value="">  Upper Portions</option>
                                                    <option value="">  Lower Portions</option>
                                                    <option value="">  Farms House</option>
                                                    <option value="">  Rooms</option>

                                                    <option value="">  --- PLOTS ---</option>
                                                    <option value="">  Residential Plots</option>
                                                    <option value="">  Commercial Plots</option>
                                                    <option value="">  Agricultural Land</option>
                                                    <option value="">  Industrial Land</option>
                                                    <option value="">  Plot Files</option>
                                                    <option value="">  Plot Forms</option>

                                                    <option value="">  --- COMMERCIAL ---</option>
                                                    <option value="">  Offices</option>
                                                    <option value="">  Shops</option>
                                                    <option value="">  Warehouses</option>
                                                    <option value="">  Factories</option>
                                                    <option value="">  Buildings</option>
                                                    <option value="">  Other</option>
                                                </select>
                                            </div>
                                            <!--end form-group-->
                                        </div>

                                        <div class="col-md-4 col-sm-4">
                                            <div class="form-group">
                                                <label style="color: white">Area/Location</label>
                                                <select class="form-control framed white">
                                                    <option value="">  Any Type  </option>
                                                    <option value="">  --- HOUSE --- </option>
                                                    <option value="">  Houses</option>
                                                    <option value="">  Flates</option>
                                                    <option value="">  Upper Portions</option>
                                                    <option value="">  Lower Portions</option>
                                                    <option value="">  Farms House</option>
                                                    <option value="">  Rooms</option>

                                                    <option value="">  --- PLOTS ---</option>
                                                    <option value="">  Residential Plots</option>
                                                    <option value="">  Commercial Plots</option>
                                                    <option value="">  Agricultural Land</option>
                                                    <option value="">  Industrial Land</option>
                                                    <option value="">  Plot Files</option>
                                                    <option value="">  Plot Forms</option>

                                                    <option value="">  --- COMMERCIAL ---</option>
                                                    <option value="">  Offices</option>
                                                    <option value="">  Shops</option>
                                                    <option value="">  Warehouses</option>
                                                    <option value="">  Factories</option>
                                                    <option value="">  Buildings</option>
                                                    <option value="">  Other</option>
                                                </select>
                                            </div>
                                            <!--end form-group-->
                                        </div>


                                        <div class="col-md-4 col-sm-4">
                                            <div class="form-group">
                                                <label style="color: white">Property Size Unit</label>
                                                <select class="form-control framed white">

                                                    <option value="">Size Unit Type</option>
                                                    <option value="Marla">Marla</option>
                                                    <option value="Kanal">Kanal</option>
                                                    <option value="Square Feet">Square Feet</option>
                                                    <option value="Square Meter">Square Meter</option>
                                                    <option value="Square Yard">Square Yard</option>

                                                </select>
                                            </div>
                                            <!--end form-group-->
                                        </div>

                                        <div class="col-md-2 ">
                                            <div class="form-group">
                                                <label style="color: white">From</label>
                                                <input type="number" name="sfrom">

                                            </div>
                                            <!--end form-group-->
                                        </div>
                                        <div class="col-md-2 ">
                                            <div class="form-group">
                                                <label style="color: white">To</label>
                                                <input type="number" name="sTo">

                                            </div>
                                            <!--end form-group-->
                                        </div>



                                        <div class="col-md-4 col-sm-4 ">
                                            <div class="form-group">
                                                <label style="color: white">Property Size Unit</label>
                                                <select class="form-control framed white">
                                                    <option value="">  Any Type  </option>
                                                    <option value="">  --- HOUSE --- </option>
                                                    <option value="">  Houses</option>
                                                    <option value="">  Flates</option>
                                                    <option value="">  Upper Portions</option>
                                                    <option value="">  Lower Portions</option>
                                                    <option value="">  Farms House</option>
                                                    <option value="">  Rooms</option>

                                                    <option value="">  --- PLOTS ---</option>
                                                    <option value="">  Residential Plots</option>
                                                    <option value="">  Commercial Plots</option>
                                                    <option value="">  Agricultural Land</option>
                                                    <option value="">  Industrial Land</option>
                                                    <option value="">  Plot Files</option>
                                                    <option value="">  Plot Forms</option>

                                                    <option value="">  --- COMMERCIAL ---</option>
                                                    <option value="">  Offices</option>
                                                    <option value="">  Shops</option>
                                                    <option value="">  Warehouses</option>
                                                    <option value="">  Factories</option>
                                                    <option value="">  Buildings</option>
                                                    <option value="">  Other</option>
                                                </select>
                                            </div>
                                            <!--end form-group-->
                                        </div>

                                        <div class="col-md-4 col-sm-4">
                                            <div class="form-group ">
                                                <label style="color: white">From</label>
                                                <input type="number" name="" />
                                            </div>
                                            <!--end form-group-->
                                        </div>

                                        <div class="col-md-4 col-sm-4">
                                            <div class="form-group">
                                                <label style="color: white">To</label>
                                                <input type="number" />
                                            </div>
                                            <!--end form-group-->
                                        </div>

                                        <div class="col-md-4 col-sm-4 col-md-offset-4">
                                            <button type="submit" class="btn btn-rounded margin-btn" >Search</button>
                                        </div>


                                    </div>








                                </div>

                                <!--end favorite-searches-->
                            </div>
                            <!--end container-->
                            <div class="bg-transfer"><img src={{ asset("assets/img/sample.jpg") }} alt=""></div>
                            <!--end bg-transfer-->
                        </div>
                        <!--end inner-->
                    </div>
                    <!--end caption-->
                    <div class="options">


                        <a href="/MarketAnalysis"><h3 class="text-center " style="color: white;">Market Analysis</h3></a>


                        <!--end row-->
                    </div>


                </div>
                <!--end hero-wrapper-->
            </div>
            <!--end hero-inner-->

            <!--end plate-->
        </form>
        <!--end form-->
    </div>


    <div id="nt-title-container">
        <ul id="nt-title">



            @foreach($articles as $article)
            <li>
                <a href="MarketDetail/{{ $article->id }}">{{ $article->title }}</a>
            </li>
                @endforeach
        </ul>
    </div>



