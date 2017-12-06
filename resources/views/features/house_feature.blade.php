<section id="features">
    <div class="title">
        <h2>Features</h2>
        <aside class="step">4</aside>
    </div>


    <div class="row">
        <div class="col-md-12">
            <h3>Main Features</h3>

          <div class="row">
              <div class="col-md-3">
                  <div class="form-group width-80">
                <label>Built in Year</label>
                  <select  name="Built_in_Year" class="framed width-80">

                          <?php
                          for($i = 1990 ; $i <= date('Y'); $i++){
                              echo "<option value=".$i.">".$i."</option>";
                          }
                          ?>

                  </select>


              </div>
              </div>

              <div class="col-md-3">
                  <div class="form-group width-80">
            <label>Parking Spaces</label>
                      <select  name="Parking_Spaces" class="framed width-80">


                          <option value="0">0</option>
                          <option value="1">1</option>
                          <option value="2">2</option>
                          <option value="3">3</option>
                          <option value="4">4</option>
                          <option value="5">5></option>

                      </select>
              </div>
              </div>

              <div class="col-md-3">
                  <div class="form-group width-80">
              <label>Number of Bedrooms</label>


                  <select  name="Number_of_Bedrooms" class="framed width-80">


                      <option value="0">0</option>
                      <option value="1">1</option>
                      <option value="2">2</option>
                      <option value="3">3</option>
                      <option value="4">4</option>
                      <option value="5">5></option>

                  </select>

                  </div>
              </div>
              <div class="col-md-3">
                  <div class="form-group width-80">
              <label>Number of Kitchens</label>
                  <select  name="Number_of_Kitchens" class="framed width-80">


                      <option value="0">0</option>
                      <option value="1">1</option>
                      <option value="2">2</option>
                      <option value="3">3</option>
                      <option value="4">4</option>
                      <option value="5">5></option>

                  </select>

              </div>
              </div>
              <div class="col-md-3">
                  <div class="form-group width-80">
              <label>Number of Bathrooms</label>

                  <select  name="Number_of_Bathrooms" class="framed width-80">


                      <option value="0">0</option>
                      <option value="1">1</option>
                      <option value="2">2</option>
                      <option value="3">3</option>
                      <option value="4">4</option>
                      <option value="5">5></option>

                  </select>

              </div>
              </div>

              <div class="col-md-3">
                  <div class="form-group width-80">
              <label>Flooring</label>
              <select name="Flooring_type" class="framed width-80">
                  <option value="Flooring_None">None</option>
                  <option value="Flooring_Tiles">Tiles</option>
                  <option value="Flooring_Marble">Marble</option>
                  <option value="Flooring_Wooden">Wooden</option>
                  <option value="Flooring_Chip">Chip</option>
                  <option value="Flooring_Cement">Cement</option>
                  <option value="Flooring_Other">Other</option>
              </select>
                  </div>
              </div>
              <div class="col-md-3">
                  <div class="form-group width-80">
              <label>Electricity Backup</label>
              <select name="Electricity_Backup_type" class="framed width-80">
                  <option value="Electricity_Backup_None">None</option>
                  <option value="Electricity_Backup_Generator">Generator</option>
                  <option value="Electricity_Backup_Ups">Ups</option>
                  <option value="Electricity_Backup_Solar">Solar</option>
                  <option value="Electricity_Backup_Other">Other</option>
              </select>
                  </div>
                  </div>
              <div class="col-md-3">
                  <div class="form-group width-70">
            <label>Total Number of Floors</label>



                  <div class="input-number">
                      <div class="change-button plus">
                          <i class="fa fa-caret-up"></i>
                      </div>
                      <div class="change-button minus">
                          <i class="fa fa-caret-down"></i>
                      </div>
                      <input type="number"  name="Total_Number_of_Floors">
                  </div>
                  </div>
              </div>


          </div>

        </div>
        <!--end col-md-4-->


        <div class="col-md-6">
            <h3> Buisness and Communication</h3>
            <div  id="b&c">
            <ul class="checkboxes inline half list-unstyled " >
                
                <li><label><input type="checkbox" name="Broadband_Internet_Access">Broadband Internet Access</label></li>
                <li><label><input type="checkbox" name="Satellite_or_Cable_TV_Ready">Satellite or Cable TV Ready</label></li>
                <li><label><input type="checkbox" name="Intercom">Intercom</label></li>

               <label>Other Business and Communication Facilities</label>
                <input type="text" name="Other_Business_and_Communication_Facilities">

            </ul>
            </div>
            <!--end checkboxes-->
        </div>
        <!--end col-md-4-->


        <div class="col-md-6">
            <h3>Nearby Locations </h3>
            <div  id="N&L">
            <ul class="checkboxes inline half list-unstyled">
                
               <li><label><input type="checkbox" name="Nearby_Schools">Nearby Schools</label></li>
                <li><label><input type="checkbox" name="Nearby_Hospitals">Nearby Hospitals</label></li>
                <li><label><input type="checkbox" name="Nearby_Shopping_Malls">Nearby Shopping Malls</label></li>
                <li><label><input type="checkbox" name="Nearby_Restaurants">Nearby Restaurants</label></li>
                <li><label><input type="checkbox" name="Nearby_Public_Transport_Service">Nearby Public Transport Service</label></li>

                {{--<li><label><input type="text" name="Other_Nearby_Places">Other Nearby Places</label></li>--}}
                <li><label>Distance From Airport(kms)</label><input type="text" name="Distance_From_Airport(kms)"></li>
            </ul>
            </div>
            <!--end checkboxes-->
        </div>
        <!--end col-md-4-->
    </div>
    <!--end row-->


    <div class="row">
        <div class="col-md-6">
            <h3>Rooms</h3>
            <div  id="R">
            <ul class="checkboxes inline half list-unstyled">
               

                <li><label><input type="checkbox" name="Drawing_Room">Drawing Room</label></li>
                <li><label><input type="checkbox" name="Dining_Room">Dining Room</label></li>


                
                <li><label><input type="checkbox" name="Study_Room">Study Room</label></li>
                <li><label><input type="checkbox" name="Prayer_Room">Prayer Room</label></li>
                <li><label><input type="checkbox" name="Powder_Room">Powder Room</label></li>
                <li><label><input type="checkbox" name="Gym_Room">Gym Room</label></li>
                

                
                <li><label><input type="checkbox" name="Steaming_Room">Steaming Room</label></li>
                <li><label><input type="checkbox" name="Lounge_or_Sitting_Room">Lounge or Sitting Room</label></li>
                <li><label><input type="checkbox" name="Laundry_Room">Laundry Room</label></li>

                <label>Other Rooms</label>
                <div class="input-number">
                    <div class="change-button plus">
                        <i class="fa fa-caret-up"></i>
                    </div>
                    <div class="change-button minus">
                        <i class="fa fa-caret-down"></i>
                    </div>
                    <input type="number" name="Other_Rooms">
                </div>


                <label>Number of Servant Quarters</label>
                    <div class="input-number">
                        <div class="change-button plus">
                            <i class="fa fa-caret-up"></i>
                        </div>
                        <div class="change-button minus">
                            <i class="fa fa-caret-down"></i>


                        </div>
                        <input type="number" name="Number_of_Servant_Quarters">
                    </div>

                <label>Number of Store Rooms</label>
                <div class="input-number">
                    <div class="change-button plus">
                        <i class="fa fa-caret-up"></i>
                    </div>
                    <div class="change-button minus">
                        <i class="fa fa-caret-down"></i>


                    </div>
                    <input type="number" name="Number_of_Store_Rooms">
                </div>
                
            </ul>

            </div>            <!--end checkboxes-->
        </div>
        <!--end col-md-4-->


        <div class="col-md-6">
            <h3>Healthcare Recreational</h3>
            <div id="H&R">
            <ul class="checkboxes inline half list-unstyled">
                
                <li><label><input type="checkbox" name="Lawn_or_Garden">Lawn or Garden</label></li>
                <li><label><input type="checkbox" name="Swimming_Pool">Swimming Pool</label></li>
                <li><label><input type="checkbox" name="Sauna">Sauna</label></li>
                <li><label><input type="checkbox" name="Jacuzzi">Jacuzzi</label></li>
                
               <label>
                        Other Healthcare and Recreation Facilities</label><input type="text" name="Other_Healthcare_and_Recreation_Facilities">
                
            </ul>
            </div>
            <!--end checkboxes-->
        </div>
        <!--end col-md-4-->


        <div class="col-md-6">
            <h3>Other Facilities</h3>
            <div  id="O&F">
            <ul class="checkboxes inline half list-unstyled">
                <li><label><input type="checkbox" name="Maintenance_Staff">Maintenance Staff</label></li>
                <li><label><input type="checkbox" name="Security_Staff">Security Staff</label></li>
                <li><label><input type="checkbox" name="Facilities_for_Disabled">Facilities for Disabled</label></li>
                
            <label>Other Facilities<input type="text" name="Other_Facilities"></label>
 
            </ul>
            </div>
            <!--end checkboxes-->
        </div>
        <!--end col-md-4-->
    </div>
    <!--end row-->
</section>
