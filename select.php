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

<select>
    <option></option>
    <option>Test</option>
    <option>one</option>
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