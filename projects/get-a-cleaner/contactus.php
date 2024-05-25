<?php require 'header.php'; ?>
<!-- breadcrumb area start -->
<section class="breadcrumb-area pt-40 pb-40 bg_img" data-overlay="5"
        data-background="assets/images/bg/breadcrumb-bg.jpeg">
        <div class="container">
            <div class="row">
                <div class="col-lg-6">
                    <div class="breadcrumb-text">
                        <h1 class="breadcrumb-title">Contact Us</h1>
                        
                    </div>
                </div>
                <div class="col-lg-6 my-auto">
                   
                </div>
            </div>
        </div>
    </section>
    <!-- breadcrumb area end -->

    <!-- feature area start -->
    <section class="feature-area feature-area-2 pt-120 ">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-xl-7 text-center">
                    <div class="section-heading section-heading-2 mb-70">
                        <h5 class="sub-title mb-22">Get in touch</h5>
                        <h2 class="section-title">Contact us </h2>
                    </div>
                </div>
            </div>
            <div class="row mt-none-30 text-center">
                <div class="col-xl-3 col-lg-6 col-md-6 mt-30">
                    <div class="singel-feature-box singel-feature-box-2">
                        <div class="feature-icon mb-35">
                            <img src="assets/images/icons/contact-info-1.png" alt="">
                        </div>
                        <div class="feature-content">
                            <h3 class="feture-title mb-20">Email Address</h3>
                            <p>
                                <a href="mailto:info@webmail.com">info@getacleaner.ca</a> <br>
                                <a href="mailto:support@webmail.com">support@getacleaner.ca</a> <br>
                            </p>
                            <a href="#" class="inline-btn mt-10"><i class="fal fa-arrow-right"></i> Mail Us</a>
                        </div>
                    </div>
                </div>
                <div class="col-xl-3 col-lg-6 col-md-6 mt-30">
                    <div class="singel-feature-box singel-feature-box-2">
                        <div class="feature-icon mb-35">
                            <img src="assets/images/icons/contact-info-2.png" alt="">
                        </div>
                        <div class="feature-content">
                            <h3 class="feture-title mb-20">Phone Number</h3>
                            <p>
                                <a href="tel:+1 437 230 3216">+1 437 230 3216</a> <br>
                                <a href="tel:+1 438 483 6066">+1 438 483 6066</a> <br>
                                
                            </p>
                            <a href="#" class="inline-btn mt-10"><i class="fal fa-arrow-right"></i> Make Call</a>
                        </div>
                    </div>
                </div>
                <div class="col-xl-3 col-lg-6 col-md-6 mt-30">
                    <div class="singel-feature-box singel-feature-box-2">
                        <div class="feature-icon mb-35">
                            <img src="assets/images/icons/contact-info-3.png" alt="">
                        </div>
                        <div class="feature-content">
                            <h3 class="feture-title mb-20">Office Address</h3>
                            
                            <p>246-9 Crescent Pl, East York, ON, M4C 5L8</p>
                            </p>
                            <a href="#0" class="inline-btn mt-10"><i class="fal fa-arrow-right"></i> Get Directions</a>
                        </div>
                    </div>
                </div>
                <div class="col-xl-3 col-lg-6 col-md-6 mt-30">
                    <div class="singel-feature-box singel-feature-box-2">
                        <div class="feature-icon mb-35">
                            <img src="assets/images/icons/contact-info-4.png" alt="">
                        </div>
                        <div class="feature-content">
                            <h3 class="feture-title mb-20">Social Connect</h3>
                            <p>
                                <a href="www.facebook.com/example">www.facebook.com/getacleanercanada</a> <br>
                                <a href="www.twitter.com/example">www.twitter.com/getacleanercanada</a> <br>
                            </p>
                            <a href="#0" class="inline-btn mt-10"><i class="fal fa-arrow-right"></i> Get Connect</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- feature area end -->

    <!-- cotact form start -->
    <section class="contact-area pb-40">
        <div class="container">
            <div class="row">
                <div class="col-xl-12">
                    <div class="contact-wrap">
                        <div class="row">
                            
                            <div class="col-xl-5 col-lg-6 ">
                                <div class="section-heading section-heading-2 mb-50 mt-120">
                                    <h2 class="section-title">Send us an enquiry.</h2>
                                    <h5 class="sub-title mb-22">We will get back to you as soon as possible.</h5>
                                </div>
                                <form id="contact-form-main" action="mail.php" method="POST">
                                    <div class="cta-form mt-none-10 mb-120">
                                        <div class="form-group mt-10">
                                            <label for="name"><i class="fal fa-user"></i></label>
                                            <input name="name" type="text" id="name" placeholder="Enter your name">
                                        </div>
                                        <div class="form-group mt-10">
                                            <label for="mail"><i class="fal fa-envelope"></i></label>
                                            <input name="email" type="email" id="mail" placeholder="Enter your email">
                                        </div>
                                      
                                        <div class="form-group mt-10">
                                            <textarea name="messagecontent" type="" id="messagecontent" placeholder="Type your message"></textarea>
                                        </div>
                                        <div class="form-group mt-10">
                                            <button type="submit" class="site-btn boxed">Submit Request</button>
                                        </div>
                                    </div>
                                    <p class="ajax-response"></p>
                                </form>
                            </div>

                            <div class="col-xl-5 col-lg-5 offset-xl-1">
                            <div id="contact-map" class="contact-map1 mb-50 mt-120"></div>


                            
                            </div>

                            
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- cotact form end -->





<?php require 'footer.php'; ?>