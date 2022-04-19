<?php 
require_once('db.php');


 $coupon = $_POST['coupon'];
 
 
 $query="SELECT * FROM coupons WHERE name='$coupon'";
$query=mysqli_query($conn,$query);
$total = mysqli_fetch_assoc($query);

if($total>0){
//echo 'does exist';	
	
}else{
	echo 'code does not exist';
	header("location:check_coupon.php?error=coupon code does not exist");
	exit();
}



$query="SELECT * FROM coupons WHERE name='$coupon'";
$query=mysqli_query($conn,$query);
while($row=mysqli_fetch_assoc($query)){
	
 $db_coupon=$row['name'];
 $db_used_by=$row['used_by'];	
}



if($db_coupon===$coupon AND $db_used_by==='none'){
	
		header("location:check_coupon.php?error=coupon code is valid");
exit();
	
}else{
		header("location:check_coupon.php?error=coupon code has been used by $db_used_by");
exit();
}
?>