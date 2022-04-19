<?php 
require_once('db.php');

//include 'wp-load.php';


   $coupon=$_POST['coupon'];
 $name=$_POST['fn'];

 $ref=$_POST['ref'];

 $phone=$_POST['phone'];
 $email=$_POST['email'];
 $username=$_POST['username'];
 $password=md5($_POST['password']);
 $plan = $_POST['plan'];


//check coupon membership type

$query="SELECT * FROM `coupons` WHERE name='$coupon' AND used_by='none'";
$query=mysqli_query($conn,$query);
while($row=mysqli_fetch_assoc($query)){
	
   $coupon_amount = $row['value'];
	
}


if($coupon_amount ==='2000'){
	$membership = 'regular';
}

if($coupon_amount ==='3000'){
	$membership = 'premium';
}


 
 
 $q="SELECT * FROM wp_users WHERE ID='$ref'";
$q=mysqli_query($conn,$q);
while($row=mysqli_fetch_assoc($q)){
 $referral_name = $row['user_login'];

  $referral_plan = $row['display_name'];
}


//die();

$query="SELECT * FROM `coupons` WHERE name='$coupon' AND used_by='none'";
$query=mysqli_query($conn,$query);
while($row=mysqli_fetch_assoc($query)){
	
  $db_coupon = $row['name'];
 $db_used_by=$row['used_by'];	
}

//die();

if($db_coupon===$coupon AND $db_used_by==='none'){
 $exp_date = date('Y-m-d', strtotime('+15 day'));
	$date=date("Y-m-d");
	
	//insert user
	
 $query="INSERT INTO `wp_users` (`ID`, `user_login`, `user_pass`, `user_nicename`, `user_email`, `user_url`, `user_registered`, `user_activation_key`, `user_status`, `display_name`) VALUES (NULL, '$username', '$password', '$referral_name', '$email', '', '$date', '$exp_date', '0', '$membership')";
 	mysqli_query($conn,$query);
 	

 	
 

    //invalidate coupon and save who used coupon

    $username_and_email=$username.' '.$email;
    	$q = "UPDATE coupons SET used_by='$username_and_email', status='used' WHERE name='$coupon'";
			mysqli_query($conn,$q);
			
			//get user id
            
            $q="SELECT * FROM wp_users WHERE user_login='$username'";
            $q=mysqli_query($conn,$q);
            while($row=mysqli_fetch_assoc($q)){
         $user_id=   $row['ID'];
          
			}
			
		
		
				 	//welcome bonus
 	
	//	$date=date('Y-m-d');
		//$q="INSERT INTO `activity_logs` (`id`, `user_id`, `points`, `post_id`, `point_type`, `log_date`) VALUES (NULL, ' $user_id', '1200', '1', 'registration bonus', '$date')";

	//	mysqli_query($conn,$q);
		
			
			   //for rank
   	$date=date("Y-m-d");
            
            $q="INSERT INTO `wp_uap_affiliates` (`id`, `uid`, `rank_id`, `start_data`, `status`) VALUES (NULL, '$user_id', '1', '$date', '1')";
            mysqli_query($conn,$q);
			
	
		//get affiliate id
            
            $q="SELECT * FROM wp_uap_affiliates WHERE uid='$user_id'";
            $q=mysqli_query($conn,$q);
            while($row=mysqli_fetch_assoc($q)){
          //$affiliate_id=   $row['id'];
          
			}
 

            
            //referral bonus code
            
             //$refer=$_POST['refer'];

			if($membership ==='regular'){
			 
			 $ref=$_POST['ref'];
           
     
            $q="INSERT INTO `wp_uap_referrals` (`id`, `refferal_wp_uid`, `campaign`, `affiliate_id`, `visit_id`, `description`, `source`, `reference`, `reference_details`, `parent_referral_id`, `child_referral_id`, `amount`, `currency`, `date`, `status`, `payment`) VALUES (NULL, '$user_id', NULL,  '$ref', NULL, 'User register', 'User register', '', 'User register', '0', '0', '1400', '#', '$date', '2', '0')";
            mysqli_query($conn,$q);
            

            }


            if($membership ==='premium'){

	 $ref=$_POST['ref'];
          
     
            $q="INSERT INTO `wp_uap_referrals` (`id`, `refferal_wp_uid`, `campaign`, `affiliate_id`, `visit_id`, `description`, `source`, `reference`, `reference_details`, `parent_referral_id`, `child_referral_id`, `amount`, `currency`, `date`, `status`, `payment`) VALUES (NULL, '$user_id', NULL,  '$ref', NULL, 'User register', 'User register', '', 'User register', '0', '0', '1000', '#', '$date', '2', '0')";
            mysqli_query($conn,$q);



            }
      
            

	header("location:register.php?error=registration successful");
exit();
			
}else{
	
	header("location:register.php?error=invalid coupon code or coupon code used");
	exit();
}

?>