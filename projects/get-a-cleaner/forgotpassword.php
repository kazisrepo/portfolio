<?php require 'header.php'; ?>

<!-- login Area Strat-->
<section class="login-area pt-80 pb-40">
    <div class="container">
        <div class="row">
            <div class="col-lg-8 offset-lg-2">
                <div class="basic-login">
                    <h3 class="text-center mb-60">Forgot password</h3>
                    <form action="forgotpasswordsubmit.php">
                        <div class="cta-form mt-none-10 mb-120">
                            <div class="form-group mt-10">
                                <label for="username"><i class="fal fa-user"></i></label>
                                <input name="username" type="email" id="username" placeholder="Enter your email" required>
                            </div>
                            
                            <div class="form-group mt-10">
                                <button type="submit" class="site-btn boxed">Send password</button>
                            </div>  

                            
                        </div>
                    </form>
                </div>
            </div>
        </div>

       

    </div>
</section>
<!-- login Area End-->

<?php require 'footer.php'; ?>