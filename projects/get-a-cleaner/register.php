<?php require 'header.php'; ?>

 <!-- checkout-area start -->
    <section class="checkout-area pt-40 pb-70">
        <div class="container">
            <form action="includes/signup.inc.php" method="POST">
                <div class="row">
                    <div class="col-lg-12">
                        <h3>Register</h3>
                        <hr>
                        <div class="form-group row">
                            <label for="email" class="col-sm-2 col-form-label">Register as
                                <span title="If you need a cleaner to do some work for you, register as Client; If you are a cleaner and want to work with us register as Contractor">
                                    <sup> <i class="fa fa-question-circle"></i></sup>
                                </span>
                            </label>
                            <div class="col-sm-4">
                              <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" name="registeras" id="client" value="4" checked>
                                <label class="form-check-label" for="client">Client</label>
                              </div>
                              <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" name="registeras" id="worker" value="5">
                                <label class="form-check-label" for="worker">Contractor</label>
                            </div>
                            </div>
                            
                        </div>
                        <div class="form-group row">
                            <label for="email" class="col-sm-2 col-form-label">Email</label>
                            <div class="col-sm-6">
                              <input type="email" name="email" id="email" class="col-sm-10" placeholder="Email address" required>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="password" class="col-sm-2 col-form-label">Password</label>
                            <div class="col-sm-6">
                              <input type="password" name="password" id="password" class="col-sm-5" placeholder="Password" required>
                              <input type="password" name="repeatpassword" id="repeatpassword" class="col-sm-5" placeholder="Repeat password">
                            </div>
                        </div>

                        <hr>
                        <div class="form-group row">
                            <label for="firstname" class="col-sm-2 col-form-label">Name</label>
                            <div class="col-sm-6">
                              <input type="text" name="firstname" id="firstname" class="col-sm-5" placeholder="First name" required>
                              <input type="text" name="lastname" id="lastname" class="col-sm-5" placeholder="Last name">
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="phone" class="col-sm-2 col-form-label">Phone</label>
                            <div class="col-sm-6">
                              <input type="text" name="phone" id="phone" class="col-sm-10" placeholder="Phone number">
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="address" class="col-sm-2 col-form-label">Address</label>
                            <div class="col-sm-6">
                              <input type="text" name="address" id="address" class="col-sm-10" placeholder="Address">
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="postcode" class="col-sm-2 col-form-label">Postcode</label>
                            <div class="col-sm-6">
                              <input type="text" name="postcode" id="postcode" class="col-sm-10" placeholder="Postcode">
                            </div>
                        </div>
                        <hr>

                        <div class="form-group row">
                            <button type="submit" id="btnsubmitregistration" class="btn btn-primary ml-15" name="submit-registration">Submit registration</button>
                            
                        </div>
                    </div>
                </div>
            </form>
        </div>
    </section>
    <!-- checkout-area end -->



<?php require 'footer.php'; ?>