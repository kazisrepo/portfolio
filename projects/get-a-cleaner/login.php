<?php require 'header.php'; ?>

<!-- login Area Strat-->
<section class="login-area pt-80 pb-40">
    <div class="container">
        <div class="row">
            <div class="col-lg-8 offset-lg-2">
                <div class="basic-login">
                    <h3 class="text-center mb-60">Please login</h3>
                    <form action="includes/login.inc.php" method="post">
                        <div class="cta-form mt-none-10 mb-120">
                            <div class="form-group mt-10">
                                <label for="username"><i class="fal fa-user"></i></label>
                                <input name="username" type="email" id="username" placeholder="Enter your email" required>
                            </div>
                            <div class="form-group mt-10">
                                <label for="password"><i class="fal fa-key"></i></label>
                                <input name="password" type="password" id="password" placeholder="Password" required>
                            </div>
                            <div class="form-group mt-10">
                                <button type="submit" class="site-btn boxed" name="login-submit">Login</button>
                            </div>  

                            <div class="form-group mt-10"> 
                                <div class="row">
                                    <div class="col-lg-6">
                                    <a href="forgotpassword.php">Forgot password?</a>  <span class="pr-20 pl-20">|</span> <a href="register.php">Register</a>
                                </div>
                            </div>
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