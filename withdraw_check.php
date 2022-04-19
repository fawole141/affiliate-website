<?php 
session_start();
require_once('db.php');
 $username= $_POST['username'];
 $media= $_POST['media'];
 
 $phone= $_POST['phone'];


 $activity =$_POST['activity'];
//$refer=$_POST['referral'];
$account_name=$_POST['account_name'];
$account_number=$_POST['account_number'];
$bank=$_POST['bank'];

if($activity<3500){
  header("location:withdraw.php?msg=Minimum withdrawal is 3500");
	exit();	

}

 $user_id=$_SESSION['ID'];


						    //affiliate id
            $q="SELECT * FROM wp_uap_affiliates WHERE uid='$user_id'";
            $q=mysqli_query($conn,$q);
            while($row=mysqli_fetch_assoc($q)){
     $affiliate_id=   $row['id'];
          
			}
			
			
			//all paid
						$q="SELECT SUM(amount) as amount FROM wp_uap_referrals WHERE payment='2' AND affiliate_id='$affiliate_id'";
			$q=mysqli_query($conn,$q);
			
		$all_paid=mysqli_num_rows($q);
		while($row=mysqli_fetch_assoc($q)){
			$amount=$row['amount'];
			
		}


//lock activity withdrawal

  $q="SELECT * FROM status WHERE username='$username' ORDER BY id DESC limit 1";
            $q=mysqli_query($conn,$q);
			//print_r($q);
            while($row=mysqli_fetch_assoc($q)){
        $status=   $row['value'];
          
			}


			//if status is empty then insert
						if(empty($status)){

$q="INSERT INTO `status` (`id`, `value`, `username`) VALUES (NULL, '0', '$username')";
mysqli_query($conn,$q);

}
			


			if($status==='0' OR $status==='1'){


header("location:withdraw.php?msg=You cannot withdraw activity earnings again unless you have 2 referrals");
	exit();

}else{
	//proceed

}





$q="SELECT * FROM withdraw_all WHERE account_name='$username'";
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


			//if status is 2 and has withdraw, set back to zero
						if($status ==='2'){

$q="UPDATE status SET value='0'";
mysqli_query($conn,$q);

}
	



//drop withdrawal
$q="INSERT INTO `withdraw_all` (`bank_name`, `account_number`, `amount`, `account_name`, `referral_earnings`, `activity_earnings`, `id`,`media`) VALUES ('$bank', '\'$account_number', '$phone', '$username', '', '$activity', NULL,'$media')";
mysqli_query($conn,$q);


header("location:withdraw.php?msg=success");
	exit();	

}else{
	
header("location:withdraw.php?msg=you have applied for withdrawal today and you cannot apply twice");
	exit();	
}

?>






