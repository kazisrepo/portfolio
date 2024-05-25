<?php require 'header.php'; ?>
<?php
if(!isset($_SESSION['username']))
{
	echo "<script>window.location.href='login.php'</script>";
}
?>

<!-- breadcrumb area start -->
<section class="breadcrumb-area bg_img" data-overlay="5"
        data-background="assets/images/bg/breadcrumb-bg.jpeg">
        <div class="container">
            <div class="row">
                <div class="col-lg-6">
                    <div class="breadcrumb-text">
                        <h1 class="breadcrumb-title">Dashboard</h1>
                        
                    </div>
                </div>
                <div class="col-lg-6 my-auto">
                   
                </div>
            </div>
        </div>
    </section>
    <!-- breadcrumb area end -->



    <!-- checkout-area start -->
    <section class="checkout-area pt-40 pb-70">
        <div class="container">
            <form action="#">
                <div class="row">
                    <div class="col-lg-6">
                        <h3>Your account</h3>
                        <hr>
                        <div class="form-group row">
                            <label for="areaToBeCleaned" class="col-sm-4 col-form-label">Area to be cleaned</label>
                            <div class="col-sm-4">
                            <select class="form-control" id="areaToBeCleaned">
                                <option value="1000">500 - 1000</option>
                                <option value="1500">1001 - 1500</option>
                                <option value="2000">1501 - 2000</option>
                                <option value="2500">2001 - 2500</option>
                                <option value="3500">3001 - 3500</option>
                                <option value="3000">2501 - 3000</option>
                                <option value="3500">3001 - 3500</option>
                                <option value="4000">3501 - 4000</option>
                                <option value="4500">4001 - 4500</option>
                            </select>
                            </div>
                            <label for="areaToBeCleaned" class="col-sm-2 col-form-label">Sq. Ft.</label>
                        </div>
                        <div class="form-group row">
                        <label for="numberOfBedrooms" class="col-sm-4 col-form-label">No. of bedroom/s</label>
                            <div class="col-sm-4">
                            <select class="form-control" id="numberOfBedrooms">
                                <option value="1">1 Bedroom</option>
                                <option value="2">2 Bedrooms</option>
                                <option value="3">3 Bedrooms</option>
                                <option value="4">4 Bedrooms</option>
                                <option value="5">5 Bedrooms</option>
                                <option value="6">6 Bedrooms</option>
                            </select>
                            </div>
                        </div>

                        <div class="form-group row">
                        <label for="numberOfBathrooms" class="col-sm-4 col-form-label">No. of bathroom/s</label>
                            <div class="col-sm-4">
                            <select class="form-control" id="numberOfBathrooms">
                                <option value="1">1 Bathroom</option>
                                <option value="2">2 Bathrooms</option>
                                <option value="3">3 Bathrooms</option>
                                <option value="4">4 Bathrooms</option>
                                <option value="5">5 Bathrooms</option>
                                <option value="6">6 Bathrooms</option>
                                </select>
                            </div>
                        </div>
                        <div class="form-group row">
                        <label for="numberOfPets" class="col-sm-4 col-form-label">No. of pet/s</label>
                            <div class="col-sm-4">
                            <select class="form-control" id="numberOfPets">
                                <option value="0">0 (None)</option>
                                <option value="1">1 (One)</option>
                                <option value="2">2 (Two)</option>
                                <option value="3">3 (Three)</option>
                                <option value="4">4 (Four)</option>
                                
                                </select>
                            </div>
                        </div>

                        <hr>
                        <div class="form-group row">
                        <label for="frequency" class="col-sm-4 col-form-label">Frequency</label>
                            <div class="col-sm-8">
                            
                            <!-- 
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" name="frequency" id="freqDaily">
                                <label class="form-check-label" for="freqDaily">Daily</label>
                            </div>
                            -->
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" name="frequency" id="freqWeekly" checked>
                                <label class="form-check-label" for="freqWeekly">Weekly</label>
                            </div>
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" name="frequency" id="freqFortnightly">
                                <label class="form-check-label" for="freqFortnightly">Fortnightly</label>
                            </div>
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" name="frequency" id="freqMonthly">
                                <label class="form-check-label" for="freqMonthly">Monthly</label>
                            </div>
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" name="frequency" id="freqOnce">
                                <label class="form-check-label" for="freqOnce">Once</label>
                            </div>
                            
                            </div>
                        </div>
                        <div class="form-group row" id="divMovingInOut" style="display: none;">
                        
                            <div class="col-sm-8 offset-sm-4">
                            
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="checkbox" id="movingInOutCleaning" disabled>
                                <label class="form-check-label" for="movingInOutCleaning">Moving In/Out Cleaning</label>
                            </div>
                            
                            </div>
                        </div>
                      
                        <div class="form-group row">
                        <label for="days" class="col-sm-4 col-form-label">Day/s</label>
                            <div class="col-sm-8">
                            
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="checkbox" id="monday" checked>
                                <label class="form-check-label" for="monday">Mon</label>
                            </div>
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="checkbox" id="tuesday" checked>
                                <label class="form-check-label" for="tuesday">Tue</label>
                            </div>
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="checkbox" id="wednesday" checked>
                                <label class="form-check-label" for="wednesday">Wed</label>
                            </div>
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="checkbox" id="thursday" checked>
                                <label class="form-check-label" for="thursday">Thu</label>
                            </div>
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="checkbox" id="friday" checked>
                                <label class="form-check-label" for="friday">Fri</label>
                            </div>
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="checkbox" id="saturday" checked>
                                <label class="form-check-label" for="saturday">Sat</label>
                            </div>
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="checkbox" id="sunday" checked>
                                <label class="form-check-label" for="sunday">Sun</label>
                            </div>
                            
                            
                            </div>
                        </div>

                        <div class="form-group row">
                        <label for="cleaningType" class="col-sm-4 col-form-label">Type</label>
                            <div class="col-sm-8">
                                <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="radio" name="cleaningType" id="regularCleaning" checked>
                                    <label class="form-check-label" for="regularCleaning">Regular cleaning</label>
                                </div>
                                <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="radio" name="cleaningType" id="deepCleaning">
                                    <label class="form-check-label" for="deepCleaning">Deep cleaning</label>
                                </div>
                            </div>
                        </div>
                        </div>
                    <div class="col-lg-5 offset-lg-1">
                        <div class="your-order mb-30 ">
                            <h3>Charges</h3>
                            <hr>
                            <div class="form-group row">
                                <label class="col-sm-8 col-form-label">Hourly rate</label>
                                <label class="col-sm-2 col-form-label" id="lblHourlyRate">$30.00</label>
                            </div>
                            <div class="form-group row">
                                <label class="col-sm-8 col-form-label">Estimated hours</label>
                                <label class="col-sm-2 col-form-label" id="lblEstimatedHour">20.00</label>
                            </div>
                            <hr>
                            <div class="form-group row">
                                <label class="col-sm-8 col-form-label"><h5>Estimated charge</h5></label>
                                <label class="col-sm-2 col-form-label" id="lblEstimatedCharge"><h5>$600.00</h5></label>
                            </div>
                            <hr>
                            


                           
                            <div class="form-group row">
                                <label for="name" class="col-sm-4 col-form-label">Your name</label>
                                <input type="text" class="col-sm-4" name="firstname" id="txtFirstName" placeholder="First name">
                                <input type="text" class="col-sm-4" name="lastname" id="txtLastName" placeholder="Last name">
                            </div>
                            <div class="form-group row">
                                <label for="phoneNumber" class="col-sm-4 col-form-label">Your phone</label>
                                <input type="text" class="col-sm-8" name="phonenumber" id="txtPhoneNumber" placeholder="Phone">
                            </div>

                            <div class="form-group row">
                                <label for="emailaddress" class="col-sm-4 col-form-label">Your email</label>
                                <input type="text" class="col-sm-8" name="emailaddress" id="txtEmailAddress" placeholder="Email address">
                            </div>

                            <div class="form-group row">
                                <small class="col-sm-12 form-text text-muted">* Please note this is just an estimation. 
                                    Estimation may vary after visiting your property.
                                </small>
                            </div>



                            <div class="form-group row">
                                <div class="col-sm-12">
                                  <button type="button" class="col-sm-12 btn btn-primary">Submit estimation</button>
                                </div>
                                
                            </div>
                           
                            
                        </div>
                    </div>
                </div>
            </form>
        </div>
    </section>
    <!-- checkout-area end -->



<?php require 'footer.php'; ?>
<script type="text/javascript">
  
  var hourlyrate = 30  
  var arearate = 




</script>