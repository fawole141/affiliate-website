
    <!-- Navbar Start -->
<?php 
require_once('head.php');
?>
    <!-- Navbar End -->


    <!-- Contact Start -->
    <div class="container-fluid mt-5 pt-3">
        <div class="container">
	<?php	echo @$_GET['error']; ?>
            <div class="row">
                <div class="col-lg-8">
               
                    <div class="bg-white border border-top-0 p-4 mb-3">
                        <div class="mb-4">
			<form action="validate.php" method="post">
							<input type="text" name="coupon" placeholder="paste the code" >
							<input type="submit" style="margin-top:5px;" value="Verify Code">
							</form>
                          
                        </div>
                      
                    </div>
                </div>

            </div>
        </div>
    </div>
    <!-- Contact End -->

      <?php 
   require_once('footer.php');
   ?>