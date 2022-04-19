<?php 
session_start();
//error_reporting(E_ALL);
require_once('db.php');
 $username= $_POST['username'];
$media= $_POST['media'];
 $refer=$_POST['referral'];

$account_name=$_POST['account_name'];
$account_number=$_POST['account_number'];
$bank=$_POST['bank'];
  $original_ref=$_POST['original_ref'];


if($refer<3500){
  header("location:withdraw_ref.php?msg=Minimum withdrawal is 3500");
	exit();	

}
    //affiliate id


$query="SELECT * FROM `withdraw_all_ref` WHERE account_name='$username'";
	$result = $conn->query($query);
	$total = mysqli_num_rows($result);

		if($total === ''){
			
//echo 'you have been c b4';
		

header("location:withdraw_ref.php?msg=You have applied for withdrawal today");
	exit();	
		// exit();
		}else{
		
	
				  $user_id=	$_SESSION['ID'];


            $q="SELECT * FROM wp_uap_affiliates WHERE uid='$user_id'";
            $q=mysqli_query($conn,$q);
			//print_r($q);
            while($row=mysqli_fetch_assoc($q)){
         $affiliate_id=   $row['id'];
          
			}


			//change do not count to user register

    //$q="UPDATE `wp_uap_referrals` SET payment='3' WHERE affiliate_id='$affiliate_id' AND source='do not count1'";
 	//mysqli_query($conn,$q);




//unlock point for commenting again

  $q="SELECT * FROM status WHERE username='$username' ORDER BY id DESC LIMIT 1";
            $q=mysqli_query($conn,$q);
			//print_r($q);
            while($row=mysqli_fetch_assoc($q)){
          $status =   $row['value'];
          
			}


	


			if($status==='1' AND $refer==='1000'){

				

$q="UPDATE status SET value='2' WHERE username='$username'";
mysqli_query($conn,$q);

			}

				if($status==='0' AND $refer==='1000'){



$q="UPDATE status SET value='1' WHERE username='$username'";
mysqli_query($conn,$q);

			}

			if($status==='0' AND $refer>'1999'){

$q="UPDATE status SET value='2' WHERE username='$username'";
mysqli_query($conn,$q);

			}
			

$q="SELECT * FROM withdraw_all_ref WHERE account_name='$username'";
$q=mysqli_query($conn,$q);
while($row=mysqli_fetch_assoc($q)){
 $db_username=$row['account_name'];	
	
}

if(empty($db_username)){

			    //affiliate id
				  $user_id=	$_SESSION['ID'];
            $q="SELECT * FROM wp_uap_affiliates WHERE uid='$user_id'";
            $q=mysqli_query($conn,$q);
			//print_r($q);
            while($row=mysqli_fetch_assoc($q)){
         $affiliate_id=   $row['id'];
          
			}


	//update immediately after calculating deduction

  //  $q="UPDATE wp_uap_referrals SET payment='3' WHERE affiliate_id='$affiliate_id' AND source='do not count1'";
    //     	mysqli_query($conn,$q);

//sum withdrawal in one plaCE


//drop the sum
	  $date=date("Y-m-d");
	        //remove the extra from multiples of 1000
	// $total_drop = $original_ref - $refer;

	
     //total drop
      //$q="INSERT INTO `wp_uap_referrals` (`id`, `refferal_wp_uid`, `campaign`, `affiliate_id`, `visit_id`, `description`, `source`, `reference`, `reference_details`, `parent_referral_id`, `child_referral_id`, `amount`, `currency`, `date`, `status`, `payment`) VALUES (NULL, '$user_id', NULL,  '$user_id', NULL, '$date', 'do not count1', '', 'User register', '0', '0', '$total_drop', '#', '$date', '2', '0')";

        //  mysqli_query($conn,$q);




//update user register to 1 after payment
 //$q1="UPDATE `wp_uap_referrals` SET payment='3' WHERE affiliate_id='$affiliate_id' AND source='User register' AND payment='0'";
   //      	mysqli_query($conn,$q1);

			



//update the rest to pay
        


         	     //amount paid
     //$q2="INSERT INTO `wp_uap_referrals` (`id`, `refferal_wp_uid`, `campaign`, `affiliate_id`, `visit_id`, `description`, `source`, `reference`, `reference_details`, `parent_referral_id`, `child_referral_id`, `amount`, `currency`, `date`, `status`, `payment`) VALUES (NULL, '$user_id', NULL,  '$user_id', NULL, '$date', 'do not count2', '', 'User register', '0', '0', '$refer', '#', '$date', '2', '2')";
       //   mysqli_query($conn,$q2);


//drop withdrawal
$q="INSERT INTO `withdraw_all_ref` (`bank_name`, `account_number`, `amount`, `account_name`, `referral_earnings`, `activity_earnings`, `id`,`media`) VALUES ('$bank', '\'$account_number', '', '$username', '$refer', '', NULL,'$media')";
mysqli_query($conn,$q);


header("location:withdraw_ref.php?msg=success");
	exit();	

}

		
	}

?>






