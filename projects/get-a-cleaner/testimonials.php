<?php require 'header.php'; ?>

<!-- breadcrumb area start -->
<section class="breadcrumb-area pt-40 pb-40 bg_img" data-overlay="5"
        data-background="assets/images/bg/breadcrumb-bg.jpeg">
        <div class="container">
            <div class="row">
                <div class="col-lg-6">
                    <div class="breadcrumb-text">
                        <h1 class="breadcrumb-title">Testimonials</h1>
                        
                    </div>
                </div>
                <div class="col-lg-6 my-auto">
                   
                </div>
            </div>
        </div>
    </section>
    <!-- breadcrumb area end -->

    <!-- cotact form start -->
    <section class="contact-area pb-40">
        <div class="container">
            <div class="row">
                <div class="col-xl-12">
                    <div class="contact-wrap">
                        <div class="row">
                            
                            <div class="col-xl-8 col-lg-6 ">
                                <div class="section-heading section-heading-2 mb-50 mt-120">
                                    <h2 class="section-title">Your feedback is important to us.</h2>
                                    <h5 class="sub-title mb-22"></h5>
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
                                            <label for="messagecontent"></label>
                                            <textarea name="messagecontent" type="" id="messagecontent">

                                            </textarea>
                                            
                                        </div>
                                        <div class="form-group mt-10">
                                            <button type="submit" class="site-btn boxed">Submit</button>
                                        </div>
                                    </div>
                                    <p class="ajax-response"></p>
                                </form>
                            </div>

                           
                           

                            
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- cotact form end -->





<?php require 'footer.php'; ?>