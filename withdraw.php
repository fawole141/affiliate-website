


<?php require_once('sidebar.php'); ?>


        <!--**********************************
            Sidebar end
        ***********************************-->
		
		<!--**********************************
            Content body start
        ***********************************-->
        <div class="content-body">
            <!-- row -->
	<?php 



if(!isset($_SESSION['ID'])){
	
	header("location:../login");
}


  $user_id= $_SESSION['ID'];
          //user id
            $q="SELECT * FROM wp_users WHERE ID='$user_id'";
            $q=mysqli_query($conn,$q);
            while($row=mysqli_fetch_assoc($q)){
         $username=   $row['user_login'];
          
			}
			
			$q="SELECT SUM(points) as points FROM activity_logs WHERE user_id='$_SESSION[ID]'";
$q=mysqli_query($conn,$q);

while($row=mysqli_fetch_assoc($q)){
	$points= $row['points'];
	
}

 $user_id= $_SESSION['ID'];
			    //affiliate id
            $q="SELECT * FROM  wp_uap_affiliates WHERE uid='$user_id'";
            $q=mysqli_query($conn,$q);
			//print_r($q);
            while($row=mysqli_fetch_assoc($q)){
         $affiliate_id=   $row['id'];
          
			}

		
				//sum referral for unpaid
				$q="SELECT SUM(amount) AS amount FROM wp_uap_referrals WHERE payment='0' AND affiliate_id='$affiliate_id'";
			$q=mysqli_query($conn,$q);
		//$all_unpaid_number=mysqli_num_rows($q);
			while($row=mysqli_fetch_assoc($q)){
				$unpaid_amount=$row['amount'];
				
			}
			
			
							//close withdrawal
				$q="SELECT * FROM options WHERE option_name='survey'";
			$q=mysqli_query($conn,$q);
		//$all_unpaid_number=mysqli_num_rows($q);
			while($row=mysqli_fetch_assoc($q)){
				$status=$row['option_value'];


				
			}

			if($status==="close"){?>
				
				
				<div class="alert alert-success" style="background-color:#FFCC00; font-size:20px;">
				<center>Withdrawal form is closed<br>
				<a href="index.php"><button class="btn btn-info" style="background-color:black;"><<</button><button class="btn btn-info" style="background-color:black;">Dashboard</button></a>

				</center>
				</div>
				
		<?php	}else{ 
	?>
		
		
		
		<center>
<a href="index.php"><button class="btn btn-primary"><<</button></a><button class="btn btn-primary" style="background-color:btn btn-primary;">Withdrawal Form</button>
<br>
<?php if(isset($_GET['msg'])){ ?>
<div class="alert alert-primary" style=" font-size:20px;">
<?php echo @$_GET['msg'];?>
</div>
<?php }?>
<br>
<form method="post" action="withdraw_check.php">
<label>Username</label>
<input type="text" name="username" class="form-control" style="background-color:white; width:70%;" value="<?php echo $username;?>" readonly><br>


<label>Survey Earnings</label>
<input type="text" name="activity" class="form-control" style="background-color:white; width:70%;" value="<?php echo $points;?>" readonly><br>

<label>Social Media Link</label>
<input type="text" name="media" class="form-control" style="background-color:white; width:70%;" value="" required=""><br>


<label>Phone Number</label>
<input type="tel" name="phone" class="form-control" style="background-color:white; width:70%;" value="" required ><br>
<label>Account Name</label>
<input type="text" name="account_name" class="form-control" style="background-color:white; width:70%;" value="" required ><br>
<label>Account Number</label>
<input type="text" name="account_number" class="form-control" style="background-color:white; width:70%;" value="" required><br>
<label>Bank Name</label>
               <select class="form-control" name='bank' style="color:black; background-color:white; width:50%;" required>
			     <option selected style='color:white;'>Select Bank</option>
			   <option value="FIRST CITY MONUMENT BANK PLC">FIRST CITY MONUMENT BANK PLC</option>
			     <option value="UNITY BANK PLC">UNITY BANK PLC</option>
				   <option value="STANBIC IBTC BANK PLC">STANBIC IBTC BANK PLC</option>
				     <option value="STERLING BANK PLC">STERLING BANK PLC</option>
					   <option value="ACCESS BANK NIGERIA">ACCESS BANK NIGERIA</option>
					     <option value="DIAMOND BANK PLC">DIAMOND BANK PLC</option>
						   <option value="ECOBANK NIGERIA PLC">ECOBANK NIGERIA PLC</option>
						     <option value="FIDELITY BANK PLC">FIDELITY BANK PLC</option>
							   <option value="FIRST BANK PLC">FIRST BANK PLC</option>
							     <option value="GTBANK PLC">GTBANK PLC</option>
								   <option value="HERITAGE BANK">HERITAGE BANK</option>
			     <option value="KEYSTONE BANK PLC">KEYSTONE BANK PLC</option>
							     <option value="POLARIS BANK">POLARIS BANK</option>
								   <option value="STANDARD CHARTERED BANK NIGERIA LIMITED">STANDARD CHARTERED BANK NIGERIA LIMITED</option>
			   
			   					   <option value="UNION BANK OF NIGERIA PLC">UNION BANK OF NIGERIA PLC</option>
			     <option value="UNITED BANK FOR AFRICA PLC">UNITED BANK FOR AFRICA PLC</option>
							     <option value="WEMA BANK PLC">WEMA BANK PLC</option>
								   <option value="ZENITH BANK PLC">ZENITH BANK PLC</option>
			        <option value="PROVIDUS BANK PLC">PROVIDUS BANK PLC</option>
								
			   </select>
<br>



<input type="submit" value="submit" class="btn btn-primary btn-block" style="width:70%;">
<br><br><br>
</form>
</center>
	<?php	}
			
			
			?>
	
		
		
		
		



        </div>
		

        <!--**********************************
            Content body end
        ***********************************-->

        <!--**********************************
            Footer start
        ***********************************-->
        <div class="footer">
            <div class="copyright">
                <p>Copyright © Naija Opinion</p>
            </div>
        </div>
        <!--**********************************
            Footer end
        ***********************************-->

		<!--**********************************
           Support ticket button start
        ***********************************-->

        <!--**********************************
           Support ticket button end
        ***********************************-->


    </div>
    <!--**********************************
        Main wrapper end
    ***********************************-->

    <!--**********************************
        Scripts
    ***********************************-->
    <!-- Required vendors -->
    <script src="./vendor/global/global.min.js"></script>
	<script src="./vendor/bootstrap-select/dist/js/bootstrap-select.min.js"></script>
	<script src="./vendor/chart.js/Chart.bundle.min.js"></script>
    <script src="./js/custom.min.js"></script>
	<script src="./js/deznav-init.js"></script>
</body>
</html>