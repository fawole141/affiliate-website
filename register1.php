<?php require_once('head.php'); ?>

        <!-- Register & Login Start -->
        <div class="section section-padding">
            <div class="container">

                <!-- Register & Login Wrapper Start -->
                <div class="register-login-wrapper">
                    <div class="row align-items-center">
                        <div class="col-lg-6">

                            <!-- Register & Login Images Start 
                            <div class="register-login-images">
                                <div class="shape-1">
                                    <img src="assets/images/shape/shape-26.png" alt="Shape">
                                </div>


                                <div class="images">
                                    <img src="assets/images/register-login.png" alt="Register Login">
                                </div>
                            </div>
                            <!-- Register & Login Images End -->

                             <video controls="" style="margin-left:-30px ;" width="500px" height="">
                                <source src="reg.mp4" type="video/mp4" >
                            </video>

                        </div>
                        <div class="col-lg-6">

                            <!-- Register & Login Form Start -->
                            <div class="register-login-form">
                                <h3 class="title">Registration <span>Page</span></h3>

                    <?php 
                                if(isset($_GET['error'])){ ?>
                                    

                            
                                
                                <div class="alert alert-success">
                                
                                <?php echo @$_GET['error']; ?><br>
                                Follow our instagram handle for update and giveaway<br>
                               <a href="https://t.me/joinchat/Xq-LOuv1y21lNzU0"> <button class="btn btn-danger">Telegram</button></a><br>
                              <a download href="naijaopinon.pdf" style="text-decoration: underline;"> Kindly download Naijaopinion e-book to read and understand what we have to offer you.</a>
</div>

<?php   }else{
    
    
}
                                
                                ?>

                                <div class="form-wrapper">
                           <form method="post" action="signup_check.php">
                                        <!-- Single Form Start -->
                                             <div class="single-form">
                                            <input type="text" placeholder="Referral Id" name="ref" value="<?php echo @$_GET['id']; ?>">
                                        </div>
                                        
                                         <div class="single-form">
                                            <input type="tel" placeholder="Phone Number" name="phone">
                                        </div>
                                        
                                        
                                        <div class="single-form">
                                            <input type="text" placeholder="Full Name" name="fn">
                                        </div>
                                        <!-- Single Form End -->
                                        <!-- Single Form Start -->
                                        <div class="single-form">
                                            <input type="email" placeholder="Email" name="email">
                                        </div>
                                        
                                         <div class="single-form">
                                            <input type="text" placeholder="Username" name="username">
                                        </div>
                                        
                                        
                                        
                                        <!-- Single Form End -->
                                        <!-- Single Form Start -->
                                        <div class="single-form">
                                            <input type="text" placeholder="Password" name="password">
                                        </div>
                                        
                                             <div class="single-form">
                                            <input type="text" placeholder="Coupon Code" name="coupon">
                                        </div>

                                             <div class="single-form">

<select name="plan">
    <option selected="" disabled="">Select Plan</option>
    <option value="regular">Regular</option>
    <option value="premium">Premium</option>
</select>

                                        </div>
<br><br>
                                         <div class="">
                                         <input type="checkbox" id="vehicle1" name="vehicle1" value="Bike" required>&nbsp; 
  <label for="vehicle1"> <a href="tac.php">Agree to our terms and conditions?</a></label><br>
                                        </div>
                                        
                                        <!-- Single Form End -->
                                        <!-- Single Form Start -->
                                      
                                        <!-- Single Form End -->
                                        <!-- Single Form Start -->
                                        <div class="single-form">
                                            <button type="submit" class="btn btn-primary btn-hover-dark w-100">Create an account</button>
  
                                     </div>
                                        <!-- Single Form End -->
                                    </form>
                                </div>
                            </div>
                            <!-- Register & Login Form End -->

                        </div>
                    </div>
                </div>
                <!-- Register & Login Wrapper End -->

            </div>
        </div>
        <!-- Register & Login End -->

        <!-- Download App Start -->

        <!-- Download App End -->

        <!-- Footer Start  -->
        <div class="section footer-section">

            <!-- Footer Widget Section Start -->
          
            <!-- Footer Widget Section End -->

            <!-- Footer Copyright Start -->
            <div class="footer-copyright">
                <div class="container">

                    <!-- Footer Copyright Start -->
                    <div class="copyright-wrapper">
                        <div class="copyright-link">
                      
                        </div>
                        <div class="copyright-text">
                            <p>&copy; 2021 Naija Opinion</p>
                        </div>
                    </div>
                    <!-- Footer Copyright End -->

                </div>
            </div>
            <!-- Footer Copyright End -->

        </div>
        <!-- Footer End -->

        <!--Back To Start-->
        <a href="#" class="back-to-top">
            <i class="icofont-simple-up"></i>
        </a>
        <!--Back To End-->

    </div>






    <!-- JS
    ============================================ -->

    <!-- Modernizer & jQuery JS -->
    <script src="assets/js/vendor/modernizr-3.11.2.min.js"></script>
    <script src="assets/js/vendor/jquery-3.5.1.min.js"></script>

    <!-- Bootstrap JS -->
    <script src="assets/js/plugins/popper.min.js"></script>
    <script src="assets/js/plugins/bootstrap.min.js"></script>

    <!-- Plugins JS -->
    <script src="assets/js/plugins/swiper-bundle.min.js"></script>
    <script src="assets/js/plugins/jquery.magnific-popup.min.js"></script>
    <script src="assets/js/plugins/video-playlist.js"></script>
    <script src="assets/js/plugins/jquery.nice-select.min.js"></script>
    <script src="assets/js/plugins/ajax-contact.js"></script>

    <!--====== Use the minified version files listed below for better performance and remove the files listed above ======-->
    <!-- <script src="assets/js/plugins.min.js"></script> -->


    <!-- Main JS -->
    <script src="assets/js/main.js"></script>

</body>

</html>